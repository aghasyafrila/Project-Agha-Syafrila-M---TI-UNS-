<?php

class model_userLog extends CI_model{

    function login($username,$password){
        $periksa = $this->db->get_where('users',array('username'=>$username,'password'=>$password));

        if($periksa->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
}
?>