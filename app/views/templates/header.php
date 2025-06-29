<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .flip-card { position: absolute; width: 410px; perspective: 1000px; top: 50%; left: 50%; transform: translate(-50%, -50%); }
        .flip-card-inner { width: 100%; height: 100%; transition: transform 1.7s; transform-style: preserve-3d; }
        .flip-card:hover .flip-card-inner { transform: rotateY(360deg); }
        .flip-card-front, .flip-card-back { width: 100%; height: 100%; -webkit-backface-visibility: hidden; backface-visibility: hidden; }
        .link { color: black; text-decoration: none; cursor: pointer; }
        .link:hover {color: black; opacity: 50%; text-decoration: none; cursor: pointer;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <title>MVC - <?=$data['judul']; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-dark" href="<?= BASE_URL ?>/home/index">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/home/index">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL ?>/home/page">Page</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL ?>/book/index/Kamachi">Buku Saya</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
<i class="fas fa-border-style-alt"></i>
