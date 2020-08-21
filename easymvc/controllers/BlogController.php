<?php

class BlogController extends Controller {
    
    function index() {
        echo "home page of BlogController";
    }
    
    function list($num) {
        $id = $this->model("id");
        $id->num = $num;
        $this->view("blog/list", $id);
        // echo "Hello! $user->name";
    }
    
}

?>