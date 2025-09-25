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
    * { 
        margin: 0; 
        padding: 0; 
        box-sizing: border-box; 
        font-family: Arial, sans-serif; 
    }

    body { 
        display: flex; 
        flex-direction: column; 
        min-height: 100vh; 
    }

    header {
      background: #2c3e50;
      padding: 1rem 2rem;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .nav-buttons { 
        display: flex; 
        gap: 0.5rem; 
    }

    section.moodboard {
      flex: 1;
      background: #f9f9f9;
      padding: 2rem;
    }

    section.moodboard h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: #2c3e50;
    }

    h2 { 
        margin: 1.5rem 0 1rem; 
        color: #124625; 
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
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }

    .photo-grid img:hover {
      transform: scale(1.05);
    }

    .colors { display: flex; flex-wrap: wrap; gap: 2rem; margin-bottom: 2rem; }
    .color-group { display: flex; flex-direction: column; align-items: center; }
    .color-swatch {
      width: 120px; height: 60px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
      margin-bottom: 0.5rem;
    }

    .color-label { 
        font-size: 0.9rem; 
        text-align: center; 
    }


    .typography { 
        margin-bottom: 2rem; 
    }

    .heading-sample {
      font-size: 2rem;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 0.5rem;
    }
    .body-sample {
      font-size: 1rem;
      color: #333;
      max-width: 600px;
    }

    .buttons { 
        margin-bottom: 2rem;
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
      font-family: Arial, sans-serif;
    }
    .primary { 
        background: #ffffff; 
        color: black; 
        border: 1px solid #ccc; 
    }

    .primary:hover { 
        background: #124625; 
        color: white; 
    }

    .secondary { 
        background: #2c3e50; 
        color: white; 
    }

    .secondary:hover { 
        background: #124625; 
    }

    .accent { 
        background: #2ecc71; 
        color: white; 
    }

    .accent:hover { 
        background: #124625; 
    }

    .disabled { 
        background: #ddd; 
        color: #999; 
        cursor: not-allowed; 
    }

    footer {
      background: #2c3e50;
      color: white;
      text-align: center;
      padding: 1rem;
    }

    .btn-nav {
      background: #fff;
      color: black;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      text-decoration: none;
    }
    .btn-nav:hover { background: #124625; color: white; }
    .btn1 { background: #2c3e50; color: white; }
    .btn1:hover { background: #124625; }
  </style>
</head>
<body>

  <header>
    <h2>COFFEE WAY</h2>
    <div class="nav-buttons">
      <a href="/moodboard" class="btn1 btn-nav">Moodboard</a>
      <a href="/roadmap" class="btn1 btn-nav">RoadMap</a>
      <a href="/landing" class="btn-nav">Home</a>
      <a href="/login" class="btn-nav">Login</a>
      <a href="/signup" class="btn-nav">Sign Up</a>
    </div>
  </header>

  <section class="moodboard">
    <h1>CoffeeWay Design Moodboard</h1>

    <div class="photo-grid">
      <img src="https://www.nescafe.com/ph/sites/default/files/2024-11/NESCAFE%20Sustainability%20UK%20Articles_Pillar%20Pages_Reference%20Images_Article%2024_Horizontal%20Image%20Reference_2188x1230_1.jpg" alt="Coffee cup">
      <img src="https://images.unsplash.com/photo-1510626176961-4b57d4fbad03" alt="Coffee beans">
      <img src="https://media.istockphoto.com/id/1400879519/photo/tasty-cups-of-coffee.jpg?s=612x612&w=0&k=20&c=tlr4PLHu-KbqYsDVpuGud-LVzMFZiKgfpWKEG9-bn8U=" alt="Latte art">
      <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YWVzdGhldGljJTIwY2FmZXxlbnwwfHwwfHx8MA%3D%3D" alt="Coffee shop">
    </div>

    <h2>Color System</h2>
    <div class="colors">
      <div class="color-group">
        <div class="color-swatch" style="background:#2c3e50;"></div>
        <div class="color-label">Dark Navy Gray<br>#2c3e50</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#2ecc71;"></div>
        <div class="color-label">Bright Green<br>#2ecc71</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#ffffff; border:1px solid #ccc;"></div>
        <div class="color-label">White<br>#ffffff</div>
      </div>
      <div class="color-group">
        <div class="color-swatch" style="background:#124625;"></div>
        <div class="color-label">Dark Green (hover)<br>#124625</div>
      </div>
    </div>

    <div class="typography">
      <h2>Typography</h2>
      <div class="heading-sample">Heading Example (Arial Bold)</div>
      <div class="body-sample">Get your coffee now @ CoffeeWay!</div>
    </div>

    <div class="buttons">
      <h2>Buttons</h2>
      <div class="btn-row">
        <button class="btn-sample primary">Primary (Light)</button>
        <button class="btn-sample secondary">Secondary (Dark)</button>
        <button class="btn-sample accent">Accent (Green)</button>
        <button class="btn-sample disabled">Disabled</button>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Coffee Way. All rights reserved.</p>
  </footer>

</body>
</html>
