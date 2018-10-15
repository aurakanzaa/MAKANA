<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;


class Seller extends REST_Controller {

	public function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('seller')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('seller')->result();
		}
		$this->response($data, 200);
		
	}

	public function getDataKar()
	{
		$id = $this->get('id');
		if ($id == '') {
			$data = $this->db->get('seller')->result();
		} else {
			$this->db->where('id', $id);
			$data = $this->db->get('seller')->result();
		}
		$this->response($data, 200);
		
	}

	public function index_post()
	{
		$data = array(
			'id' => $this->post('id'),
			'fullname' => $this->post('fullname'),
			'username' => $this->post('username'),
			'phone' => $this->post('phone'),
			'password' => $this->post('password'),
			'email' => $this->post('email') 
		);
		$insert = $this->db->insert('seller', $data);
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
			'fullname' => $this->put('fullname'),
			'username' => $this->put('username'),
			'phone' => $this->put('phone'),
			'password' => $this->put('password'),
			'email' => $this->put('email') 
		);
		$this->db->where('id', $id);
		$update = $this->db->update('seller', $data);
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
		$delete = $this->db->delete('telepon');
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