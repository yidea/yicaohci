<?php
/**
 * Description of Shared
 * @author Yi
 */
class Shared {
    /*property*/    

    /*static Method */
// US 50 states list 
    public static function stateArray() {
        $state_list = array(
            '0'=>'- Select State -',//start with
            'AL'=>"Alabama",
            'AK'=>"Alaska",
            'AZ'=>"Arizona",
            'AR'=>"Arkansas",
            'CA'=>"California",
            'CO'=>"Colorado",
            'CT'=>"Connecticut",
            'DE'=>"Delaware",
            'DC'=>"District Of Columbia",
            'FL'=>"Florida",
            'GA'=>"Georgia",
            'HI'=>"Hawaii",
            'ID'=>"Idaho",
            'IL'=>"Illinois",
            'IN'=>"Indiana",
            'IA'=>"Iowa",
            'KS'=>"Kansas",
            'KY'=>"Kentucky",
            'LA'=>"Louisiana",
            'ME'=>"Maine",
            'MD'=>"Maryland",
            'MA'=>"Massachusetts",
            'MI'=>"Michigan",
            'MN'=>"Minnesota",
            'MS'=>"Mississippi",
            'MO'=>"Missouri",
            'MT'=>"Montana",
            'NE'=>"Nebraska",
            'NV'=>"Nevada",
            'NH'=>"New Hampshire",
            'NJ'=>"New Jersey",
            'NM'=>"New Mexico",
            'NY'=>"New York",
            'NC'=>"North Carolina",
            'ND'=>"North Dakota",
            'OH'=>"Ohio",
            'OK'=>"Oklahoma",
            'OR'=>"Oregon",
            'PA'=>"Pennsylvania",
            'RI'=>"Rhode Island",
            'SC'=>"South Carolina",
            'SD'=>"South Dakota",
            'TN'=>"Tennessee",
            'TX'=>"Texas",
            'UT'=>"Utah",
            'VT'=>"Vermont",
            'VA'=>"Virginia",
            'WA'=>"Washington",
            'WV'=>"West Virginia",
            'WI'=>"Wisconsin",
            'WY'=>"Wyoming");
        return $state_list;
    }

    /**
     * This is function form_input_revisit
     *
     * @param mixed $input_name This is a description
     * @return mixed This is the return value description
     */
    public static function form_input_revisit($input_name = "",$error=true) {
//        $ci = & get_instance();
//        $ci->load->library('session');
        if(trim($input_name) !='') {
            $revisit_value = "";
            if (isset($_POST[$input_name])) {
                $revisit_value = $_POST[$input_name];
            }
            else if(isset($_COOKIE[$input_name])) {
                    $revisit_value = $_COOKIE[$input_name];
            }
//            else if(isset($ci->session->userdata($input_name))){
//                //echo $ci->session->userdata('username');
//                $revisit_value = $ci->session->userdata($input_name);
//            }
            else if($input_name =='b_cemail') {
                        $revisit_value = isset($_COOKIE['b_email'])?$_COOKIE['b_email']:"";
            }
            
            //has error -> display error background
            if($error == false) {
                $data = array("name"=>$input_name,"id"=>$input_name,"value"=>$revisit_value,"style"=>'background-color: rgb(255, 235, 232)');
            }
            else {
                $data = array("name"=>$input_name,"id"=>$input_name,"value"=>$revisit_value);
            }
            echo form_input($data);
        }
        else {
            echo "Please specific \$input_name";
        }
    }

    /**
     * This is function form_dropdown_revisit
     *
     * @param mixed $dp_name This is a description
     * @param mixed $data This is a description
     * @param mixed $select_value This is a description
     * @return mixed This is the return value description
     */
    public static function form_dropdown_revisit($dp_name='',$data = array(),$select_value='') {
        if (isset($_POST[$dp_name])) {
            $select_value = $_POST[$dp_name];
        }
        else if(isset($_COOKIE[$dp_name])) {
                $select_value = $_COOKIE[$dp_name];
            }
        echo form_dropdown($dp_name,$data,$select_value);
    }

    public static function form_radio_revisit($radioName,$data=array()) {
    /*@p-code:
     * @testdata: $_cookie["s_ship_option"] = 'same' $data_same = array('name'=>'s_ship_option','id'=>'s_ship_same','value'=>'same','checked'=>true);
     * check post and cookie
     * if s_ship_option exist &&value ==$data['value'] then set checked=true
     * if specific $radioName = s_ship_option && is different_radio checked ->display:block
     */
    //global $tableDisplayStyle;
        if(isset($_POST[$radioName]) && $_POST[$radioName]== $data["value"]) {
            $data["checked"] = true;
        }
        else if(isset($_COOKIE[$radioName]) && $_COOKIE[$radioName] ==$data['value']) {
                $data["checked"] = true;
            }
        echo form_radio($data);
    }

    public static function form_dropdown_number($name,$begin_num,$end_num,$select=''){
      if(is_numeric($begin_num)&& is_numeric($end_num)){
        if($begin_num>$end_num){
          $temp = $begin_num;
          $begin_num = $end_num;
          $end_num=$temp;
        }
        //prep data number
        $data = array();
        for($i=$begin_num;$i<=$end_num;$i++){
          $data[$i] = $i;
        }
        if($select=='') $select =$begin_num;
      Shared::form_dropdown_revisit($name,$data,$select);
      }

    }

    /*@p-code:
     * @test: $data = array('name'=>'gift_card','id'=>'gift_card','value'=>'accept','checked'=>$checkedOrNot);
     * 1 check post & cookie if exist name -> checked=true
     */
    public static function form_checkbox_revisit($data = array(),$reverse = '') {
        if(is_array($data)) {
            $name = $data['name'];
            if(isset($_POST[$name]) || isset($_COOKIE[$name])) {//does not use cookie anymore
                $data["checked"] = true;
//                if($reverse == true) {
//                    $data["checked"] = false;
//                }
            }
            echo form_checkbox($data);
        }
    }

}//class end 
?>
