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
    // ...

    var removeCartButtons = document.getElementsByClassName('cart-remove');
    for (var i = 0; i < removeCartButtons.length; i++) {
        var button = removeCartButtons[i];
        button.addEventListener("click", removeCartItem); // Tambahkan event listener untuk setiap tombol "trash"
    }

    // ...
}


// merubah jumlah/quantity
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


// Tombol membeli
function buyButtonClicked() {
    alert('Pesanan Anda telah ditempatkan.');
    var cartContent = document.getElementsByClassName("cart-content")[0];
    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updateTotal();
}
// Ambil elemen tombol "Dapatkan Sekarang"
const buyButton = document.querySelector('.btn.buy');

// Ambil elemen pesan "Terima kasih"
const thankYouMessage = document.getElementById('thank-you-message');

// Tambahkan event listener untuk tombol "Dapatkan Sekarang"
buyButton.addEventListener('click', function() {
    // Tampilkan pesan "Terima kasih"
    thankYouMessage.classList.remove('hidden');
});

// Fungsi untuk menghapus item keranjang
function removeCartItem(event) {
    var buttonClicked = event.target;
    var cartItem = buttonClicked.parentElement; // Ini adalah elemen cart-box yang akan dihapus
    cartItem.remove();
    updateTotal();
}



// Merubah quantity
function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateTotal();
}

// Menambahkan item ke keranjang
function addCartClicked(event) {
    var button = event.target;
    var shopProduct = button.parentElement;
    var title = shopProduct.getElementsByClassName("product-title")[0].innerText;
    var price = shopProduct.getElementsByClassName("price")[0].innerText;
    var productImg = shopProduct.getElementsByClassName("product-img")[0].src; // Menggunakan src untuk mendapatkan URL gambar
    addProductToCart(title, price, productImg);
    updateTotal();
}

function addProductToCart(title, price, productImg) {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");

    // Periksa apakah item sudah ada dalam keranjang
    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var cartProductTitle = cartBox.getElementsByClassName("cart-product-title")[0];
        if (cartProductTitle.innerText === title) {
            alert("Anda sudah menambahkan item ini ke keranjang.");
            return;
        }
    }

    // Buat elemen baru untuk item yang akan ditambahkan
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add("cart-box");

    var cartBoxContent = `
        <img src="${productImg}" alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title}</div>
            <div class="cart-price">${price}</div>
            <input type="number" value="1" class="cart-quantity">
        </div>
        <!-- Tanda untuk menghapus belanjaan -->
        <i class="bx bx-trash cart-remove"></i>`;

    cartShopBox.innerHTML = cartBoxContent;

    // Menambahkan elemen item ke keranjang
    cartContent.appendChild(cartShopBox);

    // Menambahkan event listener untuk tombol remove dan quantity input di elemen baru
    cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener('click', removeCartItem);
    cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener('change', quantityChanged);
}

function updateTotal() {
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;

    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("Rp.", ""));
        var quantity = quantityElement.value;
        total += price * quantity;
    }

    total = Math.round(total * 100) / 100;
    document.getElementsByClassName("total-price")[0].innerText = 'Rp.' + total;

    if (total === 0) {
        document.getElementsByClassName("total-price")[0].innerText = 'Rp.0.00'; // Mengatur total ke $0.00 jika tidak ada item dalam keranjang
    }
}