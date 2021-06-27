<?php
function ajax_get_suspects_data() {
  $office_id = esc_sql($_GET['office']);
  ${"suspects_data_$office_id"} = get_transient("suspects_data_$office_id");
  if(empty(${"suspects_data_$office_id"})){
    $i = 1;
    $api_data_items = array();
    do {
      $api_url = 'https://api.fbi.gov/@wanted?pageSize=50&page='.$i++.'&sort_on=modified&sort_order=desc&field_offices='.$office_id;
      $api_raw_data = file_get_contents($api_url);
      if(empty($api_raw_data)) {
        $output = array(
          'status' => 'error',
          'error' => 'No connection to the server.',
        );
        wp_die(json_encode($output));
      };
      $api_data_items_part = json_decode($api_raw_data)->items;
      if(empty($api_data_items_part[0])) break;
      $api_data_items = array_merge($api_data_items, $api_data_items_part);
    } while(true);
    
    ${"suspects_data_$office_id"} = 
                    array_map(function($item){
                              return array(
                                            'name' => $item->title,
                                            'foto' => array_map(function($element){
                                                                  return $element->original;
                                                                },
                                                                $item->images),
                                            'reward' => $item->reward_text,
                                            'description' => $item->description,
                                            'link_url' => $item->url,
                                          );
                                },
                                $api_data_items);
    set_transient("suspects_data_$office_id", ${"suspects_data_$office_id"},  18000);
  };

  $page_number = !empty($_GET['page']) ? intval(strval($_GET['page'])) : 1;
  $count_items = count(${"suspects_data_$office_id"});
  $pages_count = ceil($count_items/12);
  $items_out = array_slice(${"suspects_data_$office_id"}, ($page_number - 1) * 12, 12);
  $out_data = array(
    'page' => $page_number,
    'pages' => $pages_count,
    'items' => $items_out,
  );
  wp_die(json_encode($out_data));
}

if(function_exists('ajax_get_suspects_data')){
  add_action('wp_ajax_get_suspects_data', 'ajax_get_suspects_data');
  add_action('wp_ajax_nopriv_get_suspects_data', 'ajax_get_suspects_data');
};