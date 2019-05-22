<?php include 'header.php'; ?>
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Giriş Yap !</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Giriş yaparak E-vale Hizmetimizden yararlanabilirsiniz.</p>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Login Page Content Start ==-->
<section id="lgoin-page-wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 m-auto">
              <div class="login-page-content">
                <div class="login-form">
                  <h3>Tekrar Hoşgeldiniz!</h3>
          <form action="giris.php" method="post">
            <div class="username">
              <input type="text" placeholder="Email or Username" name="kadi">
            </div>
            <div class="password">
              <input type="password" placeholder="Password" name="pw">
            </div>
            <div class="log-btn">
              <button type="submit"><i class="fa fa-sign-in"></i>Giriş Yap</button>
            </div>
          </form>
                </div>

                <div class="login-other">
                  <span class="or">or</span>
                  <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
                  <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                </div>
                <div class="create-ac">
                  <p>Don't have an account? <a href="register.html">Sign Up</a></p>
                </div>
                <div class="login-menu">
                  <a href="about.html">About</a>
                  <span>|</span>
                  <a href="contact.html">Contact</a>
                </div>
              </div>
            </div>
      </div>
    </div>
</section>
<!--== Login Page Content End ==-->
<?php include 'footer.php'; ?>
