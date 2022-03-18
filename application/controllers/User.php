<?php

class User extends CI_controller {
    function index(){
        $this->load->model('User_model');
        $users= $this->User_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->view('list',$data);
    }
    function create(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('fname','fname','required');
        $this->form_validation->set_rules('lname','lname','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('email','email','required');
        if($this->form_validation->run()==false){
            $this->load->view('create');
        }
        else{
            $formArray=array();
            $formArray['fname']=$this->input->post('fname');
            $formArray['lname']=$this->input->post('lname');
            $formArray['phone']=$this->input->post('phone');
            $formArray['email']=$this->input->post('email');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','record added successfully');
            redirect(base_url().'index.php/user/index');
        }
    }
    function edit($id){
        $this->load->model('User_model');
        $user=$this->User_model->getUser($id);
        $data=array();
        $data['user']=$user;

        $this->form_validation->set_rules('fname','fname','required');
        $this->form_validation->set_rules('lname','lname','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('email','email','required');

        
        $this->load->view('edit',$data);
    }
    function delete($id)
    {
        $this->load->model('User_model');
        $user=$this->User_model->getUser($id);
        if(empty($user)){
            $this->session->set_flashdata('failure','record not found');
            redirect(base_url().'index.php/user/index');
        }
        $this->User_model->deleteUser($id);
        $this->session->set_flashdata('success','record deleted');
            redirect(base_url().'index.php/user/index');
    }
}
