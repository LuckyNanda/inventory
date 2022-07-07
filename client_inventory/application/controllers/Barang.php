<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

	public function index()
	{
		$konten = $this->load->view('barang/list_barang', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'List Data Barang',
		);

		echo json_encode($data_json);
	}

	public function form_create()
	{
		$data_view = array('titel' => 'Form Data Barang Baru');
		$konten = $this->load->view('barang/form_barang', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Form Data Barang Baru',
		);

		echo json_encode($data_json);
	}

	// public function create_action()
	// {
	// 	$this->db->trans_start();

	// 	$arr_input = array(
	// 		'nama_barang' => $this->input->post('nama_barang'),
	// 		'deskripsi' => $this->input->post('deskripsi'),
	// 	);

	// 	$this->Barang_model->insert_data($arr_input);

	// 	if ($this->db->trans_status() === FALSE) {
	// 		$this->db->trans_rollback();
	// 		$data_output = array('sukses' => 'tidak', 'pesan' => 'Gagal Input Data Barang');
	// 	} else {
	// 		$this->db->trans_commit();
	// 		$data_output = array('sukses' => 'ya', 'pesan' => 'Berhasil Input Data Barang');
	// 	}

	// 	echo json_encode($data_output);
	// }

	public function form_edit($id_barang)
	{
		$data_view = array('titel' => 'Form Edit Data Barang', 'id_barang' => $id_barang);
		$konten = $this->load->view('barang/form_barang', $data_view, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'Form Edit Data Barang',
			'id_barang' => $id_barang
		);

		echo json_encode($data_json);
	}
}
