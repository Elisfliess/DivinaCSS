
<?php
session_start(); // Iniciar a sessão

if (!isset($_SESSION['admin_logado'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="../css/painel.css">
</head>
<body>
   
    <a href="listar_administrador.php">
    <button class="image-btn"><img src="../img/b1.png" alt="Botão 1"></button>
    </a>
    <a href="listar_categorias.php">
    <button class="image-btn"><img src="../img/b2.png" alt="Botão 2"></button>
    </a>
    <a href="listar_fornecedores.php">
    <button class="image-btn"><img src="../img/b3.png" alt="Botão 3"></button>
    </a>
    <a href="listar_produtos.php">
    <button class="image-btn"><img src="../img/b4.png" alt="Botão 4"></button>
    </a>
    <a href="listar_subcategorias.php">
    <button class="image-btn"><img src="../img/b5.png" alt="Botão 5"></button>
    </a>
<br><br>
    <a href="../E-commerce/index.html">
        <button>Logout</button>
    </a>



</body>
</html>