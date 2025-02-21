<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #f0f2f5;
      gap: 2rem;
      padding: 1rem;
    }

    .form-container {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-title {
      font-size: 1.5rem;
      color: #1a1a1a;
      margin-bottom: 0.5rem;
    }

    .form-subtitle {
      color: #65676b;
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #1a1a1a;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 1rem;
    }

    .form-group input:focus {
      outline: none;
      border-color: #1877f2;
      box-shadow: 0 0 0 2px rgba(24, 119, 242, 0.2);
    }

    .submit-button {
      width: 100%;
      padding: 0.75rem;
      background: #1877f2;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      margin-top: 1rem;
    }

    .submit-button:hover {
      background: #166fe5;
    }

    .form-footer {
      margin-top: 1rem;
      text-align: center;
      color: #65676b;
    }

    .form-footer a {
      color: #1877f2;
      text-decoration: none;
      font-weight: 500;
    }

    .form-footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Login Form -->
  <div class="form-container">
    <h2 class="form-title">Login</h2>
    <p class="form-subtitle">Welcome back! Please login to your account</p>
    
    <form>
      <div class="form-group">
        <label for="login-email">Email</label>
        <input type="email" id="login-email" required placeholder="Enter your email">
      </div>
      
      <div class="form-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" required placeholder="Enter your password">
      </div>
      
      <button type="submit" class="submit-button">Login</button>
      
      <div class="form-footer">
        Don't have an account? <a href="/">Register</a>
      </div>
    </form>
  </div>

  