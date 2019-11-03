<?php

$nomeSistema ="Loja dos Cursos";
$usuario = ["nome"=>"Caio"];
$produtos= [
      ["nome"=>"Curso Hardware","preco"=>"R$"." ". 500.00,"duracao"=>"3 meses", "img"=>"img/hardware.jpg"],
      ["nome"=>"Curso Redes","preco"=>"R$"." ". 300.00,"duracao"=>"3 meses", "img"=>"img/javascript.jpg"],
      ["nome"=>"Curso Javascript","preco"=>"R$"." ". 600.00,"duracao"=>"3 meses", "img"=>"img/redes.jpg"],  
];

$categorias = ["Cursos" , "Palestras" , "Artigos"];

 ?> 



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Loja Virtual</title>

    </head>
<body>



<?php include("header.php") ?>

<main>
 

    <section class= "container d-flex justify-content-center p-3">
        <div class="row">
             <div class="col-12">
                <h1>Carrinho de Compras</h1>
             </div> 
             <div class="col-12">
                <div class="row card">   
                    <div class="col-12">
                        <h3>Você está comprando o <?php echo $_GET['nomeProduto']; ?> </h3>  
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <form class= "d-flex flex-column p-3" method="post" action="sucesso.php">
                            <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                            <input type="text" name="cpf" placeholder="Digite seu cpf">
                            <input type="number" name="cartao" placeholder="Digite o número do cartão">
                            <input type="date" name="validadeCartao" placeholder="Digita data validade">
                            <input type="password" name="codigoSeguranca" placeholder="Digite o cv">
                            <button class="btn btn-success" type="submit">Finalizar Compra</button>
                        </form>
                    </div>               
                </div>            
             
             </div>      
        </div>           
    </section>              


</main> 









</body>
</html>