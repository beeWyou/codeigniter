<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Hitungtabung extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('tabung');
    }
    function index(){
        $this-> tabung-> volume ('5', '3');
        echo "<br/>";
        $this-> tabung-> luasP ('5', '3');
        echo "<br/>";
        $this-> tabung-> luasS ('5', '3');
    }
}
?>