<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?= $html_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Stylesheets -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lab/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lab/jqtools_tab.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lab/form.css" />
    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/lab/jquery.tools.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('ul.css-tabs').tabs('div.css-panes > div');
      });
    </script>
  
  </head>

  <body class="bg_white">
    <div class="container_12  bg_greylight">

      <!--header -->
      <div id="header" class="grid_12" >
        <div>
          <a href="#" style="display:block; border:1px solid #333; background-color: #eee; width: 60px;height: 40px;text-align: center;">Logo</a>
        </div>
        
      </div>
      <div class="clear"></div>

      <!--navbar-->


      <!--banner -->
      <div id="tabs_effect" class="grid_12 m_bottom_10px" >
        <ul class="css-tabs">
          <li><a href="#">Create Account</a></li>
          <li><a href="#">Your Account</a></li>
          <li><a href="#">Student Records</a></li>
          <li><a href="#">Registration</a></li>
          <li><a href="#">Financial Aid</a></li>
        </ul>
        <div class="css-panes">
          <div class="pane">
            <form id="form_left_align" class="basic gradual" action="#" method="post">
              <fieldset>
                <h2>Create Your PIN(Personal Identification Number)</h2>
                <ol>
                  <li><label for="txt_sid">Student ID:</label>
                  <div class="form-element" style="display:inline-block; border-style: none;">
                  <input type="text" name="txt_sid" id="txt_sid" value="" />
                  <br/> 4 digit number
                  </div>
                    
                  </li>
                  <li><label for="txt_birthday">Birthday:</label>
                  <input type="text" name="txt_birthday" id="txt_birthday" value="" />
                  </li>
                  <li><label for="txt_password">Choose a PIN:</label>
                  <input type="password" name="txt_password" id="txt_password" value="" />
                  <br/>4-digit
                  </li>
                  <li><label for="txt_repassword">Re-enter PIN:</label>
                  <input type="password" name="txt_repassword" id="txt_repassword" value="" />
                  </li>
                </ol>
              </fieldset>            
            </form>            
          </div>

          <div class="pane">
            <h2>Your Account</h2>
            <p>behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>

          <div class="pane">
            <h2>tab3 content</h2>
            <p>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>

          <div class="pane">
            <h2>tab4 content</h2>
            <p>there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>

          <div class="pane">
            <h2>tab5 content</h2>
            <p>there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>

        </div>
      </div>

      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>     

    </div>

      <!--Back to Home button -->
   <?php echo $this->load->view('lab/v_backhomebtn'); ?>
   <!-- end Back to Home button-->

  </body>
</html>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18369335-1']);
  _gaq.push(['_setDomainName', '.yicaohci.com']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>