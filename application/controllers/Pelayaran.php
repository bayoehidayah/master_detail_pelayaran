<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pelayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data["js"] = APPPATH."/views/pelayaran/list-js.php";
        $this->themes->primary("pelayaran/list");
    }
}
