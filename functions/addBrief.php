<link rel="stylesheet" href="../resources/style.css">
<?php
session_start();
if (isset($_POST['sendbref'])) {
    require_once('../db/connection.php');

    $db = new mysqli('localhost', 'root', null, 'grotnet');

    $tytul =  $_POST['tytul'];
    $brief =  $_POST['brief'];
    $userId = $_SESSION['userId'];
    $query = "INSERT INTO brief (tytul,tresc,userSend) VALUES ('".$tytul."','".$brief."','".$_SESSION['userId']."')";


    $result = $db->query($query);


}


?>
<div class="brief__wrapper login-from__wrapper">
<form action="" method="post" class="brief login-form">
    <h1>Brief</h1>
    <input type="tytul" name="tytul" class="tytul" placeholder="Tytul" id="">
    <label for="brief">Brief</label>
    <textarea id="brief" name="brief" rows="10" cols="70"> </textarea>
    <input type="submit" name="sendbref" class="send" value="Wyślij">
</form>

</div>
