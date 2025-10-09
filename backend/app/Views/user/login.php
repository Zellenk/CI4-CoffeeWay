<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";

  // Placeholder: Authenticate against database here
  if ($email === "hhh@gmail.com" && $password === "0000") {
    echo "<script>alert('Login successful!'); window.location='/landing';</script>";
  } else {
    echo "<script>alert('Invalid credentials!');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Coffee Way</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Bitter', serif;
    }

    body {
      background: linear-gradient(to right, #f4ede3, #d8b89f);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .form-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .form-container {
      background: #f4ede3;
      border: 2px solid #cba57c;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      padding: 2rem;
      max-width: 400px;
      text-align: center;
    }

    .form-container h2 {
      margin-bottom: 1rem;
      color: #3b2f2f;
    }

    input {
      width: 100%;
      padding: 0.7rem;
      border: 1px solid #cba57c;
      border-radius: 5px;
      margin-bottom: 1rem;
    }

    button {
      background: #cba57c;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 0.7rem 1.2rem;
      cursor: pointer;
    }

    button:hover {
      background: #8b5e3c;
    }

    a {
      display: block;
      margin-top: 1rem;
      color: #3b2f2f;
      text-decoration: none;
    }

    a:hover {
      color: #8b5e3c;
    }
  </style>
</head>

<body>

  <?= view('components/header') ?>

  <section class="form-section">
    <div class="form-container">
      <h2>Login</h2>
      <form method="post" action="/login">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>

        <button type="submit" class="btn">Login</button>
      </form>

      <a href="/signup" class="extra-link">Sign up</a>
      <a href="/" class="extra-link">Back to Home</a>
    </div>
  </section>

  <?= view('components/footer') ?>

</body>

</html>
</p>
</footer>