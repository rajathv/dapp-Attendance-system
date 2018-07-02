<?php
require('Textlocal.class.php');
?>
<html>
<head>
  <title>Attendance Scan</title>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
  <div id="app">
    <div class="sidebar">
      <section class="cameras">
        <center><a onclick="sms();" class="btn btn-sm btn-info" style="margin: 15px; color: white;"><span class="glyphicon glyphicon-chevron-left"></span>Go back</a></center>
        <h2>Cameras</h2>
        <ul>
          <li v-if="cameras.length === 0" class="empty">No cameras found</li>
          <li v-for="camera in cameras">
            <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
            <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
              <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
            </span>
          </li>
        </ul>
      </section>
      <section class="scans">
        <h2>Scans</h2>
        <ul v-if="scans.length === 0">
          <li class="empty">No scans yet</li>
        </ul>
        <transition-group name="scans" tag="ul">
          <li v-for="scan in scans" :key="scan.date" :title="scan.content" :id="scan.content">{{ scan.content }}</li>
        </transition-group>
      </section>
    </div>
    <div class="preview-container">
      <div class="page-header">
        <h2 style="color: white;">Scan Your QR Code for Attendance</h2>
      </div>
      <video id="preview"></video>
    </div>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript">
    function sms()  {
      var a = $('#4VV15EE001').html();
      var b = $('#4VV15EE002').html();
      var c = $('#4VV15EE003').html();
      var d = $('#4VV15EE004').html();
      if($('#4VV15EE001').length == 0 ) {
        <?php
        $Textlocal = new Textlocal(false, false, 'K85kXU1tbtw-N68c7i9MXpICJ3T6eqsEqJM6C6sdgt');
        $phone = '9980419162';
        $numbers = array($phone);
        $sender = 'TXTLCL';
        $message = 'Student with USN: 4VV15EE001 is absent today';
        ?>
        console.log(<?php print_r($response = $Textlocal->sendSms($numbers, $message, $sender)); ?>);
      }
      if($('#4VV15EE002').length == 0 ) {
        <?php
        $Textlocal = new Textlocal(false, false, 'K85kXU1tbtw-N68c7i9MXpICJ3T6eqsEqJM6C6sdgt');
        $phone = '9980419162';
        $numbers = array($phone);
        $sender = 'TXTLCL';
        $message = 'Student with USN: 4VV15EE002 is absent today';
        ?>
      }
      if($('#4VV15EE003').length == 0 ) {
        <?php
        $Textlocal = new Textlocal(false, false, 'K85kXU1tbtw-N68c7i9MXpICJ3T6eqsEqJM6C6sdgt');
        $phone = '9980419162';
        $numbers = array($phone);
        $sender = 'TXTLCL';
        $message = 'Student with USN: 4VV15EE003 is absent today';
        ?>
      }
      if($('#4VV15EE004').length == 0 ) {
        <?php
        $Textlocal = new Textlocal(false, false, 'K85kXU1tbtw-N68c7i9MXpICJ3T6eqsEqJM6C6sdgt');
        $phone = '9980419162';
        $numbers = array($phone);
        $sender = 'TXTLCL';
        $message = 'Student with USN: 4VV15EE004 is absent today';
        ?>
      }
      window.location.href = "student.php";
    }
  </script>
</body>
</html>
