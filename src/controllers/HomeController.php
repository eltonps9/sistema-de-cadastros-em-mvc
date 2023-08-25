<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller {

    public function index(){
        $this->render('login');
    }

    public function logout(){
        $this->redirect('/');
    }
}