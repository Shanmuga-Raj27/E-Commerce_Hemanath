<!DOCTYPE html>
  <title>sigup Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #89f7fe, #66a6ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 350px;
      text-align: center;
    }
    .login-box h2 {
      margin-bottom: 20px;
      color: #333;
    }
    .login-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 15px;
    }
    .login-box button {
      width: 100%;
      padding: 12px;
      background: #66a6ff;
      border: none;
      color: white;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    .login-box button:hover {
      background: #4e8fe2;
    }
    .login-box p {
      margin-top: 15px;
      font-size: 14px;
    }
    .login-box a {
      color: #66a6ff;
      text-decoration: none;
    }
    .login-box a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login From</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Enter Email" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <button type="submit" name="login">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Click to register</a></p>
  </div>
</body>
</html>