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
                <span class="fs-5 fw-semibold">Database</span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea">
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(0)" id="phpButton1">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Patient Details</strong>
                        <!-- <small>Wed</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Good documentation promotes patient safety and quality of care.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(1)" id="phpButton2">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Total Patient</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Patient count till date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(2)" id="phpButton3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Date-Wise</strong>
                        <!-- <small class="text-muted">Mon</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Total patient sorted by date.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(3)" id="phpButton4">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Month-Wise</strong>
                        <!-- <small class="text-muted">Wed</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Total patient sorted by month.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(4)" id="phpButton5">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Year-Wise</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Total patient sorted by year.</div>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" onclick="changeQuery(5)" id="phpButton6">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">Doctor-Wise</strong>
                        <!-- <small class="text-muted">Tues</small> -->
                    </div>
                    <div class="col-10 mb-1 small">Total patient sorted by doctor.</div>
                </a>
                
                
            </div>
        </div>

        <div class="scrollarea supreme-container" id="test" style="width: 10000px; overflow: auto;">
        <div class="queries">
                <?php include 'PatientDetail.php';?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                    include 'TotalPatient.php';
                ?>
            </div>
            <div class="queries" style="display: none;">
                <?php include "TotalPatientDateWise.php";?>
            </div>
            <div class="queries" style="display: none;">
                <?php include 'TotalPatientMonthWise.php';?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'TotalPatientYearWise.php' ;?>
            </div>
            <div class="queries" style="display: none;">
                <?php 
                include 'TotalPatientDoctorWise.php' ;?>
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

