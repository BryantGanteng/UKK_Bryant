<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>E-Module</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('../vendors/feather/feather.css')?>">
  <link rel="stylesheet" href="<?= base_url('../vendors/ti-icons/css/themify-icons.css')?>">
  <link rel="stylesheet" href="<?= base_url('../vendors/font-awesome/css/font-awesome.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('../vendors/mdi/css/materialdesignicons.min.css')?>">
  <!-- <link rel="stylesheet" href="<?= base_url('../vendors/mdi/css/materialdesignicons.min.css.map')?>"> -->
  <link rel="stylesheet" href="<?= base_url('../vendors/css/vendor.bundle.base.css')?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page --> 
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('../css/vertical-layout-light/style.css')?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('../images/unnamed.png')?>" />


  <!-- Add Ons -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>

  const timeoutDuration = 600000; // 1min
  let timeout;

  function startTimeout() {
    clearTimeout(timeout);
    timeout = setTimeout(logout, timeoutDuration);
  }

  // logout
  function logout() {
    
	window.location.href = "<?= base_url('/home/log_out')?>";

  }

  // Reset timeout
  document.addEventListener('mousemove', startTimeout);
  document.addEventListener('keydown', startTimeout);
</script>

</head>
<body>