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
        // echo "<pre>".print_r($result,true)."</pre>";
        // die;
        $data = array(
            "title"     => NAMETITLE . " - Withdraw Member",
            "content"   => "admin/withdraw/withdraw_member",
            "mn_withdraw"    => "active",
            "extra"     => "admin/withdraw/js/js_index",
        );

        $this->load->view('admin_template/wrapper', $data);
    }
    
    public function prosesWD(){
        $wisequote=$_POST["wisequote"];
        $result=apitrackless(URLAPI . "/v1/admin/wallet/prosesWD?wisequote=".$wisequote);//->message->balance;
    }
    
    public function cancelWD(){
        $wisequote=$_POST["wisequote"];
        $result=apitrackless(URLAPI . "/v1/admin/wallet/cancelWD?wisequote=".$wisequote);//->message->balance;
    }
}