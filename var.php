<?php
session_start();

    $nomeSistema ="Loja dos Cursos";
    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario']: "";

        $nomeArquivo = "produto.json";
        $produtos = json_decode(file_get_contents($nomeArquivo), true);



// $produtos= [
//       ["nome"=>"Curso Hardware","preco"=>"R$"." ". 500.00,"duracao"=>"3 meses", "img"=>"img/hardware.jpg"],
//       ["nome"=>"Curso Redes","preco"=>"R$"." ". 300.00,"duracao"=>"3 meses", "img"=>"img/javascript.jpg"],
//       ["nome"=>"Curso Javascript","preco"=>"R$"." ". 600.00,"duracao"=>"3 meses", "img"=>"img/redes.jpg"],  
// ];

        $nomeArquivo = __DIR__."./../produto.json";

        $categorias = ["Cursos" , "Palestras" , "Artigos", "Workshop"];

 ?> 
