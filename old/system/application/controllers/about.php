<?php
class about extends MY_Controller {
  private $_layout_template = "v_layout";

  function about() {
    parent::MY_Controller();
  }

  function index() {//index page
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_about';
    $data['html_title']='Yi Cao & Yidea on HCI | UX/UI Design & Front end development portfolio and ideas';
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
}
?>