
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>GDS-HomePage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/DBMSProject/src/css/style.css">
    <!-- For svg icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <!-- for JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- For GoogleMapAPI -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuuJY4wUImeCOpw2WIiIF_fKsXzRbG6Ok&libraries=places"
        defer></script>
</head>

<body>
    <div class="root">
        <video autoplay loop muted plays-inline class="background-video" id="background-video">
            <source src="/DBMSProject/Video/pexels-tima-miroshnichenko-6170605.mp4" type="video/mp4">
        </video>
        <div class="nav">
            <nav>
                <div class="logo"><span id="brand">GDS</span><span id="logo-span"></span></div>
                <input type="checkbox" id="click">
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="#">Home</a></li>
                    <li><a href="Signup-in.php">Login/Sign up</a></li>
                    <li><a href="bac1.php">Become a Provider</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="puf-main" id="puf-main">
            <div class="dv-header-promo-grey">
                <h1 class="heading">Business delivery<br>you can trust</h1>
                <p class="description">Fast intracity courier delivery service. We make delivery for businesses easier
                </p>
            </div>
            <div class="puf">
                <svg class="pin-icon-pu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pin-map" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                    <path fill-rule="evenodd"
                        d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                </svg>
                <input type="text" id="Pick-up" placeholder="Pick-up" class="LandingMiniFormAddress" value="">
                <svg class="pin-icon-d" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                    <path fill-rule="evenodd"
                        d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                </svg>
                <input type="text" id="Drop-off" placeholder="Drop-off" class="LandingMiniFormAddress" value="">
                <a id="price_calc">
                    <span id="price_calc_span" onclick="getPrice()">CALCULATE PRICE</span>
                    <div class="liquid"></div>
                </a>
                
            </div>
        </div>
    </div> <!--Root div-->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="/DBMSProject/src/javascript/js.js"></script>
</body>
</html>