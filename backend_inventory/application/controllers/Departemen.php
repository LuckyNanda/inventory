<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Departemen extends CI_Controller
{
	public function index()
	{
		$konten = $this->load->view('departemen/list_departemen', null, true);

		$data_json = array(
			'konten' => $konten,
			'titel' => 'List Data Departemen',
		);
		echo json_encode($data_json);
	}
	public function list_departemen()
	{

		$data_departemen = $this->Departemen_model->get_departemen();

		$konten = '<tr>
		<td>Id Departemen</td>
		<td>Nama Departemen</td>
		</tr>';

		foreach ($data_departemen->result() as $key => $value){
			$konten .= '<tr>
							<td>'.$value->id_departemen.'</td>
							<td>'.$value->nama_departemen.'</td>
							<td>Read | Hapus | Edit</td>
						</tr>';
		}
		$data_json = array(
			'konten' => $konten,
		);
		echo json_encode($data_json);
	}
}

?>