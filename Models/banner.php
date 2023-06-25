<?php
class banner extends Model {

    private $table = "banners";

    public function getbanner($display){
        try{
            $sql = "SELECT * FROM $this->table WHERE display = $display";
            $result = $this->db->query($sql);
            $data = [];
            $i = 0;
            //kiểm có dữ liệu không
            if($result->num_rows > 0){
                //xuất dữ liệu từng dòng vào biến row
                while($row = $result->fetch_assoc()){
                    //Gán dữ liệu vào mảng data
                    $data[$i++] =  $row;
                }
            }
            return $data;
        }
        catch (Exception $e){
            return $e;
        }
    }
}