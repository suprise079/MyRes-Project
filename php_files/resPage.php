<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Main css file sfor the page -->
	<link rel="stylesheet" type="text/css" href="..\css_files\respage.css">
	<!-- bootstrap css files -->
	<link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap-grid.css">
</head>
<body>

<body>
 
	<!-- Page header -->
	<?php include 'header.php'; ?>

    <main id="main-container"> 
        
        <div id="res-description">
            
	    <h2> $resName </h2>
	    <span> $address </span> <span> $email </span>
	    <br><h3> Res Description </h3>
	    <p> $resDescription </p>

        </div>


        <div id="res-pictures" class="row"> 
            
            
            <section id="streetview" class="imgs col-md-6 section enlarge" >
                <p>street view</p>
            </section>
            <section id="img1" class="imgs col-md-6 section enlarge">
                <p>image 1</p>
            </section>
            <section id="img2" class="imgs col-md-6 section enlarge">
                <p>image 2</p>
            </section>
            <section id="img3" class="imgs col-md-6 section enlarge">
                <p>image 3</p>
            </section>
			<section id="img4" class="imgs col-md-6 section enlarge">
                <p>image 4</p>
            </section>
            <section id="img5" class="imgs col-md-6 section enlarge" >
                <p>image 5</p>
            </section>
            <div class="container">
        </div>
        <br>


        <!--Review section-->
        <div id="reviews-container">  
            
            <h2>Reviews</h2>


            <!--Write review button-->
			<button id="writeReview" onclick="change()">Write Review </button>


                <!--Review Form-->
				<div id="form" class="form">
					<hr>
					<form id="reviewForm" name="addReview">

						<label>Enter name</label><br>
						<input type="text" id="name" name="name"><br><br>

						<label>Enter rating</label><br>

						<label>Enter email</label><br>
						<input type="text" id="email"><br><br>

						<label>Enter resident review</label><br>
						<input type="text" id="revDes" ><br><br>
						

                        <!--Review Submit button-->
						<button id="send" type="submit" value="Send"> Submit </button>
			
					</form>

				</div>


                <!--Review Output container-->
				<div id="review-results"> 
					<hr>
					
				</div>

        </div>

		

        <!--Map container-->
        <div id="map-container"> 

            <!--Map-->
            map
            
        </div>
        

    </main>
   
    <script src="../JavaScript_files/respage.js"></script>

    <?php include 'Footer.php'; ?>
    </body>
</html>
</body>
</html>