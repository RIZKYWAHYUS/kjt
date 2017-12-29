<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_perusahaan');
		
	}

	public function index()
	{
		$this->load->model('m_artikel');
		$this->load->model('m_gambar_product');

		$this->db->where('nama', 'deskripsi_our_service');
		$data['our_service'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'our_service_persewaan');
		$data['our_service_persewaan'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'our_service_penjualan');
		$data['our_service_penjualan'] = $this->m_artikel->ambil_artikel()->result();

		$this->db->where('nama', 'deskripsi_our_product');
		$data['our_product'] = $this->m_artikel->ambil_artikel()->result();


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



		$data['gambar_product'] = $this->m_gambar_product->ambil_data()->result();


		$this->load->view('home', $data);
	}


	public function aboutUs(){
		$this->load->model('m_portofolio');		

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


		$data['portofolio'] = $this->m_portofolio->ambil_data()->result();


		$this->load->view('v_about_us', $data);
	}


	public function contactUs(){
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


		$this->load->view('v_contact_us', $data);
	}


}
