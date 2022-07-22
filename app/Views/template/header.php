<!DOCTYPE html>
<html class=''>

<head>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"/>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>


  <script>
    $(document).ready(function() {
           $("#qrcode").focus();
      $('#dashlist').DataTable({
        order: [['4', 'desc']],
                    dom: 'Bfrtip',
                      pageLength: 25,
                     buttons: [
                        'excel', 'pdf', 'print'
                    ]
                });
    });
  </script>
    <script>
    $(document).ready(function() {
           $("#qrcode").focus();
      $('#dash').DataTable({
        order: [['0', 'desc']],
                    dom: 'Bfrtip',
                      pageLength: 25,
                     buttons: [
                        'excel', 'pdf', 'print'
                    ]
                });
    });
  </script>

  <style class="cp-pen-styles">
    body,
    html {
      margin: 0;
      paddin: 0;
      background: #F5F5F5;
      width: 100%;
    }

    .application-info-div {
      margin-left: auto !important;
      margin-right: auto !important;
      width: 800px;
      height: 120px;
      background: #FFFFFF;
      margin: 5% 0 0 0;
    }

    .main-connection-div {
      margin: 5px 0 0 0;
      padding: 20px;
      background: #FFFFFF;
      width: 800px;
      height: 350px;
      margin-left: auto !important;
      margin-right: auto !important;
    }

    .icon-service {
      border-right: 125px solid #F5F5F5;
      width: 120px;
      margin: 0;
      padding: 0;
    }

    .text-application-info-div {
      position: relative;
      top: -110px;
      left: 135px;
    }

    .title-text-application-info-div {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      font-size: 23px;
      font-weight: 300;
      width: 82%;
    }

    .description-text-application-info-div {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      font-size;
      16px;
      width: 82%;
    }

    .application-status {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      font-size: 13px;
    }

    .green-text {
      color: #2ecc71;
    }

    .cookies-used {
      width: 800px;
      background: rgba(0, 0, 0, 0.8);
      margin-left: auto !important;
      margin-right: auto !important;
      font-family: 'Roboto', sans-serif;
      font-size: 14px;
      color: #FFF;
      margin: 5px 0 5% 0;
      font-weight: 300;
      padding: 20px;
      transition: .4s background;
      display: none;
    }

    .cookies-used:hover {
      background: rgba(0, 0, 0, 0.75);
    }

    .log-in-main-connection-div {
      width: 50%;
      left: 0;
      height: 100%;
      float: left;
    }

    .register-main-connection-div {
      width: 50%;
      right: 0;
      height: 100%;
      float: left;
    }

    .title-log-in-main-connection-div {
      font-family: 'Roboto', sans-serif;
      font-size: 24px;
      font-weight: 300;
      margin: 5px 0 0 15px;
      padding: 0;
    }

    .title-register-main-connection-div {
      font-family: 'Roboto', sans-serif;
      font-size: 24px;
      font-weight: 300;
      margin: 5px 0 0 15px;
      padding: 0;
    }

    .main-connection-div .input-field {
      width: 80%;
      margin: 20px 0 0 30px;
    }

    /* label focus color */
    .main-connection-div .input-field input[type=text]:focus+label {
      color: #0072ff;
      left: 0.1rem;
    }

    .input-field label.active {
      left: 0.1rem;
    }

    /* label underline focus color */
    .main-connection-div .input-field input[type=text]:focus {
      border-bottom: 1px solid #0072ff;
      box-shadow: 0 1px 0 0 #0072ff;
    }

    /* valid color */
    .main-connection-div .input-field input[type=text].valid {
      border-bottom: 1px solid #2ecc71;
      box-shadow: 0 1px 0 0 #2ecc71;
    }

    /* invalid color */
    .main-connection-div .input-field input[type=text].invalid {
      border-bottom: 1px solid #e74c3c;
      box-shadow: 0 1px 0 0 #e74c3c;
    }

    .password-forgotten {
      font-size: 13px;
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      margin: 15px 0 0 30px;
      width: 100%;
      height: 100%;
    }

    .remember-me-check {
      position: relative;
      top: 10px;
      margin: 0 0 0 10px;
    }

    .password-reset-div {
      display: none;
    }

    .black-complete-background {
      position: fixed;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      top: 0;
      z-index: 10000;
    }

    .content-password-reset-div {
      position: fixed;
      background: #F5F5F5;
      width: 40%;
      height: 240px;
      min-width: 600px;
      padding: 20px;
      top: 0;
      bottom: 0;
      margin-left: auto !important;
      margin-right: auto !important;
      left: 0;
      right: 0;
      z-index: 100000;
      margin: auto;
    }

    .title-content-password-reset-div {
      font-family: 'Roboto', sans-serif;
      font-size: 24px;
      font-weight: 300;
    }

    .content-content-password-reset-div {
      margin: 20px 0 0 0;
      width: 100%;
    }

    .text-content-content-password-reset-div {
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      width: 100%;
    }

    .content-content-password-reset-div .input-field {
      width: 50%;
      margin: 20px 0 0 0;
    }

    /* label focus color */
    .content-content-password-reset-div .input-field input[type=text]:focus+label {
      color: #0072ff;
    }

    /* label underline focus color */
    .content-content-password-reset-div .input-field input[type=text]:focus {
      border-bottom: 1px solid #0072ff;
      box-shadow: 0 1px 0 0 #0072ff;
    }

    /* valid color */
    .content-content-password-reset-div .input-field input[type=text].valid {
      border-bottom: 1px solid #2ecc71;
      box-shadow: 0 1px 0 0 #2ecc71;
    }

    /* invalid color */
    .content-content-password-reset-div .input-field input[type=text].invalid {
      border-bottom: 1px solid #e74c3c;
      box-shadow: 0 1px 0 0 #e74c3c;
    }

    .options-alert {
      position: absolute;
      bottom: -60px;
      height: 60px;
      background: #F5F5F5;
      width: 100%;
      left: 0;
      padding: 20px 20px 40px 20px;
    }

    .right-options-alert {
      position: absolute;
      right: 0;
    }

    .nav-link {
      display: block !important;
      padding: 0.9px 9px !important;
    }

    .options-alert a {
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      color: #777;
      padding: 8px 20px;
      margin-right: 10px;
      border-radius: 2px;
    }

    .options-alert a:hover {
      background: rgba(0, 0, 0, 0.1);
    }

    .options-alert a:active {
      background: rgba(0, 0, 0, 0.2);
    }

    [type="checkbox"]:checked+label:before {
      border-right: 2px solid #0072ff;
      border-bottom: 2px solid #0072ff;
    }

    a {
      color: #0072ff;
    }
  </style>

</head>

<body>
  <?php
  $uri = service('uri');
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url(); ?>/"><img style="width:50px" src="<?php echo base_url(); ?>/logo.png">Quickfix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if (session()->get('isLoggedIn')) : ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
              <a class="nav-link" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>/profile">Perfil</a>
            </li>
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>/logout">Sair</a>
            </li>
          </ul>
        <?php else : ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>/login">Login</a>
            </li>
            <!--  <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
          <a class="nav-link" href="/register">Cadastro</a>
          </li> -->
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </nav>