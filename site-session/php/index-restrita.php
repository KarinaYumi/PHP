<?php

session_start();
include_once("valida-permanencia.php");

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ntegrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/styles.css">
    </head>

    <style>
                h1 {
                    text-align: center;
                    margin-top: 5px;
                    color: #fff;
                }

                .title-container {
                    padding: 10px;
                    width: 100%;
                    height: 100px;
                    background-color: none;
                    margin-top: 0;
                    margin-bottom: 35px;
                }

                .title-container p {
                    text-align: center;
                    color: black;
                    margin-bottom: 5px;
                }

                h5 {
                    text-align: center;
                }

                button{
                    background-color: #fff;
                    cursor: pointer;
                }

            </style>

    <body>
        <header class="l-header" name="header">
                <nav class="nav bd-container">
                    <a href="../index.php" class="nav__logo">Electronics store</a> 

                    <div class="nav__menu" name="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="logout.php" class="nav__link active-link">Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

        <div class="title-container">
            <h1></h1>
        </div>

        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Produtos</h5>
                    
            <form method="POST" action="valida-acesso.php">
                <div class="mb-3">
                    <label class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" name="txtNome" minlength="3" maxlength="50" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Preço</label>
                    <input type="number" class="form-control" name="txtPreco" placeholder="R$00.000,00" min="1" required>
                </div>

                <div class="mb-3">
                            <label class="form-label data-form">Descrição</label>
                            <textarea type="text" class="form-control" name="txtDescricao" rows="3" minlength="10" maxlength="300" required></textarea>
                </div>

                <div class="col-12 col-md-8">
                            <label class="form-label data-form">Imagem</label>
                            <input type="file" class="form-control" accept="image/*">
                </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btnEnviar">Cadastrar</button>
            </form>
           
            </div>
        </div>
</html>