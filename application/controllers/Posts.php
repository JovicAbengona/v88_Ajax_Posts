<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Posts extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("Post");
        }
        public function index(){
            $this->load->view('index');
        }

        public function index_html(){
            $data["posts"] = $this->Post->all();
            $this->load->view("partials/posts", $data);
        }

        public function index_json(){
            $data = array();
            $data["posts"] = $this->Quote->all();
            echo json_encode($data);
        }

        public function create(){
            $new_post = $this->input->post();
            $this->Post->create($new_post);
            $data["posts"] = $this->Post->all();
            $this->load->view("partials/posts", $data);
        }
    }
?>