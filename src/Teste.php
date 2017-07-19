<?php 

require_once("autoload.php");

use CrediVic\Cliente;
use CrediVic\ContratoCreditoPessoal;

class Teste {

	public function __construct() 
	{

		
		$cliente =  new Cliente("Rodrigo", "roderickruotolo@gmail.com", "(11) 1111-9090");
		$valorEmprestimo = 2000;
		$juros = 8;
		$numeroParcelas = 2;
		$jurosCompostos = false;
		$contrato = new ContratoCreditoPessoal($cliente, $valorEmprestimo, $juros, $numeroParcelas, $jurosCompostos);
		
		var_dump($contrato);
		echo "\n";


		$cliente =  new Cliente("Outro Cliente", "roderickruotolo@gmail.com", "(11) 2233-4545");
		$valorEmprestimo = 1000;
		$juros = 5;
		$numeroParcelas = 5;
		$jurosCompostos = true;
		$contrato = new ContratoCreditoPessoal($cliente, $valorEmprestimo, $juros, $numeroParcelas, $jurosCompostos);
		
		var_dump($contrato);
		echo "\n";


		$cliente =  new Cliente("Vladimir Vlk", "vlad@gmail.com", "(11) 4455-4545");
		$valorEmprestimo = 100;
		$juros = 8;
		$numeroParcelas = 1;
		$jurosCompostos = false;
		$contrato = new ContratoCreditoPessoal($cliente, $valorEmprestimo, $juros, $numeroParcelas, $jurosCompostos);
		
		var_dump($contrato);
		echo "\n";


	}

}

$teste = new Teste();
