<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"] ?? "";
  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";
  $confirmPassword = $_POST["confirm-password"] ?? "";

  if ($password !== $confirmPassword) {
    echo "<script>alert('Passwords do not match!');</script>";
  } else {
    // Placeholder for database logic
    echo "<script>alert('Account created successfully! You can now log in.'); window.location='login.php';</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Coffee Way</title>
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

    header {
      background: #2c3e50;
      padding: 1rem 2rem;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
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

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 0.7rem;
      border: 1px solid #ccc;
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
    }

    .btn:hover {
      background: #bb0000ff;
      transform: scale(1.05);
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

    footer {
      background: #2c3e50;
      color: white;
      text-align: center;
      padding: 1rem;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>

  <section class="form-section">
    <div class="form-container">
      <h2>SIGN UP</h2>
      <form method="post" action="signup.php">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" id="confirm-password" name="confirm-password" required>
        </div>

        <button type="submit" class="btn">Sign Up</button>
      </form>

      <a href="/login" class="extra-link">Already have an account? Login</a>
      <a href="/" class="extra-link">Back to Home</a>
    </div>
  </section>

  <?= view('components/footer') ?>

</body>

</html>