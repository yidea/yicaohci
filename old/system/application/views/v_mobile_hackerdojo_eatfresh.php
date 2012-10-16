<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.roundabout-1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.roundabout-shapes-1.1.js"></script>
<script type="text/javascript">
  $(document).ready(function() { //Start up our Project Preview Carosuel
    $('ul#folio_scroller').roundabout({
      easing: 'easeOutInCirc',
      shape: 'waterWheel',
      duration: 500
    });
  });
</script>

<!-- Catch Line and Link -->
<h2 class="grid_12 caption clearfix"><?php echo $portfolioTitle; ?></h2>

<div class="hr grid_12 clearfix"></div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">

  <a class="meta" href="#">Hacker Dojo </a>
  <h4 class="title">Mobile startup project - EatFresh</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>Introduction:</h6>
      <p>After user research, we found many people (especially married adults with children) go to local farmers market for fresh, organic fruits and vegetables, and they usually bought a week usage amount.
      </p>

      <h6>The Problems:</h6>
     <ul>
         <li>The consumers - they usually find it hard to know what kind of fruits and vegetable are in the market in advance, and have no information about the price and amount, and what time will they be in business. And it is not possible to customize the need and get a delivery during the weekday. Can the produce information be organized and scheduled base on location and available on Web and Mobile.
        </li>
         <li>
             The farmers -  they lack skills in using internet and social network to get more customers and interact with them , they are doing business in old, passive way.  They are less sensitive to the market need, Their own produce data is scattered ,not well organized and out of date
         </li>
     </ul>
    
      <h6>The Process & My role :</h6>
      <p>
           I talked to target consumers,  sketched the scenarios and designed the backend web UI and mobile UI. I worked with 5 people in the team, we did the user research from both customer and farmers perspective, we sketched out the user profile and scenarios, then we present and discuss in the weekly program at Hacker Dojo. Based on the scenario, we produce the workflow and feature of the system
      </p>
      <h6>Solution:</h6>
      <ul>
          <li>For farmers – we provide them two easy free way to interact with consumers: our Facebook app and our farmer’s manage system. They can update their produce information  for the next market date easily. And their information will be “like” by fans and recommended to people. Farmers  get the need information, then customize, and adjust the produce they will bring to the market. Farmers  information will be saved in our database.</li>
          <li>For users – The produce information is pushed to their Facebook page before hand or on our mobile app, they can make a request to the farmers. They can also access the produce information from Mobile phone, utilize specific searching (location, produce, farmers info) and GPS function</li>
      </ul>
      
    <p><b>Project Time:</b> 3.2011- present</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
    <a href="http://www.yicaohci.com/demo/eatfreash/index.html" class="button float right">Visit Testing Site</a>
 
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Farmer management backend 1- Mobile startup project - EatFresh</span><a href="#"><img alt="Farmer management backend 1- Mobile startup project - EatFresh" src="<?php echo base_url(); ?>images/portfolio/mobile_eatfresh1.jpg" /></a></li>
    <li><span>dicuss and sketch- Mobile startup project - EatFresh</span><a href="#"><img alt="dicuss and sketch- Mobile startup project - EatFresh" src="<?php echo base_url(); ?>images/portfolio/mobile_eatfresh3.jpg" /></a></li>
    <li><span>Farmer management backend 2- Mobile startup project - EatFresh</span><a href="#"><img alt="Farmer management backend 2- Mobile startup project - EatFresh" src="<?php echo base_url(); ?>images/portfolio/mobile_eatfresh2.jpg" /></a></li>
   
  </ul>
    
</div>
<div class="hr grid_12 clearfix"></div>