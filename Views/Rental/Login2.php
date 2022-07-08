<?php
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
// defined('BASEPATH') OR exit('No direct script access allowed');

// class Login extends CI_Controller {
//     public function index(){
//         $data = [];
//         $this->load->view('login.php',$data);
        
//     }

//     public function otentikasi(){
//         $this->load->model("user_model","user");
//         $username = $this->input->post('username'); 
//         $password = $this->input->post('password');

//         $row = $this->user->login($username,$password);
//         if(isset($row)){// jika user terdaftar di database
//             $this->session->set_userdata('USERNAME',$row->username);
//             $this->session->set_userdata('ROLE',$row->role);
//             $this->session->set_userdata('USER',$row);
            
//             redirect(base_url().'index.html');
//         }else{// jika user tidak (username password salah)
//             redirect(base_url().'login.php?status=f'); 
//         }

//     }

//     public function logout(){
//         $this->session->unset_userdata('USERNAME');
//         $this->session->unset_userdata('ROLE');
//         $this->session->unset_userdata('USER');
//         redirect(base_url().'login.php'); 
//     }


// }
?>