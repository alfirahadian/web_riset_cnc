<!DOCTYPE html>
<html>
<head>
      <title>Register Account SM</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <!-- Compiled and minified JavaScript -->
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url();?>assets/css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->    
    <link href="<?php echo base_url();?>assets/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url();?>assets/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
      <link href="<?php echo base_url();?>assets/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <!-- For load material icon -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <script type="text/javascript">
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</head>

<body class="cyan">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
    <?php echo validation_errors('<p class="error">'); ?>
    <?php echo form_open("user/registration"); ?>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url();?>assets/img/sm_logo.png" alt="" class="rectangle responsive-img valign profile-image-login">
            <p class="center login-form-text">SENIOR MEMBER CNC PORTAL</p><br><br>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <select name="divisi">
              <option value="" disabled selected>Pilih divisi :</option>
              <option value="Network">Network</option>
              <option value="Web">Web Development</option>
              <option value="OS">Operating System</option>
            </select>
            <label>Divisi</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
               <i class="material-icons prefix">person_pin</i>
            <input id="fullname" name="fullname" type="text">
            <label for="fullname" class="center-align">Nama Lengkap</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
               <i class="material-icons prefix">recent_actors</i>
            <input id="nim" type="text" name="nim">
            <label for="nim" class="center-align">NIM</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
            <input id="captcha" name="captcha" type="text">
            <label for="captcha" class="center-align">CAPTCHA: p*ngu*n***</label>
          </div>
        </div>
       <div class="row margin center">
          <button class="btn waves-effect waves-light btn-small" type="submit" value="Submit">Daftar
          <i class="material-icons right">send</i>
          </button>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
              <p class="margin center medium-small"><a href="login">Already have an account? Login!</a></p>
          </div>          
        </div>
      </div>
        <?php echo form_close(); ?>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.js"></script>

</body>
</html>