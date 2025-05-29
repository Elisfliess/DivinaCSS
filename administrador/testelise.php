<?php
// menu.php
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Hamburguer</title>
    <link rel="stylesheet" href="../css/testelise.css">
    

</head>
<body>
    <div class="hamburguer">
        <button class="menu-btn">&#9776;</button>
        <img class="imglogo" src="../img/Logo.png" alt="Logo" class="logo">
        <nav class="nav">
            <ul>
                <li class="category"><a href="#">ADMINISTRADOR</a>
                    <ul class="submenu">
                        <li><a href="#">LISTAR</a></li>
                        <li><a href="#">CADASTRAR</a></li>
                    </ul>
                </li>
                <li class="category"><a href="#">CATEGORIA</a>
                    <ul class="submenu">
                        <li><a href="#">LISTAR</a></li>
                        <li><a href="#">CADASTRAR</a></li>
                    </ul>
                </li>
                <li class="category"><a href="#">FORNECEDOR</a>
                    <ul class="submenu">
                        <li><a href="#">LISTAR</a></li>
                        <li><a href="#">CADASTRAR</a></li>
                    </ul>
                </li>
                <li class="category"><a href="#">PRODUTO</a>
                    <ul class="submenu">
                        <li><a href="#">LISTAR</a></li>
                        <li><a href="#">CADASTRAR</a></li>

                    </ul>
                </li>
                <li class="category"><a href="#">SUBCATEGORIA</a>
                    <ul class="submenu">
                        <li><a href="#">LISTAR</a></li>
                        <li><a href="#">CADASTRAR</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const nav = document.querySelector('.nav');

        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    </script>

    <div class="container">
        <button class="image-btn"><img src="../img/b1.png" alt="Botão 1"></button>
        <button class="image-btn"><img src="../img/b2.png" alt="Botão 2"></button>
        <button class="image-btn"><img src="../img/b3.png" alt="Botão 3"></button>
        <button class="image-btn"><img src="../img/b4.png" alt="Botão 4"></button>
        <button class="image-btn"><img src="../img/b5.png" alt="Botão 5"></button>
    </div>
</body>
</html>
