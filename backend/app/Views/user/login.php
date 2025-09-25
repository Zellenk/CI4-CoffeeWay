<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    // 🔒 Placeholder: Authenticate against database here
    if ($email === "hhh@gmail.com" && $password === "0000") {
        echo "<script>alert('Login successful!'); window.location='landing.php';</script>";
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
      flex: 1; display: flex; 
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
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
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

  <section class="form-section">
    <div class="form-container">
      <h2>Login</h2>
      <form method="post" action="login.php">
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
      <a href="/landing" class="extra-link">Back to Home</a>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Coffee Way. All rights reserved.</p>
  </footer>

</body>
</html>
    </p>
  </footer> 