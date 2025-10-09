<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"] ?? "";
  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";
  $confirm = $_POST["confirm-password"] ?? "";
  if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match!');</script>";
  } else {
    echo "<script>alert('Account created successfully!'); window.location='/login';</script>";
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
    @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Bitter', serif;
    }

    body {
      background: linear-gradient(to right, #f4ede3, #d8b89f);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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
      padding: 2rem;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      text-align: center;
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

    .form-container h2 {
      margin-bottom: 1rem;
      color: #3b2f2f;
    }
  </style>
</head>

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
      <a href="/login">Login</a>
      <a href="/">Back to Home</a>
    </div>
  </section>
  <?= view('components/footer') ?>
</body>

</html>