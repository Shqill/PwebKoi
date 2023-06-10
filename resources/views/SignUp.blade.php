<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="widht=device-widht, initial-scale =1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/Homepage.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <script src="/js/Homepage.js"></script>
  <div class="section-1">
    <header>

      <div class="Logo">
        <img src="/images/Logo.png" />
      </div>
      <nav class="navigation">
        <a href="#home">Home</a>
        <a href="#">Blog</a>
        <a href="#about-us">About Us</a>
        <a href="#contact">Contact</a>
        @if (Auth::check())
        <a href="{{url('logout')}}" onclick="OpenForm()">Logout</a>
        @else
        <a href="#" onclick="OpenForm()">Login</a>
        @endif

      </nav>
    </header>
    <div class="bg" id="home">
      <div class="bg1">
        <h1>Grow Together</h1>
        <h2>
          Helping You to <br />
          Get Information about <br />
          Your Koi
        </h2>
        <button>Learn More!</button>
      </div>
      <div class="bg2">
        <img src="/images/koi-vector.png" />
      </div>
    </div>
  </div>
  <div class="section-2">
    <div class="article-box">
      <p>Edukasi berbasis Artikel Digital</p>
      <h2>
        Kumpulan informasi untuk membantu memilih Koi dan cara perawatannya
      </h2>
      <button>Baca Sekarang ></button>
    </div>
    <div class="category-box">
      <p>Kategori Bacaan</p>
      <div class="category-menu">
        <div class="category">
          <img src="/images/sejarah.png" />
          <a href="Sejarah.html">Sejarah</a>
        </div>
        <div class="category">
          <img id="koi" src="/images/koi.png" />
          <a href="Varietas.html">Varietas</a>
        </div>
        <div class="category">
          <img src="/images/pakan.png" />
          <a href="Pakan.html">Pakan</a>
        </div>
        <div class="category">
          <img src="/images/obat.png" />
          <a href="Obat.html">Obat</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-3" id="about-us">
    <div class="white-bar">
      <center>
        <img src="/images/Logo.png" />
        <div class="red-bar">
          <center>About Us</center>
          KoiSN adalah website edukasi yang ditujukan kepada masyarakat yang
          ingin belajar mengenai perawatan ikan koi. Dalam website ini
          terdapat ilmu-ilmu seputar cara pemilihan ikan koi untuk pemula dan
          penanganannya ketika ikan koi terserang penyakit. KoiSN menyediakan
          fitur gabung komunitas dan unggah tulisan untuk pengguna agar dapat
          saling berbagi pengalaman dalam budidaya ikan koi.
        </div>
      </center>
    </div>
    <div class="black-bar" id="contact">
      <center>
        <p id="Contact">Contact</p>
        <div class="contact-bar">
          <div class="detail-contact">
            <img src="/images/message.png" alt="" />
            <p>KoiSN@gmail.com</p>
          </div>
          <div class="detail-contact">
            <img src="/images/telpon.png" alt="" />
            <p>08586062134</p>
          </div>
        </div>
      </center>
    </div>
  </div>

  <div class="pop-up" id="pop-up">
    <label class="close-btn fas fa-times" title="close" onclick="CloseForm()"></label>
    <div class="text">Login Form</div>
    <form method="POST" action="{{url('home')}}">
      @csrf
      <div class="data">
        <label>Email </label>
        <input type="text" name="email" id="email" required />
      </div>
      <div class="data">
        <label>Password</label>
        <input type="password" name="password" id="password" required />
      </div>
      <div class="forgot-pass">
        <a href="#">Forgot Password?</a>
      </div>
      @if (session()->has('error_massage'))
      <div style="background-color: red">
        {{session()->get('error_massage')}}
      </div>
      @endif
      <div class="btn">
        <div class="inner"></div>
        <button type="submit">login</button>
      </div>
      <div class="signup-link">
        Not a member?
        <a href="#" class="signup-btn" onclick="OpenSign()">Sign Up</a>
      </div>
    </form>
  </div>
  <div class="pop-up" id="sign-up">
    <label class="close-btn fas fa-times" title="close" onclick="CloseSign()"></label>
    <div class="text">SignUp Form</div>
    <form method="POST" action="{{url('home')}}">
      @csrf
      <div class="data">
        <label>Email</label>
        <input type="text" name="email" id="email" required />
        @if ($errors->has('email'))
        <div style="background-color: red">
          {{$errors->first('email')}}
        </div>
        @endif
      </div>
      <div class="data">
        <label>Name</label>
        <input type="text" name="name" id="name" required />
        @if ($errors->has('name'))
        <div style="background-color: red">
          {{$errors->first('name')}}
        </div>
        @endif
      </div>
      <div class="data">
        <label>Password</label>
        <input type="password" name="password" id="password" required />
        @if ($errors->has('password'))
        <div style="background-color: red">
          {{$errors->first('password')}}
        </div>
        @endif
      </div>
      <div class="btn">
        <div class="inner"></div>
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </div>
</body>

</html>