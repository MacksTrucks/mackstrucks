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
</head>

<body>
<h1>Mack's Trucks Admin User Manager</h1>
<p> User List</p>
</body>

<?php

session_start();
echo "developer statistics:";
echo "<br>";
echo "driver", $_SESSION['driver'], "admin", $_SESSION['admin'];
echo "<br>";
echo $_SESSION['ID'];
$user = 0;
$surname = 0;
$newpass = 0;
$_POST['usercreate'] = null;
$_POST['surnamecreate'] = null;
if($_SESSION['admin'] == 0){
  echo "piss off";
  
echo "
</script>
</body>";
  echo "<script type='text/javascript'>
  <!--
  window.location = '/mackstrucks/login'
  //-->
  </script>";
$_SESSION['bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbruh'] = "1";
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
$request="select * from users";
$result=mysqli_query($sql,$request);
$rows=mysqli_num_rows($result);
echo $rows;



?>
  
<div style="float:left; width:37.5%">
<h2>User List</h2>
<table style="width:95%">
  <tr>
    <td>ID</td>
    <td>User</td>
    <td>Surname</td>
  </tr>
  <?php
  for( $i = 0; $i<$rows; $i++ ) {
    $request="select * from users LIMIT $i,1";
    $result=mysqli_query($sql,$request);
    $row=mysqli_fetch_assoc($result);
    //echo $row['User'];
    $oofergang = "<?php deleteUser('".$password."') ?> ";
    echo "<tr><td>", $row['ID'], "</td><td>", $row['User'], "</td><td>", $row['Surname'], "</td>  </tr>";
  }
?>

</table>
</div>
<div style="float:right; height:100px; width:25%">
<h2>Quick Links</h2>
<p class="animated infinite pulse"><a href=/mackstrucks/developers.html><b> Developers </b></a></p>
<?php if($_SESSION['admin'] = "1"){ echo "<p class='animated infinite pulse'><a href=/mackstrucks/panel/><b> Panel </b></a></p>";}?>
</div>
<div style="float:right; width:37.5%">
<h2>Delete User</h2>
<form method="POST">
  <div class="imgcontainer">
    <!--<img src="login.png" alt="Avatar" class="avatar">-->
    <img width=95% src="https://www.gannett-cdn.com/presto/2019/09/10/PAPP/7b0128a4-97eb-4946-b21c-0ae4c10d8a65-20171019_PEPPAPIG_HighRes_0471.jpg?crop=885,664,x57,y0&width=640">
  </div>

  <div class="container">
    <p>ID</p>
    <input type="text" placeholder="Enter ID" name="iddelete" required>

    <button type="submit">Delete</button>
  </div>
</form>
<h2>Make User</h2>
<form method="POST">
  <div class="imgcontainer">
    <!--<img src="login.png" alt="Avatar" class="avatar">-->
    <img width=95% src="https://i.ytimg.com/vi/FamXkqlwbXg/maxresdefault.jpg">
  </div>

  <div class="container">
    <p>ID</p>
    <input type="text" placeholder="Enter Username" name="usercreate" required>
    <input type="text" placeholder="Enter Surname" name="surnamecreate" required>

    <button type="submit">Create</button>
  </div>
</form>
</div>

<?php

if(isset($_POST['usercreate'])){
  //$user = 0;
  //$surname = 0;
  //$newpass = 0; 
  $user=$_POST['usercreate'];
  $surname=$_POST['surnamecreate'];
  $newpass = rand(1111,9999);
  echo "oofergang";
  $request="INSERT INTO users (User, Pass, Surname) VALUES
  ('".$user."', '".$newpass."', '".$surname."')";
  $result=mysqli_query($sql,$request);
  $usercreate = NULL;
}
if(isset($_POST['iddelete'])){
  $ID=$_POST['iddelete'];
  $request="DELETE FROM Users WHERE ID='".$ID."'";
  $_SESSION['ID'] = $ID;
  $result=mysqli_query($sql,$request);
  $iddelete = NULL;
}
?>