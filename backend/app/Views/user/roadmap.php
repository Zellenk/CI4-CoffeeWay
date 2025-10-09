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
      padding: 3rem 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* Light bordered box behind texts */
    .roadmap-content {
      background: rgba(255, 255, 255, 0.7);
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 12px;
      padding: 2rem;
      max-width: 900px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(4px);
    }

    section.roadmap h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: #3b2f2f;
      text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.6);
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
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .timeline-item.visible {
      opacity: 1;
      transform: translateY(0);
      animation: bounceIn 0.8s ease;
    }

    .timeline-item h3 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #2c3e50;
      background: rgba(255, 255, 255, 0.6);
      display: inline-block;
      padding: 0.3rem 1rem;
      border-radius: 8px;
    }

    .timeline-item p {
      font-size: 1rem;
      color: #333;
      line-height: 1.4;
      background: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      padding: 1rem;
      margin-top: 0.5rem;
    }

    @keyframes bounceIn {
      0% {
        transform: translateY(60px);
        opacity: 0;
      }

      60% {
        transform: translateY(-10px);
        opacity: 1;
      }

      80% {
        transform: translateY(6px);
      }

      100% {
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>

  <section class="roadmap">
    <h1>CoffeeWay Roadmap</h1>

    <<<<<<< HEAD
      <div class="roadmap-content">
      <div class="timeline">
        <div class="timeline-item">
          <h3>Phase 1: Idea & Research</h3>
          <p>Developing the Coffee Way concept, doing market research, and obtaining design and branding inspiration.</p>
        </div>

        <div class="timeline-item">
          <h3>Phase 2: Selecting Audience</h3>
          <p>Identifying target customers and understanding their preferences for a tailored coffee experience.</p>
        </div>

        <div class="timeline-item">
          <h3>Phase 3: Design & Mockups</h3>
          <p>Creating consistent visuals, logos, and layout mockups for the Coffee Way website, shop and brand identity.</p>
        </div>

        <div class="timeline-item">
          <h3>Phase 4: Development</h3>
          <p>Implementing components into modular PHP files and ensuring responsive layout across all devices.</p>
        </div>

        <div class="timeline-item">
          <h3>Phase 5: Testing & Launch</h3>
          <p>Debugging, optimizing performance, and preparing Coffee Way for official release.</p>
        </div>
        =======
        <div class="timeline">
          <div class="timeline-item">
            <h3>Phase 1: Idea & Research</h3>
            <p>Developing the Coffee Way concept, doing market research, and obtaining design and branding inspiration.</p>
            >>>>>>> 4e1ea82c94624004d1cb25f60153db33e0e1bc47
          </div>

          <div class="timeline-item">
            <h3>Phase 2: Selecting Audience</h3>
            <p>Identifying target customers and understanding their preferences for a great coffee experience.</p>
          </div>

        </div>
      </div>
  </section>

  <?= view('components/footer') ?>

  <script>
    // Reveal and bounce timeline items on scroll
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.2
    });

    document.querySelectorAll('.timeline-item').forEach(item => observer.observe(item));
  </script>

</body>

</html>