<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout card</title>

    <link rel="stylesheet" href="css/wedding.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>


    <body>
    <nav>
        <ul>
            <li><a href="services">Service</a></li>
            <li><a href="Diskon" class="active">Diskon</a></li>
            <li><a href="Wedding">Pernikahan</a></li>
            <li><a href="Acara">Acara</a></li>
            <li><a href="Fashion">Fashion</a></li>
            <li><a href="Editorial">Editorial</a></li>
        </ul>
    </nav>
    <header>
        <div class="nav container">
            <a href="#" class="logo">Syair moment</a>
            <i class="bx bxs-shopping-bags" id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title">Kartu Pesanan</h2>
                <!--bagian dalam kartu-->
                <div class="cart-content">


                    <div class="cart-box">
                        <div class="detail-box">
                            <div class="cart-product-title"></div>
                            <div class="cart-price">0</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div>
                        <!--tanda unutuk menghapus belanjaan-->
                        <i class="bx bx-trash cart-remove"></i>
                    </div>
                </div>
                <!--total belanjaan-->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">0</div>
                </div>
                <!--dapatkan sekarang-->
                <button type="button" class="btn buy">Dapatkan Sekarang</button>
                <!--penutup kartu-->
                <i class="bx bx-x" id="close-cart"></i>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>Malaysia</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Acara kelulusan</a></h3>
                                <div class="price ml-auto">
                                    <span>7.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>

                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>Switzerland</span>
                        </span>

                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Video & Foto Editing</a></h3>
                                <div class="price ml-auto">
                                    <span>3.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



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