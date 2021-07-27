<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mapel_model extends CI_Model
{
  private $_table = "mapel"; //nama tabel
  // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
  public $id_mapel;
  public $nama_mapel;
  public $ustad_pengajar;
  public function rules()
  {
    return [
      [
        'field' => 'id_mapel',
        'label' => 'id_mapel',
        'rules' => 'required'
      ],

      [
        'field' => 'nama_mapel',
        'label' => 'nama_mapel',
        'rules' => 'required'
      ],

      [
        'field' => 'ustad_pengajar',
        'label' => 'ustad_pengajar',
        'rules' => 'required',
      ]
    ];
  }

  public function data_mapel()
  {
    $this->db->select('*');
    $this->db->from('mapel');
    $query = $this->db->get();
    return $query;
  }


  public function getById($id_mapel)
  {
    return $this->db->get_where($this->_table, ["id_mapel" => $id_mapel])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_mapel = $post["id_mapel"];
    $this->nama_mapel = $post["nama_mapel"];
    $this->ustad_pengajar   = $post["ustad_pengajar"];
    return $this->db->insert($this->_table, $this);
  }

  public function update()
  {
    $post = $this->input->post();
    $this->id_mapel = $post["id_mapel"];
    $this->nama_mapel = $post["nama_mapel"];
    $this->ustad_pengajar = $post["ustad_pengajar"];
    return $this->db->update($this->_table, $this, array('id_mapel' => $post['id_mapel']));
  }

  public function delete($id_mapel = null)
  {
    return $this->db->delete($this->_table, array("id_mapel" => $id_mapel));
  }
}
