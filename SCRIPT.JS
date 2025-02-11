const categories = {
    Drinks: [
        { name: "Tea" },
        { name: "Coffee" },
        { name: "Milk" },
        { name: "Coldrink" },
    ],
    Sweets: [
        { name: "Ice Cream" },
        { name: "Waffle" },
        { name: "Brownie" },
        { name: "Cakes" },
    ],
    Starters: [
        { name: "Paneer chz" },
        { name: "Grilled" },
        { name: "Veg Starter" },
        { name: "Non-Veg Starter" },
    ],
    Main: [
        { name: "Rice" },
        { name: "Roti/Paratha" },
        { name: "Dal" },
        { name: "Curry" },
    ],
    Junk: [
        { name: "Fries" },
        { name: "Pizza" },
        { name: "Burgers" },
        { name: "Sandwich" },
    ],
    Salads: [
        { name: "Green Salad" },
        { name: "Cobb Salad" },
        { name: "Fruit Salad" },
        { name: "Veggie Salad" },
    ],
};

// Function to display items in a selected category
function displayItems(category) {
    const itemsContainer = document.getElementById("items-container");
    itemsContainer.innerHTML = ""; // Clear previous items

    categories[category].forEach((item) => {
        const itemDiv = document.createElement("div");
        itemDiv.classList.add("item");
        itemDiv.innerHTML = `
            <h3>${item.name}</h3>
            <button onclick="addToCart('${item.name}')">Add to Cart</button>
        `;
        itemsContainer.appendChild(itemDiv);
    });
}

// Function to add an item to the cart
function addToCart(itemName) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "addToCart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("Item added to cart: " + itemName);
        } else {
            alert("Error adding item to cart");
        }
    };

    xhr.onerror = function () {
        alert("Request failed");
    };

    xhr.send("item_name=" + encodeURIComponent(itemName));
}
