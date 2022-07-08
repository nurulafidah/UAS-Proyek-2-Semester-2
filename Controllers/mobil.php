<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Mobil extends CI_Controller{

    public function index() {
        $this->load->model('model_mobil', 'mobil');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layout/footer');
        $daftar_mobil=$this->mobil->getAll();
        $data['daftar_mobil']=$daftar_mobil;
    }

    public function view() {
        $this->load->model('model_mobil','mobil');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view',$data);
        $this->load->view('layout/footer');
        $id = $this->input->get('id');
        $data['car']=$this->mobil->findById($id);
    }

    public function create() {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/create',$data);
        $this->load->view('layout/footer');
        $data['judul']='Formulir Kelola Mobil';
    }

    public function save(){
        $this->load->model('model_mobil_model','mobil');
        $id = $this->input->post('id');
        $nopol = $this->input->post('nopol');
        $warna = $this->input->post('warna');
        $biaya_sewa = $this->input->post('biaya_sewa');
        $deskripsi = $this->input->post('deskripsi');
        $cc = $this->input->post('cc');
        $tahun = $this->input->post('tahun');
        $id_merk = $this->input->post('id_merl');
        $foto = $this->input->post('foto');
        $idbaru = $this->input->post('idbaru');

        $data_car[]=$id;
        $data_car[]=$nopol;
        $data_car[]=$warna;
        $data_car[]=$biaya_sewa;
        $data_car[]=$deskripsi;
        $data_car[]=$cc;
        $data_car[]=$tahun;
        $data_car[]=$merk_id;
        $data_car[]=$foto;

        if(isset($idbaru)){
            $data_mobil[]=$idbaru;
            $this->mobil->update($data_car);
        }

        else{
            $this->mobil->save($data_car);
        }

        redirect(base_url().'index.php/mobil/view?id='.$id, 'refresh');
    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model('model_mobil', 'mobil');
        $edit_mobil = $this->mobil->findById($id);
        $data['judul']='Formulir Kelola Mobil';
        $data['edit_mobil'] = $edit_mobil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $id = $this->input->get('id');
        $this->load->model('model_mobil','mobil');
        $this->mobil->delete($id);
        redirect(base_url().'index.php/mobil','refresh');
    }

    public function upload(){

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '800';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        
        $id = $this->input->post('id');

        $array = explode('.', $_FILES['gambar_mobil']['nama']);
        $extension = end($array);

        //die(print_r($_FILES));
        $new_nama = $id.'.'.$extension;
        //die($new_name);
        $config['file_name'] = $new_nama;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('gambar_mobil'))
        {
            $error = array('error' => $this->upload->display_errors());
            //die(print_r($error));
            //$this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('upload_success', $data);
        }
        redirect(base_url().'index.php/mobil/view?id='.$id);
    }
}
?>