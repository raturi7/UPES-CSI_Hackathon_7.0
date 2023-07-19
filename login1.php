
<!-- Sumbit your own idea -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css"
        integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="reg-style.css" type="text/css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../html/assets/img/logo with circle.png">


    <title>Login Page for Problem Statement Submition</title>
</head>

<body class="ts-theme-dark">

    <div class="reg-page-header">
        <span>Login Here</span>
    </div>

    <section id="reg-page" class="row">

        <div class="page ts-theme-dark col">
            <div class="glass" style="--i:0;"></div>
            <div class="glass" style="--i:1;"></div>
            <div class="glass" style="--i:2;"></div>
            <div class="glass" style="--i:3;"></div>
            <div class="glass" style="--i:4;"></div>
            <div class="glass" style="--i:5;"></div>

            <div class="container">
                <div class="form">
                    <?php
                                            
                        if(isset($_GET['error'])) {
                            echo '<p class="error">'.$_GET['error'].'</p>';
                          }
                            if(isset($_GET['success'])) {
                                echo '<p class="success">'.$_GET['success'].'</p>';
                            }
                            if(isset($_GET['error1'])){
                                echo '<p class="error1">'.$_GET['error1'].'</p>';
                            }
                        ?>
                    <form action="login.php" method="post" >
                        
                        <h2>Enter Your Credentials</h2>

                        <div class="inputBx">
                            <input type="text1" required="required" name="hackathon_id">
                            <span>Enter Your Team hackathon Id</span>
                        </div>

                        <div class="inputBx">
                            <input type="password" required="required" name="password">
                            <span>Enter Your Password</span>
                        </div>
                        
                    


                        <button class="reg-btn" type="sumbit" name="sumbit" style="color: #fff;">Login</button>

                    </form>
                    <!-- <div class="help">
                        <p>Having trouble? <u><a href="../Hackathon 7.0.html/#faq">Check FAQs</a></u></p>
                        <p>Need Technical Assistance? <u><a href="#">Contact Technical Team</a></u></p>
                    </div> -->
                </div>
            </div>

        </div>
    </section> 


    <div class="ts-background ts-shapes-canvas position-fixed ts-separate-bg-element" data-bg-color="#00265f">
        <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/14.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/13.png"></div>
        <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/12.png" data-bg-opacity=".3">
        </div>
        <div class="ts-background-image ts-animate ts-scale" data-bg-image="assets/img/bg/11.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/10.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/9.png" data-bg-opacity=".8">
        </div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/8.png" data-bg-opacity=".8">
        </div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/7.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/6.png" data-bg-opacity=".8">
        </div>
        <div class="ts-background-image ts-animate" data-bg-image="assets/img/bg/5.png" data-bg-opacity=".8"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/4.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/3.png" data-bg-opacity=".8">
        </div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/2.png"></div>
        <div class="ts-background-image ts-animate ts-bounce" data-bg-image="assets/img/bg/1.png" data-bg-opacity=".8">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>

    <script src="assets/js/custom.js"></script>

    <script>
        var latitude = 34.038405;
        var longitude = -117.946944;
        var markerImage = "assets/img/map-marker.png";
        var mapElement = "map";
        var mapStyle = [{ "featureType": "all", "elementType": "labels.text.fill", "stylers": [{ "saturation": 36 }, { "color": "#000000" }, { "lightness": 40 }] }, { "featureType": "all", "elementType": "labels.text.stroke", "stylers": [{ "visibility": "on" }, { "color": "#000000" }, { "lightness": 16 }] }, { "featureType": "all", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "administrative", "elementType": "geometry.fill", "stylers": [{ "color": "#000000" }, { "lightness": 20 }] }, { "featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{ "color": "#000000" }, { "lightness": 17 }, { "weight": 1.2 }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 20 }] }, { "featureType": "poi", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 21 }] }, { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{ "color": "#000000" }, { "lightness": 17 }] }, { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#000000" }, { "lightness": 29 }, { "weight": 0.2 }] }, { "featureType": "road.arterial", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 18 }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 16 }] }, { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 19 }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#000000" }, { "lightness": 17 }] }]
        google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapStyle, mapElement));

    </script>

    <script src="../../html/assets/js/navbar.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"
        integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>