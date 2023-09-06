<?php

class Dashboard extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Welcome Dashboard";
        $this->view->render('main/index');
    }

    function saludo(){
        echo "saludo dashboard";
    }
}
?>