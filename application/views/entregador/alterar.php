

<?php echo form_open('entregador/salvaralteracao'); ?>

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

  <h1><?php echo $titulo; ?></h1>

  <div class="container mt-5">
    
    <div class="row justify-content-center">
        <div class="lateral ">
            <!-- <img src="img/self_1.svg" alt=""> -->
            <!-- <h2 class="">CONSULTA CEP</h2>    -->
        </div>
        
        <div class="formulario col-6">

        <div class="form-group">
                <input class="form-control " type="hidden" name="cdentregador" value="<?php echo $tabela[0]->cd_entregador ?>" placeholder="Nome">
            </div>

        <div class="form-group">
                <input class="form-control " type="text" name="nome" value="<?php echo $tabela[0]->nm_entregador ?>" placeholder="Nome">
            </div>

          
        <div class="form-group">
                <input class="form-control " type="date" name="data" value="<?php echo $tabela[0]->dt_nascimento ?>" placeholder="">
            </div>


            <div class="form-group">
                <input class="form-control " type="text" name="email" value="<?php echo $tabela[0] ->ds_email ?>" placeholder="Email">

             </div>


            <div class="form-group ">
                <input class="form-control col-4" type="text" name="cep" value="<?php echo $tabela[0] ->cep ?>" placeholder="CEP">
            </div>


            <div class="form-group">
                <input class="form-control " type="text" name="estado" value="<?php echo $tabela[0] ->estado ?>"  placeholder="UF">
            </div>


            <div class="form-group">
                <input class="form-control " type="text" name="cidade" value="<?php echo $tabela[0] ->cidade ?>" placeholder="Cidade">
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-8" placeholder="Logradouro" name="rua" value="<?php echo $tabela[0] ->rua ?>">          
                </div>

                <div class="form-group">
                <input type="text" class="form-control col-4" placeholder="Número" name="numero" value="<?php echo $tabela[0] ->numero ?>">
                </div>

            </div>

            <div class="form-grounp">
                <input type="text" class="form-control " placeholder="Bairro" name="bairro" value="<?php echo $tabela[0] ->bairro ?>">
            </div>
             
            
            <br>


<input type="submit" value="Alterar">

<footer>



