<?php
require_once 'Titular.php';
class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas;


    public function __contruct(Titular $titular)
    {
    $this->titular = $titular;
        
        self::$numeroDeContas++; //Sempre que for criada uma nova conta, aumenta essa VAR.
    }
    
    public function __destruct() 
    {
        self::$numeroDeContas--;
        echo "O número de contas passa a ser " . self::$numeroDeContas;
    }
    
    public function sacar(float $valorASacar):void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return; //O return sem nada para o método
        }
        
        $this->saldo -= $valorASacar;
        echo "Saldo disponível";
        
    }
    
    public function depositar(float $valorADepositar):void
    {
        if($valorADepositar < 0){
            echo "Não é possível depositar valores negativos";
            return;
        }
        $this->saldo += $valorADepositar;
        
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino):void 
    {
        if($valorATransferir == 0 || $valorATransferir > $this->saldo){
            echo "Erro na tranferência";
            return;
        }
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    
    public function getSaldo() : float
    {
        return $this->saldo;
    }
    
    
    
    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}


