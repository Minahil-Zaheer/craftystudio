/* ============================================
   WEBSITE SETTINGS
============================================ */

const WHATSAPP_NUMBER = "911234567890";

const INSTAGRAM_URL = "https://instagram.com/";

const FACEBOOK_URL = "https://facebook.com/";


/* ============================================
   PRODUCT DATABASE
============================================ */

const PRODUCTS = {

    "Crochet Teddy": {
        price: 799,
        category: "crochet",
        image: "https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=900&q=80"
    },

    "Crochet Flower": {
        price: 499,
        category: "crochet",
        image: "https://images.unsplash.com/photo-1598301257982-0cf014dabbcd?auto=format&fit=crop&w=900&q=80"
    },

    "Ribbon Rose Bouquet": {
        price: 999,
        category: "bouquet",
        image: "https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=900&q=80"
    },

    "Premium Ribbon Bouquet": {
        price: 1499,
        category: "bouquet",
        image: "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=900&q=80"
    },

    "Love Gift Box": {
        price: 1299,
        category: "hamper",
        image: "https://images.unsplash.com/photo-1608831540955-35094d48694a?auto=format&fit=crop&w=900&q=80"
    },

    "Birthday Hamper": {
        price: 1599,
        category: "hamper",
        image: "https://images.unsplash.com/photo-1549465220-1a8b9238cd48?auto=format&fit=crop&w=900&q=80"
    }

};


/* ============================================
   CART
============================================ */

function getCart() {

    return JSON.parse(
        localStorage.getItem("giftCart") || "[]"
    );

}


function saveCart(cart) {

    localStorage.setItem(
        "giftCart",
        JSON.stringify(cart)
    );

}


function updateCartCount() {

    const cart = getCart();

    const count = cart.reduce(
        (total, item) => total + Number(item.quantity),
        0
    );

    document
        .querySelectorAll(".cart-count")
        .forEach(element => {
            element.textContent = count;
        });

}


/* ============================================
   ADD TO CART
============================================ */

function addProductToCart(item) {

    const cart = getCart();

    cart.push(item);

    saveCart(cart);

    updateCartCount();

    showToast("Product added to cart!");

}


/* ============================================
   REMOVE CART ITEM
============================================ */

function removeCartItem(index) {

    const cart = getCart();

    cart.splice(index, 1);

    saveCart(cart);

    renderCart();

    updateCartCount();

}


/* ============================================
   CLEAR CART
============================================ */

function clearCart() {

    localStorage.removeItem("giftCart");

    renderCart();

    updateCartCount();

}


/* ============================================
   CART TOTAL
============================================ */

function getCartTotal() {

    const cart = getCart();

    return cart.reduce(
        (total, item) => total + Number(item.total),
        0
    );

}


/* ============================================
   RENDER CART
============================================ */

function renderCart() {

    const container =
        document.getElementById("cartItems");

    if (!container) return;


    const cart = getCart();


    if (cart.length === 0) {

        container.innerHTML = `

            <div class="empty-cart">

                <i class="bi bi-bag"></i>

                <h3 class="mt-4">
                    Your cart is empty
                </h3>

                <p class="text-muted">
                    Add something beautiful to your cart.
                </p>

                <a
                    href="products.html"
                    class="btn btn-main mt-3"
                >
                    Browse Products
                </a>

            </div>

        `;

        const summary =
            document.getElementById("cartSummary");

        if (summary) {
            summary.style.display = "none";
        }

        return;
    }


    const summary =
        document.getElementById("cartSummary");

    if (summary) {
        summary.style.display = "block";
    }


    let html = "";


    cart.forEach((item, index) => {

        html += `

            <div class="cart-item">

                <div class="row align-items-center">

                    <div class="col-md-2 col-4">

                        <img
                            src="${item.image}"
                            class="cart-img"
                            alt="${item.product}"
                        >

                    </div>


                    <div class="col-md-6 col-8">

                        <span class="product-category">
                            ${item.category}
                        </span>

                        <h4>
                            ${item.product}
                        </h4>

                        <p class="mb-1 small">
                            <strong>Color:</strong>
                            ${item.color}
                        </p>

                        <p class="mb-1 small">
                            <strong>Size:</strong>
                            ${item.size}
                        </p>

                        <p class="mb-1 small">
                            <strong>Style:</strong>
                            ${item.style}
                        </p>

                        <p class="mb-1 small">
                            <strong>Quantity:</strong>
                            ${item.quantity}
                        </p>

                        ${
                            item.message
                            ? `
                                <p class="mb-1 small">
                                    <strong>Message:</strong>
                                    ${item.message}
                                </p>
                            `
                            : ""
                        }

                        ${
                            item.giftWrap
                            ? `
                                <p class="mb-1 small">
                                    <strong>
                                        Gift Wrapping:
                                    </strong>
                                    Yes
                                </p>
                            `
                            : ""
                        }

                    </div>


                    <div class="col-md-4 mt-3 mt-md-0 text-md-end">

                        <div class="price mb-3">
                            ₹${item.total}
                        </div>

                        <button
                            class="btn btn-outline-danger btn-sm"
                            onclick="removeCartItem(${index})"
                        >
                            <i class="bi bi-trash"></i>
                            Remove
                        </button>

                    </div>

                </div>

            </div>

        `;

    });


    container.innerHTML = html;


    const totalElement =
        document.getElementById("cartTotal");

    if (totalElement) {

        totalElement.textContent =
            getCartTotal();

    }

}


