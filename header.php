<?php
 session_start();
?>

<!DOCTYPE html>
<html>
  <!-- <head>
    <title>Hoos' Halls</title>
  </head> -->

  <head>
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script> 
	<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
 	<title>Hoos Halls</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>

  <body>


    <!-- Navigation Bar -->
    
	<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" >
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"/>
                </svg>
            </a>
                
                <?php
                    if(isset($_SESSION["firstName"])) {
                      echo 
                      "<ul class='nav col-12 col-md-auto mb-2 justify-content-center mb-md-0'>
                      <li><a href='home.php' class='nav-link px-2 link-dark' >Home</a></li>
                      <li><a href='buildingSearch_page.php' class='nav-link px-2 link-dark'>Building Search</a></li>
                      <li><a href='profile.php' class='nav-link px-2 link-dark'>Profile</a></li>
                  </ul>
                  <div class='col-md-3 text-end'><a href='includes/logout.inc.php' class='btn btn-outline-primary me-2'>Log Out</a></div>";
                    } 


                    else {
                      echo 
                      "<ul class='nav col-12 col-md-auto mb-2 justify-content-center mb-md-0'>
                      <li><a href='home.php' class='nav-link px-2 link-dark'>Home</a></li>
                      <li><a href='buildingSearch_page.php' class='nav-link px-2 link-dark'>Building Search</a></li>
                  </ul>
                  <div class='col-md-3 text-end'><a href='login.php' class='btn btn-outline-primary me-2'>Login</a></div>";
                          }
                  ?>
            </ul>

        </header>
    </div>
	<!-- End Navigation Bar -->


    <div class="wrapper">
