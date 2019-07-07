<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class user extends admin {
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('user_model');
	}

	public function init() {
		$hash = $_SESSION[pc_hash];

		$rows=$this->db->select();			
		include $this->admin_tpl('index');
	}

	public function delete(){
		$id = $_GET['id'];
		if($this->db->delete(array('u_id'=>$id))){
			showmessage('删除成功','?m=user&c=user&a=init');
		}
	}
 
	public function add(){
		$hash = $_SESSION[pc_hash];
		include $this->admin_tpl('add');
	}
	public function insert(){
		if($this->db->insert($_POST)){
			showmessage('添加成功','?m=user&c=user&a=init');
		}
	}


	public function edit(){
		$row = $this->db->get_one("u_id={$_GET['id']}");
		$hash = $_SESSION[pc_hash];
		include $this->admin_tpl('edit');
	}
	public function update(){
		$where = array_splice($_POST,-1);

		if($this->db->update($_POST,$where)){
			showmessage('修改成功','?m=user&c=user&a=init');
		}
	}


}
?>