<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Estoque; // tabela de estoques
use\src\models\Cliente; // tabela de clientes
use\src\models\Usuario; // tabela de usuarios

class ClienteController extends Controller{
    public function cliente(){
        $Cliente=Cliente::select()->orderby('id','desc')->execute();

        
        for($i=0; $i <= count($Cliente); $i++)
        $quantiacliente=$i;

        $this->render('cliente',[ 
            'Cliente'=>$Cliente,
            'quantiacliente'=>$quantiacliente
            ]); 
    }

    public function clienteView(){
        $this->render('clienteView');
    }
}