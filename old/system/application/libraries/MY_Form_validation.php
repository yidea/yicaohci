<?php if (!defined('BASEPATH'))exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {

  function MY_Form_validation($config = array()) {
    parent::CI_Form_validation($config);
    $this->CI = get_instance();
  }

  //error field exist , if isset &&value exist return true
  //new add by Yi 09-08-19
  function error_field_exist($field) {
    if (isset($this->_field_data[$field]['error']) && $this->_field_data[$field]['error'] != '') {
      return true;
    } else {
      return false;
    }
  }

}
