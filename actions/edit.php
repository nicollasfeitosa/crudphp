<?php 

session_start();

require_once 'connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $disconnect = false;

    $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // Verificação
    foreach($data as $campo){
        if (empty($campo)) {
            $_SESSION['error'] = "Algum elemento do campo está vazio =(";
            return header('Location: /index.php');
        }
    }

    extract($data);

    if (!$status == 1) {
        $status = 0;
        $disconnect = true;
    }

    if($login == 'NULL' && $password == 'NULL') {

        $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', contato = '$contato', datanasc = '$datanasc', 
                status = '$status', login = 'NULL', password = 'NULL' WHERE id = '$id'";

    } else {

        $pass = md5($password);

        $sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', contato = '$contato', datanasc = '$datanasc', 
                status = '$status', login = '$login', password = '$pass' WHERE id = '$id'";

    }

    if($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = "Usuario atualizado com sucesso!";

        if ($disconnect) {
            header('Location: /../auth/logout.php');
            exit();
        }
    } else {
        $conn->close();
        die("SQL: $sql Erro: $conn->connect_error");
    }

    $conn->close();
}

return header('Location: /index.php');