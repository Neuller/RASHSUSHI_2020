<?php 
session_start();
require_once "../../Classes/Conexao.php";
require_once "../../Classes/Veiculos.php";

$obj = new veiculos();

$idUsuario = $_SESSION['IDUser'];

$dados = array(
$idUsuario,
$_POST['marcaModelo'] = strtoupper($_POST['marcaModelo']),		
$_POST['placa'] = strtoupper($_POST['placa']),
$_POST['chassi'] = strtoupper($_POST['chassi']),
$_POST['renavam'] = strtoupper($_POST['renavam']),
$_POST['cor'] = strtoupper($_POST['cor']),
$_POST['especie'] = strtoupper($_POST['especie']),
$_POST['ano'] = strtoupper($_POST['ano'])
);

echo $obj-> cadastrarVeiculo($dados);
?>