<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
    public function insertStudent($data)
    {
        return $this->db->insert('students', $data);
    }

    public function getStudents()
    {
        return $this->db->get('students')->result_array();
    }

    public function getStudent($id)
    {
        return $this->db->get_where('students', array('id' => $id))->row();
    }

    public function updateStudent($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('students', $data);
    }

    public function deleteStudent($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('students');
    }
}
