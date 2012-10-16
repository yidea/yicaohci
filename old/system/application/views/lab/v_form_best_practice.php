<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?= $html_title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="yi cao, hci, interaction design, user experience, prototyping, UI design,HTML/CSS/Javascript/Jquery" />
    <meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/>
    <meta name="author" content="Yi Cao" />
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jqtools_tab.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css" />

    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--The script only fixes images named: *-trans.png -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tools.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('ul.css-tabs').tabs('div.css-panes > div');
        // select all desired input fields and attach tooltips to them
        $("#form1 .tooltip_test").tooltip({
          position: "center right",// place tooltip on the right edge
          offset: [-2, 10],// a little tweaking of the position
          effect: "fade", // use the built-in fadeIn/fadeOut effect
          opacity: 0.7// custom opacity setting
        });
      });
    </script>
  </head>

  <body class="bg_white">
    <div class="container_12  bg_greylight">

      <!--header -->
      <div id="header" class="grid_12" >
        <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      </div>
      <div class="clear"></div>     

      <!--banner -->
      <div id="tabs_effect" class="grid_12 m_bottom_10px" >
        <ul class="css-tabs">
          <li><a href="#">Form</a></li>
          <li><a href="#">MessageBox</a></li>
          <li><a href="#">Student Records</a></li>
          <li><a href="#">Registration</a></li>
          <li><a href="#">Financial Aid</a></li>
        </ul>

        <div class="css-panes">
          <div class="pane">
            <form id="form1" class="form_right_align gradual mb-10px" action="#" method="post" >
              <p>(Fields marked with <em>*</em> are required.)</p>
              <fieldset class="bg_white">
                <h3>Style#1 gradual</h3>
                <ol>
                  <li><label for="txt_sid">Student ID <em>*</em></label>
                      <input type="text" name="txt_sid" class="tooltip_test" id="txt_sid" value="" title="If you don't have one, enter your Social Security Number for your Student ID."/>                    
                  </li>
                  <li><label for="txt_birthday">Birthday</label>
                    <input type="text" class="tooltip_test" name="txt_birthday" id="txt_birthday" value="" title='MM/DD/YYYY (e.g. "11/18/2010")' />
                  </li>
                  <li><label for="txt_password">Choose a PIN <em>*</em></label>
                    <input type="password" style="width:40px" class="tooltip_test" name="txt_password" id="txt_password" value="" title="Choose 4 digit number as PIN" maxlength="4" />
                  </li>
                  <li><label for="txt_repassword">Re-enter PIN</label>
                    <input type="password" class="tooltip_test" style="width:40px" name="txt_repassword" id="txt_repassword" value="" title="Re-enter your 4 digit Pin" maxlength="4" />
                  </li>
                  <li> <label for="btn_submit"></label>
                    <input id="btn_submit" type="submit" value="submit" /></li>
                </ol>
              </fieldset>
            </form>

             <form id="form2" class="form_left_align basic mb-10px" action="#" method="post" >
              <fieldset class="bg_white">
                <h3>Style#2 basic</h3>
                <ol>
                  <li><label for="txt_sid2">Student ID <em>*</em></label>
                      <input type="text" name="txt_sid2" class="tooltip_test" id="txt_sid2" value="" title="If you don't have one, enter your Social Security Number for your Student ID."/>
                  </li>
                  <li><label for="txt_birthday2">Birthday</label>
                    <input type="text" class="tooltip_test" name="txt_birthday2" id="txt_birthday2" value="" title='MM/DD/YYYY (e.g. "11/18/2010")' />
                  </li>
                  <li><label for="txt_password2">Choose a PIN <em>*</em></label>
                    <input type="password" style="width:40px" class="tooltip_test" name="txt_password2" id="txt_password" value="" title="Choose 4 digit number as PIN" maxlength="4" />
                  </li>
                  <li><label for="txt_repassword2">Re-enter PIN</label>
                    <input type="password" class="tooltip_test" style="width:40px" name="txt_repassword2" id="txt_repassword2" value="" title="Re-enter your 4 digit Pin" maxlength="4" />
                  </li>
                  <li> <label for="btn_submit2"></label>
                    <input id="btn_submit2" type="submit" value="submit" /></li>
                </ol>
              </fieldset>
            </form>

            @todo: study sign up form<a href="https://edit.yahoo.com/registration?.intl=us&.pd=fpctx_ver%253D0%2526c%253D%2526ivt%253D%2526sg%253D&new=1&.done=http%3A//www.yahoo.com/&.src=fpctx&.v=0&.u=77s78bp6ep8vh&partner=&.partner=&pkg=&stepid=&.p=&promo=&.last=">Yahoo</a>
            and <a href="https://www.google.com/accounts/NewAccount">Google</a>
          </div>
          <!-- end Form-->

          <!--MessageBox-->
          <div class="pane">
            <div class="messagebox_info">
              Messagebox information.
            </div>
            <div class="messagebox_warning">
              Messagebox Warning.
            </div>
            <div class="messagebox_success">
              Messagebox Success.
            </div>
            <div class="messagebox_error">
              Messagebox Error.
            </div>
            <div class="messagebox_validation">
              Messagebox validation.
            </div>

          </div>
          <!--end MessageBox -->


          <div class="pane">

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

      <div class="grid_12">
        <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      </div>
      <div class="clear"></div>
    </div>
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