<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('website/css/register.css') }}" rel="stylesheet" />
    <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="form-container">
      <div class="logo-container text-center mb-4">
        <h2>Login</h2>
      </div>
      <form action="{{ route('login') }}" method="POST" class="form">
        @csrf
        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group mb-3">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <p class="signup-link">
          Don't have an account? <a href="{{ route('register')}}" class="link">Register Now</a>
        </p>
        <button class="form-submit-btn btn btn-dark w-100" type="submit">Login</button>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
