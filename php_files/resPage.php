

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Main css file sfor the page -->
	<link rel="stylesheet" type="text/css" href="..\css_files\respage.css">
	<!-- bootstrap css files -->
	<link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap-grid.css">
    <!-- street view api -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    
</head>
<body>

<body>
 
	<!-- Page header -->
	<?php include 'header.php'; ?>

    <main id="main-container row"> 
        
        <div id="res-description">
    	    <h2> $resName </h2>
    	    <span> $address </span> <span> $email </span>
    	    <br><h3> Res Description </h3>
    	    <p> $resDescription </p>
        </div>

        <!-- street view map -->
        <div id="map">
           <iframe src="https://www.google.com/maps/embed?pb=!4v1620740215845!6m8!1m7!1sfOfBMK46-gVbscWlU0ZRMg!2m2!1d-26.18361119313999!2d28.00619552354808!3f149.19291412865016!4f8.852909370330309!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>

        <h3 id="Gallery_heading">Gallery:</h3>

        <!-- Display Accomodation Images -->
        <!-- Import databes from res_information file -->
        <?php require '..\database\reses_information.php'; ?>

        <div id="res-pictures" class="row"> 
            <!-- loop through all pictures in database -->
            <?php foreach ($pictures as $picture) { ?>

                <?php $photo = "<img src='$picture' alt='picture' class='imgs'>" ?>
                <span class="pictures">
                    <?php echo $photo; ?>
                </span>
            <?php } ?>
        </div>
        <hr style="clear: both;">
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
        
    </main>

    <script src="../JavaScript_files/respage.js"></script>

    <?php include 'Footer.php'; ?>

    </body>
</html>
</body>
</html>