<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model');
    }

    public function index()
    {
        $data['students'] = $this->Student_model->getStudents();
        $this->load->view('student/index', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address')
            );

            $status = $this->Student_model->insertStudent($data);

            if ($status) {
                $this->session->set_flashdata('success', 'Successfully added');
                redirect('student/add');
            } else {
                $this->session->set_flashdata('error', 'Error');
            }
        }

        $this->load->view('student/add_student');
    }

    public function edit($id)
    {
        $data['student'] = $this->Student_model->getStudent($id);
        $data['id'] = $id;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'address' => $this->input->post('address')
            );

            $status = $this->Student_model->updateStudent($data, $id);

            if ($status) {
                $this->session->set_flashdata('success', 'Successfully updated');
                redirect("student/edit/$id");
            } else {
                $this->session->set_flashdata('error', 'Error');
            }
        }

        $this->load->view('student/edit_student', $data);
    }

    public function delete($id)
    {
        if (is_numeric($id)) {
            $status = $this->Student_model->deleteStudent($id);

            if ($status) {
                $this->session->set_flashdata('success', 'Successfully deleted');
            } else {
                $this->session->set_flashdata('error', 'Error');
            }
        }

        redirect('student/index');
    }
}
