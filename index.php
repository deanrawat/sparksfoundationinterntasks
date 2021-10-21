<?php
session_start();
$con = new mysqli('localhost','root','','spark_bank');
define('bankName', 'MCB Bank');
?>
<?php include 'header.php' ?>
        <!-- Title -->
        <div class="colored-section row">

          <div class="col-lg-8 col-12 offset-2">
            <h1 class="big-heading">Banking made easy, more secure, and more personal. </h1>
            <code id="transp"> 
              <a class="btn bg-transparent btn-lg symbols download-button" type="button" target="_blank" href="https://www.thesparksfoundationsingapore.org"><i class="fas fa-paper-plane"></i> Sparks Foundation</a>
            </code>
            <!--<a class="btn btn-outline-light btn-lg download-button symbols" type="button" target="_blank" href="https://www.thesparksfoundationsingapore.org"><i class="fas fa-info-circle"></i>  More Info</a> -->
          </div>
        </div>
      </div>
    </div>
    </section>


    <!-- Features -->

    <section class="white-section-1" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 feature-box" >
            <i class="icon fas fa-cloud fa-5x"></i>
            <h3 class="feature-title">Digital Banking</h3>
            <p>Banking from anywhere in the world</p>
          </div>
          <div class="col-lg-6 col-12 feature-box" >
            <i class="fas fa-meteor fa-5x"></i>
            <h3 class="feature-title">Faster Banking</h3>
            <p>Fast & Reliable Banking</p>
          </div>
        </div>
      </div>
    </section>
    <section class="white-section-2" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 feature-box">
            <i class="fas fa-key fa-5x"></i>
            <h3 class="feature-title">Secured Banking</h3>
            <p>Safe and Secure by latest Technology</p>
          </div>
          <div class="col-lg-6 col-12 feature-box">
            <i class="icon fas fa-mobile fa-5x"></i>
            <h3 class="feature-title">Hassle-Free Banking</h3>
            <p>Do more with your mobile</p>
          </div>
        </div>
      </div>
    </section>
    <section class="white-section-3" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12 feature-box">
            <i class="fas fa-balance-scale fa-5x"></i>
            <h3 class="feature-title">Personal Loan</h3>
            <p> Best loan service at lowest Interest</p>
          </div>
          <div class="col-lg-6 col-12 feature-box">
            <i class="fas fa-hands fa-5x"></i>
            <h3 class="feature-title">Life Insurance</h3>
            <p>Insurance which take care of everything</p>
          </div>
        </div>
      </div>
    </section>


  <?php include "footer.php"?>

  </body>

</html>
