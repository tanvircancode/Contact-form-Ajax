<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <!-- Boxicon CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Tittle -->
    <title>Jax Form</title>
</head>

<body>

<div class="contact-area ptb-70">
    <div class="container">
      <div class="row align-items-center pb-100">


      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="contact-form">

            <h2>Contact form using Ajax</h2>

            <form id="contact-form" action="mail.php" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" required placeholder="Full Name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" required
                      placeholder="Email Address">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="number" name="phone_number" class="form-control" id="phone_number" required
                      placeholder="Mobile no">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject"
                      required>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                      placeholder="Message..."></textarea>
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                  <button type="submit" name="submit" class="box-btn">Send Message <i class="ri-arrow-right-line"></i></button>
                </div>

              </div>
            </form>
            <p class="ajax-response"></p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script src="assets/ajax-mail.js"></script>
  </body>

</html>