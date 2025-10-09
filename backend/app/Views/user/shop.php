<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE WAY </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bitter', serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-image: url("https://i.pinimg.com/1200x/1b/88/4f/1b884feae073713f3b52b6649f53eeeb.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.6);
            background-blend-mode: lighten;
        }

        section.hero {
            flex: 1;
            padding: 2rem;
            text-align: center;
            color: #3b2f2f;
        }

        .divider {
            width: 80%;
            height: 2px;
            background: #cba57c;
            margin: 2rem auto;
            border-radius: 3px;
        }
    </style>
</head>

<body>

    <?= view('components/header') ?>

    <?= view('components/cards/cards') ?>
    <?= view('components/cards/cards2') ?>

    <!-- Divider between cards and footer -->
    <div class="divider"></div>

    <?= view('components/footer') ?>

</body>

</html>