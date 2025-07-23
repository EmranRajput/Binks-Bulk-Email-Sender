<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login to Dashboard</title>

  <!-- Vendor CSS -->
  <link href="{{ asset('assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/lib/typicons.font/typicons.css') }}" rel="stylesheet">

  <!-- Main CSS -->
  <link href="{{ asset('assets/css/azia.min.css') }}" rel="stylesheet">

  <style>
    .auth-wrapper {
      display: flex;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
      background-color: #f5f6fa;
    }

    .auth-card {
      display: flex;
      flex-wrap: wrap;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      max-width: 900px;
      width: 100%;
    }

    .auth-image {
      flex: 1;
      min-width: 300px;
      background: #f0f0f0;
      display: flex;
      align-items: center;
      justify-content: center;
      /* padding: 30px; */
    }

    .auth-image img {
      max-width: 100%;
      height: auto;
    }

    .auth-form {
      flex: 1;
      padding: 40px;
    }

    .auth-form h3 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .auth-form p {
      margin-bottom: 30px;
      color: #666;
    }
  </style>
</head>

<body class="az-body">

  <div class="auth-wrapper">
    <div class="auth-card">
      <!-- Left Illustration -->
      <div class="auth-image">
        <img src="{{ asset('assets/img/bulk_email.jpg') }}" alt="Login ">
        <!-- Replace with your own image -->
      </div>

      <!-- Right Login Form -->
      <div class="auth-form">
        <h2 class="text-uppercase">Binks</h2>
        <p class="text-muted mb-4">Bulk Email Sender</p>

        <h4>Please sign in to continue</h4>

        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
            @enderror
          </div>

          <div class="form-group">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="mb-0">Password</label>
                <a href="#">Forgot password?</a>
            </div>
            <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
            @enderror
            </div>


          <button type="submit" class="btn  btn-block" style="background-color: #7987a1; color:#fff">Sign In</button>
        </form>

        <div class="text-center mt-4">
  {{-- <p><a href="https://web.facebook.com/emran.rana.5076/" target="_blank">M. Imran</a></p> --}}
            <p>{{ date('Y') }} © All Rights Reserved</p>
        <div class="d-flex justify-content-center gap-3 mt-2">
            <a href="https://www.linkedin.com/in/your-profile" target="_blank" class=""  style="font-size: 50px; color:#7987a1">
            <i class="typcn typcn-social-linkedin-circular"></i>
            </a>
            <a href="https://www.instagram.com/your-profile" target="_blank" class="" style="font-size: 50px; color:#ffc107">
            <i class="typcn typcn-social-instagram-circular"></i>
            </a>
            <a href="https://web.facebook.com/emran.rana.5076/" target="_blank" class="" style="font-size: 50px; color:#0cc;">
            <i class="typcn typcn-social-facebook-circular"></i>
            </a>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/azia.js') }}"></script>
</body>

</html>
