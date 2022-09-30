
<?php echo form_open('entregador/incluir'); ?>

<!DOCTYPE html>
<html>  
<head>
    <title>Cadastro de Entregador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Oxanium|Poppins|Sen&display=swap" rel="stylesheet">

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


</head>
<body>

<div class="container mt-5">
    
    <div class="row justify-content-center">
        <div class="lateral ">
            <!-- <img src="img/self_1.svg" alt=""> -->
            <!-- <h2 class="">CONSULTA CEP</h2>    -->
        </div>
        
        <div class="formulario col-6">

        <div class="form-group">
                <input class="form-control " type="text" name="nome" id="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <input class="form-control " type="date" name="data" id="data" placeholder="">
            </div>

            <div class="form-group">
                <input class="form-control " type="text" name="email" id="email" placeholder="Email">
            </div>

            <div class="form-group ">
                <input class="form-control col-4" type="text" name="cep" id="cep" placeholder="CEP">
            </div>

           
           
            <div class="form-group">
                <input class="form-control " type="text" name="estado" id="uf"  placeholder="UF" readonly>
            </div>

            <div class="form-group">
                <input class="form-control " type="text" name="cidade" id="cidade" placeholder="Cidade" readonly>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control col-8" placeholder="Logradouro" name="rua" id="logradouro" readonly>          
                </div>

                <div class="form-group">
                <input type="text" class="form-control col-4" placeholder="Número" name="numero" id="numero">
                </div>

            </div>

            <div class="form-grounp">
                <input type="text" class="form-control " placeholder="Bairro" name="bairro" id="bairro" readonly>
            </div>
                        

            <div class="text-center">
                <button type="button" id="btn" class="btn btn-success btn-custom mt-4 justify-content-center"><svg class="bi bi-chevron-right" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                </button>
            </div>


        <div class="form-group">
    <input type="submit" value="Cadastrar">
        </div>

        
    </div>

</div>




    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
   

    
    //console.log(micael(10,10,20))
    </script>
    <script src="/js/app.js"></script>

</body>
</html>


