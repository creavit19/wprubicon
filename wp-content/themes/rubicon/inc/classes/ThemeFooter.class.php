<?php
class ThemeFooter {
  public $acf_fields;
  function __construct() {
    $this->acf_fields = get_field('footer','options');
  }
  function get_copyright(){
    $copy = $this->acf_fields['copiright'];
    return $copy;
  }
  function get_privacy_policy_url(){
    $url = $this->acf_fields['privacy_policy_url'];
    return $url;
  }
  function get_privacy_policy_title(){
    $title = $this->acf_fields['privacy_policy_title'];
    return $title;
  }
}
