<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////
// Ultimate PHP IMDb Scraper for the new IMDb Template.
// Author: Abhinay Rathore
// Website: http://www.AbhinayRathore.com
// Blog: http://web3o.blogspot.com
// Code Extended From: http://code.google.com/p/tylerhall/source/browse/trunk/media-info/class.media.php
/////////////////////////////////////////////////////////////////////////////////////////////////////////

class Imdb
{
        function getMovieInfo($title)
        {
                $title = str_ireplace('the ', '', $title);
                $url  = "http://www.google.com/search?hl=en&q=imdb+" . urlencode($title) . "&btnI=I%27m+Feeling+Lucky";
                $html = $this->geturl($url);
                if(stripos($html, "302 Moved") !== false)
                        $html = $this->geturl($this->match('/HREF="(.*?)"/ms', $html, 1));
                $arr = array();
                if(stripos($html, "<meta name=\"application-name\" content=\"IMDb\" />") !== false){
                        $arr = $this->scrapMovieInfo($html);
                } else {
                        $arr['error'] = "No Title found on IMDb!";
                }
                return $arr;
        }

        // Scan movie meta data from IMDb page
        function scrapMovieInfo($html)
        {
                $arr = array();
                $arr['title_id'] = $this->match('/id="(tt[0-9]+)\|imdb/ms', $html, 1);
                $arr['title'] = trim($this->match('/<title>(.*?) \(.*?<\/title>/ms', $html, 1));
                $arr['year'] = trim($this->match('/<title>.*?\(.*?([0-9][0-9][0-9][0-9]).*?\).*?<\/title>/ms', $html, 1));
                $arr['rating'] = $this->match('/>([0-9].[0-9])<span>\/10/ms', $html, 1);
                $arr['genres'] = array();
                foreach($this->match_all('/<a.*?>(.*?)<\/a>/ms', $this->match('/Genre.?:(.*?)(<\/div>|See more)/ms', $html, 1), 1) as $m)
                {
                        array_push($arr['genres'], $m);
                }
                $arr['directors'] = array();
                foreach($this->match_all('/<a.*?>(.*?)<\/a>/ms', $this->match('/Director.?:(.*?)(<\/div>|and )/ms', $html, 1), 1) as $m)
                {
                        array_push($arr['directors'], $m);
                }
                $arr['writers'] = array();
                foreach($this->match_all('/<a.*?>(.*?)<\/a>/ms', $this->match('/Writer.?:(.*?)(<\/div>|and )/ms', $html, 1), 1) as $m)
                {
                        array_push($arr['writers'], $m);
                }
                $arr['cast'] = array();
                foreach($this->match_all('/<td class="name">(.*?)<\/td>/ms', $html, 1) as $m)
                {
                        array_push($arr['cast'], trim(strip_tags($m)));
                }
                $arr['release_date'] = $this->match('/Release Date:<\/h4>.*?([0-9][0-9]? (January|February|March|April|May|June|July|August|September|October|November|December) (19|20)[0-9][0-9]).*?(\(|<span)/ms', $html, 1);
                if($arr['title_id'] != "") $arr['release_dates'] = $this->getReleaseDates($arr['title_id']);
                $arr['plot'] = trim(strip_tags($this->match('/Users:.*?<p>(.*?)(<\/p>|<a)/ms', $html, 1)));
                $arr['poster'] = $this->match('/img_primary.*?<img src="(.*?)"/ms', $html, 1);
                $arr['poster_large'] = "";
                $arr['poster_small'] = "";
                if ($arr['poster'] != '' && strrpos($arr['poster'], "nopicture") === false) {
                        $arr['poster_large'] = substr($arr['poster'], 0, strrpos($arr['poster'], "_V1.")) . "_V1._SY500.jpg";
                        $arr['poster_small'] = substr($arr['poster'], 0, strrpos($arr['poster'], "_V1.")) . "_V1._SY150.jpg";
                } else {
                        $arr['poster'] = "";
                }
                $arr['runtime'] = trim($this->match('/Runtime:<\/h4>.*?([0-9]+) min.*?<\/div>/ms', $html, 1));
                $arr['top_250'] = trim($this->match('/Top 250 #([0-9]+)</ms', $html, 1));
                $arr['oscars'] = trim($this->match('/Won ([0-9]+) Oscars./ms', $html, 1));
                $arr['storyline'] = trim(strip_tags($this->match('/Storyline<\/h2>(.*?)(<em|<\/p>|<span)/ms', $html, 1)));
                $arr['tagline'] = trim(strip_tags($this->match('/Tagline.?:<\/h4>(.*?)(<span|<\/div)/ms', $html, 1)));

                if($arr['title_id'] != "") $arr['media_images'] = $this->getMediaImages($arr['title_id']);

                return $arr;
        }

        // Scan all release dates
        function getReleaseDates($titleId){
                $url  = "http://www.imdb.com/title/" . $titleId . "/releaseinfo";
                $html = $this->geturl($url);
                $releaseDates = array();
                foreach($this->match_all('/<tr>(.*?)<\/tr>/ms', $this->match('/Date<\/th><\/tr>(.*?)<\/table>/ms', $html, 1), 1) as $r)
                {
                        $country = trim(strip_tags($this->match('/<td><b>(.*?)<\/b><\/td>/ms', $r, 1)));
                        $date = trim(strip_tags($this->match('/<td align="right">(.*?)<\/td>/ms', $r, 1)));
                        array_push($releaseDates, $country . " = " . $date);
                }
                return $releaseDates;
        }

        // Collect all media images
        function getMediaImages($titleId){
                $url  = "http://www.imdb.com/title/" . $titleId . "/mediaindex";
                $html = $this->geturl($url);
                $media = array();
                $media = array_merge($media, $this->scanMediaImages($html));
                foreach($this->match_all('/<a href="\?page=(.*?)">/ms', $html, 1) as $p)
                {
                        $html = $this->geturl($url . "?page=" . $p);
                        $media = array_merge($media, $this->scanMediaImages($html));
                }
                return $media;
        }

        // Scan all media images
        function scanMediaImages($html){
                $pics = array();
                foreach($this->match_all('/src="(.*?)"/ms', $this->match('/<div class="thumb_list" style="font-size: 0px;">(.*?)<\/div>/ms', $html, 1), 1) as $i)
                {
                        $i = substr($i, 0, strrpos($i, "_V1.")) . "_V1._SY500.jpg";
                        array_push($pics, $i);
                }
                return $pics;
        }

        // ************************[ Extra Functions ]******************************
        function geturl($url)
        {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                $html = curl_exec($ch);
                curl_close($ch);
                return $html;
        }

        function match_all($regex, $str, $i = 0)
        {
                if(preg_match_all($regex, $str, $matches) === false)
                        return false;
                else
                        return $matches[$i];
        }

        function match($regex, $str, $i = 0)
        {
                if(preg_match($regex, $str, $match) == 1)
                        return $match[$i];
                else
                        return false;
        }
}