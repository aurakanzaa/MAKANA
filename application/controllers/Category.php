<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;


class category extends REST_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('category')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('category')->result();
		}
		$this->response($data, 200);
		
	}

	public function getDataOut()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('category')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('category')->result();
		}
		$this->response($data, 200);
		
	}

	public function index_post()
	{
		$data = array(
			'id' => $this->post('id'),
			'name' => $this->post('name'),
			'description' => $this->post('description')
		);
		$insert = $this->db->insert('category', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status'=>'fail', 502));
		}
		
	}

	function index_put()
	{
		$id = $this->put('id');
		$data = array(
			'id' => $this->put('id'),
			'name' => $this->put('name'),
			'description' => $this->put('description')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('category', $data);
		if ($update) {
			$this->response($data,200);
		} else {
			$this->response(array('status' => 'fail',502));
		}
		
	}

	function index_delete()
	{
		$id=$this->delete('id');
		$this->db->where('id', $id);
		$delete = $this->db->delete('category');
		if ($delete) {
			$this->response(array('status' => 'success'),201);
		} else {
			$this->response(array('status' => 'fail',502));
		}
	}

}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */
 ?>