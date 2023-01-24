<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {


    public function getProdutos(){
        $query = $this->db->get('produtos');
        return $query->result();
    }

    //Adiciona um novo produtos na tabela produtos
    public function addProdutos($dados=NULL){
        if ($dados != NULL):
        $this->db->insert('produtos', $dados);		
        endif;
    } 

    //Get produtos by id
    public function getProdutoByID($id=NULL){
        if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os produto
        $query = $this->db->get("produtos");        
        //retornamos o produto
        return $query->row();   
        endif;
    } 

    //Atualizr um produto na tabela produtos
    public function editarProdutos($dados=NULL, $id=NULL){
        //Verifica se foi passado $dados e $id    
        if ($dados != NULL && $id != NULL):
        //Se foi passado ele vai a atualização
        $this->db->update('produtos', $dados, array('id'=>$id));      
        endif;
    }

    //Apaga um produtos na tabela produtos 
    public function apagarProdutos($id=NULL){
        //Verificamos se foi passado o a ID como parametro
        if ($id != NULL):
        //Executa a função DB DELETE para apagar o produto
        $this->db->delete('produtos', array('id'=>$id));            
        endif;
    } 

    //Muda status do produtos na tabela produtos 
    public function statusProdutos($status=NULL, $id=NULL){
        //Verificamos se foi passado o a STATUS e ID como parametro
        if ($status != NULL && $id != NULL):
        //Executa a função DB UPDATE para mudar o status do produto
        $this->db->update('produtos', $status, array('id'=>$id));            
        endif;
    }  

}
