<?php
session_start();

$_SESSION['erreur']='';
$_SESSION['login']='';
$_SESSION['role']='';

require_once './php/crud/protection.php';

$erreur = '';


if(!empty($_POST['login'])){
    $login = $_POST['login'];

} else {
    $_SESSION['erreur'] ="champ login vide";
    header('location: ./login.php');
    exit();
}


if(!empty($_POST['password'])){
    $password = $_POST['password'];

} else {
    $_SESSION['erreur'] ="champ password vide";
    header('location: ./login.php');
    exit();
}

require_once "./php/crud/config.php";

$login_ok = protect_montexte($login);
$password_ok = protect_montexte($password);


$sql = "select * from users";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            if(($login_ok == $row['login']) && ($password_ok == $row['mdp'])){
                $_SESSION['login']="yes";
                $_SESSION['role']=$row['role'];
                $valide = "ok";
                header('location: ./index.php');
            }
        }
        if($valide != "ok"){
            $_SESSION['erreur']= "login ou mot de pass incorrect !!!";
            header('location: ./login.php');
            exit();
        }
    }
}
// var_dump($_SESSION['erreur']); die;




















































?>