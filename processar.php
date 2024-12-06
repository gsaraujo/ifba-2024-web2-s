<?php

// The global $_POST variable allows you to access the data sent with the POST method by name
// To access the data sent with the GET method, you can use $_GET
//session_start();
$titulo = $_POST['titulo'];
$vulgo = $_POST['vulgo'];
$texto = htmlspecialchars($_POST['texto']);
$para = htmlspecialchars($_POST['para']);

echo $titulo . $vulgo . " disse o seguinte: " . $texto, ' ', $para;
