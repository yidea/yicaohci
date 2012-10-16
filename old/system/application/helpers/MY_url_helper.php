<?php
//@MY_url_helper
if (!function_exists('redirect')) {
  function redirect($uri = '', $method = 'location', $http_response_code = 302, $time=0) {
    switch ($method) {
      case 'refresh' : header("Refresh:$time;url=" . site_url($uri));
        break;
      default : header("Location: " . site_url($uri), TRUE, $http_response_code);
        break;
    }
    exit;
  }
}
?>