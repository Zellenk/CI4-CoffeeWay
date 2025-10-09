<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"] ?? "";
  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";
  $confirmPassword = $_POST["confirm-password"] ?? "";

  if ($password !== $confirmPassword) {
    echo "<script>alert('Passwords do not match!');</script>";
  } else {
    // database insertion logic here uwu
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
      text-align: center;
    }

    .form-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to right, #797979ff, #2ecc71);
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
      transition: background 0.3s;
    }

    .btn:hover {
      background: #bb0000ff;
    }

    .extra-link {
      margin-top: 1rem;
      display: block;
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
  </header>

<body>
  <?= view('components/header') ?>
  <section class="form-section">
    <div class="form-container">
      <h2>Sign Up</h2>
      <form method="post" action="signup.php">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm-password" placeholder="Confirm Password" required>
        <button type="submit">Sign Up</button>
      </form>

      <a href="/login" class="extra-link">Login</a>
      <a href="/" class="extra-link">back to Home</a>
    </div>
  </section>
  <?= view('components/footer') ?>
</body>

</html>
</p>
</footer>
