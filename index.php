<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <!-- main CSS file for this page -->
    <link rel="stylesheet" href="css_files\HomePage.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css_files\Bootstrap_css\bootstrap.min.css">

</head>
<body id="body">

    <header class="row">
        <!-- Added div to align logo with 12 grid system -->
        <div class="col-lg-3">
           <img src="pictures\logoNew.jpeg" id="logoImg"> 
           <span id="resName">MyRes</span>
       </div>
       <input type="text" id="searchRes" class="col-lg-1">
       <img src="pictures\search.png" id="searchSymbol" class="col-lg-1">
       <!-- Added div to all links with 12 grid system -->
       <div class="row col-lg-6">
           <a href="" class="col-lg-3">Contacts</a>
           <a href="" class="col-lg-3">About us</a>
           <a href="" class="col-lg-3">Add Res</a>
           <button id="loginButton" class="col-lg-3">Login</button>
       </div>
    </header>

    
    
    <!-- filters section -->
   <section id="filters">
        <h3>Filters</h3>

        <h4>Location</h4>
        <button class="locationButtons" onclick="byTown()">By Town</button>
        <button class="locationButtons" onclick="byCampus()">By Campus</button>
        <br>
        <!-- Location based on towns code -->
        <div id="towns" class="show">
            <input type="checkbox" id="aukland">
            <label for="aukland">Aukland Park</label>
            <br>
            <input type="checkbox" id="newtown">
            <label for="newtown">Newtown</label>
            <br>
            <input type="checkbox" id="bramfontein">
            <label for="bramfontein">Bramfontein</label>
            <br>
            <input type="checkbox" id="maboneg">
            <label for="maboneng">Maboneng</label>
            <br>
            <input type="checkbox" id="doornfontein">
            <label for="aukland">Doornfontein</label>
            <br>
            <input type="checkbox" id="melvile">
            <label for="melvile">Melvile</label>
        </div>
        <!-- Locations based on campuses -->
        <div id="campuses" class="hide">
            <form>
                <input type="radio" id="apb" name="apb" value="apb">
                <label for="apb">APB</label><br>
                <input type="radio" id="dfc" name="dfc" value="dfc">
                <label for="dfc">DFC</label><br>
                <input type="radio" id="apk" name="apk" value="apk">
                <label for="apk">APK</label><br>
                <input type="radio" id="swc" name="swc" value="swc">
                <label for="swc">SWC</label>
            </form>
        </div>

        <hr>
        <!-- choose price filter -->
        <h4>Price Ranges</h4>
        <input type="text" value="Minimum Price" id="minPrice" class="price" onmousedown="minPrice()">
        <input type="text" value="Maximum Price" id="maxPrice" class="price" onmousedown="maxPrice()">
        <br>
        <input type="range" min="100" max="10000" value="5000" id="priceRange" oninput="rangeInput()">

        <hr>
        <!-- Choosing the prefferd number of rooms -->
        <h4>Rooms</h4>
        <input type="checkbox" id="single">
        <label for="single">Single</label>
        <br>
        <input type="checkbox" id="sharing2">
        <label for="sharing2">Sharing(2-4)</label>
        <br>
        <input type="checkbox" id="sharing3">
        <label for="sharing3">Sharing(4-8)</label>
        <br>

        <hr>
        <!-- Options to choose to choose acoording to rating -->
        <h4>Ratings</h4>
        <!-- change -->
        <form method="" action="">
            <input type="checkbox" id="5star">
            <label for="5star">&#9733 &#9733 &#9733 &#9733 &#9733</label>
            <br>
            <input type="checkbox" id="4star">
            <label for="4star">&#9733 &#9733 &#9733 &#9733</label>
            <br>
            <input type="checkbox" id="3star">
            <label for="3star">&#9733 &#9733 &#9733</label>
            <br>
            <input type="checkbox" id="1star">
            <label for="1star">&#9733</label>
        </form>
    </section>

    <!-- container to display reses -->
    <section id="searchResults" class="row">
        <!-- Each article show one res -->
        <article class="col-lg-4 col-md-6 col-sm-12">
            <b>Display Res 1</b>
            <br>
            <a href="..\html_files\respage.html" class="viewButton">View Res</a>
        </article>
        <article class="col-lg-4 col-md-6 col-sm-12">
            <b>Display Res 2</b>
            <br>
            <a href="..\html_files\respage.html" class="viewButton">View Res</a>
        </article>
        <article class="col-lg-4 col-md-6 col-sm-12">
            <b>Display Res 3</b>
            <br>
            <a href="..\html_files\respage.html" class="viewButton">View Res</a>
        </article>
        <article class="col-lg-4 col-md-6 col-sm-12">
            <b>Display Res 4</b>
            <br>
            <a href="..\html_files\respage.html" class="viewButton">View Res</a>
        </article>
    </section>

    <hr>
     <!--The Res SlideShow Pictures-->
    <div class ="ReSlideShow">

        <div class="Res">
            <div class="number fades">1 / 3</div>
            <img src="pictures\kingsway place.jpg" width = 100%>
            <div class="caption">Caption Text</div>
          </div>
        
          <div class="Res">
            <div class="number fades">2 / 3</div>
            <img src="pictures\richmondRooms.jpg"  width = 100%>
            <div class="caption">Caption Two</div>
          </div>
        
          <div class="Res">
            <div class="number fades">3 / 3</div>
            <img src="pictures\studyRoom.jpg" width = 100% >
            <div class="caption">Caption Three</div>
          </div>

          <a class="before" onclick="plusSlides(-1)">&#10094;</a>
          <a class="after" onclick="plusSlides(1)">&#10095;</a>

         </div>

        <br>

        <div decoration = "text-align:center">
            <span class="bullet" onclick="currentSlide(1)"></span>
            <span class="bullet" onclick="currentSlide(2)"></span>
            <span class="bullet" onclick="currentSlide(3)"></span>
          </div>


    
        


    </div>
    

    <!-- footer information -->
 <footer>
       <input type="image" src="Icons\email.png" width = "30px" height = "30px" class="emailicons" /></P>
       <input type="image" src="Icons\telephone.png" width = "30px" height = "30px" class="tel" /></P>
       <input type="image" src="Icons\insta.png" width = "30px" height = "30px"class="insta" /></P>
       <input type="image" src="Icons\twitter.png" width = "30px" height = "30px" class="twitter" /></P>
       <input type="image" src="Icons\YouTube.png" width = "30px" height = "30px" class="youtube" /></P>

       <br>
       <div class="links">
       <a href="">Privacy Policy |</a>
       <a href="">Cookie Policy |</a>
       <a href="">Terms & Conditions</a>
       </div>
       <br>
       <P class="copyrights"><img src="Icons\copyright.png" alt="Copyright" width = "20px" height = "20px" >2021 MyRes. All Rights Reserved </P>
  </footer>

<script type="text/javascript" src="javaScript_files\homePage.js"></script>
<script type="text/javascript" src="JavaScript_files\index_slide.js"></script>

</body>
</html>