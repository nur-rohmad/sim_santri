<?php defined('BASEPATH') or exit('No direct script access allowed');
class Nilai_model extends CI_Model
{
  private $_table = "nilai"; //nama tabel
  // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
  public $no_induk;
  public $id_mapel;
  public $nilai;
  public function rules()
  {
    return [
      [
        'field' => 'no_induk',
        'label' => 'no_induk',
        'rules' => 'required'
      ],

      [
        'field' => 'id_mapel',
        'label' => 'id_mapel',
        'rules' => 'required'
      ],

      [
        'field' => 'nilai',
        'label' => 'nilai',
        'rules' => 'required', 'numberic'
      ]
    ];
  }

  public function tampilkandata()
  {
    $this->db->select('*');
    $this->db->from('V_nilai');
    $query = $this->db->get();
    return $query;
  }
  public function pilihan_santri()
  {
    $this->db->select('*');
    $this->db->from('santri');
    $query = $this->db->get();
    return $query;
  }

  public function mapelPilihan()
  {
    $this->db->select('*');
    $this->db->from('mapel');
    $query = $this->db->get();
    return $query;
  }


  public function save()
  {
    $post = $this->input->post();
    $this->no_induk = $post["no_induk"];
    $this->id_mapel = $post["id_mapel"];
    $this->nilai   = $post["nilai"];
    return $this->db->insert($this->_table, $this);
  }
}
