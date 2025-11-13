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
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-image: url("https://i0.wp.com/1zpresso.coffee/wp-content/uploads/2025/06/coffee-52.png?ssl=1");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-color: rgba(255, 255, 255, 0.6);
      background-blend-mode: lighten;
    }

    section.hero {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 3rem 2rem;
      color: #3b2f2f;
    }

    section.hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: #3b2f2f;
    }

    section.hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      max-width: 600px;
      color: #5a3c2e;
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>
  <?= view('components/cta') ?>
  </section>
  <?= view('components/footer') ?>




</body>

</html>