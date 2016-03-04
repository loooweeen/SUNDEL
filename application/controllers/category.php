<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

    public function index() {
        $result = $this->Category_model->category_list();
//        $c=0;
//        $whole = "";
//        foreach ($result as $r) {
//            if ($c==0){
//                $whole = "\"".$r->category."\"";
//            }
//            else{
//                $whole = $whole . "," . "\"".$r->category."\"";
//            }
//            $c++;
//        }
        return $result;
        //return $whole;
    }

}

?>