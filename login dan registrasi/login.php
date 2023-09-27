<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membuat Form Login</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">El'sCraft<span>Siantar.</span></div>
        <div class="title signup">El'sCraft<span>Siantar.</span></div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Masuk</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>

        <div class="form-inner">
          <form action="login_to_home.php" class="login">
            <pre></pre>
            <div class="field">
              <input type="text" id="email" name="email" placeholder="Masukan Email " required />
            </div>
            <div class="field">
              <input type="password" id="password" name="password" placeholder="Masukan Password" required />
            </div>
            <div class="pass-link"><a href="#">Lupa password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Masuk" name="login" />
            </div>
            <div class="signup-link">
              Belum mempunyai akun? <a href="">Daftar</a>
            </div>
          </form>

          <form action="SignUp_connect.php" class="signup" method="POST" id="registration">
            <div class="field">
              <input
                type="text"
                id="username"
                name="username"
                placeholder="Masukan Nama"
                required
              />
            </div>
            <div class="field">
              <input
                type="text"
                id="email"
                name="email"
                placeholder="Masukan Email"
                required
              />
            </div>
            <div class="field">
              <input
                type="password"
                id="pw"
                name="password"
                placeholder="Masukan Password"
                required
              />
            </div>
            <div class="field">
              <input
                type="password"
                id="Cpw"
                name="Cpw"
                placeholder="Ulangi password"
                required
              />
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Daftar" name="submit" />
            </div>
            <div class="signup-link">
              Sudah punya akun? <a href="">Masuk</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="./script.js"></script>
  </body>
</html>
