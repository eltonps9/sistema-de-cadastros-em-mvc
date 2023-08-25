<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Estoque; // tabela de estoques
use\src\models\Cliente; // tabela de clientes
use\src\models\Usuario; // tabela de usuarios


class LoginController extends Controller{
    
    public function home(){
        $senha= $_POST['senha'];
        $nome= $_POST['nome'];

        if($senha && $nome){
            $usuario=Usuario::select()
            ->where([
                'nome'=>$nome,
                'senha'=>$senha
            ])->execute();
            
            if(Count($usuario)>0){
                $estoque=Estoque::select()
                ->execute();
                $Cliente=Cliente::select()
                ->execute();

                for($i=0; $i <= count($estoque); $i++)
                $quantiaest=$i;
                for($i=0; $i <= count($Cliente); $i++)
                $quantiacliente=$i;

                $this->render('home', [
                    'estoque'=>$estoque, 
                    'quantiaest'=>$quantiaest, 
                    'quantiacliente'=>$quantiacliente

                ]);
            }else{
                $_SESSION['error']="senha ou nome incorreto";
                $this->redirect('/');
                exit;
            }
        }else{
            $this->redirect('/');
            exit;
        }
    }
}