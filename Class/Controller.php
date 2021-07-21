<?php 
abstract class Produto{
    private $descricao;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $preco, $fabricante){
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDetalhesProduto(){
        return "O Produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante}.";
    }

}

class Teste{
    public function teste(){
        return "Teste";
    }

    static function fonfon(){
        return "Teste2";
    }
}

class Estoque extends Produto{
    private $quantidade;

    public function __construct($descricao, $preco, $fabricante, $quantidade){
        Produto::__construct($descricao, $preco, $fabricante);
        $this->quantidade = $quantidade;
    }

    public function getDetalhesEstoque(){
        return "Quantidade: {$this->quantidade}";
    }
}
