<!DOCTYPE html>
<html>
<head>
      <title>Upload Documentation</title>
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
     <?php echo form_open_multipart("upload/do_upload"); ?>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo base_url();?>assets/img/sm_logo.png" alt="" class="rectangle responsive-img valign profile-image-login">
            <p class="center login-form-text">SENIOR MEMBER CNC PORTAL</p><br><br>
          </div>
          <div class="row margin">
          <div class="input-field col s12">
            <select name="materi">
              <option value="" disabled selected>Pilih materi :</option>
              <option value="1">1.0 Operation of IP Data Networks</option>
              <option value="2">2.0 LAN Switching Technologies</option>
              <option value="3">3.0 IP Addressing (IPv4/IPv6)</option>
              <option value="4">4.0 IP Routing Technologies</option>
              <option value="5">5.0 IP Services</option>
              <option value="6">6.0 Network Device Security</option>
              <option value="7">7.0 Troubleshooting</option>
              <option value="8">8.0 WAN Technologies</option>
            </select>
            <label>Materi</label>
          </div>
        </div>
          <div class="row margin">
          <div class="input-field col s12">
            <textarea id="note" class="materialize-textarea" length="120" placeholder="Berikan note/catatan" name="note"></textarea>
            <label for="note">Catatan</label>
          </div>
        </div>
        <div class="row margin"> 
        Contoh: ivan_filename.zip <br>
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file">
              </div>
              <div class="file-path-wrapper">
              <input class="file-path validate" name="userfile" type="file" name="userfile" value="<?php echo set_value('userfile'); ?>">
              </div>
            </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input type="hidden" name="username" value="<?php echo $this->session->userdata('username');?>">
          </div>
        </div>
         <div class="row margin">
          <div class="input-field col s12">
            <input type="hidden" name="nim" value="<?php echo $this->session->userdata('nim');?>">
          </div>
        </div>
         <div class="row margin">
          <div class="input-field col s12">
            <input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama');?>">
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <input type="hidden" name="divisi" value="<?php echo $this->session->userdata('divisi');?>">
          </div>
        </div>
       <div class="row margin center">
          <button class="btn waves-effect waves-light btn-small right" type="submit" value="upload">Kirim
          <i class="material-icons right">send</i>
          </button>
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