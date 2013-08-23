<?php

?>
 <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 

    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->


	
	<link href="commoncss.css" rel="stylesheet">

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap-collapse.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>

<?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>

<style>
.container{
padding:10px;
background-color:white;
}
</style>


     <div class="masthead">
        <h3 class="muted"><img src="logo3.png" alt="Tettra Softwares"/></h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
         
				 <li <?=echoActiveClassIfRequestMatches("index")?>>
						<a href="index.php">Home</a></li>
               
				 <li <?=echoActiveClassIfRequestMatches("projects")?>>
						<a href="projects.php">What we do</a></li>

				 <li <?=echoActiveClassIfRequestMatches("about")?>>
						<a href="about.php">About Us</a></li>
						
				 <li <?=echoActiveClassIfRequestMatches("contact")?>>
						<a href="contact.php">Contact</a></li>
						
               
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
		
      </div>
