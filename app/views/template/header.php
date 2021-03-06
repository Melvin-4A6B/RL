<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ROOT; ?>public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title><?= TITLE; ?></title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <a class="navbar-brand active" href="<?= ROOT; ?>">LR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
            <?php if(isset($_COOKIE['uid'])): ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="account" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_COOKIE['uid']['username']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="account">
                            <a class="dropdown-item" href="<?= ROOT; ?>User/manage/">Manage account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= ROOT; ?>User/logout/">Logout</a>
                        </div>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT; ?>User/login/">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT; ?>User/registration/">Registration</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container">