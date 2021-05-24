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

<!-- Section used to align the page well -->
<section id="left" class="col-lg-4 col-md-4">
    <!-- Summary of profile -->
    <section id="profile_summary">
        <img id="profile_img" src="..\pictures\RichmondChill.jpeg"></img>
        <h2 id="res_title">Richmond</h2>
        <div id="email_title">Richmond@mail.com</div>
        <div id="tel_titile">011 564 7869</div>
        <input type="button" name="edit_profile_img" value="Change profile picture" class="btn">
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
            <span id="full_name" class="view">Richmond corner</span>
        </div>
        <div class="line">
            <label>Email</label>
            <span id="email" class="view">Richmond@gmail.com</span>
        </div>
        <div class="line">
            <label>Password</label>
            <span id="password" class="view">*********</span>
        </div>
        <div class="line">
            <label>Telephone</label>
            <span id="phone" class="view">0820488989</span>
        </div>
        <div class="line">
            <label>Price</label>
            <span id="price" class="view">R3500</span>
        </div>
        <div class="line">
            <label>Campus</label>
            <span id="campus" class="view">APB</span>
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
        <form>
        <div class="line">
            <label>Full name</label>
            <input type="text" name="full_name" class="edit">
        </div>
        <div class="line">
            <label>Email</label>
            <input type="text" name="email" class="edit">
        </div>
        <div class="line">
            <label>Password</label>
            <input type="text" name="password" class="edit">
        </div>
        <div class="line">
            <label>Telephone</label>
            <input type="text" name="telephone" class="edit">
        </div>
        <div class="line">
            <label>Price</label>
            <input type="text" name="price" class="edit">
        </div>
        <div class="line">
            <label class="edit">Campus</label>
            <select name="campus" class="edit" style="width:150px">
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
            <input type="button" name="add_pic" value="Add Picture" class="btn">
        </section>

        <!-- accomodation description box -->
        <section id="description" class="col-lg-6 col-md-6">
            <h3>Description</h3>
            <hr>
            <textarea type="text" id="res_description">This is all about your accodation
            </textarea>
            <input type="button" id="update_des" value="Update" class="btn">
        </section>
    </section>
</section>

<?php require "Footer.php" ?>

<script type="text/javascript" src="..\JavaScript_files\profile.js"></script>
</body>
</html>