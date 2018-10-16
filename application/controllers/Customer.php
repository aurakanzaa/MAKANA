<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;


class customer extends REST_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('customer')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('customer')->result();
		}
		$this->response($data, 200);
		
	}

	public function getDataOut()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('customer')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('customer')->result();
		}
		$this->response($data, 200);
		
	}

	public function index_post()
	{
		$data = array(
			'id' => $this->post('id'),
			'email' => $this->post('email'),
			'fullname' => $this->post('fullname'),
			'phone' => $this->post('phone'),
			'username' => $this->post('username'),
			'password' => $this->post('password')
		);
		$insert = $this->db->insert('customer', $data);
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
			'email' => $this->put('email'),
			'fullname' => $this->put('fullname'),
			'phone' => $this->put('phone'),
			'username' => $this->put('username'),
			'passworde' => $this->put('password')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('customer', $data);
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
		$delete = $this->db->delete('customer');
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