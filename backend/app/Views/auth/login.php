<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Coffee Way</title>
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
      background-image: url("https://i.pinimg.com/1200x/1b/88/4f/1b884feae073713f3b52b6649f53eeeb.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      background-color: rgba(255, 255, 255, 0.7);
      background-blend-mode: lighten;
    }

    .form-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .form-container {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      text-align: center;
      animation: fadeInUp 0.8s ease-out;
    }

    .form-container h2 {
      margin-bottom: 1.5rem;
      color: #2c3e50;
    }

    .form-group {
      margin-bottom: 1rem;
      text-align: left;
    }

    .form-group input {
      width: 100%;
      padding: 0.7rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .error-message {
      background: #ffdddd;
      color: #b20000;
      padding: 0.5rem;
      margin-bottom: 0.6rem;
      font-size: .85rem;
      border-radius: 5px;
    }

    .btn {
      background: #2c3e50;
      color: white;
      padding: 0.7rem 1.5rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 1rem;
      transition: background 0.3s, transform 0.2s;
      width: 100%;
    }

    .btn:hover {
      background: #bb0000ff;
      transform: scale(1.03);
    }

    .extra-link {
      margin-top: 1rem;
      display: block;
      text-decoration: none;
      color: #2c3e50;
      font-weight: 500;
      transition: color 0.2s;
    }

    .extra-link:hover {
      color: #bb0000ff;
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>

  <section class="form-section">
    <div class="form-container">
      <h2>LOG IN</h2>

      <?php if (session()->getFlashdata('errors')) : ?>
        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
          <div class="error-message"><?= esc($error) ?></div>
        <?php endforeach; ?>
      <?php endif; ?>

      <form action="/login" method="POST">
        <div class="form-group">
          <input type="email" name="email" placeholder="Email"
            value="<?= esc(session()->getFlashdata('old')['email'] ?? '') ?>" required>
        </div>

        <div class="form-group">
          <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn">Sign In</button>
      </form>

      <a href="/signup" class="extra-link">Don't have an account? Sign Up</a>
      <a href="/" class="extra-link">Back to Home</a>
    </div>
  </section>

  <?= view('components/footer') ?>

</body>

</html>