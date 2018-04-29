<?php
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class test extends admin {
    function __construct() {
        parent::__construct();
        $this->M = new_html_special_chars(getcache('link', 'commons'));
        $this->db = pc_base::load_model('test_model');

    }
    public function init(){
        $pc_hash = $_SESSION["pc_hash"];
        $rows = $this->db->select();
        include $this->admin_tpl("index");
    }

    public function delete(){
        $id = $_GET["id"];
        if($this->db->delete("id={$id}")){
            showmessage("删除成功","?m=test&c=test&a=init");
        }

    }

    public function add(){
        $pc_hash = $_SESSION["pc_hash"];
        include  $this->admin_tpl("add");
    }

    public function insert(){
//            $array = array("username" => $_POST["username"], "userpassword" => $_POST["password"]);
        if($this->db->insert($_POST)){
            showmessage("添加成功","?m=test&c=test&a=init");
        }
    }

    public function edit(){
        $pc_hash = $_SESSION["pc_hash"];
        $row = $this->db->get_one("id={$_GET['id']}");
        include  $this->admin_tpl("edit");
    }

    public function update(){
        $where = array_splice($_POST, -1);
        if($this->db->update($_POST, $where)){
            showmessage("更新成功","?m=test&c=test&a=init");
        }
    }
}
?>