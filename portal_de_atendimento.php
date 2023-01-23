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
    <title>Helpdesk - Atendimento</title>
</head>
<body>

    <nav id="box_nav_pda">

        <div id="box_img" onclick="box_cx_selec()">

            <div id="img_ico_ps">
                <? if(isset($_SESSION['login']) && $_SESSION['login'] == 'adm') { ?>
                <img src="img/icone.png">
                <? } else { ?>
                <i class="fa-solid fa-user"></i>
                <? } ?>
            </div>

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
    </nav>

    <div id="box_solicitacoes_1">
        <div id="box_solicitacoes_2">
                    
            <? if(count($solicitacoes) <= 1) { ?>
                <section class="fix">
                    <p>Não há solicitações</p>
                </section>
            <? } else { ?>
                <? foreach($solicitacoes as $solicitacao) { ?>

                    <?php
                        $solicitacao_dados = explode('#', $solicitacao);

                        if (count($solicitacao_dados) < 6) {
                            continue;
                        }
                    ?>
                    <section>
                        <h3> <? echo($solicitacao_dados[1]) ?> </h3>
                        <p> <? echo($solicitacao_dados[2]) ?> </p>
                        <p> <? echo($solicitacao_dados[3]) ?> </p>
                        <p> <? echo($solicitacao_dados[4]) ?> </p>
                        <p> <? echo($solicitacao_dados[5]) ?> </p>
                        <p> <? echo($solicitacao_dados[6]) ?> </p>
                        <p> <? echo($solicitacao_dados[7]) ?> </p>
                    </section>

                <? } ?>
            <? } ?>
        </div>

    </div>

	<script src="https://kit.fontawesome.com/1ef87b5e1c.js" crossorigin="anonymous"></script>
</body>
</html>