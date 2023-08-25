<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Estoque; // tabela de estoques
use\src\models\Cliente; // tabela de clientes
use\src\models\Usuario; // tabela de usuarios


class EstoqueController extends Controller{

    public function tela(){
        $estoque=Estoque::select()->orderby('id','desc')->execute();
        
        for($i=0; $i <= count($estoque); $i++)
        $quantiaest=$i;

        $this->render('home',[
            'estoque'=>$estoque,
            'quantiaest'=>$quantiaest, 
        ]);  
    }

    public function produtosView(){
        $estoque=Estoque::select()->execute();
        
        for($i=0; $i <= count($estoque); $i++)
        $quantiaproduto=$i;

        $this->render('produtosView',[
            'quantiaproduto'=>$quantiaproduto
        ]);
    }

    // relatorio em pdf;
    public function relatorio(){
        $cliente=Cliente::select()->execute();
        $this->render('relatorio',[
            'cliente'=>$cliente
        ]);
        

    }
}