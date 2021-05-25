<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="..\css_files\Bootstrap_css\bootstrap.min.css">
    <!-- import jquery -->
    <script type="text/javascript" src="..\JavaScript_files\jquery.js"></script>
    <!-- main css for the page -->
    <link rel="stylesheet" type="text/css" href="..\css_files\profile.css">
</head>
<body class="row">

<?php require "header.php" ?>
<?php require "../database/update_profile.php" ?>

<!-- Section used to align the page well -->
<section id="left" class="col-lg-4 col-md-4">
    <!-- Summary of profile -->
    <section id="profile_summary">
        <img id="profile_img" src=<?php echo $profile_pic ?> ></img>
        <h2 id="res_title"><?php echo $results['Res_Name'] ?></h2>
        <div id="email_title"><?php echo $results['Email'] ?></div>
        <div id="tel_titile"><?php echo $results['Telephone'] ?></div>

        <div class="upload">
            <input type="file" accept="image/*" name="" id="edit_file" style="opacity:5">

            <input type="button" id="edit_profile" name="edit_profile_img" value="Change profile picture" class="btn">
        </div>


    </section>

    <!-- Reviews section -->
    <section id="reviews">
        <h3>Reviews</h3>
        <div>No reviews found</div>
    </section>
</section>

<section id="right" class="col-lg-8 col-md-8">
    <!-- Detailed view of profile -->
    <section id="detailed_profile">
        <div class="line">
            <label>Full name</label>
            <span id="full_name" class="view"><?php echo $results["Res_Name"] ?></span>
        </div>
        <div class="line">
            <label>Email</label>
            <span id="email" class="view"><?php echo $results['Email'] ?></span>
        </div>
        <div class="line">
            <label>Password</label>
            <span id="password" class="view">*********</span>
        </div>
        <div class="line">
            <label>Telephone</label>
            <span id="phone" class="view"><?php echo $results['Telephone'] ?></span>
        </div>
        <div class="line">
            <label>Price</label>
            <span id="price" class="view"><?php echo $results['Price_Accreditation'] ?></span>
        </div>
        <div class="line">
            <label>Campus</label>
            <span id="campus" class="view"><?php echo $results['Campus'] ?></span>
        </div>
        <div class="align_div">
            <button class="change">Edit</button>
        </div>
    </section>

    <!-- Editing profile deatails -->
    <section id="edit_form">
        <script type="text/javascript">
            $("#edit_form").hide();
        </script>
        <form action="profile.php" method="post">
        <div class="line">
            <label>Full name</label>
            <input type="text" name="full_name" class="edit" id="full_name">
        </div>
        <div class="line">
            <label>Email</label>
            <input type="text" name="email" class="edit" id="email">
        </div>
        <div class="line">
            <label>Password</label>
            <input type="text" name="password" class="edit" id="password">
        </div>
        <div class="line">
            <label>Telephone</label>
            <input type="text" name="tel" class="edit" id="tel">
        </div>
        <div class="line">
            <label>Price</label>
            <input type="text" name="price" class="edit" id="price">
        </div>
        <div class="line">
            <label class="edit">Campus</label>
            <select name="campus" class="edit" id="" style="width:150px">
                <option>Select campus</option>
                <option>APB</option>
                <option>APK</option>
                <option>DFC</option>
                <option>SWC</option>
            </select>
        </div>
        <div class="align_div">
            <input type="submit" class="change" id="update_profile" value="Update">
        </div>
        </form>
    </section>

    <!-- Section used to align the page well -->
    <section id="pic_des" class="row">
        <!-- accomodation pictures -->
        <section id="pictures" class="col-lg-6 col-md-6">
            <h3>Gallery</h3>
            <hr>
            <div id="pics">
                No pictures found
            </div>
            <div class="upload">
                <input type="file" accept="image/*" name="" id="add_img" style="opacity:5">

                <input type="button" id="edit_profile" name="" value="Add Picture" class="btn">
            </div>
        </section>

        <!-- accomodation description box -->
        <section id="description" class="col-lg-6 col-md-6">
            <h3>Description</h3>
            <hr>
            <form action="profile.php" method="post">
            <textarea type="text" id="res_description" name="description"><?php echo $results['Description'] ?>
            </textarea>
            
            <input type="submit" id="update_des" value="Update" class="btn">
            </form>
        </section>

    </section>
</section>

<?php require "Footer.php" ?>

<script type="text/javascript" src="..\JavaScript_files\profile.js"></script>
</body>
</html>