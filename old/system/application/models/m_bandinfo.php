<?php
/**
 * m_bandinfo
 *
 * @property CI_DB_active_record $db
 */
class m_bandinfo extends Model {
  function m_bandinfo(){
    parent::Model();
  }

  public function band_exists($bandname){
    $this->db->select("bandname");
    $this->db->from("bandinfo1");
    $this->db->where("bandname",$bandname);
    $result = $this->db->count_all_results();//results num
    return $result;
  }
  public function add_bandinfo($data){//active insert    
    if($this->db->insert('bandinfo1',$data)){return true;}
    return false;
  }
}

?>
