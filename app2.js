let openShopping = document.querySelector('.nav-icon a');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.products');
let listCard = document.querySelector('.cart-items');
let body = document.querySelector('body');
let total = document.querySelector('.total-price');
let quantity = document.querySelector('.cart-quantity');

openShopping.addEventListener('click', () => {
    body.classList.add('active');
});

closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
});

let products = [
    {
        name: 'v8 cap',
        image: '4507047660010.webp',
        price: 15,
    },
    {
        name: 'Cars Neon Tee',
        image: '5007048020063.webp',
        price: 20,
    },
    {
        name: 'Neon Hoodie',
        image: '5004057810084-1.webp',
        price: 30,
    },
    {
        name: 'Disney Watch',
        image: '1907106850281.webp',
        price: 50,
    },
    {
        name: 'Water Bottle',
        image: '6402106516421-3.webp',
        price: 18,
    },
    {
        name: 'Castle Locket',
        image: '4300057260022.webp',
        price: 12,
    },
    {
        name: 'Train Set',
        image: '1715036514892.webp',
        price: 80,
    },
    {
        name: 'Disney Bag',
        image: '4203106060042.webp',
        price: 100,
    },
    {
        name: 'Lego Castle',
        image: '6005047093670.webp',
        price: 200,
    },
    {
        name: 'Mickey Safari Shirt',
        image: '5205057810020.webp',
        price: 50,
    },
    // Add more products as needed
];


let cartItems = [];

function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('row');
        newDiv.innerHTML = `
            <img src="css/image/${value.image}" alt="">
            <div class="heart-icon">
                <i class='bx bx-heart'></i>
            </div>
            <div class="rating">
                <i class='bx bxs-star-half'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxs-star'></i>
            </div>
            <div class="price">
                <h4>${value.name}</h4>
                <p>$${value.price}</p>
                <button onclick="addToCart(${key})">Add To Cart</button>
            </div>`;
        list.appendChild(newDiv);
    });
}

initApp();

function addToCart(key) {
    if (cartItems[key] == null) {
        cartItems[key] = JSON.parse(JSON.stringify(products[key]));
        cartItems[key].quantity = 1;
    }
    reloadCart();
}

function reloadCart() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    cartItems.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('div');
            newDiv.classList.add('cart-item');
            newDiv.innerHTML = `
                <img src="css/image/${value.image}" alt="">
                <div class="item-info">
                    <h4>${value.name}</h4>
                    <p> $ ${value.price.toLocaleString()}</p>
                    <div class="btn">
                        <button class="cq" onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                        <div class="count">${value.quantity}</div>
                        <button class="cq" onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                    </div>
                </div>`;
            listCard.appendChild(newDiv);
        }
    });
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}

function changeQuantity(key, quantity) {
    if (quantity == 0) {
        delete cartItems[key];
    } else {
        cartItems[key].quantity = quantity;
        cartItems[key].price = quantity * products[key].price;
    }
    reloadCart();
}
let grandTotalElement = document.querySelector('.grand-total'); // Replace '.grand-total' with the correct selector for your grand total element

grandTotalElement.addEventListener('click', function() {
    updateGrandTotalInDatabase();
});
function updateGrandTotalInDatabase() {
    let grandTotal = total.innerText.replace(',', ''); // Assuming 'total' is your total price element

    // Create the AJAX request
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "update_grand_total.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (this.status == 200) {
            console.log("Response received: ", this.responseText);
        }
    };

    xhr.send("grandTotal=" + grandTotal);
}