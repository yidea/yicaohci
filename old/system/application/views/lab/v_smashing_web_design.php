<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?= $html_title; ?></title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="yi cao, hci, interaction design, user experience, prototyping, UI design,HTML/CSS/Javascript/Jquery" />
    <meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/>
    <meta name="author" content="Yi Cao" />
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="<?echo base_url();?>css/960/reset.css" />
    <style type="text/css">
      body{
        font-size: 0.625em;/*10px =1em */
        line-height:1.8em;
      } 
           
      #container{
        margin:0 auto;
        background-color: #ccc;
        width:96em;
        max-width: 96em;   
      }
      #container p{font-size: 1.2em;}
      #header{width:100%;}
      #content{
        float:left;
        display:inline;/*IE6 double float bug*/
        width:60em;
        background-color: #fff;
      }
      #sidebar{
        float: right;
        display: inline;
        width:340px;
        background-color: #fff;
      }
      #footer{
        clear:both;
        width: 100%;
      }
     
    </style>
    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--The script only fixes images named: *-trans.png -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>  
  </head>
  <body class="bg_white">        
    <div id="container">
      <div id="skip_links">
        <a href="#content">Skip to main content</a>
        <a href="#search">Skip to search</a>
      </div>     
      <div id="header">
        <p>header</p></div>      
      <div id="content">             
          <table>
            <tr>
              <td>"center align"
                
                <br />
                <q>"qtest" "asdf""</q>
                
                
              </td>
              <td>
                
                <pre><code>margin:0 auto;
</code></pre>
              </td>
            </tr>
          </table>                
      </div>
      <div id="sidebar"><p>sidebar</p></div>
      
      <div id="footer"><p>footer</p>
      
      </div>
      <!--footer -->
      
      <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      

    </div>       
  </body>
</html>