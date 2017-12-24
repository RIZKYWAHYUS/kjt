<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}

	function ubahArtikel(){
		$this->load->model('m_artikel');		

		$this->db->where('nama', 'deskripsi_our_service');
		$data['our_service'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'our_service_persewaan');
		$data['our_service_persewaan'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'our_service_penjualan');
		$data['our_service_penjualan'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'deskripsi_our_product');
		$data['our_product'] = $this->m_artikel->ambil_artikel()->result();

		$this->load->view('v_ubah_artikel', $data);
	}

	function simpanPerubahanArtikel(){
		$this->db->query("UPDATE artikel SET isi = '".$_POST['artikel-our-service']."' WHERE nama = 'deskripsi_our_service'");
		$this->db->query("UPDATE artikel SET isi = '".$_POST['artikel-our-service-penjualan']."' WHERE nama = 'our_service_penjualan'");
		$this->db->query("UPDATE artikel SET isi = '".$_POST['artikel-our-service-persewaan']."' WHERE nama = 'our_service_persewaan'");
		$this->db->query("UPDATE artikel SET isi = '".$_POST['artikel-our-product']."' WHERE nama = 'deskripsi_our_product'");
		$_POST['sukses'] = true;
		redirect(base_url('admin/ubah_artikel'));
	}

	function ubahDataPerusahaan(){
		$this->load->model('m_data_perusahaan');
		

		$this->db->where('nama', 'nama_perusahaan');
		$data['nama_perusahaan'] = $this->m_data_perusahaan->ambil_data()->result();
		
		$this->db->where('nama', 'nama_perusahaan_sub');
		$data['nama_perusahaan_sub'] = $this->m_data_perusahaan->ambil_data()->result();

		$this->db->where('nama', 'alamat');
		$data['alamat'] = $this->m_data_perusahaan->ambil_data()->result();

		$this->db->where('nama', 'no_hp');
		$data['no_hp'] = $this->m_data_perusahaan->ambil_data()->result();

		$this->db->where('nama', 'no_telp');
		$data['no_telp'] = $this->m_data_perusahaan->ambil_data()->result();

		$this->db->where('nama', 'email');
		$data['email'] = $this->m_data_perusahaan->ambil_data()->result();

		$this->load->view('v_ubah_data_perusahaan', $data);
	}


	function simpanPerubahanDataPerusahaan(){
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['nama_perusahaan']."' WHERE nama = 'nama_perusahaan'");
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['nama_perusahaan_sub']."' WHERE nama = 'nama_perusahaan_sub'");
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['alamat']."' WHERE nama = 'alamat'");
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['no_hp']."' WHERE nama = 'no_hp'");
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['no_telp']."' WHERE nama = 'no_telp'");
		$this->db->query("UPDATE data_perusahaan SET isi = '".$_POST['email']."' WHERE nama = 'email'");
		
		$_POST['sukses'] = true;
		redirect(base_url('admin/ubah_data_perusahaan'));
	}


}