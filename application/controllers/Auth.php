<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
        $this->load->config('email');
    }

    public function register(){
        $this->load->view('auth/register');
    }

    public function doregister(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $payload = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'level_user' => '0',
        );
        
        $subject = 'Aktivasi Akun';
        $message = '<html>
                        <h2>Aktivasi Akun</h2>
                        <p>Mohon untuk aktivasi akun Anda dengan klik tombol berikut</p>
                        <button>Aktivasi</button>
                    </html>';
        $insert = $this->user_model->insert($payload);        
        if(isset($insert)){
            $this->send_email($email, $subject, $message);
            return redirect('dashboard');
        } else {
            return redirect('register');
        }
    }

    public function send_email($to, $subject, $message){
        $from = $this->config->item('smtp_user');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()){
            return 'success';
        } else {
            return show_error($this->email->print_debugger());
        }
    }
}