<?php

echo "<br>" . $_POST['nome'];

print_r($_POST);
 
$pdo = new PDO('mysql:host=localhost;dbname=bdcarlos', 'root', '');

$sql = $pdo ->prepare("INSERT INTO 'carlos' VALUES (null,?,?,?,?,?,?,?,?,?,?)");

$sql-> execute(array($_POST['nome'],
                    $_POST['endereço'],
                    $_POST['cidade'],
                    $_POST['estado'],
                    $_POST['datasc'],
                    $_POST['num'],
                    $_POST['sex'],
                    $_POST['cpf'],
                    $_POST['rg'],
));















?>