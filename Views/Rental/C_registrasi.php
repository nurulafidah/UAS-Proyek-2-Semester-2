<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registrasi extends CI_Controller {

    public function registrasi() {
		if (isset($_POST['registrasi'])) {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			$this->form_validation->set_rules('password','Confirm Password','required|min_length[5]|matches[password]');

			if ($this->form_validation->run()==TRUE) {

				$data = Array(
					'username'=>$_POST['username'],
					'password'=>md5($_POST['password']),
					'email'=>$_POST['email'],
					'created_at'=>date('Y-m-d'),
					'last_login'=>date('Y-m-d'),
					'status'=>('1'),
					'role'=>('public')
				);

				$this->db->insert('users', $data);
				redirect("c_registrasi/registrasi", "refresh");
			}
			
		}

		$this->load->view('registrasi');
	}
}