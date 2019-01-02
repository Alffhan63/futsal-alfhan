<?php

class ultras extends CI_model
{
  public function __construct()
{$this->load->database();}
public function flower ($user,$pass)
{
  $this->db->limit(1);
  $query=$this->db->get_where('user',array('username'=>$user,'password'=>md5($pass)));
  if($query->num_rows()>0)
  {return $query->result();}
  else
    {return false;}
  }
  public function regist($data = array()){
    return $this->db->insert('user',$data);
  }
public function kwitansi($data=array()){
$this->db->insert('kwitansi', $data);
$insert_id = $this->db->insert_id();
return $insert_id;
}
public function pesan($data=array()){
  return $this->db->insert('tb_pemesanan', $data);
}
public function pesan1($data=array()){
  return $this->db->insert('tb_jadwal_lapangan1', $data);
}
//   public function lap($data=array()){
//     return $this->db->insert('tb_jadwal_lapangan1', $data);
//
// }
public function pembayaran($data=array()){
  return $this->db->insert('pembayaran', $data);
}

public function list(){
  $this->db->select('kwitansi.id_kwitansi,tb_pemesanan.id_pemesanan,tb_pemesanan.nama_pemesan,tb_pemesanan.nama_tim,status.nama_status,tb_jadwal_lapangan1.jam_mulai,tb_jadwal_lapangan1.jam_slesai,tb_jadwal_lapangan1.tanggal_main');
  $this->db->join('tb_pemesanan','kwitansi.id_kwitansi=tb_pemesanan.id_kwitansi','inner');
  $this->db->join('status', 'kwitansi.id_status=status.id_status','inner');
  $this->db->join('tb_jadwal_lapangan1', 'kwitansi.id_kwitansi=tb_jadwal_lapangan1.id_kwitansi','inner');

  // $this->db->where('lapangan','Lapangan 1');
  return $this->db->get('kwitansi')->result();
}

public function tampil(){
  $this->db->select('kwitansi.id_kwitansi,tb_pemesanan.id_pemesanan,tb_pemesanan.nama_pemesan,tb_pemesanan.nama_tim,status.nama_status,tb_jadwal_lapangan1.jam_mulai,tb_jadwal_lapangan1.jam_slesai,tb_jadwal_lapangan1.tanggal_main');
  $this->db->join('tb_pemesanan','kwitansi.id_kwitansi=tb_pemesanan.id_kwitansi','inner');
  $this->db->join('status', 'kwitansi.id_status=status.id_status','inner');
  $this->db->join('tb_jadwal_lapangan1', 'kwitansi.id_kwitansi=tb_jadwal_lapangan1.id_kwitansi','inner');

  $this->db->where('status','Booking');
  return $this->db->get('kwitansi')->result();
}


}

 ?>
