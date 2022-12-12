<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Artisan</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php include "./zconfig.php" ?>">
    <link rel="stylesheet" type="text/css" href="./css/external.css?v=<?php include "./zconfig.php" ?>">

    <!-- Google Fonts Start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php include "./components/module/sessionHolder.php" ?>

<body>
    <div class="main bg-p-5 position-relative">

        <!-- Navbar Starts Here -->
        <?php include "./components/interface/navbar.php" ?>
        <!-- Navbar Ends Here -->


        <!-- Abous Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <p class="heading-text heading-p-text" style="font-size: 2.5rem;">About Us</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nemo nihil eligendi commodi possimus numquam aut fugiat aperiam saepe, itaque, non exercitationem enim expedita illo delectus quo. Excepturi iste officiis asperiores at maiores ea id iusto dignissimos. Ipsum, consectetur reiciendis quis quibusdam consequuntur deserunt temporibus iusto ipsam repellat facilis rem vero, consequatur cumque expedita provident sit nesciunt maxime harum porro pariatur, reprehenderit nulla soluta ex fugiat! Et nisi aut consequuntur omnis distinctio tempore reiciendis delectus itaque, saepe commodi illo accusamus id beatae aspernatur quam possimus facere rerum porro incidunt veritatis iusto inventore veniam expedita? Rerum fugit vitae repudiandae quos nesciunt!</p>
                </div>

            </div>
        </div>
        <!-- Abous Us Ends Here -->



        <!-- Grid Images Starts -->
        <div class="min-vh-100">
            <div class="section">
                <div class="small-section">
                    <div class="row text-white">
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show3.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Songs</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Performance</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show2.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="overflow-hidden p-1">
                                <img class="grid-image" src="./image/show1.jpg">
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="text-section">
                                <h1>Cultural Theme</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quos quia! Aperiam delectus obcaecati suscipit id deserunt consectetur quisquam iste soluta perferendis ea, vero odio distinctio corporis excepturi voluptatibus nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Grid Images Ends Here -->



        <!-- Contact Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <p class="heading-text heading-p-text">Contact Us</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus libero aperiam, assumenda corporis enim, alias voluptatibus aspernatur corrupti magni nostrum distinctio. Ab commodi veritatis possimus quidem velit nihil necessitatibus natus suscipit. Earum optio, nisi assumenda at, quia a nostrum laboriosam voluptatum accusantium dolorum accusamus ipsum voluptatem, molestias beatae sed soluta.</p>
                    <p>Contact us to get to know more details about the show and venue, Contact No: +1-202-555-0113</p>
                </div>
            </div>
        </div>
        <!-- Contact Us Ends Here -->
        



        <!-- Venue Us Starts -->
        <div class="text-white">
            <div class="section">
                <div class="small-section">
                    <div class="all-texts">
                        <p class="heading-text heading-p-text">Venue</p>
                        <p>Our venue is in USA, Texas. We have world wide branches in many other countries - France, Italy, Germany, Poland, Spain and countries in Asia Continent.</p>
                    </div>
                    <div class="d-flex flex-wrap gap-2 pb-2">
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://theculturetrip.com/wp-content/uploads/2021/03/pedro-lastra-nyvq2juw4_o-unsplash.jpg">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://www.expatica.com/app/uploads/sites/5/2014/05/france-1920x1080.jpg">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-g25sDBFgulX5BISHLSClfG_hSHgPqVxdGQ&usqp=CAU">
                        </div>
                        <div class="overflow-hidden image-hover position-relative">
                            <div class="position-absolute start-0 end-0 bottom-0 top-0" style="background-color: rgba(53, 53, 53, 0.397); z-index: 1;"></div>
                            <img class="small-image" src="https://www.planetware.com/wpimages/2020/01/germany-in-pictures-beautiful-places-to-photograph-speicherstadt-hamburg.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Venue Us Ends Here -->



        <!-- FOOTER Starts Here -->
        <?php include './components/interface/footer.php' ?>
        <!-- FOOTER Ends -->







    </div>
</body>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>