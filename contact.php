
<?php 
include 'includes/config.php';
include 'includes/open_db.php';

if(isset($_POST['name'])){
	$name_of_person=mysql_real_escape_string($_POST['name']);
	$email_of_person=mysql_real_escape_string($_POST['email']);
	$location_of_person=mysql_real_escape_string($_POST['location']);
	$company_of_person=mysql_real_escape_string($_POST['company_name']);
	$need_expertise_in=mysql_real_escape_string($_POST['typeofwork']);
	$some_more_info=mysql_real_escape_string($_POST['description']);

	echo $name_of_person.",".$email_of_person.",".$location_of_person.",".$company_of_person.",".$need_expertise_in.",".$some_more_info;
	
	//$name = mysql_escape_string($name);
	//$query = "INSERT INTO tz_navbar (name) VALUES (".$name.")";
	$query="INSERT INTO contact_form (name_of_person,email,location,company_name,type_of_work,description) VALUES ('$name_of_person','$email_of_person','$location_of_person','$company_of_person','$need_expertise_in','$some_more_info');";
	$insert_result = mysql_query("$query") or die ("5");
	
	echo "<br/>Insert result=".$insert_result;
}

?>

   

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact | Tettra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  </head>

  <body>

    <div class="container">

	<?php include 'header.php' ?>

	    <div class="row-fluid">
        <div class="span15" id="map_canvas">
          <h2>Contact</h2>
			<center>
		  <iframe style="width:95%;" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=AECS+Layout,+Marathahalli,+Bangalore,+Karnataka&amp;aq=0&amp;oq=AECS+layout+Bangalore&amp;sll=12.971599,77.594563&amp;sspn=0.903307,1.674042&amp;ie=UTF8&amp;hq=&amp;hnear=AECS+Layout,+Marathahalli,+Bangalore,+Bangalore+Urban,+Karnataka&amp;t=m&amp;z=14&amp;ll=12.962935,77.7123&amp;output=embed&iwloc"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=AECS+Layout,+Marathahalli,+Bangalore,+Karnataka&amp;aq=0&amp;oq=AECS+layout+Bangalore&amp;sll=12.971599,77.594563&amp;sspn=0.903307,1.674042&amp;ie=UTF8&amp;hq=&amp;hnear=AECS+Layout,+Marathahalli,+Bangalore,+Bangalore+Urban,+Karnataka&amp;t=m&amp;z=14&amp;ll=12.962935,77.7123" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
		  </center>
        </div>
		
		 
		
      
      </div>
	  
	  <hr>
	  <?php
	  if($insert_result==1){
			echo "<div class='alert'>";
			echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
			echo "<span class='label-success'><h3 class='btn-success'>Thank You for contacting us. We will get back to you within 24 hours.</h3></span>";
			echo "</div>";
	  }
	  ?>
      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span15">
         <form class="cmxform" id="contactForm" method="post" action="contact.php" >
		 <legend>Please fill up this form :</legend>
		 <fieldset>
          <p style="float:left;">Hi, My Name is &nbsp;  <input id="cname" name="name" minlength="2" type="text" required/>			
		 &nbsp;&nbsp; and my email is &nbsp; <input id="cemail" type="email" name="email"  required/> &nbsp; I am based in &nbsp; 
		 <input type="text" id="clocation" name="location" width="200px" required/> and My company is called &nbsp;&nbsp; <input name="company_name" type="text" id="ccompany_name" width="200px" required/>. I would like to talk about working together, and need your expertise in &nbsp;<select id="ctypeofwork" name="typeofwork" ><option>Mashup development</option><option>Mobile App development</option><option>Website development</option><option> Development</option></select>  &nbsp;&nbsp;<br/> Here is some more information about the project : <br/><br/><textarea style="width:100%;resize:none;" name="description" id="cdescription" type="text" rows="7" required></textarea><br/>
		   <input class="submit btn" type="submit" value="Submit"/>
		   </p>
		   </fieldset>
		   </form>
		
        </div>
      
      </div>

      <hr>
<div>

<script>

$("#contactForm").validate();
</script>

</div>
      <?php include 'footer.php'; ?>

    </div> <!-- /container -->

  
  </body>
  
    <style type="text/css">
  
	  
	#cname {
		height:25px;
		
	}

	#cemail{
		height:25px;
		
	}
	
	#clocation{
		height:25px;
	
	}
	
	#ccompany_name{
		height:25px;
	
	}
	
	#ctypeofwork{
		
		width:200px;
		height:35px;
		display:inline-block;
	}
	
	p{
		float:left;
			display:inline-block;
	}
	
	  
	  #map_canvas{
		-moz-border-radius: 5px;
		border-radius: 10px;  
	  }
	  
	  label{
		color:red;
	  	display:inline-block;
		
	  }
    </style>
	
</html>
