

<?php 

require_once __DIR__."/config.php";  

valida_login();
if(valida_adm() == 1){

    echo "Olá, administrador " . $_SESSION['usuario']['nome'] . "<br>";

    echo "@" . $_SESSION['usuario']['usuario'];
}else{
echo "Olá, usuario" . $_SESSION['usuario']['nome'] . "<br>";

echo "@" . $_SESSION['usuario']['usuario'];
}
?>

<form action="app/controllers/userController.php?action=delete" method="POST">

<input type="submit" value="DELETAR USUARIO">

</form>

<form action="atualizar_usuario.php" method="POST">

<input type="submit" value = "ATUALIZAR USUARIO">

</form>

</form>

<form action="app/controllers/logout.php" method="POST">

<input type="submit" value="SAIR">

</form>