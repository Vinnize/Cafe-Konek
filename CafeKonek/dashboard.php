<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Cafe Konek</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

    <header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>

      <a href="#" class="logo">Cafe Konek<span>.</span></a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">menu</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
  <a href="#" id="cart-icon" class="fas fa-shopping-cart">
    <span id="cart-counter">0</span>
  </a>
  <a href="#" class="fas fa-user"></a>
  <a href="logout.php" class="fas fa-sign-out-alt"></a>
</div>



    </header>

    <section class="cart-modal" id="cart-modal">
  <div class="cart-content">
    <span class="close" id="close-cart">&times;</span>
    <h2>Shopping Cart</h2>
    <ul id="cart-items"></ul>
    <p>Total: <span id="cart-total">₱0</span></p>
    <a href="#" class="btn" id="checkout-btn">Proceed to Checkout</a>
    <a href="#" class="btn" id="back-to-products">Back to Products</a>
  </div>
</section>


   

    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>CAFE KONEK</h3>
          <span>
           If it's worth savoring, it's worth savoring perfectly.
          </span>

          <a href="#products" class="btn">shop now</a>
        </div>
      </div>
    </section>

  

   

    <section class="about" id="about">
      <h1 class="heading"><span> about </span> us</h1>

      <div class="row">
        <div class="video-container">
          <video src="images/promotional1.mp4" loop autoplay muted></video>
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>
          Cake Konek stands out as your premier coffee shop, offering a delightful blend of affordability and top-notch quality. Established by a team of passionate individuals, our commitment to excellence is evident in every cup.
          </p>
          <p>
          Explore the Cake Konek experience with our cozy ambiance, where every sip is a moment of indulgence. Our skilled baristas, dedicated to the art of coffee making, ensure that each visit leaves you craving for more.

          At Cake Konek, we go beyond just coffee; our menu extends to delectable pastries, cakes, and snacks. Whether you're a coffee enthusiast or seeking a cozy spot to unwind, Cake Konek welcomes you to savor the perfect blend of taste, ambiance, and passion.
          </p>
          <a href="#" class="btn">learn more</a>
        </div>
      </div>
    </section>

   

    

    <section class="icons-container">
      <div class="icons">
        <img src="images/icon-1.png" alt="" />
        <div class="info">
          <h3>free delivery</h3>
          <span>on all orders</span>
        </div>
      </div>

     

      <div class="icons">
        <img src="images/icon-3.png" alt="" />
        <div class="info">
          <h3>offer & gifts</h3>
          <span>on all orders</span>
        </div>
      </div>

      <div class="icons">
        <img src="images/icon-4.png" alt="" />
        <div class="info">
          <h3>secure payments</h3>
          <span>protected by paypal</span>
        </div>
      </div>
    </section>

   

    

    <section class="products" id="products">
      <h1 class="heading">Our <span>Menu</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
          <img src="images/img-1.jpg" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Oleato Golden Foam™ Cold Brew</h3>
            <div class="price">₱199</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-2.jpg" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Caffè Americano</h3>
            <div class="price">₱150</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-3.jpg" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Pistachio Frappuccino® Blended Beverage</h3>
            <div class="price">₱199</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-4.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Pistachio Frappuccino® Blended Beverage</h3>
            <div class="price">₱199</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-5.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Chocolate Cream Cold Brew</h3>
            <div class="price">₱200</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-6.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Paradise Drink Starbucks Refreshers® Beverage</h3>
            <div class="price">₱200</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-7.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Iced Black Tea</h3>
            <div class="price">₱150</div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/img-8.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Mocha Cookie Crumble Frappuccino®</h3>
            <div class="price">₱150</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/img-9.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Oleato™ Caffé Latte with Oatmilk</h3>
            <div class="price">₱199</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/img-10.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Oleato™ Iced Shaken Espresso with Oatmilk and Toffeenut</h3>
            <div class="price">₱150</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/img-11.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Iced Chai Tea Latte with Oleato Golden Foam™</h3>
            <div class="price">₱200</div>
          </div>
        </div>
        <div class="box">
          <div class="image">
            <img src="images/img-12.png" alt="" />
            <div class="icons">
              <a href="#" class="fas fa-heart"></a>
              <a href="#" class="cart-btn">add to cart</a>
              <a href="#" class="fas fa-share"></a>
            </div>
          </div>
          <div class="content">
            <h3>Dragon Drink® Starbucks Refreshers® Beverage with Oleato Golden Foam™</h3>
            <div class="price">₱299</div>
          </div>
        </div>
    </section>
    <section class="review" id="review">
      <h1 class="heading">customer's <span>review</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
          Saved big at Cake Konek! Grateful for my choice. Planning to buy again soon.
          </p>
          <div class="user">
            <img src="images/pic-1.png" alt="" />
            <div class="user-info">
              <h3>Adrianne</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
          Money well saved at Cake Konek. Thankful for my decision, and I'll be a repeat customer!
          </p>
          <div class="user">
            <img src="images/pic-2.png" alt="" />
            <div class="user-info">
              <h3>Alfojie</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <p>
          Cake Konek's affordability is a game-changer. I'm hooked and coming back</p>
          <div class="user">
            <img src="images/pic-3.png" alt="" />
            <div class="user-info">
              <h3>Christian</h3>
              <span>happy customer</span>
            </div>
          </div>
          <span class="fas fa-quote-right"></span>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <h1 class="heading"><span> contact </span> us</h1>

      <div class="row">
        <form action="">
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="number" placeholder="number" class="box" />
          <textarea
            name=""
            class="box"
            placeholder="message"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>

        <div class="image">
          <img src="images/contact-img.png" alt="" />
        </div>
      </div>
    </section>

   

    

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">about</a>
          <a href="#">products</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>

        <div class="box">
          <h3>extra links</h3>
          <a href="#">my account</a>
          <a href="#">my order</a>
          <a href="#">my favorite</a>
        </div>

        <div class="box">
          <h3>locations</h3>
          <a href="#">Lupon, Davao Oriental</a>
          <a href="#">Pantukan, Davao De Oro</a>
          <a href="#">Buhangin, Davao City</a>
          <a href="#">Ecoland, Davao City</a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#">+639383026543</a>
          <a href="#" style="text-transform: lowercase"
            >june.pilapil123@gmail.com</a
          >
          <a href="#">Lupon, Davao Oriental - 8207</a>
          <img src="images/payment.png" alt="" />
        </div>
      </div>

      <div class="credit">
        created by <span> CAFE KONEK </span> | all rights reserved
      </div>
    </section>
 <script>
 document.addEventListener("DOMContentLoaded", function () {
  const cartIcon = document.getElementById("cart-icon");
  const cartModal = document.getElementById("cart-modal");
  const closeCart = document.getElementById("close-cart");
  const checkoutBtn = document.getElementById("checkout-btn");
  const cartItems = document.getElementById("cart-items");
  const cartTotal = document.getElementById("cart-total");
  const cartCounter = document.getElementById("cart-counter");

  let cart = [];

  function createElement(type, attributes = {}, textContent = "") {
    const element = document.createElement(type);
    Object.keys(attributes).forEach((key) => (element[key] = attributes[key]));
    element.textContent = textContent;
    return element;
  }

  function createCartItemElement(item, index) {
    const li = createElement("li");
    const image = createElement("img", { src: item.image, alt: item.name, width: 80, height: 80 });
    const nameAndPrice = createElement("span", {}, `${item.name} - ₱${item.price} x ${item.quantity}`);
    li.append(image, nameAndPrice);
    return li;
  }

  function displayCart() {
    cartItems.innerHTML = "";
    cart.forEach((item, index) => {
      const li = createCartItemElement(item, index);
      cartItems.appendChild(li);
    });

    const total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
    cartTotal.textContent = `₱${total}`;
    cartCounter.textContent = cart.reduce((acc, item) => acc + item.quantity, 0);

    saveCart();
  }

  function addToCart(name, price, quantity = 1, image) {
    const existingItem = cart.find((item) => item.name === name);

    if (existingItem) {
      existingItem.quantity += quantity;
    } else {
      cart.push({ name, price, quantity, image });
    }

    displayCart();
  }

  function removeItem(index) {
    cart.splice(index, 1);
    displayCart();
  }

  function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  function init() {
    document.querySelectorAll(".cart-btn").forEach((button) => {
      button.addEventListener("click", function () {
        const productBox = this.closest(".box");
        const productName = productBox.querySelector("h3").textContent;
        const productPrice = parseInt(productBox.querySelector(".price").textContent.replace("₱", ""));
        const productImage = productBox.querySelector(".image img").src; // Get image URL
        addToCart(productName, productPrice, 1, productImage);
      });
    });

    cartIcon.addEventListener("click", function () {
      cartModal.style.display = "flex";
      displayCart();
    });

    closeCart.addEventListener("click", function () {
      cartModal.style.display = "none";
    });

    checkoutBtn.addEventListener("click", function () {
      alert("Proceeding to checkout!");
      cart = [];
      displayCart();
      cartModal.style.display = "none";
    });

    document.getElementById("back-to-products").addEventListener("click", function () {
      alert("Navigating back to products!");
      cartModal.style.display = "none";
    });

    // Load cart from localStorage on page load
    if (localStorage.getItem("cart")) {
      cart = JSON.parse(localStorage.getItem("cart"));
      displayCart();
    }

    // Save cart to localStorage on page unload
    window.addEventListener("beforeunload", function () {
      saveCart();
    });
  }

  init();
});
</script>
  </body>
</html>
