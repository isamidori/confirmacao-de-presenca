<?php

if(isset($_POST['submit']))
{

    // print_r($_POST['quantidade_pessoas']);
    // print_r('<br>');
    // print_r($_POST['nomes_confirmados']);
    // print_r('<br>');


    include_once('config.php');

    $nome = $_POST['quantidade_pessoas'];
    $quantidade = $_POST['nomes_confirmados'];

    $result = mysqli_query($conexao, "INSERT INTO convidados_confirmados (quantidade_pessoas,nomes_confirmados) 
    VALUES ('$nome','$quantidade')");

}



?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniversário Bianca</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../bootstrap/bootstrap-grid.min.css"> -->
    <!-- <link href="https://fonts.cdnfonts.com/css/better-restay" rel="stylesheet"> -->




    <link rel="stylesheet" href="../css/reset.css">
    <link href="https://fonts.cdnfonts.com/css/nt-vanilla" rel="stylesheet">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css" media="screen" />

    <link rel="shortcut icon" href="../images/favicon (2).ico" type="imageS/x-icon" />
</head>

<body>
    <div class="txtPrincipal">
        <h1>Aniversário da Bia</h1>
    </div>
    <p>Que bom ter ver por aqui! <br>
    Você confirma sua presença?</p>



    <div class="container" id="myGroup">
        <p>
            <button class="btn btn-info btn-circle btn-xl" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <img
                src="../images/correto.png">
              
            </button>
            <button class="btn btn-info btn-circle btn-xl" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                <img
                        src="../images/negativa.png">
              
            </button>
            
        </p>
        
        <div class="collapse" id="collapseExample" data-parent="#myGroup">
        <form action="inicio.php" method="POST">
        <div class="card card-body">
        <fieldset>
            
                
                    
                            <br>
                        
                        <div class="inputBox1">
                            <!-- <input type="text" name="quantidade_pessoas" class="inputUser" requireds> -->
                            <label for="quantidade_pessoas" class="labelInput">Quantas pessoas? </label>
                            <select name="quantidade_pessoas">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                </select>

                    </div>
 
                        
                        Abaixo, insira os nomes dos convidados separando por virgula, depois clique em enviar <br>
                        <br>
                        <div class="inputBox2">
                <input type="text" name="nomes_confirmados" placeholder="Nome, " class="inputUser" requireds>
                <label for="nomes_confirmados" class="labelInput"></label>
                

                    </div>
                    
                </form>
                

                <input type="submit" name="submit" id="submit">
            </div>
        </div>
        
        <div class="collapse" id="collapseExample2" data-parent="#myGroup">
            <div class="card card-body">
                <div class="txtFim";
                <p>Poxa que pena 😕 <br>
                <br>
                     Caso os planos mudem e possa ir, por gentileza, acesar novamente o link.<br>
                     <br>
                     Obrigada</p>
                     
                    
                    <!-- <input type="button" onclick="window.close()" value="OK" id="fechaPagina"> -->



            
            </div>

            </div>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>




</body>

</html> 