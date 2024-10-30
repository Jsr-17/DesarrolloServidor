<?PHP


if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user=(string)$_POST['user'];
    $pass=(string)$_POST['pass'];
}


echo(
'
 <form action='.$_SERVER["PHP_SELF"].' method="POST">

<input type="text" name="user">
<input type="password" name="pass">
<input type="submit">

</form>
'
);


if ($user=="jose" && $pass== "1234") {
    header("Location: http://localhost/DesarrolloServidor/Tema_1/funciones/login/ok.php");
}else {
    header("Location: http://localhost/DesarrolloServidor/Tema_1/funciones/login/ko.php?user=". $user."&pass=".$pass);
}

