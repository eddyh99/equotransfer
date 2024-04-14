<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Withdraw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('user_id'))) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $result=apitrackless(URLAPI . "/v1/admin/wallet/getPendingWD");//->message->balance;
        

        $data = array(
            "title"         => NAMETITLE . " - Withdraw Member",
            "content"       => "admin/withdraw/withdraw_member",
            "mn_withdraw"   => "active",
            "extra"         => "admin/withdraw/js/js_index",
            "withdraw"      => $result->message,
        );

        $this->load->view('admin_template/wrapper', $data);
    }
    
    public function prosesWD($wisequote){
        $quote = base64_decode($wisequote);

        $result = apitrackless(URLAPI . "/v1/admin/wallet/prosesWD?wisequote=".$quote);
        
        if($result->code == 200){
			$this->session->set_flashdata('success', "Proccess withdraw successful");
			redirect('admin/withdraw');
		}else{
			$this->session->set_flashdata('failed', "Error proccess withdraw, please try again!");
			redirect('admin/withdraw');
		}

    }
    
    public function cancelWD($wisequote){
        $quote = base64_decode($wisequote);

        $result=apitrackless(URLAPI . "/v1/admin/wallet/cancelWD?wisequote=".$quote);

        if($result->code == 200){
			$this->session->set_flashdata('success', "Cancel withdraw successful");
			redirect('admin/withdraw');
		}else{
			$this->session->set_flashdata('failed', "Error cancel withdraw, please try again!");
			redirect('admin/withdraw');
		}
    }
}