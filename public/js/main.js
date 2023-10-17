// Ambil elemen .cart
const cartElement = document.querySelector('.cart');

// Ambil elemen ikon keranjang
const cartIcon = document.getElementById('cart-icon');

// Ambil elemen tombol penutup
const closeCart = document.getElementById('close-cart');

// Tambahkan event listener untuk membuka .cart saat ikon diklik
cartIcon.addEventListener('click', () => {
    cartElement.classList.add("active"); // Tambahkan kelas "active" untuk menampilkan .cart
});

// Tambahkan event listener untuk menutup .cart saat tombol penutup diklik
closeCart.addEventListener('click', () => {
    cartElement.classList.remove("active"); // Hapus kelas "active" untuk menyembunyikan .cart
});

// Menunggu dokumen untuk dimuat
if (document.readyState == 'loading') {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

// Mengikat event handler
function ready() {
    // Temukan semua elemen .add-cart
    var addCartButtons = document.querySelectorAll('.add-cart');

    // Loop melalui setiap tombol "Tambahkan ke Keranjang"
    addCartButtons.forEach(function(button) {
        // Tambahkan event listener untuk setiap tombol
        button.addEventListener('click', function() {
            // Temukan elemen .product-box terkait
            var productBox = button.closest('.product-box');

            // Dapatkan judul video dari elemen .product-title
            var videoTitle = productBox.querySelector('.product-title').textContent;

            // Dapatkan URL video dari atribut data
            var videoSrc = productBox.getAttribute('data-video-src');

            // Tambahkan judul dan URL video ke dalam keranjang
            addToCart(videoTitle, videoSrc);
        });
    });

    var removeCartButtons = document.getElementsByClassName('cart-remove');
    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem); // Tambahkan event listener untuk setiap tombol "trash"
    }

    // ...

    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    var addCartButtons = document.getElementsByClassName("add-cart");
    for (var i = 0; i < addCartButtons.length; i++) {
        var button = addCartButtons[i];
        button.addEventListener("click", addCartClicked);
    }

    document.getElementsByClassName("btn-buy")[0].addEventListener("click", buyButtonClicked);

    // Fungsi untuk menambahkan item ke dalam keranjang (disesuaikan sesuai kebutuhan Anda)
    function addToCart(title, videoSrc) {
        // Di sini Anda dapat melakukan tindakan yang sesuai dengan kebutuhan Anda, seperti menampilkan pesan, menyimpan judul dan URL video dalam array, dll.
        alert('Anda telah menambahkan item dengan judul: ' + title + ' ke dalam keranjang.');
        // Anda juga dapat mengakses URL video jika diperlukan.
        console.log('URL video: ' + videoSrc);
    }
}

// Fungsi untuk menghapus item keranjang
function removeCartItem(event) {
    var buttonClicked = event.target;
    var cartItem = buttonClicked.parentElement; // Ini adalah elemen cart-box yang akan dihapus
    cartItem.remove();
    updateTotal();
}

// Fungsi untuk mengubah jumlah/quantity
function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateTotal();
}

// Fungsi untuk menambahkan item ke keranjang
function addCartClicked(event) {
    var button = event.target;
    var shopProduct = button.parentElement;
    var title = shopProduct.querySelector(".product-title").textContent;
    var price = shopProduct.querySelector(".price").textContent;
    var videoSrc = shopProduct.getAttribute('data-video-src');
    addProductToCart(title, price, videoSrc);
    updateTotal();
}

function addProductToCart(title, price, videoSrc) {
    var cartContent = document.querySelector(".cart-content");
    var cartBoxes = cartContent.querySelectorAll(".cart-box");

    // Periksa apakah item sudah ada dalam keranjang
    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var cartProductTitle = cartBox.querySelector(".cart-product-title").textContent;
        if (cartProductTitle === title) {
            alert("Anda sudah menambahkan item ini ke keranjang.");
            return;
        }
    }

    // Buat elemen baru untuk item yang akan ditambahkan
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add("cart-box");

    var cartBoxContent = `
        <img src="${videoSrc}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart-price">${price}</div>
        </div>
        <!-- Tanda untuk menghapus belanjaan -->
        <i class="bx bx-trash cart-remove"></i>`;

    cartShopBox.innerHTML = cartBoxContent;

    // Menambahkan elemen item ke keranjang
    cartContent.appendChild(cartShopBox);

    // Menambahkan event listener untuk tombol remove di elemen baru
    cartShopBox.querySelector(".cart-remove").addEventListener('click', removeCartItem);
}

// Tombol membeli
function buyButtonClicked() {
    alert('Pesanan Anda telah ditempatkan.');
    var cartContent = document.querySelector(".cart-content");
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
}

function updateTotal() {
    var cartContent = document.querySelector('.cart-content');
    var cartBoxes = cartContent.querySelectorAll('.cart-box');
    var total = 0;

    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.querySelector(".cart-price").textContent;
        total += parseFloat(priceElement.replace("Rp.", "").replace(",", "")); // Ubah harga menjadi angka dan tambahkan ke total
    }

    total = Math.round(total * 100) / 100;
    document.querySelector(".total-price").textContent = 'Rp.' + total.toFixed(2);

    if (total === 0) {
        document.querySelector(".total-price").textContent = 'Rp.'; // Mengatur total ke Rp. 0.00 jika tidak ada item dalam keranjang
    }
}