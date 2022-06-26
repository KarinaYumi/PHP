<html lang="pt-br">
<head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ntegrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="../assets/css/styles.css">
            <title>Login</title>
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
                    background-color: #E55947;
                    background-image: linear-gradient(90deg, #E55947 0%, #E55947 50%);
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
            </style>
        </head>

    <body>
        <div class="title-container">
            <h1>Login</h1>
        </div>

        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Faça Login</h5>
                    
            <form method="POST" action="valida-acesso.php">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="txtLogin" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" name="txtSenha" required>
                </div>
                <button type="submit" class="btn btn-primary" id="btnEnviar">Acessar</button>
            </form>
            </div>
        </div>


        <footer class="footer section bd-container">
                <div class="footer__container bd-grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">Electronics Store</a>
                        <span class="footer__description">E-commerce</span>
                        <div>
                            <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                            <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                            <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Informações</h3>
                        <ul>
                            <li><a href="#" class="footer__link">Razão Social</a></li>
                            <li><a href="#" class="footer__link">Politica de Privacidade</a></li>
                            <li><a href="#" class="footer__link">Termos de Serviço</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Endereço</h3>
                        <ul>
                            <li>São Paulo - Brasil</li>
                            <li>Av. Oceano Atlântico, 123</li>
                            <li>178 - 190 -431</li>
                            <li>eletronicsstore@email.com</li>
                        </ul>
                    </div>
                </div>

                <p class="footer__copy">&#169; 2022, Lorena Araujo Almeida | Karina Yumi Ferreira Pinto. Todos os direitos reservados!</p>
            </footer>
    </body>
</html>