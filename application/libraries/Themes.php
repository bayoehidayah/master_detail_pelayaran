<?php

if(!defined('BASEPATH')) exit('no file allowed');

class Themes{

    protected $_ci;

     function __construct(){
        $this->_ci =& get_instance();
    }
    
    function primary($theme, $data=null){
        $data['content'] = $this->_ci->load->view($theme,$data,true);
        $this->_ci->load->view('theme_config', $data);
    }
}
