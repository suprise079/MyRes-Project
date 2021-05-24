

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
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

<body>
 
	<!-- Page header -->
	<?php require 'header.php'; 

        //Connect to sql sever
        require "..\database\sql_connection.php";
        $mainID = $_GET['ID'];

        $sql = mysqli_query($conn, "SELECT * FROM accomodation WHERE Res_ID = '$mainID'");
        $accomodation = mysqli_fetch_array($sql);
        /*Dictionary to translate sharing column in accomodation table*/
        $dict = array('Yes' => 'Sharing', 'No' => 'Single')
    ?>

    <main id="main-container row"> 
        
        <div id="res-description">
    	    <h2> <?php echo $accomodation['Res_Name'] ?> </h2>
        	    <span> <?php echo $accomodation['Address'] ?></span><br>
                <span> <?php echo $accomodation['Email']; ?> </span><br>
    	    <h3> Res Description </h3>
    	    <p> <?php echo $accomodation['Description']; ?> </p>
            <h3>Accomodation offers:</h3>
            <ul>
                <li><?php echo $dict[$accomodation['Sharing']]." rooms."; ?></li>
                <li><?php echo "Located in ".$accomodation['Campus']; ?></li>
                <li><?php echo "R{$accomodation['Price_Accreditation']} per student" ?></li>
            </ul>
        </div>

        <!-- street view map -->
        <div id="map">
           <iframe src="https://www.google.com/maps/embed?pb=!4v1620740215845!6m8!1m7!1sfOfBMK46-gVbscWlU0ZRMg!2m2!1d-26.18361119313999!2d28.00619552354808!3f149.19291412865016!4f8.852909370330309!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <br>

        <h3 id="Gallery_heading">Gallery:</h3>

        <!-- Display Accomodation Images -->
        <!-- Import databes from Filters file for pictures -->
        <?php require '..\database\Filters.php'; ?>

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


        <!-- ratings testing -->
        <div class="col-md-4 rate-input">
            <div>
                <span class="fa fa-star" name="1" id="1" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="2" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="3" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="4" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                <span class="fa fa-star" name="1" id="5" onmouseover="startRating(this)" startRating="starmark(this)" style="font-size:20px; cursor:pointer;"></span>
                
            </div><br>
            <form action="" method="post">
                <input type="hidden" name="rateID" id="rateID" value="1">
                <input type="text" name="email" id="email" placeholder="Email"><br><br>
                <textarea rows="5" placeholder="Enter review here..." name="comment" id="comment" required=""></textarea><br>
                <button name="submit" id="submit">Submit</button>

            </form>

        </div>







        <!--Review section
        <div id="reviews-container">  
            
            <h2>Reviews</h2>


            Write review button
			<button id="writeReview" onclick="change()">Write Review </button>


                Review Form
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
						

                        Review Submit button
						<button id="send" type="submit" value="Send"> Submit </button>
			
					</form>

				</div>


                Review Output Container
				<div id="review-results"> 
					<hr>
					
				</div>
 -->
        </div>
        
    </main>

    <script src="../JavaScript_files/respage.js"></script>

    <?php include 'Footer.php'; ?>

    </body>
</html>
</body>
</html>

