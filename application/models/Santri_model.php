<?php defined('BASEPATH') or exit('No direct script access allowed');
class Santri_model extends CI_Model
{
  private $_table = "santri";
  public $no_induk;
  public $nama;
  public $jk;
  public $ttl;
  public $kelas;
  public $foto = "default.jpg";
  public $total_nilai = "0";
  public $alamat;


  public function rules()
  {
    return [
      [
        'field' => 'no_induk',
        'label' => 'no_induk',
        'rules' => 'required'
      ],
      [
        'field' => 'nama',
        'label' => 'nama',
        'rules' => 'required'
      ],
      [
        'field' => 'jk',
        'label' => 'jk',
        'rules' => 'required'
      ],
      [
        'field' => 'ttl',
        'label' => 'ttl',
        'rules' => 'required', 'date'
      ],
      [
        'field' => 'kelas',
        'label' => 'kelas',
        'rules' => 'required'
      ],
      [
        'field' => 'total_nilai',
        'label' => 'total_nilai',
        'rules' => 'required', 'numeric'
      ],
      [
        'field' => 'alamat',
        'label' => 'alamat',
        'rules' => 'required'
      ]
    ];
  }

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($no_induk)
  {
    return $this->db->get_where($this->_table, ["no_induk" => $no_induk])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->no_induk = $post["no_induk"];
    $this->nama = $post["nama"];
    $this->jk = $post["jk"];
    $this->ttl = $post["ttl"];
    $this->kelas = $post["kelas"];
    $this->foto = $this->_uploadImage();
    $this->alamat = $post["alamat"];
    $this->total_nilai = $post["total_nilai"];
    return $this->db->insert($this->_table, $this);
  }

  private function _uploadImage()
  {
    $config['upload_path']          = './upload/santri';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->no_induk;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('foto')) {
      return $this->upload->data("file_name");
    }
    // print_r($this->upload->display_errors());   
    return "default.jpg";
  }

  public function update()
  {
    //** nama variable post harus ditulis di rules
    $post = $this->input->post();
    $this->no_induk = $post["no_induk"];
    $this->nama = $post["nama"];
    $this->jk = $post["jk"];
    $this->ttl = $post["ttl"];
    $this->kelas = $post["kelas"];
    $this->alamat = $post["alamat"];
    $this->total_nilai = $post["total_nilai"];
    if (!empty($_FILES["foto"]["name"])) {
      $this->foto = $this->_uploadImage();
    } else {
      $this->foto = $post["foto_lama"];
    }
    return $this->db->update($this->_table, $this, array('no_induk' => $post['no_induk']));
  }

  public function delete($no_induk)
  {
    $this->_deleteImage($no_induk);
    return $this->db->delete($this->_table, array("no_induk" => $no_induk));
  }

  private function _deleteImage($no_induk)
  {
    $santri = $this->getById($no_induk);
    if ($santri->foto != "default.jpg") {
      $filename = explode(".", $santri->foto)[0];
      return array_map('unlink', glob(FCPATH . "/upload/santri/$filename.*"));
    }
  }

  public function detail_santri($no_induk)
  {
    $this->db->select('*');
    $query = $this->db->get_where('santri', array('no_induk' => $no_induk));
    return $query;
  }
  public function tampilkannilai($no_induk)
  {
    $this->db->select('*');
    $this->db->from('santri');
    $this->db->join('nilai', 'santri.no_induk = nilai.no_induk');
    $this->db->join('mapel', 'mapel.id_mapel = nilai.id_mapel');
    $this->db->where('santri.no_induk', $no_induk);
    $query = $this->db->get_where();
    return $query;
  }
}
