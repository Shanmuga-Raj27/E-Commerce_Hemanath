<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .register-box {
      background: pink;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      width: 350px;
    }
    .register-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .register-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
      
    }
    .register-box button {
      width: 100%;
      padding: 12px;
      background: #28a745;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
    }
    .register-box button:hover {
      background: #218838;
    }
    .register-box p {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }
    .register-box a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2>Register form</h2>
    <form>
      <input type="text" placeholder="User Name" required>
      <input type="email" placeholder="Email Id" required>
      <input type="password" placeholder="Password" required>
      <input type="password" placeholder="Confirm Password" required>
      <button type="submit">Register <a href="login.php"></a></button>
     
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
    
  </div>
</body>
</html>