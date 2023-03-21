<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Estoque; // tabela de estoques
use\src\models\Cliente; // tabela de clientes
use\src\models\Usuario; // tabela de usuarios


class HomeController extends Controller {

    public function index(){
        $this->render('login');
    }
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

                $this->render('home', [
                    'estoque'=>$estoque
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

    public function tela(){
        $estoque=Estoque::select()->execute();
        $this->render('home',['estoque'=>$estoque]);  
    }

    public function config(){
        $estoque=Estoque::select()->execute();
        $cliente=Cliente::select()->execute();
        
        $this->render('config',['estoque'=>$estoque, 'cliente'=>$cliente]);  
    }

    public function adicionarEstoque(){
    

        $item=$_POST['item'];
        $codigo=$_POST['codigo'];
        $quantidade=$_POST['quantidade'];
        $minEstoque=$_POST['estoque_min'];
        $unidade=$_POST['unidade'];

        if($item && $quantidade && $codigo && $minEstoque && $unidade){
            $estoque=Estoque::insert([
                'item'=>$item,
                'quantidade'=>$quantidade,
                'codigo'=>$codigo,
                'min_estoque'=>$minEstoque,
                'unidade'=>$unidade
            ])->execute();
    
            $this->redirect('/tela');
            exit;
        }else{
            $this->redirect('/config');
            exit;
        }
    }

    public function adicionarCliente(){
    

        $cliente=$_POST['cliente'];
        $ambiente=$_POST['ambiente'];
        $material=$_POST['material'];
        $marceneiro=$_POST['marceneiro'];

        
        

        if($cliente && $ambiente && $marceneiro && $material){
            $clientes=Cliente::insert([
                'cliente'=>$cliente,
                'ambiente'=>$ambiente,
                'material'=>$material,
                'marceneiro'=>$marceneiro
            ])->execute();
    
            $this->redirect('/clientes');
            exit;
        }else{
            $_SESSION['error']="algo de errado aconteceu!!";
            $this->redirect('/config');
            exit;
        }
    }

    public function deletar($id){
        $deletar=Estoque::delete()->where([
            'id'=>$id
        ])->execute();
        $this->redirect('/tela');

        
    }
    public function deleteCliente($id){
        $cliente=Cliente::delete()->where([
            'id'=>$id
        ])->execute();
        $this->redirect('/clientes');
    }

    public function updateCliente($id){
        $cliente=Cliente::select()->where(['id'=>$id])->one();
        
        $this->render('updateCliente',[
            'cliente'=>$cliente
        ]);
    }

    public function updateEstoque($id){
        $estoque=Estoque::select()->where(['id'=>$id])->one();
        
        $this->render('updateItem',[
            'estoque'=>$estoque
        ]);
    }
    
    public function updateAction_item($id){
        $item=$_POST['item'];
        $codigo=$_POST['codigo'];
        $quantidade=$_POST['quantidade'];
        $minEstoque=$_POST['minEstoque'];
        $unidade=$_POST['unidade'];

        if($item && $quantidade && $unidade){
            
            $update=Estoque::update([
                'item'=>$item,
                'quantidade'=>$quantidade,
                'unidade'=>$unidade
            ])->where([
                'id'=>$id
            ])->execute();
        }
        $this->redirect('/tela');
        exit;        
    }  

    public function updateAction_cliente($id){
        
        $cliente=$_POST['cliente'];
        $ambiente=$_POST['ambiente'];
        $material=$_POST['material'];
        $marceneiro=$_POST['marceneiro'];

        if($cliente && $ambiente && $marceneiro && $material){
            
            $cliente=Cliente::update([
                'cliente'=>$cliente,
                'ambiente'=>$ambiente,
                'material'=>$material,
                'marceneiro'=>$marceneiro
            ])->where([
                'id'=>$id
            ])->execute();
        }
        $this->redirect('/clientes');
        exit;        
    }  

    public function search(){
        $search=$_POST['pesquisar'];

        if($search
        ){
            $searching=Cliente::select( )
            ->where('cliente', 'like', '%'.$search.'%') 
            ->get();

            $this->render('search',[
                'searching'=>$searching
            ]);
            
            
        }else{
            $_SESSION['search']="nada encontrado";
            $this->redirect('/search');
            
        }
        

    }

    public function searchView(){
        $this->render('search');
    }
    
    public function cliente(){
        $Cliente=Cliente::select()->execute();
        $this->render('cliente',['Cliente'=>$Cliente]); 
    }

    public function logout(){
        $this->redirect('/');
    }
}