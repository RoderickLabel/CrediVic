<?php

namespace CrediVic;

class ContratoCreditoPessoal {

	private $cliente;
	private $valorPrincipal;
	private $juros;
	private $numeroParcelas;
	private $valorParcelas;
	private $montante;

	public function __construct(Cliente $cliente, $valorPrincipal, $juros, $numeroParcelas, $jurosCompostos = false)
	{
		$this->cliente = $cliente;
		$this->valorPrincipal = $valorPrincipal;
		$this->juros = $juros;
		$this->numeroParcelas = $numeroParcelas;
		$this->jurosCompostos = $jurosCompostos;
		$this->processa();
	}

	public function getCliente() 
	{
		return $this->cliente;
	}

	public function getvalorPrincipal() 
	{
		return $this->valorPrincipal;
	}

	public function getJuros() 
	{
		return $this->juros;
	}

	public function getNumeroParcelas() 
	{
		return $this->numeroParcelas;
	}

	public function getValorParcelas()
	{
		return $this->valorParcelas;
	}

	public function getMontante()
	{
		return $this->montante;
	}

	public function processa()
	{

		if ($this->jurosCompostos) {
			// Cálculo Juros Compostos
			// M = C . (1 + I)T 
			$this->montante = $this->valorPrincipal * pow( 1 + ($this->juros / 100), $this->numeroParcelas );
		} else {
			// Juros Simples
			$this->montante = $this->valorPrincipal * ( 1 + $this->juros / 100 );
		}

		$this->valorParcelas = $this->montante / $this->numeroParcelas;

	}


}