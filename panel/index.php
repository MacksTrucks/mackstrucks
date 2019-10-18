<script>
    (function(d, w, c) {
        w.ChatraID = 'Q92DC5hfrxtLHEXwy';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>
<head>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="/mackstrucks/animate.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<div>
  <!-- this if for the navbar with the leaderboard -->
</div>
<div>
</head>
<div style="float:left; width:75%">
<?php
session_start();
echo "Developer Statistics:";
echo "<br>";
echo "driver", $_SESSION['driver'], "admin", $_SESSION['admin'];
echo "<br>";
echo $_SESSION['ID'];
if($_SESSION['ID'] == 0){
  echo "piss off";
  
echo "
</script>
</body>";
  echo "<script type='text/javascript'>
  <!--
  window.location = '/mackstrucks/login'
  //-->
  </script>";
$_SESSION['crap'] = "1";
}
else{
  echo "good";
}
$host="localhost";
$user="root";
$password="";
$db="mackstrucks";
$sql=mysqli_connect($host,$user,$password);
mysqli_select_db($sql,$db);
$request="select * from users where id='".$_SESSION['ID']."'";
$result=mysqli_query($sql,$request);
$row=mysqli_fetch_assoc($result);
echo $row['User'];

echo"
<body>
<script>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
  
  Toast.fire({
    type: 'success',
    title: 'Signed in successfully as ", $row['User'], "'
  })
</script>
</body>
";


if($_SESSION['admin'] = "1"){
    echo "<h1 class='animated bounceInLeft'>Welcome to Mack's Trucks' Admin Panel!</h1>";
}
else{
    echo "<h1 class='animated bounceInLeft'>Welcome to Mack's Trucks' Driver's Hub!</h1>";
}
$request="select * from stats where id='".$_SESSION['ID']."'";
$result=mysqli_query($sql,$request);
$row=mysqli_fetch_assoc($result);

?>
</div>
<div style="float:right; height:100px; width:25%">
<h2>Quick Links</h2>
<p class="animated infinite pulse"><a href=/mackstrucks/developers.html><b> Developers </b></a></p>
<?php if($_SESSION['admin'] = "1"){ echo "<p class='animated infinite pulse'><a href=/mackstrucks/panel/usermanager.php><b> User Manager </b></a></p>";}?>
</div>

<div style="float:left; width:75%">
<h2>Your Statistics</h2>
<table style="width:95%">
  <tr>
    <td>Bank</td>
    <td>£<?php echo $row['bank']; ?></td>
  </tr>
  <tr>
    <td>Deliveries</td>
    <td><?php echo $row['deliveries']; ?></td>
  </tr>
  <tr>
    <td>Offences</td>
    <td><?php echo $row['offences']; ?></td>
  </tr>
  <tr>
    <td>Distance</td>
    <td><?php echo $row['distance']; ?> mi</td>
  </tr>
  <tr>
    <td>Average Fuel Consumption</td>
    <td><?php echo $row['avgfuelcons']; ?>L/100mi </td>
  </tr>
</table>
</div>
</div>



