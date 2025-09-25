<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COFFEE WAY</title>
  <style>
    * { 
      
      margin: 0; 
      padding: 0; 
      box-sizing: 
      border-box; 
      font-family: Arial, sans-serif; 
        }

    body { 
      display: flex; 
      flex-direction: 
      column; min-height: 100vh; 
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

    section.hero {
      flex: 1; display: flex; 
      flex-direction: column; 
      justify-content: center; 
      align-items: center;
      text-align: center; 
      padding: 2rem; 
      background: linear-gradient(to right, #ffffffff, #2ecc71);
    }

    section.hero h1 { 
      font-size: 3rem; 
      margin-bottom: 1rem; 
    }

    section.hero p { 
      font-size: 1.2rem; 
      margin-bottom: 2rem; 
      max-width: 600px; 
    }

    .btn {
      background: #fff; 
      color: black; 
      padding: 0.5rem 1rem; 
      border: none; 
      border-radius: 5px;
      font-size: 1rem; 
      cursor: pointer; 
      transition: background 0.3s; 
      text-decoration: none;
      display: inline-block;
    }

    .btn1 {
      background: #2c3e50; 
      color: white; 
      padding: 0.5rem 1rem; 
      border: none; 
      border-radius: 5px;
      font-size: 1rem; 
      cursor: pointer; 
      transition: background 0.3s; 
      text-decoration: none;
      display: inline-block;
    }

    .btn:hover { 
      background: #124625ff; 
      color: white; 
    }

    footer { 
      background: #2c3e50; 
      color: white; 
      text-align: center; 
      padding: 1rem; 
    }

  </style>
</head>
<body>

  <header>
    <h2>COFFEE WAY</h2>
    <div class="nav-buttons">
      <a href="/moodboard" class="btn1">Moodboard</a>
      <a href="/roadmap" class="btn1">RoadMap</a>
      <a href="/" class="btn">Home</a>
      <a href="/login" class="btn">Login</a>
      <a href="/signup" class="btn">Sign Up</a>

    </div>
  </header>

  <section class="hero">
    <h1>Welcome to Coffee Way!</h1>
    <p>We provide the best coffee in town for your kayod needs!</p>
    <a href="/shop" class="btn">Go to Shop</a>
  </section>

  <footer>
    <p>&copy; 2025 Coffee Way. All rights reserved.</p>
  </footer>

</body>
</html>
