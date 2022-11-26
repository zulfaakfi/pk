<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <!-- Ketik code Anda dibawah -->
    <div class="header">
      <div class="header-logo">Progate</div>
      <div class="header-list">
        <ul>
          <li>Tentang</li>
          <li>Pelajaran</li>
          <li><a href="view.php">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>

    <div class="main">
      <div class="copy-container">
        <h1>HELLO WORLD<span>.</span></h1>
        <h2>Ayo belajar coding</h2>
      </div>
      
      <div class="contents">
        <h3 class="section-title">Pelajaran</h3>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
          <p>HTML & CSS</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
          <p>PHP</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
          <p>Ruby</p>
        </div>
        <div class="contents-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
          <p>Swift</p>
        </div>
      </div>
      <div class="contact-form">
        <h3 class="section-title">Hubungi Kami</h3>
        <p>Email (Wajib diisi)</p>
        <form action="welcome.php" method="post">
          First Name: <input type="text" name="firstname"><br>
          Last Name: <input type="text" name="lastname"><br>
          E-mail: <input type="text" name="email"><br>
          <input type="submit">
        </form>
      </div>
    </div>
    <div class="footer">
      <div class="footer-logo">Progate</div>
      <div class="footer-list">
        <ul>
          <li>Tentang</li>
          <li>Karier</li>
          <li>Hubungi Kami</li>
        </ul>
      </div>
    </div>
  </body>
</html>