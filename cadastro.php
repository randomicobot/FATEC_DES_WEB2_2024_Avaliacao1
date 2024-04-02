<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cadastro02.php" method="post">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" name="nome_completo" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>registo academico</label>
                <input type="text" name="registro_academico" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>placa carro ou moto</label>
                <input type="text" name="placa" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="cadastrar">
            </div>
        </form>
</body>
</html>
    
