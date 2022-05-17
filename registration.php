<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Registration Form</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="styles.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- Symbols -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="arrow-left-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
    </symbol>

    <symbol id="arrow-right-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </symbol>
  </svg>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
      <img src="images/train2.jpg" class="d-block w-100" alt="Loading...">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Choose your destiny.</h1>
            <p>collect <strong>MOMENTS</strong> , not <strong>things</strong></p>
            <p><a class="btn btn-lg btn-primary" href="#registration">Book Now</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
      <img src="images/train1.jpg" class="d-block w-100" alt="Loading...">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <form action="userLogin.php" method="POST">
          <div class="container">
            <div class="carousel-caption">
              <h1>The places you'll go.</h1>
              <p>I'm thankful for this world, so I travel.</p>
              <p><a class="btn btn-lg btn-primary" href="userLogin.php">Generate Ticket</a></p>
            </div>
          </div>
        </form>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
      <img src="images/train3.jpg" class="d-block w-100" alt="Loading...">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
            <div class="carousel-caption text-end">
              <h1>Be a part of our community.</h1>
              <p>Responsibility is accepting that you are the cause and the solution of the matter.</p>
              <p><a class="btn btn-lg btn-primary" href="adminLogin.php">Join Us</a></p>
            </div>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/logo.jpeg" alt="" width="450" height="150">
        <h2>Registration Portal</h2>
        <p class="lead">To array a man's will against his sickness is the supreme art of medicine.</p>
      </div>
      <div class="row g-5">
        <div class="col-md-7 col-lg-8" id="registration">
          <!-- <h4 class="mb-3">Doctor Details</h4> -->
          <form action="User/sendCompData.php" method="POST" id="registrationForm">
          <div class="col-sm-6">
                <label for="firstName" class="form-label">Dr.</label>
                <input type="text" class="form-control" name="drName"id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <hr class="my-4">
          <h4 class="mb-3">Patient Details</h4>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" name="first_name"id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" name="last_name"id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Date of birth</label>
                <input type="date" class="form-control" autocomplete="false" placeholder="Choose DOB" onchange="calculate_age(this)">
                <div class="invalid-feedback">
                  Valid DOB is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" placeholder="" value="">
                <div class="invalid-feedback">
                  Valid age is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="gender" class="form-label">Gender</label>
                  <select name="gender" class="form-control">
                    <option value="none" selected>--select gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
                  </select>
              </div>
              
              <div class="col-sm-6">
                <label for="firstName" class="form-label">Contact No.</label>
                <input type="text" class="form-control" name="contact"id="Phone" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">Aadhar card</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" name="aadhar"id="username" placeholder="xxxx xxxx xxxx" required>
                  <div class="invalid-feedback">
                    Your username is required.
                  </div>
                </div>
              </div>

              <!-- <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div> -->

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address"id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="pincode"id="zip" placeholder="" required onchange="getAddress(this)">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">City</label>
                <input type="text" class="form-control" name="city"id="city" placeholder="">
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">State</label>
                <input type="text" class="form-control" name="state" id="state" placeholder="">
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>

            </div>
            </form>
            <!-- <hr class="my-4"> -->

            <!-- <div class="d-flex gap-5 justify-content-center" id="dropdownFilter"> -->

              <!-- Hidden just for design -->
              <!-- <div hidden class="dropdown-menu pt-0 mx-0 rounded-3 shadow overflow-hidden" style="width: 280px;">
                <form class="p-2 mb-2 bg-light border-bottom">
                </form>
              </div> -->

              <!-- <form action="searchTrain.php" method="POST" target="frame">
                <div class="d-flex gap-5 justify-content-center">
                  <p class="p-2 mb-2 bg-light border">
                    <input type="text" name="user_from" id="user_from" class="form-control" autocomplete="false" placeholder="From">
                  </p>
                  <i class="fa-solid fa-arrow-right-arrow-left fa-2x center" style="color:#6c757d;"></i>
                  <p class="p-2 mb-2 bg-light border">
                    <input type="text" name="user_to" class="form-control" autocomplete="false" placeholder="To">
                  </p>
                </div>
                <div class="d-flex gap-5">
                  <p class="p-2 mb-2 bg-light border">
                    <input type="date" name="user_date" class="form-control" autocomplete="false" placeholder="Choose date">
                  </p>
                </div>
                <div class="d-flex gap-5 justify-content-center">
                  <button name="getTrainButton" class="btn btn-primary" id="getTrain">Search</button>
                </div>
              </form> -->
            <!-- </div> -->

            <hr class="my-4">

            <!-- <div class="d-flex gap-5 justify-content-center">

<iframe width="1450" height="0" frameborder="0" name="frame" id="frame"></iframe>

            </div> -->

            <!-- <hr class="my-4">

            <h4 class="mb-3">Payment</h4> -->

            <!-- <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Credit card</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">Debit card</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div> -->

            <!-- <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div> -->

              <!-- <div class="col-md-6">
                <label for="cc-number" class="form-label">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div> -->

              <!-- <div class="col-md-3">
                <label for="cc-expiration" class="form-label">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div> -->

              <!-- <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div> -->

            <!-- <hr class="my-4"> -->

            <button class="w-100 btn btn-primary btn-lg" name="SubmitButton" id="confirmBooking" form="registrationForm">Submit</button>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2020–2022 DOPA70-1</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>

  <!-- Modal -->
  <!-- <div class="modal fade" id="addTrainModal" tabindex="-1" role="dialog" aria-labelledby="addTrainModalTitle" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTrainModalTitle">Booking status</h5>
                    <button data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                
                    
                      <iframe src="" frameborder="0" name="confirmFrame" id="confirmFrame" width="1450" height="100"></iframe>

                        <div style="height: 15px"></div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="submitTrainDet"class="btn btn-primary">ok, got it!</button>
                        </div>
                </div>
                </div>
            </div>
        </div> -->


  <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="form-validation.js"></script>
  <script src="my_modules/pincode.js"></script>
  <script src="my_modules/generateAge.js"></script>
  <script src="main.js"></script>
</body>

</html>

