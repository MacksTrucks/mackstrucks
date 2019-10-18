<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo $details->city; // -> "Mountain View"
echo $details->org; // -> "Mountain View"
echo $details->postal; // -> "Mountain View"
?>

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
</head>
<h1> Welcome to Mack's Trucks Driver Hub </h1>
<p> Please keep in mind that this page is still in beta. If you encounter any bugs/issues please let me know on the Discord server.</p>
<h2>Quick Links</h2>
<ul>
<li><a href="/mackstrucks/login">Login Page</a></li>
<li><a href="http://mackstrucks.xyz">Mack's Trucks Website</a></li>
</ul>
<!-- bruther momentum -->