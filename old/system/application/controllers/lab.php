<?php
class lab extends MY_Controller {
  private $_layout_template = "v_layout";
  private $_html_title = "Lab & Research - Yi Cao on HCI";

  function lab() {
    parent::MY_Controller();
  }

  function index() {//index page
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_lab';
    $data['html_title']= $this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function template(){// template for new function
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //view template
    $template_layout = 'lab/v_prototyping_drupal_home';
      //content title
    $data['content_title'] = 'Prototyping drupal home';
    //html title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }


/*HTML/CSS/js*/
//  function css_mastery_roma(){
//    $data=array();
//    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
//    $template_layout = 'lab/v_css_mastery_roma';// self Defined layout
//    $data['content_title'] = 'css mastery roma';//title
//    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
//    $this->load->vars($data);
//    $this->load->view($template_layout);
//  }

   function jquery_mobile_demo1(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_jquery_mobile_demo1';// self Defined layout
    $data['content_title'] = 'jQuery Mobile Demo 1';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }

    function html_web_standard(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_html_web_standard';// self Defined layout
    $data['content_title'] = 'HTML Web Standard';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }

  function form_best_practice(){
    $data=array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_form_best_practice';// self Defined layout
    $data['content_title'] = 'Form Best_Practice';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }  
  function ie6_bug_collection(){
    $data=array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_ie6_bug_collection';// self Defined layout
    $data['content_title'] = 'IE6 bug collection';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }  
   function smashing_web_design(){
    $data=array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_smashing_web_design';// self Defined layout
    $data['content_title'] = 'Smashing Web Design';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function css_mastery_advanced(){
    $data=array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_css_mastery_advanced';// self Defined layout
    $data['content_title'] = 'Css mastery advanced';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
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
    $template_layout = 'lab/v_tenPixelMethod';// self Defined layout
    $data['v_contentpage']='lab/v_tenPixelMethod';//template
    $data['html_title']= 'Ten Pixel Method'.'|'.$this->_html_title;    
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function grid960(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $template_layout = 'lab/v_grid960';// self Defined layout
    //$data['v_contentpage']='lab/v_tenPixelMethod';//template
    $data['html_title']= '960 Grid CSS'.'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function tabs_effect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //$template_layout = $this->_layout_template;// default
    $template_layout = 'lab/v_tabs_effect';// self Defined layout
    $data['content_title'] = 'Tabs Effect';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
   function zen_coding_cheatsheet(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //view template
    $template_layout = 'lab/v_zen_coding_cheatsheet';
      //content title
    $data['content_title'] = 'Zen coding cheatsheet';
    //html title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }
  function jquery_cheatsheet(){           
    $data=array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_jquery_cheatsheet';// self Defined layout
    $data['content_title'] = 'JQuery Cheatsheet';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($template_layout);
  }

  function cinema12_movies(){
    $this->load->library('snoopy');//scratcher
    $this->load->helper('simple_html_dom');//html dom selector
    //$url="http://www.cameracinemas.com/cgi-bin/movies.cgi?cmd=np&f=c12";
    $url="http://www.google.com/movies?near=san+jose,+ca,+usa&tid=7015bf161dd4b8a5";    
    
    $html=file_get_html($url);
    foreach($html->find('div.movie') as $movie){
      $item['name'] = $movie->find('.name',0)->innertext;
      $results[]=$item; }
    $data = array();
    $data['camera12_data']= $results;
    $html->clear();
    unset($html);

    $this->load->library('Imdb');//imdb 3rd party api
    $imdb = new Imdb();
    $movie_array = $imdb->getMovieInfo('Due Date');

    $data['movies'] = $movie_array;
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $template_layout = 'lab/v_cinema12_movies';// self Defined layout
    $data['content_title'] = 'Cinema 12 movies';//title
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
    $data['v_contentpage']= 'lab/visualDesign/v_nav_menu_effect';// self Defined layout
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
    $data['v_contentpage']= 'lab/visualDesign/v_image_effect';// self Defined layout
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
    $data['v_contentpage']= 'lab/visualDesign/v_icon_effect';// self Defined layout
    $data['category'] = 'Visual/UI Design Prototype';
    $data['content_title'] = 'Icon effect';//title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  /*end Visual Design */

  /*Prototyping*/
  function prototyping_drupal_home(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    //view template
    $template_layout = 'lab/v_prototyping_drupal_home';
      //content title
    $data['content_title'] = 'Prototyping drupal home';
    //html title
    $data['html_title']= $data['content_title'].'|'.$this->_html_title;    
    $this->load->vars($data);
    $this->load->view($template_layout);
  }

}
?>