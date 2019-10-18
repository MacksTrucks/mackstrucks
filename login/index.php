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
<?php
session_start();
$_SESSION['admin'] = 0;
$_SESSION['driver'] = 0;
$_SESSION['ID'] = 0;
if($_SESSION['crap'] == 1){
  echo "
    <body>
<script>
Swal.fire({
  type: 'warning',
  title: 'Something went wrong',
  text: 'Please log in again',
  animation: false,
  customClass: {
    popup: 'animated infinite shake slow'  
  }
})
</script>
</body>";
$_SESSION['crap'] = 0;
}
$host="localhost";
$user="root";
$password="";
$db="mackstrucks";
$sql=mysqli_connect($host,$user,$password);
mysqli_select_db($sql,$db);
if(isset($_POST['ID'])){
  $ID=$_POST['ID'];
  $password=$_POST['password'];
  $lastname=$_POST['lname'];
  $request="select * from users where ID='".$ID."'AND Pass='".$password."' AND Surname='".$lastname."'limit 1";
  $_SESSION['ID'] = $ID;
  $result=mysqli_query($sql,$request);
  if(mysqli_num_rows($result)==1){
    $request="select * from permissions where ID = '".$ID."'";
    $result=mysqli_query($sql,$request);
    $row=mysqli_fetch_assoc($result);
    echo "driver:", $row["Driver"];
    echo "<br>admin:", $row["Admin"];
    if($row["Admin"] = 1){
      $_SESSION['admin'] = 1;
    }
    else {
      $_SESSION['admin'] = 0;
    }
    if($row["driver"] = 1){
      $_SESSION['driver'] = 1;
    }
    else {
      $_SESSION['driver'] = 0;
    }
    header("Location: ../panel");
    exit();
  }
  else {
    echo "
    <body>
<script>
Swal.fire({
  type: 'error',
  title: 'Incorrect Password',
  text: 'Please try again.',
  footer: '<a href=/mackstrucks/forgotpassword.html>Forgot Password?</a>'
})
</script>
</body>";
    //will this is where you integrate your code
    
  }
}
?>
<!--sdfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgsdfgdfgsdfg -->
<form method="POST">
  <div class="imgcontainer">
    <!--<img src="login.png" alt="Avatar" class="avatar">-->
    <img src="login.png">
  </div>

  <div class="container">
    <p>ID</p>
    <input type="text" placeholder="Enter ID" name="ID" required>

    <p>Last Name</p>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <p>Password</p>
    <input type="password" placeholder="Enter password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    
    <a href="/mackstrucks/forgotpassword.html">Forgot Password?</a>
  </div>
</form>