/* ============================================
   WHATSAPP SINGLE PRODUCT
============================================ */

function orderSingleProduct(item) {

    let message = `

Hello! I would like to order a custom gift. 🎁

*Product:* ${item.product}

*Color:* ${item.color}

*Size:* ${item.size}

*Style:* ${item.style}

*Quantity:* ${item.quantity}

*Gift Wrapping:* ${item.giftWrap ? "Yes" : "No"}

*Personal Message:* ${item.message || "None"}

*Estimated Total:* ₹${item.total}

Please confirm the order and final price.

    `.trim();


    const url =
        `https://wa.me/${WHATSAPP_NUMBER}?text=` +
        encodeURIComponent(message);


    window.open(url, "_blank");

}


/* ============================================
   WHATSAPP CART CHECKOUT
============================================ */

function checkoutWhatsApp() {

    const cart = getCart();

    if (cart.length === 0) {

        alert("Your cart is empty.");

        return;

    }


    let message =
        "Hello! I would like to place an order. 🎁\n\n";


    cart.forEach((item, index) => {

        message +=
            `*${index + 1}. ${item.product}*\n`;

        message +=
            `Color: ${item.color}\n`;

        message +=
            `Size: ${item.size}\n`;

        message +=
            `Style: ${item.style}\n`;

        message +=
            `Quantity: ${item.quantity}\n`;

        message +=
            `Gift Wrapping: ${item.giftWrap ? "Yes" : "No"}\n`;

        if (item.message) {

            message +=
                `Message: ${item.message}\n`;

        }

        message +=
            `Price: ₹${item.total}\n\n`;

    });


    message +=
        `*Grand Total: ₹${getCartTotal()}*`;


    const url =
        `https://wa.me/${WHATSAPP_NUMBER}?text=` +
        encodeURIComponent(message);


    window.open(url, "_blank");

}


/* ============================================
   PRODUCT FILTER
============================================ */

function filterProducts(category, button) {

    const products =
        document.querySelectorAll(".product-item");


    products.forEach(product => {

        const productCategory =
            product.dataset.category;


        if (
            category === "all" ||
            productCategory === category
        ) {

            product.style.display = "";

        } else {

            product.style.display = "none";

        }

    });


    if (button) {

        document
            .querySelectorAll(".filter-btn")
            .forEach(btn => {
                btn.classList.remove("active");
            });


        button.classList.add("active");

    }

}


/* ============================================
   TOAST
============================================ */

function showToast(message) {

    const toast =
        document.getElementById("cartToast");


    if (!toast) {

        alert(message);

        return;

    }


    const body =
        toast.querySelector(".toast-body");


    body.textContent = message;


    const bootstrapToast =
        new bootstrap.Toast(toast);


    bootstrapToast.show();

}


/* ============================================
   SOCIAL LINKS
============================================ */

function setupSocialLinks() {

    document
        .querySelectorAll(".instagram-link")
        .forEach(link => {

            link.href = INSTAGRAM_URL;

        });


    document
        .querySelectorAll(".facebook-link")
        .forEach(link => {

            link.href = FACEBOOK_URL;

        });


    document
        .querySelectorAll(".whatsapp-link")
        .forEach(link => {

            link.href =
                `https://wa.me/${WHATSAPP_NUMBER}`;

        });

}


/* ============================================
   INITIALIZATION
============================================ */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        updateCartCount();

        renderCart();

        setupSocialLinks();

    }
);