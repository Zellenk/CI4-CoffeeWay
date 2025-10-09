<?php
// moodboard.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moodboard - Coffee Way</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap');

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
      background-image: url("https://cdn2.lnk.bi/themes/66ed619db4fcd.svgz");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-color: rgba(255, 255, 255, 0.6);
      background-blend-mode: lighten;
    }


    section.moodboard {
      flex: 1;
      padding: 2rem;
    }

    section.moodboard h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: #3b2f2f;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.6);
    }

    h3 {
      margin: 1.5rem 0 1rem;
      color: #3b2f2f;
    }

    .photo-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1rem;
      margin-bottom: 3rem;
    }

    .photo-grid img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
    }

    .photo-grid img:hover {
      transform: scale(1.05);
    }

    /* Updated coffee-inspired color palette */
    .colors {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      margin-bottom: 2rem;
      justify-content: center;
    }

    .color-group {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .color-swatch {
      width: 120px;
      height: 60px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      margin-bottom: 0.5rem;
    }

    .color-label {
      font-size: 0.9rem;
      text-align: center;
      color: #3b2f2f;
    }

    .typography {
      margin-bottom: 2rem;
      color: #3b2f2f;
    }

    .heading-sample {
      font-size: 2rem;
      font-weight: bold;
      color: #3b2f2f;
      margin-bottom: 0.5rem;
    }

    .body-sample {
      font-size: 1rem;
      max-width: 600px;
      color: #3b2f2f;
    }

    .buttons {
      margin-bottom: 2rem;
      color: #3b2f2f;
    }

    .btn-row {
      display: flex;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .btn-sample {
      padding: 0.6rem 1.2rem;
      border: none;
      border-radius: 5px;
      cursor: default;
      font-size: 1rem;
    }

    .primary {
      background: #cba57c;
      color: #fff;
      border: 1px solid #b08b60;
    }

    .primary:hover {
      background: #8b5e3c;
    }

    .secondary {
      background: #3b2f2f;
      color: #fff;
    }

    .secondary:hover {
      background: #5a3c2e;
    }

    .accent {
      background: #d8b89f;
      color: #3b2f2f;
    }

    .accent:hover {
      background: #b69175;
    }

    .disabled {
      background: #e0d6d0;
      color: #8c8c8c;
      cursor: not-allowed;
    }

    footer {
      background: #3b2f2f;
      color: #f4ede3;
      text-align: center;
      padding: 1rem;
      margin-top: auto;
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>

  <section class="moodboard">
    <h1>CoffeeWay Design Moodboard</h1>

    <div class="photo-grid">
      <img src="https://www.nescafe.com/ph/sites/default/files/2024-11/NESCAFE%20Sustainability%20UK%20Articles_Pillar%20Pages_Reference%20Images_Article%2024_Horizontal%20Image%20Reference_2188x1230_1.jpg" alt="Coffee cup">
      <img src="https://images.unsplash.com/photo-1510626176961-4b57d4fbad03" alt="Coffee beans">
      <img src="https://media.istockphoto.com/id/1400879519/photo/tasty-cups-of-coffee.jpg?s=612x612&w=0&k=20&c=tlr4PLHu-KbqYsDVpuGud-LVzMFZiKgfpWKEG9-bn8U=" alt="Latte art">
      <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0" alt="Coffee shop">
    </div>

    <h3>Color System</h3>
    <div class="colors">
      <div class="color-group">
        <div class="color-swatch" style="background:#3b2f2f;"></div>
        <div class="color-label">Espresso Brown<br>#3b2f2f</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#cba57c;"></div>
        <div class="color-label">Latte Beige<br>#cba57c</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#f4ede3;"></div>
        <div class="color-label">Cream White<br>#f4ede3</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#8b5e3c;"></div>
        <div class="color-label">Mocha Brown<br>#8b5e3c</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#d8b89f;"></div>
        <div class="color-label">Caramel Accent<br>#d8b89f</div>
      </div>
    </div>

    <div class="typography">
      <h3>Typography</h3>
      <div class="heading-sample">Heading Example (Bitter Bold)</div>
      <div class="body-sample">Get your coffee now @ CoffeeWay! (Bitter Regular)</div>
    </div>

    <div class="buttons">
      <h3>Buttons</h3>
      <div class="btn-row">
        <button class="btn-sample primary">Primary</button>
        <button class="btn-sample secondary">Secondary</button>
        <button class="btn-sample accent">Accent</button>
        <button class="btn-sample disabled">Disabled</button>
      </div>
    </div>
  </section>

  <?= view('components/footer') ?>

</body>

</html>