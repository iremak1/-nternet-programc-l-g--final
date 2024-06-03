<?php
session_start();
$loggedIn = isset($_SESSION['login']) && $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgba(0, 123, 255, 0.8);
        }
        .navbar-nav .nav-link {
            color: #333;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .university-name {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }
    </style>
</head>
<body>
<nav class="mb-1 navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
        <span class="university-name">KAYSERİ ÜNİVERSİTESİ</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i> Login</a>
            </li>
        </ul>
    </div>
</nav>
