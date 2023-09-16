<!doctype html>
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
            <li><a href="Diskon">Diskon</a></li>
            <li><a href="Wedding" class="active">Pernikahan</a></li>
            <li><a href="Acara">Acara</a></li>
            <li><a href="Fashion">Fashion</a></li>
            <li><a href="Editorial">Editorial</a></li>
            <!-- Tambahkan tautan lain di sini -->
        </ul>
    </nav>
    <header>
        <div class="nav container">
            <a href="#" class="logo">Syair moment</a>
            <i class="bx bxs-shopping-bags" id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title"> Your Cart</h2>
                <!--bagian dalam kartu-->
                <div class="cart-content">


                    <div class="cart-box">
                        <img src="image.jpg" alt="" class="cart-img">
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
    </header>
    <section class="shop container">
        <h2 class="section-title">Shop Produk</h2>

        <div class="shop-content">
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="images/bagian services (1).jpeg" alt="" class="product-img">
                <h2 class="product-title">fotografi</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>

            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">ga tau</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">Umam</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">rere</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">xira</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">lea</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">alaska</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
            <!-- bagian jasa pertama-->
            <div class="product-box">
                <img src="product1.jpg" alt="" class="product-img">
                <h2 class="product-title">geografi</h2>
                <span class="price">234.000</span>
                <i class="bx bxs-shopping-bags add-cart"></i>
            </div>
        </div>
    </section>

    <script src="js/main.js"></script>

</body>
       
</html>