<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('login/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<style>
    .login {
    min-height: 100vh;
    }

    .bg-image {
    background-color: #41A0E4;
    background-size: cover;
    background-position: center;
    }

    .login-heading {
    font-weight: 250;
    }
    .login-head {
    font-weight: 150;
    }

    .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
    }
</style>
<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-8 col-lg-6 bg-image">
            <div class="login d-flex align-items-center py-5">
                <div class="text-center">
                    <h3 class="login-heading mb-4">VASCOM</h3>
                    <h6 class="login-head mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h6>
                  </div>
              </div>
          </div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Selamat Datang Admin</h3>
                    <h6 class="login-head mb-4">Silahkan masukkan email atau nomor telepon dan password Anda untuk mulai menggunakan aplikasi</h6>
                    <form method="POST" action="{{ route('login.action') }}">
                        @csrf
                    <label class="login-head" for="floatingInput">Email / No telepon</label>
                      <div class="form mb-3">
                        <input type="email" name="email" class="form-control login-head" id="floatingInput" placeholder="Contoh: admin@gmail.com">
                      </div>
                      <label class="login-head" for="floatingPassword">Password</label>
                      <div class="form mb-3">
                        <input type="password" name="password" class="form-control login-head" id="floatingPassword" placeholder="Masukan Password">
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" style=" background-color: #41A0E4;" type="submit">Masuk</button>
                      </div>
      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>