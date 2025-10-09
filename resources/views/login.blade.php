<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - CompetiGo</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #FFDDB6, #F7A5A5);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background: #FFF2EF;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 380px;
      padding: 40px;
      text-align: center;
      animation: fadeInUp 0.8s ease;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #5D688A;
      margin-bottom: 10px;
    }

    .subtitle {
      color: #5D688A;
      font-weight: 500;
      margin-bottom: 30px;
      font-size: 0.95rem;
    }

    .input-group {
      text-align: left;
      margin-bottom: 20px;
      position: relative;
    }

    .input-group label {
      display: block;
      font-size: 0.9rem;
      color: #5D688A;
      margin-bottom: 5px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: 2px solid transparent;
      border-radius: 12px;
      background: #fff;
      transition: all 0.3s ease;
      color: #5D688A;
      font-size: 0.95rem;
    }

    .input-group input:focus {
      border-color: #F7A5A5;
      outline: none;
      box-shadow: 0 0 10px rgba(247,165,165,0.3);
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 12px;
      background: #5D688A;
      color: #fff;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-login:hover {
      background: #F7A5A5;
      transform: translateY(-2px);
    }

    .extra {
      margin-top: 20px;
      font-size: 0.9rem;
      color: #5D688A;
    }

    .extra a {
      color: #F7A5A5;
      text-decoration: none;
      font-weight: 600;
    }

    .extra a:hover {
      text-decoration: underline;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsif */
    @media (max-width: 480px) {
      .login-container {
        width: 85%;
        padding: 30px 25px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo">CompetiGo</div>
    <div class="subtitle">Masuk untuk mulai berkompetisi!</div>
@if (session('error'))
  <div style="
      background: #F7A5A5;
      color: white;
      padding: 10px 15px;
      border-radius: 10px;
      margin-bottom: 20px;
      animation: fadeInUp 0.5s ease;">
    {{ session('error') }}
  </div>
@endif

@if ($errors->any())
  <div style="
      background: #FFDDB6;
      color: #5D688A;
      padding: 10px 15px;
      border-radius: 10px;
      margin-bottom: 20px;
      animation: fadeInUp 0.5s ease;">
    <ul style="margin: 0; padding-left: 20px; text-align: left;">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

    <form action="/login" method="POST">
      @csrf
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email kamu" required>
      </div>

      <div class="input-group">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
      </div>

      <button type="submit" class="btn-login">Masuk</button>
    </form>

    <div class="extra">
      Belum punya akun? <a href="/register">Daftar Sekarang</a>
    </div>
  </div>

</body>
</html>
