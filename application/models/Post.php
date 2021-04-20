<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Post extends CI_Model {
        public function all(){
            $get_post = $this->db->query("SELECT * FROM posts")->result_array();

            if($get_post != NULL){
                return $get_post;
            }
            else{
                return "No Result";
            }
        }

        public function create($new_post){
            $query = "INSERT INTO posts (description, created_at, updated_at) VALUES (?, ?, ?)";
            $values = array($new_post["description"], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));

            return $this->db->query($query, $values);
        }
    }
?>
