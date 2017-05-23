<?php
// セッションの開始
session_start();
mb_internal_encoding('UTF-8');
header("Content-type: text/html; charset=UTF-8");

$shi = htmlspecialchars(substr_replace(" ", "", $_POST["shi"]), ENT_QUOTES, "UTF-8");
$mei = htmlspecialchars($_POST["mei"], ENT_QUOTES, "UTF-8");
$add = htmlspecialchars($_POST["add"], ENT_QUOTES, "UTF-8");
$tel = htmlspecialchars($_POST["tel"], ENT_QUOTES, "UTF-8");
$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
$qa = htmlspecialchars($_POST["qa"], ENT_QUOTES, "UTF-8");
$example = htmlspecialchars($_POST["example"], ENT_QUOTES, "UTF-8");

$_SESSION["shi"] = $shi;
$_SESSION["mei"] = $mei;
$_SESSION["add"] = $add;
$_SESSION["tel"] = $tel;
$_SESSION["mail"] = $mail;
$_SESSION["qa"] = $qa;
$_SESSION["example"] = $example;
    ?>
