<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wedding.css">

    <title>Syair Moment</title>
</head>

    <body>
    <nav>
        <ul>
            <li><a href="services">Service</a></li>
            <li><a href="Diskon">Diskon</a></li>
            <li><a href="Wedding">Pernikahan</a></li>
            <li><a href="Acara">Acara</a></li>
            <li><a href="Fashion" class="active">Fashion</a></li>
            <li><a href="Editorial">Editorial</a></li>
            <!-- Tambahkan tautan lain di sini -->
        </ul>
    </nav>


    <section class="services-section">
        <div class="service">
            <h2>Fotografi</h2>
            <img src="images/fashion-photo.jpg" alt="Layanan Fotografi"  class="gambar-fotografi">
            <p>Harga: $200</p>
            <button onclick="addToCart('Fotografi', 200)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
        </div>
        <div class="service">
            <h2>Fotografi</h2>
            <img src="images/fashion 1.jpg" alt="Layanan Fotografi"  class="gambar-fotografi">
            <p>Harga: $300</p>
            <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
        </div>
    </section>


    <section class="services-section">
        <div class="service">
            <h2>Videografi</h2>
            <video controls width="300">
                    <source src="video/fashion-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <p>Harga: $400</p>
            <button onclick="addToCart('Videografi', 400)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
        </div>
        <div class="service">
            <h2>Drone</h2>
            <img src="images/fashion-photo-drone.jpg" alt="Layanan Fotografi" class="gambar-fotografi">
            <p>Harga: $150</p>
            <button onclick="addToCart('Fotografi', 150)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
        </div>
    </section>


        <div id="cart">
            <h2>Keranjang Belanja</h2>
            <ul id="cart-items">
                <!-- Item keranjang akan ditampilkan di sini -->
            </ul>
            <p>Total: <span id="cart-total">$0</span></p>
            <button onclick="checkout()">Checkout</button>
        </div>

        <script>
            let cartItems = [];
            let cartTotal = 0;

            function addToCart(itemName, price) {
                cartItems.push(itemName);
                cartTotal += price;
                updateCart();
            }

            function updateCart() {
                const cartList = document.getElementById('cart-items');
                cartList.innerHTML = '';
                cartItems.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    cartList.appendChild(li);
                });
                const cartTotalElement = document.getElementById('cart-total');
                cartTotalElement.textContent = '$' + cartTotal;
            }

            function checkout() {
                // Proses checkout
                alert(`Total belanja: $${cartTotal}. Terima kasih telah berbelanja!`);
                cartItems = [];
                cartTotal = 0;
                updateCart();
            }
        </script>
    </section>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/daterangepicker.js"></script>

  <script src="js/typed.js"></script>
  
  <script src="js/custom.js"></script>
    </body>
</html>