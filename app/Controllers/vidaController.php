<?php

namespace app\controllers;

use Core\Controller;

class VidaController extends Controller {

    public function index() {
        $this->view ('vida');   

    }

    public function saude(){
        $this->view ('saude');   
        
        
    }

}
