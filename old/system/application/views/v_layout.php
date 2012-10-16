<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $html_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Yi Cao is a UX/UI Designer & Developer with projects experience at Rockyou and NetApp. Expertise in UI/UX design, Interaction design and Front end development with Usability, HCI, Performance in mind.">
        <meta name="keywords" content="Yi Cao,Yi,Cao,Yidea, HCI,portfolio,UCD,UED, Prototyping, UI engineer, UI prototyper, UI designer,UX,UI,Front end, web designer, web developer,Web, Interface, Design, Web design, Interface design, Interaction design, Web application, Application, Mobile, TV, Device, NUI, Product, Internet, Software, Expert, Usability,Accessibility,SEO, Information Architecture, Design,  GUI, jQuery, Javascript, Semantic,Html5,CSS3, Usability testing">
        <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style-min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.0.6/modernizr.min.js"></script>
        <script>window.Modernizr || document.write('<script src="<?php echo base_url(); ?>js/libs/modernizr-2.0.6.min.js"><\/script>')</script>
    </head>

    <body id="home">
        <div id="wrapper" class="container_12">
            <div class="clearfix">
                <!--Logo -->
                <h1 id="logo" class="grid_4">
                    <a href="<?php echo base_url(); ?>"><img alt="HomePage Yi Cao" src="<?php echo base_url(); ?>images/logoYiCao.jpg" width="76px" height="96px" /></a>
                    <span>HCI & User-Centered <br/>Interaction Design</span>
                </h1>

                <!-- Navigation Menu -->
                <ul id="navigation" class="grid_8">
                    <li>
                        <a href="<?php echo base_url(); ?>blog"><span class="meta">Latest blog</span><br />Blog</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>lab" <?php
if ($current_page == "playground") {
    echo 'class="current"';
}
?>><span class="meta">Experiment & Fun</span><br />Lab</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>about" <?php
                           if ($current_page == "about") {
                               echo 'class="current"';
                           }
?>><span class="meta">Who am I</span><br />About</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>portfolio" <?php
                           if ($current_page == "portfolio") {
                               echo 'class="current"';
                           }
?> ><span class="meta">My Portfolio</span><br />Portfolio</a>
                    </li>

                    <li><a href="<?php echo base_url(); ?>main" <?php
                           if ($current_page == "main") {
                               echo 'class="current"';
                           }
?> ><span class="meta">YiCaoHCI</span><br />Home</a>
                    </li>
                </ul>
            </div>

            <div class="hr grid_12 clearfix"> </div>

            <!--Main Content-->
            <?php echo $this->load->view($v_contentpage); ?>
            <!--end Main Content-->

            <div id="guideline" class="clearfix">
                <h2 class="grid_12 caption" >"Design for users' benefit, not for products' feature" & "Prototyping, testing, prototyping, testing..."</h2>
            </div>
            <div class="hr grid_12 clearfix"> </div>


            <div id="recent_info" class="clearfix">
                <div id="recent_info_left" class="clearfix">
                    <div id="recent_info_left_icon">
                        <a href="http://twitter.com/#!/Yidea" target="_blank">link to my Twitter </a>
                    </div>

                    <!--  tweets-->
                    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                    <script>
                        new TWTR.Widget({
                            version: 2,
                            type: 'profile',
                            rpp: 4,
                            interval: 6000,
                            width: 300,
                            height: 300,
                            theme: {
                                shell: {
                                    background: "#bfbfbf",
                                    color: '#ffffff'
                                },
                                tweets: {
                                    background: '#eeeeee',
                                    color: '#333333',
                                    links: '#1369ab'
                                }
                            },
                            features: {
                                scrollbar: false,
                                loop: false,
                                live: false,
                                hashtags: false,
                                timestamp: false,
                                avatars: false,
                                behavior: 'default'
                            }
                        }).render().setUser('Yidea').start();

                    </script><!--       tweets end-->

                </div><!-- recent_info_left-->

                <div id="recent_info_right" class="clearfix">
                    <div id="whiteline">
                    </div>

                    <div id="recent_info_right_icon">
                        <a href="<?php echo base_url(); ?>portfolio">link to my Recent Project</a>
                    </div>
                    <div id="recent_info_right_content">
                        <div id="recent_info_right_content_inner">
                            <h3>Recent Projects</h3>
                            <ul>
                                <li><a href="http://www.baychi.org/">BayCHI</a> website redesign project(HTML5), Palo Alto, May 2011(expected)</li>
                                <li>Mobile App idea Accelerator project, <a href="http://wiki.hackerdojo.com/w/page/25437/FrontPage">Hacker Dojo</a>,  May 2011(expected)</li>
                                <li>
                                    <a href="http://www.ehss.org/testing/">EHSS.org</a> website redesign project, San Francisco, April 2011(expected)
                                </li>
                                <li>"Design for Future TV" Interaction Design 131 project, SJSU, May 2011(expected)</li>
                            </ul>

                            <div id="recent_info_right_content_footer"><a href="<?php echo base_url(); ?>portfolio">See More Project</a></div>
                        </div>
                    </div><!--                    recent_info_right_content-->
                </div><!--                recent_info_right-->
            </div><!--            recent_info-->

            <div class="hr grid_12 clearfix"></div>
            <!-- Footer -->
            <p class="grid_12 footer clearfix">
                <span class="float"><a href="main">@Yi Cao on HCI  </a>2010, San Jose, CA</span>
                <a id="nav_top" class="float right" href="#">
                    <span>Top</span>
                </a>
            </p>
        </div><!--end wrapper-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.4.2.min.js"><\/script>')</script>

        <script defer src="<?php echo base_url(); ?>js/libs/plugins.js"></script>

        <?php if ($current_page == "main") : ?>
            <script defer src="<?php echo base_url(); ?>js/libs/script-home.js"></script>
        <?php else: ?>
            <script defer src="<?php echo base_url(); ?>js/libs/script-sub.js"></script>
        <?php endif; ?>

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
        <script type="text/javascript">
            (function(d,n){var e =d.createElement(n),s=d.getElementsByTagName(n)[0];e.async=true;e.src="http://commondatastorage.googleapis.com/client/observer.js#{observer:'4eb9cfc81165a3c916060049'}";s.parentNode.insertBefore(e,s);})(document,"script");
        </script>
    </body>
</html>