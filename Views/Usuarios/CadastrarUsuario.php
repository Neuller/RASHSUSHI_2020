<?php
session_start();
if (isset($_SESSION['User'])) {
?>

<!DOCTYPE html>
<html>
	<body>
		<div class="container">
			<div class="cabecalho bgGradient">
				<div class="text-center textCabecalho_White opacidade">
					<h3><strong>CADASTRAR USUÁRIO</strong></h3>
				</div>
			</div>
			<!-- FORMULÁRIO DE CADASTRO -->
			<div class="divFormulario">
				<div class="mx-auto">
					<form id="frmUsuario">
						<div>
							<!-- FORMULÁRIO DADOS PESSOAIS -->
							<div class='col-md-12 col-sm-12 col-xs-12'>
								<div class="text-left">
									<h4><strong>DADOS PESSOAIS </strong><span class="glyphicon glyphicon-user ml-15"></span></h4>
								</div>
								<hr>
							</div>
							<!-- NOME -->
							<div class="mb-20px col-md-12 col-sm-12 col-xs-12 itensFormulario">
								<div>
									<label>NOME COMPLETO<span class="required">*</span></label>
									<input type="text" class="form-control input-sm text-uppercase" id="nome" name="nome" maxlenght="100">
								</div>
							</div>
							<!-- CPF -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>CPF</label>
									<input type="text" class="form-control input-sm align cpf text-uppercase" placeholder="###.###.###-##" id="cpf" name="cpf" maxlenght="100">
								</div>
							</div>
							<!-- CNPJ -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>CNPJ</label>
									<input type="text" class="form-control input-sm align cnpj text-uppercase" placeholder="##.###.###/####-##" id="cnpj" name="cnpj" maxlenght="100">
								</div>
							</div>

							<!-- FORMULÁRIO ENDEREÇO -->
							<div class='separador col-md-12 col-sm-12 col-xs-12'>
								<div class="text-left">
									<h4><strong>ENDEREÇO </strong><span class="glyphicon glyphicon-home ml-15"></span></h4>
								</div>
								<hr>
							</div>
							<!-- CEP -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>CEP</label>
									<input type="text" class="form-control input-sm align cep text-uppercase" placeholder="#####-###" id="cep" name="cep" maxlenght="100">
								</div>
							</div>
							<!-- BAIRRO -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>BAIRRO</label>
									<input type="text" class="form-control input-sm align text-uppercase" id="bairro" name="bairro" maxlenght="100">
								</div>
							</div>
							<!-- ENDEREÇO -->
							<div class="mb-20px col-md-8 col-sm-8 col-xs-8 itensFormulario">
								<div>
									<label>ENDEREÇO</label>
									<input type="text" class="form-control input-sm align text-uppercase" id="endereco" name="endereco" maxlenght="100">
								</div>
							</div>
							<!-- UF -->
							<div class="mb-20px col-md-4 col-sm-4 col-xs-4 itensFormulario">
								<div>
									<label>UF</label>
									<input type="text" class="form-control input-sm align text-uppercase" id="uf" name="uf" maxlenght="100">
								</div>
							</div>
							<!-- NÚMERO -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>NÚMERO</label>
									<input type="text" class="form-control input-sm align text-uppercase" id="numero" name="numero" maxlenght="100">
								</div>
							</div>
							<!-- COMPLEMENTO -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>COMPLEMENTO</label>
									<input type="text" class="form-control input-sm align text-uppercase" id="complemento" name="complemento" maxlenght="100">
								</div>
							</div>

							<!-- FORMULÁRIO TELEFONES -->
							<div class='separador col-md-12 col-sm-12 col-xs-12'>
								<div class="text-left">
									<h4><strong>TELEFONES </strong><span class="glyphicon glyphicon-phone-alt ml-15"></span></h4>
								</div>
								<hr>
							</div>
							<!-- TELEFONE -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>TELEFONE</label>
									<input type="text" class="form-control input-sm align telefone text-uppercase" placeholder="(##) ####-####" id="telefone" name="telefone" maxlenght="100">
								</div>
							</div>
							<!-- CELULAR -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>CELULAR</label>
									<input type="text" class="form-control input-sm align celular text-uppercase" placeholder="(##) # ####-####" id="celular" name="celular" maxlenght="100">
								</div>
							</div>
							<!-- TELEFONE 2 -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>TELEFONE 2</label>
									<input type="text" class="form-control input-sm align telefone2 text-uppercase" placeholder="(##) ####-####" id="telefone2" name="telefone2" maxlenght="100">
								</div>
							</div>
							<!-- CELULAR 2 -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>CELULAR 2</label>
									<input type="text" class="form-control input-sm align celular2 text-uppercase" placeholder="(##) # ####-####" id="celular2" name="celular2" maxlenght="100">
								</div>
							</div>

                            <!-- FORMULÁRIO DADOS DE ACESSO -->
							<div class='separador col-md-12 col-sm-12 col-xs-12'>
								<div class="text-left">
									<h4><strong>DADOS DE ACESSO </strong><span class="glyphicon glyphicon-cloud ml-15"></span></h4>
								</div>
								<hr>
							</div>
							<!-- E-MAIL -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>E-MAIL</label>
									<input type="text" class="form-control input-sm align text-uppercase" placeholder="exemplo@exemplo.com" id="email" name="email" maxlenght="100">
								</div>
							</div>
                            <!-- GRUPO -->
							<div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>GRUPO<span class="required">*</span></label>
									<select class="form-control input-sm" id="grupoSelect" name="grupoSelect">
                                        <option value="">SELECIONE UM GRUPO</option>
                                        <option value="2">NÍVEL 2</option>
                                        <option value="3">NÍVEL 3</option>
                                    </select>
								</div>
							</div>
                            <!-- USUÁRIO -->
                            <div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>USUÁRIO<span class="required">*</span></label>
									<input type="text" class="form-control input-sm text-uppercase" name="usuario" id="usuario" maxlenght="100">
								</div>
							</div>
                            <!-- SENHA -->
                            <div class="mb-20px col-md-6 col-sm-6 col-xs-6 itensFormulario">
								<div>
									<label>SENHA<span class="required">*</span></label>
									<input type="password" class="form-control input-sm text-uppercase" name="senha" id="senha" maxlenght="100">
								</div>
							</div>
							<!-- BOTÂO CADASTRAR -->
							<div class="col-md-12 col-sm-12 col-xs-12 itensFormulario btnLeft">
								<span class="btn btn-primary" id="btnCadastrar" title="CADASTRAR">CADASTRAR</span>
							</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function($) {
		$('.cpf').mask('999.999.999-99');
		$('.cnpj').mask('99.999.999/9999-99');
		$('.cep').mask('99999-999');
		$('.telefone').mask('(99) 9999-9999');
		$('.telefone2').mask('(99) 9999-9999');
		$('.celular').mask('(99) 9 9999-9999');
		$('.celular2').mask('(99) 9 9999-9999');

		$(".cep").change(function(){
			var cep = frmUsuario.cep.value;
			var urlPesquisaCep = "https://viacep.com.br/ws/"+cep+"/json";
				
			$.ajax({
				type: "GET",
				dataType: "JSON",
				url: urlPesquisaCep,
				success:function(r){
					$("#bairro").val(r.bairro);
					$("#endereco").val(r.logradouro);
					$("#complemento").val(r.complemento);
					$("#uf").val(r.uf);
				},
				error:function(){
					alertify.error("CEP INVÁLIDO");
					$("#cep").val("");
					return false;
				}
			});
		});
	});

	$('#btnCadastrar').click(function() {
		var nome = frmUsuario.nome.value;
		var cpf = frmUsuario.cpf.value;
		var cnpj = frmUsuario.cnpj.value;
        var grupo = frmUsuario.grupoSelect.value;
        var usuario = frmUsuario.usuario.value;
        var senha = frmUsuario.senha.value;
		var tabela = "usuarios";

		if ((nome == "") || (grupo == "") || (usuario == "") || (senha == "")) {
			alertify.error("PREENCHA TODOS OS CAMPOS OBRIGATÓRIOS");
			return false;
		}

		if ((cpf != "") || (cnpj != "")){
			$.ajax({ 
			type: 'POST',
			data:{"CPF" : cpf, "CNPJ" : cnpj, "TABELA" : tabela},
			url: './Procedimentos/Verificacoes/Verificar_CPF_CNPJ.php', 
			success: function(r) { 
				data = $.parseJSON(r);
				if (data == 0) {
					dados = $('#frmUsuario').serialize();
					$.ajax({
						type: "POST",
						data: dados,
						url: "./Procedimentos/Usuarios/CadastrarUsuario.php",
						success: function(r) {
							if (r == 1) {
								$('#frmUsuario')[0].reset();
								alertify.success("CADASTRO REALIZADO");
							} else {
								alertify.error("NÃO FOI POSSÍVEL CADASTRAR");
							}
						}
					});
				}else{
					alertify.error("CPF OU CNPJ JÁ CADASTRADO");
				}
		    }
			}); 
		}else{
			dados = $('#frmUsuario').serialize();
			$.ajax({
			    type: "POST",
				data: dados,
				url: "./Procedimentos/Usuarios/CadastrarUsuario.php",
				success: function(r) {
					if (r == 1) {
					    $('#frmUsuario')[0].reset();
						alertify.success("CADASTRO REALIZADO");
					} else {
						alertify.error("NÃO FOI POSSÍVEL CADASTRAR");
					}
				}
			});
		}
	});
</script>
<style>
	.cabecalho {
		margin-bottom: 50px;
	}
</style>
<?php
} else {
	header("location:./index.php");
}
?>