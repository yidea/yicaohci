<?php
class Template extends MY_Controller {
  private $_layout_template = "v_layout";

  function Template() {
    parent::MY_Controller();
  }

  function index() {//index page
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_index';
    $data['html_title']='Band Equity Group - Become An "E-Band-Gelist"';
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
}
?>