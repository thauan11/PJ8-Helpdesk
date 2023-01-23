<?php
    session_start();
    
    //Recebe as informações do html
    $id = str_replace('#', '-', $_POST['id']);
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $departamento = str_replace('#', '-', $_POST['departamento']);
    $usuario = str_replace('#', '-', $_POST['usuario']);
    $problema = str_replace('#', '-', $_POST['problema']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $usuario_id = $_SESSION['id'];
    $status = 'Novo';

    //Atribui um ID a solicitação baseado em timestamp 
    $id = time();

    //Abre o arquivo
    $arquivo = fopen('../../app_helpdesk/solicitacoes/arquivo.hd', 'a');
    
    //Concatena em uma string
    $texto = 
        $usuario_id.'#'.
        $usuario.'#'.
        $id.'#'.
        $titulo.'#'.
        $departamento.'#'.
        $problema.'#'.
        $descricao.'#'.
        $status.
        PHP_EOL;
    
    //Escreve o texto concatenado e fecha o arquivo
    fwrite($arquivo, $texto);
    fclose($arquivo);

    //Volta para o portal
    header("Location: portal.php");
?>