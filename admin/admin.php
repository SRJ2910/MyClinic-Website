<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin portal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/addTrainModals/">



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
    <link href="admin_styles.css" rel="stylesheet">
</head>

<body>
    <main>

        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white border supreme-container" style="width: 380px;">
            <a href="" class="d-flex align-items-center justify-content-between flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold">ADMIN PORTAL</span>
                <span><button onclick="javascript: return false;" class="btn btn-outline-dark btn-sm" data-bs-toggle="modal" data-bs-target="#addTrainModal">Add train <i class="fa-solid fa-plus"></i></button></span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea">
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(0)" id="phpButton1">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Patient Detail</strong>
                        <!-- <small>Wed</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(1)" id="phpButton2">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET TRAIN DETAILS</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(2)" id="phpButton3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET PAYMENT DETAILS</strong>
                        <!-- <small class="text-muted">Mon</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(3)" id="phpButton4">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET TICKET DETAILS</strong>
                        <!-- <small class="text-muted">Wed</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(4)" id="phpButton5">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET PASSENGER DETAILS</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(5)" id="phpButton6">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET ADULTS TRAVELLING</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(6)" id="phpButton7">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET CHILDREN TRAVELLING</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(7)" id="phpButton8">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET COUNT OF MALE TRAVELLING</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(8)" id="phpButton9">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">GET COUNT OF FEMALE TRAVELLING</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
                </a>
                
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addTrainModal" tabindex="-1" role="dialog" aria-labelledby="addTrainModalTitle" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTrainModalTitle">Train details</h5>
                    <button data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                <form action="insertTrain.php" method="post">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="trainNumber"  class="form-label">Number</label>
                            <input type="text" name="trainNumber" class="form-control" id="trainNumber" placeholder="" required>   
                            <div class="invalid-feedback">
                            Valid first train number is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="trainName"  class="form-label">Name</label>
                            <input type="text" name="trainName" class="form-control" id="trainName" placeholder="" required>
                            <div class="invalid-feedback">
                            Valid train name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="trainSource"  class="form-label">Source</label>
                            <input type="text" name="trainSource" class="form-control" id="trainSource" placeholder="" required>
                            <div class="invalid-feedback">
                            Valid first train source is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="trainDestination"  class="form-label">Destination</label>
                            <input type="text" name="trainDestination" class="form-control" id="trainDestination" placeholder="" required>
                            <div class="invalid-feedback">
                            Valid train destination is required.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="arrivalTime"  class="form-label">Arrival time</label>
                            <div class="input-group has-validation">
                            <input type="datetime-local" name="arrivalTime" class="form-control" id="arrivalTime" placeholder="">
                            <div class="invalid-feedback">
                                Valid arrival time is required.
                            </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="destinationTime"  class="form-label">Departure time</label>
                            <div class="input-group has-validation">
                            <input type="datetime-local" name="departureTime" class="form-control" id="destinationTime" placeholder="">
                            <div class="invalid-feedback">
                                Valid departure time is required.
                            </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="totalSeats"  class="form-label">Total seats</label>
                            <div class="input-group has-validation">
                            <input type="text" name="totalSeats" class="form-control" id="totalSeats" placeholder="" required>
                            <div class="invalid-feedback">
                                Total seats are required.
                            </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="referenceDate" class="form-label">Reference date</label>
                            <div class="input-group has-validation">
                            <input type="date" name="referenceDate" class="form-control" id="referenceDate" placeholder="" required>
                            <div class="invalid-feedback">
                                Valid date is required.
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="amount"  class="form-label">Amount</label>
                            <div class="input-group has-validation">
                            <span class="input-group-text">₹</span>
                            <input type="text" name="amount" class="form-control" id="amount" placeholder="" required>
                            <div class="invalid-feedback">
                                Total amount is required.
                            </div>
                            </div>
                        </div>

                        <div style="height: 15px"></div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="submitTrainDet"class="btn btn-primary">Add Train</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="scrollarea supreme-container" id="test" style="width: 10000px; overflow: auto;">
        <div class="queries">
                <?php include 'PatientDetail.php';?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                    include 'TrainTable.php';
                ?>
            </div>
            <div class="queries" style="display: none;">
                <?php include "TicketTable.php";?>
            </div>
            <div class="queries" style="display: none;">
                <?php include 'PaymentTable.php';?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'PassengerTable.php' ;?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'getAdult.php' ;?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'getChildren.php' ;?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'getMaleCount.php' ;?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'getFemaleCount.php' ;?>
            </div>
        </div>
    </main>
    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="admin.js"></script>
</body>

</html>

<script type="text/javascript">
  $('#modal-id').on('shown.bs.modal', function () {
      $(".modal-backdrop.in").hide();
   })
</script>

