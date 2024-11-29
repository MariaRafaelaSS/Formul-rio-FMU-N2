
CREATE DATABASE violencia_feminina CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;


USE apoio_violencia;


CREATE TABLE denuncias (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    email VARCHAR(100),
    age INT(11),
    phone VARCHAR(15),
    data_nasc DATE,
    cpf VARCHAR(14),
    state VARCHAR(2),
    city VARCHAR(100),
    cep VARCHAR(10),
    street VARCHAR(100),
    nome_agressor VARCHAR(100),
    relacao_com_vitima VARCHAR(50),
    idade_agressor INT(11),
    profissao_agressor VARCHAR(100),
    reside_no_mesmo_domicilio ENUM('sim', 'nao'),
    inicio VARCHAR(100),
    frequencia VARCHAR(50),
    tipos_violencia TEXT,
    outros_tipos_violencia TEXT,
    medidas_aguardadas TEXT,
    policia ENUM('sim', 'nao'),
    notificacao ENUM('sim', 'nao'),
    apoio_psicologico ENUM('sim', 'nao'),
    autoriza_compartilhamento ENUM('sim', 'nao'),
    descricao_adicional TEXT,
    informacoes_testemunhas TEXT,
    preferencia_contato VARCHAR(100),
    contato_atualizacoes ENUM('sim', 'nao'),
    contato_suporte ENUM('sim', 'nao'),
    recursos_disponiveis ENUM('sim', 'nao'),
    mais_informacoes ENUM('sim', 'nao'),
    outros_comentarios TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;