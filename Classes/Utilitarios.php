<?php
class utilitarios{
	public function data($data){
		return date("d/m/Y", strtotime($data));
	}
	public function obterNomeCliente($idCliente){
		$c = new conectar();
		$conexao = $c -> conexao();
	
		$sql = "SELECT nome 
		FROM clientes 
		WHERE id_cliente = '$idCliente'";
	
		$result = mysqli_query($conexao,$sql);
		$mostrar = mysqli_fetch_row($result);
	
		return $mostrar[0];
	}
}
