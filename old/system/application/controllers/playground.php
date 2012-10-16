<?php
class playground extends MY_Controller {
  private $_layout_template = "v_layout";
  private $_html_title = "Playground - Yi Cao on HCI";

  function playground() {
    parent::MY_Controller();
  }

  function index() {//index page
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_playground';
    $data['html_title']= $this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  /*HTML/CSS/js*/
  function javascriptSteps1(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_javascriptSteps1';
    $data['html_title']= $this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function jqueryFun(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_jqueryFun';
    $data['html_title']= $this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }  
  function tenPixelMethod(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page

    //$template_layout = $this->_layout_template;// default
    $template_layout = 'playground/v_tenPixelMethod';// self Defined layout
    $data['v_contentpage']='playground/v_tenPixelMethod';//template    
    $data['html_title']= 'Ten Pixel Method'.'|'.$this->_html_title;    
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function grid960(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page

    //$template_layout = $this->_layout_template;// default
    $template_layout = 'playground/v_grid960';// self Defined layout
    //$data['v_contentpage']='playground/v_tenPixelMethod';//template
    $data['html_title']= '960 Grid CSS'.'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function tabs_effect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $template_layout = 'playground/v_tabs_effect';// self Defined layout    
    $data['content_title'] = 'Tabs Effect';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function html_web_standard(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page   
    $template_layout = 'playground/v_html_web_standard';// self Defined layout    
    $data['content_title'] = 'HTML Web Standard';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  } 
  function jquery_cheatsheet(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'playground/v_jquery_cheatsheet';// self Defined layout
    $data['content_title'] = 'JQuery Cheatsheet';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  /*end HTML/CSS/js*/

  /*Visual Design */
  function nav_menu_effect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $data['v_contentpage']= 'playground/visualDesign/v_nav_menu_effect';// self Defined layout
    $data['category'] = 'Visual/UI Design Prototype';
    $data['content_title'] = 'Navigation menu effects';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function image_effect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $data['v_contentpage']= 'playground/visualDesign/v_image_effect';// self Defined layout
    $data['category'] = 'Visual/UI Design Prototype';
    $data['content_title'] = 'Image effects';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function icon_effect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $data['v_contentpage']= 'playground/visualDesign/v_icon_effect';// self Defined layout
    $data['category'] = 'Visual/UI Design Prototype';
    $data['content_title'] = 'Icon effect';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  /*end Visual Design */


}
?>