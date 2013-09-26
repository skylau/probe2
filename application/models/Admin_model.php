<?php
class Admin_model extends CI_Model {

    var $id   = '';

    function __construct()
    {
        parent::__construct();
    }
    
    function insert_entry()
    {
        $this->title   = $_POST['title']; // 请阅读下方的备注
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
