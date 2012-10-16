<!DOCTYPE html>
<html>
    <head>
        <title>jQuery Mobile Demo 1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--        app icon-->
        <link rel="apple-touch-icon" href="img/icon.png" />

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
        <style type="text/css">
            header{font-style: italic;}
            .ul-li-icon{top:0px;}
        </style>
        <script src="http://www.google.com/jsapi?key=ABQIAAAAahcO7noe62FuOIQacCQQ7RTHkUDJMJAZieEeKAqNDtpKxMhoFxQsdtJdv3FJ1dT3WugUNJb7xD-jsQ" ></script>
        <script src="http://code.jquery.com/jquery-1.5.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>        
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>js/jquery.ui.map.min.js"></script>       
    </head>

    <body>
        <!-- page #homepage-->
        <div id="homepage" data-role="page">
            <header data-role="header">
                <h1>Cut4Cash!</h1>
            </header><!-- /header -->

            <div data-role="content">
                <ul data-role="listview" style="height:400px;">
                    <li>
<!--                        <img  src="<?php echo base_url(); ?>images/lab/icon-restaurant.png"  alt="restaurant icon" class="ui-li-icon"/>                        -->
                        <a href="#restaurant" data-transition="slide">Restaurant</a>
                    </li>

                    <li>
                        <a href="#feed" data-transition="slide">Feed</a>
                    </li>

                      <li>
                        <a href="#feed" data-transition="slide">Fruits</a>
                    </li>
                      <li>
                        <a href="#feed" data-transition="slide">Vegetables</a>
                    </li>
                    <li>
                        <a href="#feed" data-transition="slide">Hot Deals</a>
                    </li>

                </ul>
            </div><!-- /content -->

            <footer data-role="footer">
                <h4>Footer</h4>
            </footer><!-- /header -->
        </div><!-- /page #homepage-->


        <!-- page #restaurant-->
        <div id="restaurant" data-role="page">
            <header data-role="header">
                <h1>Restaurant</h1>
            </header><!-- /header -->

            <script type="text/javascript">
                $('#restaurant').live("pageshow", function() {
                    $('#map_canvas').gmap({'center': getLatLng(), 'callback': function() {
                            $('#map_canvas').gmap('addMarker', {'position': getLatLng(), 'title': 'A title'});
                        }
                    });
                    function getLatLng() {
                        if ( google.loader.ClientLocation != null ) {
                            return new google.maps.LatLng(google.loader.ClientLocation.latitude, google.loader.ClientLocation.longitude);
                        }
                        return new google.maps.LatLng(59.3426606750, 18.0736160278);
                    }
                });
            </script>
            <div data-role="content">

                <div id="map_canvas" style="height:300px;"></div>
                <ul data-role="listview">
                    <li>                
                        <a href="#events_detail" data-transition="slide">
                            1. SJ Omogari Korean Restaurant
                        </a>

                    </li>
                    <li>
                        <a href="#events_detail" data-transition="slide">
                            2. Vung Tau Restaurant 
                        </a>
                    </li>
                    <li>
                        <a href="#events_detail" data-transition="slide">
                            3. Bun Bo Hue An Nam Restaurant
                        </a>
                    </li>
                    <li>
                        <a href="#events_detail" data-transition="slide">
                            4. Gombei Japanese Restaurant
                        </a>
                    </li>

                </ul>
            </div><!-- /content -->

            <footer data-role="footer">
                <h4>Footer</h4>
            </footer><!-- /header -->
        </div><!-- /page #events-->

        <!-- page #feed-->
        <div id="feed" data-role="page">
            <header data-role="header">
                <h1>Feed</h1>
            </header><!-- /header -->

            <div data-role="content">
                <?php
                //$cache =  base_url()."cache/feed";
                // Re-cache every three hours
//                if ( filemtime($cache) < (time() - 10800)) {
//                    // grab the site's RSS feed, via YQL
//                    $path = "http://query.yahooapis.com/v1/public/yql?q=";
//                    $path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/psdtuts'");
//                    $path .= "&format=json";
//                    $feed = file_get_contents($path, true);
//                    // If something was returned, cache
//                    if (is_object($feed) && $feed->query->count) {
//                        $cachefile = fopen($cache, 'w');
//                        fwrite($cachefile, $feed);
//                        fclose($cachefile);
//                    }
//                } else {
//                    // We already have local cache. Use that instead.
//                    $feed = file_get_contents($cache);
//                }
//
                $path = "http://query.yahooapis.com/v1/public/yql?q=";
                $path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/psdtuts'");
                $path .= "&format=json";
                $feed = file_get_contents($path, true);
                // If something was returned, cache
                if (is_object($feed) && $feed->query->count) {
                    $cachefile = fopen($cache, 'w');
                    fwrite($cachefile, $feed);
                    fclose($cachefile);
                }
                // Decode that shizzle
                $feed = json_decode($feed);
                ?>

                <ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
                    <?php foreach ($feed->query->results->item as $item) {
                    ?>
                        <li>
                            <h2>
                                <a href="#">
                                <?php echo $item->title; ?>
                            </a>
                        </h2>
                        <span class="ui-li-count"><?php //echo $item->comments;     ?> </span>
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /content -->

            <footer data-role="footer">
                <h4>footer</h4>
            </footer><!-- /header -->
        </div><!-- /page #feed-->


    </body>
</html>