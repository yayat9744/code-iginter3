<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index($nama = null, $alamat = null)
    {

        echo $nama . "<br>";
        echo $alamat;
    }
}

/* End of file Auth.php */
