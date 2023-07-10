<?php
session_start();
if(isset($_SESSION['erreur'])) {
    $erreur = $_SESSION['erreur'];
} else {
    $erreur = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include './php/includes/menu.php'; ?>
    
    <h1>Login</h1>
    <br><br>
    

    <form action="traitment.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placehoder="password">
        <br>
        <input type="submit" value="connexion">

    </form>

    <div class="erreur">
        <?php
        echo $erreur;
        ?>

    </div>























    <?php include './php/includes/footer.php'; ?>

</body>
</html>