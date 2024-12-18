<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('website/css/register.css') }}" rel="stylesheet" />
    <title>Register</title>
</head>
<body class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="form-container">
      <div class="logo-container text-center mb-4">
        <h2>Register Now!</h2>
      </div>
      <form action="{{ route('register') }}" method="POST" class="form">
        @csrf
        <div class="form-group mb-3">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required="">
        </div>
        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required="">
        </div>
        <div class="form-group mb-3">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required="">
        </div>
        <div class="form-group mb-3">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required="">
        </div>
        <p class="signup-link">
          have an account? <a href="{{ route('login')}}" class="link">Login Now</a>
        </p>
        <button class="form-submit-btn btn btn-dark w-100" type="submit">Register</button>
      </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
