<?php
namespace src\controllers;

use \core\Controller;
use\src\models\Estoque; // tabela de estoques
use\src\models\Cliente; // tabela de clientes

class AcoesController extends Controller{

    public function adicionar(){
        $estoque=Estoque::select()->execute();
        $cliente=Cliente::select()->execute();
        
        $this->render('config',['estoque'=>$estoque, 'cliente'=>$cliente]);  
    }

    public function adicionarEstoque(){
        
        $item=$_POST['item'];
        $quantidade=$_POST['quantia'];
        $unidade=$_POST['unidade'];
        $prVenda=$_POST['precoVenda'];
        $codigo=$_POST['codigo'];
        $prCusto=$_POST['precoCusto'];
        $lucro=$_POST['lucro'];
        $min_estoque=$_POST['min_estoque'];
        $data=$_POST['data'];


        if($item && $quantidade && $min_estoque && $codigo && $unidade && $data && $lucro && $prCusto && $prVenda){
            
            $estoque=Estoque::insert([
                'item'=>$item,
                'quantia_atual'=>$quantidade,
                'codigo'=>$codigo,
                'unidade'=>$unidade,
                'prVenda'=>$prVenda,
                'prCusto'=>$prCusto,
                'lucro'=>$lucro,
                'data'=>$data,
                'min_estoque'=>$min_estoque

            ])->execute();
        }

        $this->redirect('/produtoTela');
        exit;  
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

    public function updateProduto(){
        $search=$_POST['produto'];

        if(isset($search)){

            $produtos=Estoque::select()
            ->where('codigo', 'like', '%'.$search.'%')
            ->get();  
            
            if($produtos){
                $this->render('Produtosupdate',[
                    'produtos'=>$produtos
                ]);
            }else{
                $this->redirect('/produtoTela');
                exit;
            }
        }else{
            $this->redirect('/produtoTela');
            exit;
        }         
    }
    
    public function updateAction_produto($id){
        $item=$_POST['item'];
        $quantidade=$_POST['quantidade'];
        $unidade=$_POST['unidade'];
        $prVenda=$_POST['precoVenda'];
        $date=$_POST['date'];
        $retirar=$_POST['retirar'];

        $upquantia=Estoque::select()->where(['id'=>$id])->one();           

        if($item  && $retirar && $unidade && $prVenda && $date && $quantidade){
            //aqui será chamado ao adicionar e retirar quantidade do produto ao mesmo tempo
            $sub_add=$upquantia['quantia_atual']-$retirar+$quantidade;

            $update=Estoque::update([
                'item'=>$item,
                'quantia_atual'=>$sub_add,
                'unidade'=>$unidade,
                'prVenda'=>$prVenda,
                'data'=>$date
            ])->where([
                'id'=>$id
            ])->execute();
            
            $this->redirect('/tela');
            exit;

        }elseif($item  && $quantidade && $unidade && $prVenda && $date ){
            //aqui está sendo chamado caso queira fazer adicao na quantidade do produto
            $somaquantia=$upquantia['quantia_atual']+$quantidade;

            $update=Estoque::update([
                'item'=>$item,
                'quantia_atual'=>$somaquantia,
                'unidade'=>$unidade,
                'prVenda'=>$prVenda,
                'data'=>$date
            ])->where([
                'id'=>$id
            ])->execute();

            $this->redirect('/tela');
            exit;

        }elseif($item  && $retirar && $unidade && $prVenda && $date){
            //aqui está sendo chamado caso queira fazer retirada na quantidade do produto
            $subtrair=$upquantia['quantia_atual']-$retirar;

            $update=Estoque::update([
                'item'=>$item,
                'quantia_atual'=>$subtrair,
                'unidade'=>$unidade,
                'prVenda'=>$prVenda,
                'data'=>$date
            ])->where([
                'id'=>$id
            ])->execute();

            $this->redirect('/tela');
            exit;
        }
        $this->redirect('/produtoTela');
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

        if($search){
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
}