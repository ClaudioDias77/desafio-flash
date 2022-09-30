<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Entregadores</title>

    <link rel="stylesheet" href="/css/style.css">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a9c4251ca7.js" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar" style="background-color: #023F88;">
        <div class="container">
          <img src="/img/flash-logo.png" alt="">
          <nav class="navbar-expand-lg">
            <div class="d-inline-flex p-2 bd-highlight" id="navbarText">

              <ul class="navbar-nav mb-0 h6">
                <li class="nav-item ">
                  <a class="nav-link" style="color:white;" href="/index.php/entregador/login" role="button">Home</a>
                </li>
              </ul>

              <ul class="navbar-nav mb-0 h6">
                <li class="nav-item ">
                  <a class="nav-link"href='/index.php/entregador/cadastrar' style="color:white;" role="button" >Cadastrar</a>
                </li>
              </ul>

            </div>
        </div>
      </nav> 

      <br/>

    <h1>Lista de Entregadores</h1>

    <br/>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Email</th>
      <th scope="col">CEP</th>
      <th scope="col">Rua</th>
      <th scope="col">Numero</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Selecione</th>
    </tr>
  </thead>
 

    <?php
    
    foreach($tabela as $linha) {


        
         echo "<tr>" .
            "<td>" . $linha->nm_entregador . "</td>" .
            "<td>" . $linha->dt_nascimento . "</td>" .
            "<td>" . $linha->ds_email . "</td>" .
            "<td>" . $linha->cep . "</td>" .
            "<td>" . $linha->rua . "</td>" .
            "<td>" . $linha->numero . "</td>" .
            "<td>" . $linha->bairro . "</td>" .
            "<td>" . $linha->cidade . "</td>" .
            "<td>" . $linha->estado . "</td>" .
            
            
            
            "<td><a href= '/index.php/entregador/alterar/" . $linha ->cd_entregador . "'> Alterar</a> |
            <a href=' " . site_url("entregador/excluir/$linha->cd_entregador")  . "'>Deletar</a></td>" .


           "</tr>";

           

          

    }


?>



</table>

</body>
</html>

