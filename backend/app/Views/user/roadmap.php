<?php
// roadmap.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roadmap - Coffee Way</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
    body { display: flex; flex-direction: column; min-height: 100vh; }

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

    .btn-nav {
      background: #fff;
      color: black;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.3s;
    }
    .btn-nav:hover { 
        background: #124625; 
        color: white; 
    }
    .btn1 { 
        background: #2c3e50; 
        color: white; 
    }

    .btn1:hover { 
        background: #124625; 
    }

    section.roadmap {
      flex: 1;
      background: #f9f9f9;
      padding: 2rem;
    }

    section.roadmap h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: #2c3e50;
    }

    .timeline {
      max-width: 800px;
      margin: 0 auto;
      position: relative;
      padding-left: 2rem;
      border-left: 3px solid #2c3e50;
    }

    .timeline-item {
      margin-bottom: 2rem;
      position: relative;
    }

    .timeline-item h3 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #2c3e50;
    }

    .timeline-item p {
      font-size: 1rem;
      color: #333;
      line-height: 1.4;
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
      <a href="/Moodboard" class="btn1 btn-nav">Moodboard</a>
      <a href="/roadmap" class="btn1 btn-nav">RoadMap</a>
      <a href="/landing" class="btn-nav">Home</a>
      <a href="/login" class="btn-nav">Login</a>
      <a href="/signup" class="btn-nav">Sign Up</a>
    </div>
  </header>

  <section class="roadmap">
    <h1>CoffeeWay Roadmap</h1>

    <div class="timeline">
      <div class="timeline-item">
        <h3>Phase 1: Idea & Research</h3>
        <p>Developing the Coffee Way concept, doing market research, and obtaining design and branding inspiration.</p>
      </div>

      <div class="timeline-item">
        <h3>Phase 2: Selecting Audience</h3>
        <p>Identifying target customers and understanding their preferences for a tailored coffee experience.</p>
      </div>

      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Coffee Way. All rights reserved.</p>
  </footer>

</body>
</html>
