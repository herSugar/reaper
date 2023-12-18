<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Homepage extends CI_Controller {

    public function index()
    {
        $data['data'] = array(
           'Homepage'=> 'V_Homepage',
           'Slidepage'=> 'V_Slidepage'
        );
        $this->load->view('templets/header', $data);
        $this->load->view('templets/footer');
        
         
    }

}

/* End of file Controllername.php */



?>