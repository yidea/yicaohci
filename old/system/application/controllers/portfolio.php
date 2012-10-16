<?php
class portfolio extends MY_Controller {
  private $_layout_template = "v_layout";
  private $_webPortfolioTitle ='';//new title for web design portfolio
   private $_mobileProjectTitle='';
  private $_printPortfolioTitle='';
  private $_prototypingTitle='';
  private $_classProjectTitle='';

   private $_webdesignHtmlTitle='Portfolio - Web Design - Yi Cao on HCI';

  function portfolio() {
    parent::MY_Controller();
    $this->_mobileProjectTitle = '<a href="'.base_url().'portfolio"> Yi Cao\'s Portfolio</a> | Mobile';
    $this->_webPortfolioTitle = '<a href="'.base_url().'portfolio"> Yi Cao\'s Portfolio</a> | Web Design';
    $this->_printPortfolioTitle ='<a href="'.base_url().'portfolio"> Yi Cao\'s Portfolio</a> | Print Design';
    $this->_prototypingTitle ='<a href="'.base_url().'portfolio"> Yi Cao\'s Portfolio</a> | Prototyping & Wireframe';
     $this->_classProjectTitle ='<a href="'.base_url().'portfolio"> Yi Cao\'s Portfolio</a> | Class Project';

  }

  function index() {//index page
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_portfolio';
    $data['html_title']= 'Portfolio - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }


   /*Mobile  Projects*/
  function mobile_app_promotion(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_mobile_app_promotion';
    $data['html_title']='Portfolio - Mobile - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_mobileProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function mobile_sjsu(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_mobile_sjsu';
    $data['html_title']='Portfolio - Mobile - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_mobileProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function mobile_hackerdojo_eatfresh(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_mobile_hackerdojo_eatfresh';
    $data['html_title']='Portfolio - Mobile - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_mobileProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
   function mobile_jquerymobile_workshop(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_mobile_jquerymobile_workshop';
    $data['html_title']='Portfolio - Mobile - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_mobileProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  /*Web Design Projects*/
    function webdesign_rockyou(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_rockyou';
    $data['html_title']=$this->_webdesignHtmlTitle;
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
    function webdesign_netapp(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_netapp';
    $data['html_title']=$this->_webdesignHtmlTitle;
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
    function webdesign_careercenter_sjsu(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_careercenter_sjsu';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function webdesign_baychi_html5(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_baychi_html5';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

    function webdesign_project_ehss(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_ehss';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function webdesign_project_ajb(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_ajb';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_beq(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_beq';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  function webdesign_project_azwedding(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_azwedding';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_workingartvideo(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_workingartvideo';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_reneArchitect(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_reneArchitect';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_greenTour(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_greenTour';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_newRand(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_newRand';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function webdesign_project_studentCompass(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_webdesign_project_studentCompass';
    $data['html_title']='Portfolio - Web Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  /* end -Web Design Projects*/

  /*Print Design Projects*/
  function printDesign_project_zhongLian(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_printDesign_project_zhongLian';
    $data['html_title']='Portfolio - Print Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_printPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function printDesign_project_dmu(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_printDesign_project_dmu';
    $data['html_title']='Portfolio - Print Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_printPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function printDesign_project_logo(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_printDesign_project_logo';
    $data['html_title']='Portfolio - Print Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_printPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  function printDesign_project_tshirt(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_printDesign_project_tshirt';
    $data['html_title']='Portfolio - Print Design - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_printPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  /*end - Print Design Projects*/

    //class Proejct Future TV
    function class_project_futuretv(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_class_project_futuretv';
    $data['html_title']='Portfolio - Class Project - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_classProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }




  //class_project_ergonomics
   function class_project_ergonomics(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_class_project_ergonomics';
    $data['html_title']='Portfolio - Class Project - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_classProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  //class_project_ergonomics
   function class_project_section508(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_class_project_section508';
    $data['html_title']='Portfolio - Class Project - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_classProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }
  //class_project_hci
   function class_project_hci(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_class_project_hci';
    $data['html_title']='Portfolio - Class Project - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_classProjectTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

//  prototyping_wireframe
    function prototyping_wireframe(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_prototyping_wireframe';
    $data['html_title']='Portfolio - Prototyping&Wireframe- Yi Cao on HCI';
    $data['portfolioTitle']=$this->_prototypingTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

//prototyping paper
    function prototyping_paper(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_prototyping_paper';
    $data['html_title']='Portfolio - Prototyping&Wireframe- Yi Cao on HCI';
   $data['portfolioTitle']=$this->_prototypingTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

  /*freelancing flash*/
   function freelancing_flash_chicken_prince(){
    $data = array();
    $data['current_page']=($this->uri->segment(1)!=FALSE) ? $this->uri->segment(1) : 'index';//current page
    $data['v_contentpage']='v_freelancing_flash_chicken_prince';
    $data['html_title']='Portfolio - Flash&Video - Yi Cao on HCI';
    $data['portfolioTitle']=$this->_webPortfolioTitle;
    $this->load->vars($data);
    $this->load->view($this->_layout_template);
  }

}
?>