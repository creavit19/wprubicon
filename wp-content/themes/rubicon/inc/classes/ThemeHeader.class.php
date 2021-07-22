<?php
class ThemeHeader {
  public $acf_fields;
  function __construct() {
    $this->acf_fields = get_field('header','options');
  }
  function get_header_top() {
    $top_slogan = $this->acf_fields['top_slogan'];
    $block = <<<HTML
      <div class="col s12 grey darken-4">
        <div class="slogan">
          {$top_slogan}
        </div>
      </div>
HTML;
    return $block;
  }
  function get_logo(){
    $url = esc_url( home_url( '/' ) );
    $logo_url = $this->acf_fields['logo']['url'];
    $dis_if_front = is_front_page() ? ' disabled' : '';
    $block = <<<HTML
      <div class="col s12 m7">
        <a href="{$url}" class="brand-logo{$dis_if_front}"><img src="{$logo_url}" alt="" /></a>
      </div>
HTML;
    return $block;
  }
  function get_email(){
    $email_title = $this->acf_fields['email_title'];
    $email = $this->acf_fields['email'];
    $block = <<<HTML
      <div class="email_block"><span>{$email_title}</span><a href="#">{$email}</a></div>
HTML;
    return $block;
  }
  function get_phone(){
    $phone_title = $this->acf_fields['phone_title'];
    $phone_number = $this->acf_fields['phone_number'];
    $block = <<<HTML
      <div class="phone_block"><span>{$phone_title}</span><span>{$phone_number}</span></div>
HTML;
    return $block;
  }
  function get_link_cart(){
    /*
    ob_start();
    woocommerce_mini_cart();
    $mini_cart = ob_get_contents();
    ob_end_clean();
    */
    $url = wc_get_cart_url();
    $dis_if_cart = is_cart() ? ' disabled' : '';
    // $prod_count = WC()->cart->get_cart_contents_count();
    // $prod_count = $prod_count > 0 ? '<span>'.$prod_count.'</span>' : null;
    $block = <<<HTML
      <a href="{$url}" class="header-link-cart{$dis_if_cart}">
        <i class="fa fa-shopping-cart"></i>
      </a>
HTML;
    return $block;
  }
}
