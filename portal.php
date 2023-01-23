<?php
	require_once "validador.php";

    $arquivo = fopen('../../app_helpdesk/solicitacoes/arquivo.hd', 'r');

    while(!feof($arquivo)) {
        $registro = fgets($arquivo);
        $solicitacoes[] = $registro;
    }

    fclose($arquivo);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
	<script src="js.js"></script>
    <title>Helpdesk - Solicitações</title>
</head>
<body>

	<div id="display_conteudo">

		<aside id="aside">
			<ul id="ul">
				<li onclick="reduzirBarraLateral()" id="opcoes">
					<a>Opções</a>
				</li>
				<li onclick="view_solicitacoes()">
					<a>Minhas solicitações
						<i class="fa-solid fa-angles-right"></i>
					</a> 
				</li>
				<li>
					<a href="portal_de_atendimento.php">Portal de atendimento
						<i class="fa-solid fa-angles-right"></i>
					</a>
				</li>
			</ul>

			<div id="user_identificacao">
				<? if(isset($_SESSION['login']) && $_SESSION['login']) {
					$login = $_SESSION['login'];
					echo('<a id="username">'.$login.'</a>');
				} ?>
			</div>

		</aside>

		<div id="box_1">

			<div id="box_img_principal">
				<div id="box_nav">
					<div>
						<input type="search" name="pesquisa" id="pesquisa" placeholder="Digite aqui o que procura!">
					</div>

					<div id="box_img" onclick="box_cx_selec()">
	
						<? if(isset($_SESSION['login']) && $_SESSION['login'] == 'adm') { ?>
						<img src="img/icone.png">
						<? } else { ?>
						<i class="fa-solid fa-user"></i>
						<? } ?>

						<div id="box_cx_selec" class="hidden">
							<ul>
								<li>
									<a href="logoff.php">Sair
										<i class="fa-solid fa-arrow-right-from-bracket"></i>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<div id="box_2">
				<div id="box_sections">
					<section onclick="abrir_form('Financeiro')">
						<h3>Financeiro</h3>
						<div>
							<p>Serviços de compra, cancelamento de nota, ajuste de nota fiscal e etc...</p>
						</div>
					</section>
	
					<section onclick="abrir_form('Recursos humanos')">
						<h3>Recursos Humanos</h3>
						<div>
							<p>Contratação, segunda via do crachá, ajuste de ponto e etc...</p>
						</div>
					</section>
	
					<section onclick="abrir_form('Tecnologia da informação')">
						<h3>Tecnologia da Informação</h3>
						<div>
							<p>Problema e ajustes com equipamento, acessos e sistemas.</p>
						</div>
					</section>
	
					<section onclick="abrir_form('Marketing')">
						<h3>Marketing</h3>
						<div>
							<p>Solicitação de logo marca, desenvolvimento de marketing digital, ideias criativas e etc...</p>
						</div>
					</section>
	
				</div>
			</div>
		</div>
	</div>

	<div id="box_3">
		<div class="formulario">
			
			<div class="head_frm">
				<div onclick="fechar_form()">
					<button>
						<i class="fa-solid fa-x"></i>
					</button>
				</div>
			</div>

			<div class="box_form">
				<form action="regitrar_solicitacao.php" method="post">
					<div id="box_dpt">
						<input type="text" name="id" id="id">
						<label for="departamento">Departamento</label>
						<input type="text" name="departamento" id="departamento">
						<label for="usuario">Usuario</label>
						<input type="text" name="usuario" id="usuario">
					</div>
					<label for="titulo">Titulo</label>
					<input type="text" name="titulo" id="titulo">
				
					<label for="problema">Qual o problema?</label>
					<input type="text" name="problema" id="problema">
	
		
					<label for="descricao">Descrição</label>
					<textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
					
					<button>Enviar</button>
				</form>
			</div>

		</div>
	</div>

	<div id="box_4">
		<div class="formulario" id="box_41">
			
			<div class="head_frm">
				<div onclick="fechar_form()">
					<button>
						<i class="fa-solid fa-x"></i>
					</button>
				</div>
			</div>

			<div id="box_solicitacoes_compct1">
				<div id="box_solicitacoes_compct2">
					<? 	
						$total_solicitacao = 0;
						
						foreach($solicitacoes as $solicitacao) {
							$solicitacao_dados = explode('#', $solicitacao);

							if (count($solicitacao_dados) < 8) {
								continue;
							} 

							elseif ($_SESSION['id'] == $solicitacao_dados[0]) {  ?>
								<section>
									<h3> <? echo($solicitacao_dados[2]) ?> </h3>
									<p> <? echo($solicitacao_dados[3]) ?> </p>
								</section> <?
								$total_solicitacao++;
								continue;
							}
						} 

						if ($total_solicitacao == 0) { ?> 
							<section class="fix">
								<p>Você não possui solicitações</p>
							</section> <?
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="https://kit.fontawesome.com/1ef87b5e1c.js" crossorigin="anonymous"></script>
</body>
</html>