<?php

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'violencia_feminina'; 


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $cep = $_POST['cep'];
    $street = $_POST['street'];
    $nome_agressor = $_POST['nome_agressor'];
    $relacao_com_vitima = $_POST['relacao_com_vitima'];
    $idade_agressor = $_POST['idade_agressor'];
    $profissao_agressor = $_POST['profissao_agressor'];
    $reside_no_mesmo_domicilio = $_POST['reside_no_mesmo_domicilio'];
    $inicio = $_POST['inicio'];
    $frequencia = $_POST['frequencia'];
    $tipos_violencia = $_POST['tipos_violencia'];
    $outros_tipos_violencia = $_POST['outros_tipos_violencia'];
    $medidas_aguardadas = $_POST['medidas_aguardadas'];
    $policia = $_POST['policia'];
    $notificacao = $_POST['notificacao'];
    $apoio_psicologico = $_POST['apoio_psicologico'];
    $autoriza_compartilhamento = $_POST['autoriza_compartilhamento'];
    $descricao_adicional = $_POST['descricao_adicional'];
    $informacoes_testemunhas = $_POST['informacoes_testemunhas'];
    $preferencia_contato = $_POST['preferencia_contato'];
    $contato_atualizacoes = $_POST['contato_atualizacoes'];
    $contato_suporte = $_POST['contato_suporte'];
    $recursos_disponiveis = $_POST['recursos_disponiveis'];
    $mais_informacoes = $_POST['mais_informacoes'];
    $outros_comentarios = $_POST['outros_comentarios'];

    
    $stmt = $conn->prepare("
        INSERT INTO denuncias (
            firstname, lastname, email, age, phone, data_nasc, cpf, state, city, cep, street, 
            nome_agressor, relacao_com_vitima, idade_agressor, profissao_agressor, reside_no_mesmo_domicilio, 
            inicio, frequencia, tipos_violencia, outros_tipos_violencia, medidas_aguardadas, policia, 
            notificacao, apoio_psicologico, autoriza_compartilhamento, descricao_adicional, 
            informacoes_testemunhas, preferencia_contato, contato_atualizacoes, contato_suporte, 
            recursos_disponiveis, mais_informacoes, outros_comentarios
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");

   
    if (!$stmt) {
        die("Erro na preparação da query: " . $conn->error);
    }

  
    $stmt->bind_param(
        "ssssissssssssisissssssssssssssss",
        $firstname, $lastname, $email, $age, $phone, $data_nasc, $cpf, $state, $city, $cep, $street,
        $nome_agressor, $relacao_com_vitima, $idade_agressor, $profissao_agressor, $reside_no_mesmo_domicilio,
        $inicio, $frequencia, $tipos_violencia, $outros_tipos_violencia, $medidas_aguardadas, $policia,
        $notificacao, $apoio_psicologico, $autoriza_compartilhamento, $descricao_adicional,
        $informacoes_testemunhas, $preferencia_contato, $contato_atualizacoes, $contato_suporte,
        $recursos_disponiveis, $mais_informacoes, $outros_comentarios
    );

    
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    /
    $stmt->close();
}


$conn->close();
?>
