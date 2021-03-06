<?php include 'header.php'; ?>
<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>Kayıt ol</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Yoksa hala kayıt olmadınız mı ?</p>
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
            <div class="col-lg-5 col-md-8 m-auto">
              <div class="login-page-content">
                <div class="login-form">
                  <h3>Sign Up</h3>
          <form action="kaydet.php" method="post">
            <div class="name">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" placeholder="Ad" name="ad">
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Soyad" name="soyad">
                </div>
              </div>
            </div>
            <div class="username">
              <input type="email" placeholder="Email" name="mail">
            </div>
            <div class="username">
              <input type="text" placeholder="Username" name="kadi">
            </div>
            <div class="password">
              <input type="password" placeholder="Password" name="pw">
            </div>
            <div class="log-btn">
              <button type="submit"><i class="fa fa-check-square"></i> Kayıt Ol</button>
            </div>
          </form>
                </div>

                <div class="login-other">
                  <span class="or">or</span>
                  <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
                  <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
                </div>
                <div class="create-ac">
                  <p>Have an account? <a href="login.html">Sign In</a></p>
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
