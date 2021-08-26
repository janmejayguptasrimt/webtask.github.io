<?php 
error_reporting(0);
class User extends CI_controller{
  public function __construct()
{
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
}
function index()
{      
       $users = $this->User_model->all();
     $data = array();
      $data['users'] = $users;
      $this->load->view('list',$data);
}


    function create(){

      $config=array (
        'file_name'=>time(),
        'ovewrite'=>TRUE,
        'max_length'=>'1028',
        'max_height'=>'800',
        'max_size'=>'2048',
        'allowed_types'=>'gif|png|jpg|peg',
        'upload_path'=>'upload'

      );
      $this->upload->initialize($config);
      if($this->upload->do_upload('image')){
          echo "<pre>";print_r($this->upload->data());
          $imagedata= $this->upload->data();
          $filename=$imagedata['file_name'];

      }else{
        echo $this->upload->display_errors();
      }

      
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('designation','designation','required');
        $this->form_validation->set_rules('dob','dob','required');
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('hobbies','hobbies','required');
        $this->form_validation->set_rules('mobile','Mobile','required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('gender','gender','required');
        


         
      
         if($this->form_validation->run()==false){
             $this->load->view('create');
         }
         else{
             //save record to database
             $formArray = array();
            $formArray['name']=$this->input->post('name');
            $formArray['designation']=$this->input->post('designation');
            $formArray['dob']=$this->input->post('dob');
            $formArray['state']=$this->input->post('state');
            $formArray['hobbies']=$this->input->post('hobbies');
            $formArray['mobile']=$this->input->post('mobile');
            $formArray['email']=$this->input->post('email');
            $formArray['gender']=$this->input->post('gender');
            $formArray['image']=$filename;

            
          

            $this->User_model->create( $formArray);
            $this->session->set_flashdata('success','record added successfully');
            redirect(base_url().'index.php/user/index');

            
         }
    }  
        function edit($userId)
       {
        
         $user = $this->User_model->getUser($userId); 
         $data = array();
         $data['user'] = $user;
         
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('designation','designation','required');
        $this->form_validation->set_rules('dob','dob','required');
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('hobbies','hobbies','required');
        $this->form_validation->set_rules('mobile','mobile','required|numeric');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('gender','gender','required');
         
         if($this->form_validation->run()== false){
            $this->load->view('edit',$data);
         } else {
             // update user data
             $formArray['name']=$this->input->post('name');
            $formArray['designation']=$this->input->post('designation');
            $formArray['dob']=$this->input->post('dob');
            $formArray['state']=$this->input->post('state');
            $formArray['hobbies']=$this->input->post('hobbies');
            $formArray['mobile']=$this->input->post('mobile');
            $formArray['email']=$this->input->post('email');
            $formArray['gender']=$this->input->post('gender');
            $formArray['image']=$this->input->post('image');
             $this->User_model->updateUser($userId,$formArray);
             $this->session->set_flashdata('success','record updated successfully');
            redirect(base_url().'index.php/user/index');


         }

     }
     function delete($userId)
     {
      
      $user = $this->User_model->getUser($userId);
      if (empty($user)) {
        $this->session->set_flashdata('failure','record not found in database');
        redirect(base_url().'index.php/user/index');
      }
      $this->User_model->deleteUser($userId);
      $this->session->set_flashdata('success','Record deleted sucessfully');
      redirect(base_url().'index.php/user/index');
     }

     
     
}

?>


