<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UAS-AhmadFauzi</title>
  <!-- base:css -->
  <link rel="stylesheet" href="templateku/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="templateku/vendors/feather/feather.css">
  <link rel="stylesheet" href="templateku/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="templateku/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="templateku/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                  </div>
                </div>
              <?php endif ?>
              <div class="brand-logo">
                <h1 class="align-center" style="text-align: center;">UAS-AHMAD FAUZI</h1>
              </div>
              <h4>PT.ABC</h4>
              <h6 class="font-weight-light">Silahkan Login untuk melanjutkan</h6>
              <form class="pt-3 needs-validation" method="POST" action="<?= site_url('auth/loginProcess') ?>" novalidate="">
                <?= csrf_field() ?>
                <div class="form-group">
                  <input id="email" type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <p><i>*Login Sebagai Admin = <br>email :fauzi@gmail.com,Password: fauzi</i></p>
                <p><i>*Login Sebagai Gudang = <br>email :ahmad@gmail.com,Password: ahmad</i></p>
                <div class="mt-3">

                  <button type="submit" class="btn btn-primary btn-lg btn-block btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" tabindex="4">
                    Login
                  </button>

                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="templateku/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="templateku/js/off-canvas.js"></script>
  <script src="templateku/js/hoverable-collapse.js"></script>
  <script src="templateku/js/template.js"></script>
  <!-- endinject -->
</body>

</html>