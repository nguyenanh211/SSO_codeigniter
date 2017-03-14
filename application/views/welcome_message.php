<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My test SSO in CodeIgniter</title>
</head>
<body>
  <h1>My Test PHP Site: Home Page.</h1>
  <p>This is a very basic 'getting started' demo of an imaginary web site<br>using phpCAS client + JASIG CAS server for SSO authentication.</p>
  <a href="https://wiki.jasig.org/display/CASC/phpCAS">Get more info at JASIG phpCAS site</a>
  <h2>The demo in brief:</h2>
  <p>My Test PHP Site consists of just 3 pages:</p>
  <ul>
    <li>Home: index.html - public access</li>
    <li>PHP information: phpinfo.php - public access</li>
    <li>Protected: protected.php - <strong>requires authentication via SSO</strong></li>
 
  </ul>
 
  <p>Once you click the link below to the protected page, your browser will be redirected to an SSO page where you are to enter your credentials.</p>
  <p>The redirection for the authentication is to the CAS server been previously setup (at ETS UCSB for this demo).<br>The corresponding properties to be configured are in the <strong>config.php</strong></p>
  <p>Upon succesful authentication the browser will be redirected back to your protected application page: protected.php in this demo.
    <br>protected.php demo page will display authenticated user ID as well as CAS server released user attributes.</p>
  <p>That's it to the demo.</p>
  <strong><a href="index.php/login">Visit protected page: protected.php</a></strong>
 
</body>
</html>
