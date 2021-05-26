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
    $block = <<<HTML
      <div class="col s12 m7">
        <a href="{$url}" class="brand-logo"><img src="{$logo_url}" alt="" /></a>
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
}
