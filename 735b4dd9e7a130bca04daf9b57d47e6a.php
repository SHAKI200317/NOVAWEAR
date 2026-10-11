<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>NovaWear | Fashion Store</title>

    <!-- GOOGLE FONTS -->
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- MAIN CSS -->
    <link
        rel="stylesheet"
        href="<?php echo e(asset('css/style.css')); ?>"
    >

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="navbar">

    <div class="logo">
        <span>NOVA</span>WEAR
    </div>

    

    <nav class="desktop-nav">

        <button
            type="button"
            data-scroll="home"
        >
            Home
        </button>

        <button
            type="button"
            data-scroll="categories"
        >
            Categories
        </button>

        <button
            type="button"
            data-scroll="shop"
        >
            Shop
        </button>

        <button
            type="button"
            data-scroll="new-arrivals"
        >
            New Arrivals
        </button>

    </nav>

 

        <!-- SEARCH -->
        <button
            type="button"
            id="searchBtn"
            class="icon-btn"
            title="Search"
            aria-label="Search"
        >
            🔍
        </button>


        <!-- WISHLIST -->
        <button
            type="button"
            id="wishlistBtn"
            class="icon-btn"
            title="Wishlist"
            aria-label="Wishlist"
        >
            ♡

            <span
                id="wishlistCount"
                class="badge"
            >
                0
            </span>

        </button>


        <!-- CART -->
        <button
            type="button"
            id="cartBtn"
            class="icon-btn"
            title="Cart"
            aria-label="Cart"
        >
            🛍

            <span
                id="cartCount"
                class="badge"
            >
                0
            </span>

        </button>


        <!-- MOBILE MENU -->
        <button
            type="button"
            id="menuBtn"
            class="icon-btn menu-btn"
            aria-label="Menu"
        >
            ☰
        </button>

    </div>

</header>



<!-- =====================================================
     CHECKOUT MODAL
===================================================== -->

<div
    id="checkoutModal"
    class="checkout-modal"
>

    <div class="checkout-box">

        <button
            type="button"
            id="closeCheckout"
            class="close-checkout"
        >
            ×
        </button>


        <div class="checkout-header">

            <p class="eyebrow">
                NOVAWEAR
            </p>

            <h2>
                Complete Your Order
            </h2>

            <p>
                Enter your delivery details below.
            </p>

        </div>


        <form id="checkoutForm">


            <div class="checkout-form-grid">

                <div class="form-group">

                    <label>
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="customerName"
                        placeholder="Your full name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        id="customerPhone"
                        placeholder="07XXXXXXXX"
                        required
                    >

                </div>

            </div>


            <div class="form-group">

                <label>
                    Email Address
                </label>

                <input
                    type="email"
                    id="customerEmail"
                    placeholder="your@email.com"
                    required
                >

            </div>


            <div class="form-group">

                <label>
                    Delivery Address
                </label>

                <textarea
                    id="customerAddress"
                    rows="3"
                    placeholder="Enter your complete delivery address"
                    required
                ></textarea>

            </div>


            <div class="form-group">

                <label>
                    Payment Method
                </label>

                <select
                    id="paymentMethod"
                    required
                >

                    <option value="">
                        Select payment method
                    </option>

                    <option value="Cash on Delivery">
                        Cash on Delivery
                    </option>

                    <option value="Card Payment">
                        Card Payment
                    </option>

                </select>

            </div>


            <div class="checkout-summary">

                <div>

                    <span>
                        Items
                    </span>

                    <strong id="checkoutItems">
                        0
                    </strong>

                </div>


                <div>

                    <span>
                        Total
                    </span>

                    <strong id="checkoutTotal">
                        Rs. 0
                    </strong>

                </div>

            </div>


            <button
                type="submit"
                class="place-order-btn"
            >
                PLACE ORDER →
            </button>

        </form>

    </div>

</div>



<!-- =====================================================
     MOBILE MENU
===================================================== -->

<div
    id="mobileMenu"
    class="mobile-menu"
>

    <button
        type="button"
        data-scroll="home"
    >
        Home
    </button>

    <button
        type="button"
        data-scroll="categories"
    >
        Categories
    </button>

    <button
        type="button"
        data-scroll="shop"
    >
        Shop
    </button>

    <button
        type="button"
        data-scroll="new-arrivals"
    >
        New Arrivals
    </button>

</div>



<!-- =====================================================
     HERO
===================================================== -->

<section
    id="home"
    class="hero"
>

    <div class="hero-content">

        <p class="small-title">
            NEW SEASON 2026
        </p>


        <h1>
            Define Your
            <span>Style.</span>
        </h1>


        <p>
            Discover modern fashion designed for
            confidence, comfort and everyday life.
        </p>


        <div class="hero-buttons">

            <button
                type="button"
                class="primary-btn"
                data-scroll="shop"
            >
                SHOP COLLECTION →
            </button>


            <button
                type="button"
                class="secondary-btn"
                data-scroll="categories"
            >
                EXPLORE CATEGORIES
            </button>

        </div>

    </div>

</section>



<!-- =====================================================
     CATEGORIES
===================================================== -->

<section
    id="categories"
    class="section"
>

    <div class="section-heading">

        <div>

            <p class="eyebrow">
                SHOP BY STYLE
            </p>

            <h2>
                Explore Categories
            </h2>

        </div>

    </div>


    <div class="category-grid">


        <!-- CLOTHING -->

        <button
            type="button"
            class="category-card"
            data-category="clothing"
        >

            <img
                src="<?php echo e(asset('images/categories/clothing.jpg')); ?>"
                alt="Clothing"
            >

            <div>

                <h3>
                    Clothing
                </h3>

                <p>
                    Modern everyday fashion
                </p>

            </div>

        </button>



        <!-- SHOES -->

        <button
            type="button"
            class="category-card"
            data-category="shoes"
        >

            <img
                src="<?php echo e(asset('images/categories/shoes.jpg')); ?>"
                alt="Shoes"
            >

            <div>

                <h3>
                    Shoes
                </h3>

                <p>
                    Step into your style
                </p>

            </div>

        </button>



        <!-- BAGS -->

        <button
            type="button"
            class="category-card"
            data-category="bags"
        >

            <img
                src="<?php echo e(asset('images/categories/bags.jpg')); ?>"
                alt="Bags"
            >

            <div>

                <h3>
                    Bags
                </h3>

                <p>
                    Carry your essentials
                </p>

            </div>

        </button>



        <!-- ACCESSORIES -->

        <button
            type="button"
            class="category-card"
            data-category="accessories"
        >

            <img
                src="<?php echo e(asset('images/categories/accessories.jpg')); ?>"
                alt="Accessories"
            >

            <div>

                <h3>
                    Accessories
                </h3>

                <p>
                    Complete your look
                </p>

            </div>

        </button>

    </div>

</section>



<!-- =====================================================
     SHOP
===================================================== -->

<section
    id="shop"
    class="section shop-section"
>

    <div class="section-heading">

        <div>

            <p class="eyebrow">
                NOVAWEAR COLLECTION
            </p>

            <h2>
                Shop Our Collection
            </h2>

        </div>

    </div>


    <!-- FILTER BUTTONS -->

    <div class="filter-buttons">

        <button
            type="button"
            class="filter-btn active"
            data-filter="all"
        >
            All
        </button>

        <button
            type="button"
            class="filter-btn"
            data-filter="clothing"
        >
            Clothing
        </button>

        <button
            type="button"
            class="filter-btn"
            data-filter="shoes"
        >
            Shoes
        </button>

        <button
            type="button"
            class="filter-btn"
            data-filter="bags"
        >
            Bags
        </button>

        <button
            type="button"
            class="filter-btn"
            data-filter="accessories"
        >
            Accessories
        </button>

    </div>


    <!-- PRODUCTS -->

    <div
        id="productGrid"
        class="product-grid"
    ></div>

</section>



<!-- =====================================================
     NEW ARRIVALS
===================================================== -->

<section
    id="new-arrivals"
    class="arrival-banner"
>

    <div>

        <p>
            JUST DROPPED
        </p>

        <h2>
            New Arrivals
        </h2>

        <span>
            Fresh styles. New energy.
        </span>


        <button
            type="button"
            class="primary-btn"
            data-filter="all"
            data-scroll="shop"
        >
            DISCOVER NOW →
        </button>

    </div>

</section>



<!-- =====================================================
     NEWSLETTER
===================================================== -->

<section class="newsletter">

    <p class="eyebrow">
        STAY IN STYLE
    </p>

    <h2>
        Join the NovaWear community.
    </h2>

    <p>
        Get updates about new collections
        and exclusive offers.
    </p>


    <div class="newsletter-form">

        <input
            type="email"
            id="emailInput"
            placeholder="Enter your email address"
        >

        <button
            type="button"
            id="subscribeBtn"
        >
            Subscribe
        </button>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="footer-logo">
        NOVAWEAR
    </div>

    <p>
        Modern fashion for modern lifestyles.
    </p>

    <span>
        © 2026 NovaWear. All rights reserved.
    </span>

</footer>



<!-- =====================================================
     CART
===================================================== -->

<div
    id="cartOverlay"
    class="overlay"
></div>


<aside
    id="cartDrawer"
    class="cart-drawer"
>

    <div class="cart-header">

        <h2>
            Your Bag
        </h2>

        <button
            type="button"
            id="closeCart"
        >
            ×
        </button>

    </div>


    <div
        id="cartItems"
        class="cart-items"
    >

        <div class="empty-cart">
            Your bag is empty.
        </div>

    </div>


    <div class="cart-footer">

        <div class="cart-total">

            <span>
                Total
            </span>

            <strong id="cartTotal">
                Rs. 0
            </strong>

        </div>


        <button
            type="button"
            id="checkoutBtn"
            class="checkout-btn"
        >
            CHECKOUT
        </button>

    </div>

</aside>



<!-- =====================================================
     SEARCH OVERLAY
===================================================== -->

<div
    id="searchOverlay"
    class="search-overlay"
>

    <div class="search-panel">


        <!-- SEARCH HEADER -->

        <div class="search-header">

            <div class="search-title">

                <span class="search-logo">
                    ✦
                </span>

                <div>

                    <h2>
                        NOVAWEAR
                    </h2>

                    <p>
                        FASHION SEARCH
                    </p>

                </div>

            </div>


            <button
                type="button"
                id="closeSearch"
                class="search-close"
                aria-label="Close search"
            >
                ×
            </button>

        </div>



        <!-- SEARCH INPUT -->

        <div class="search-input-wrapper">

            <span class="search-icon">
                ⌕
            </span>


            <input
                type="text"
                id="searchInput"
                placeholder="Search clothes, shoes, bags..."
                autocomplete="off"
            >


            <span class="search-esc">
                ESC
            </span>

        </div>



        <!-- SEARCH RESULTS -->

        <div
            id="searchResults"
            class="search-results"
        >

            <!-- DEFAULT SEARCH CONTENT -->

            <div class="search-intro">

                <span>
                    EXPLORE NOVAWEAR
                </span>


                <h1>

                    Find your

                    <strong>
                        perfect style.
                    </strong>

                </h1>


                <p>
                    Search our collection of clothing,
                    shoes, bags and accessories.
                </p>

            </div>



            <!-- POPULAR SEARCHES -->

            <div class="search-popular">

                <p>
                    POPULAR SEARCHES
                </p>


                <div class="search-tags">


                    <button
                        type="button"
                        data-search-term="hoodie"
                    >
                        Hoodies
                    </button>


                    <button
                        type="button"
                        data-search-term="shoes"
                    >
                        Sneakers
                    </button>


                    <button
                        type="button"
                        data-search-term="bag"
                    >
                        Bags
                    </button>


                    <button
                        type="button"
                        data-search-term="dress"
                    >
                        Dresses
                    </button>


                    <button
                        type="button"
                        data-search-term="jeans"
                    >
                        Jeans
                    </button>


                    <button
                        type="button"
                        data-search-term="accessories"
                    >
                        Accessories
                    </button>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- =====================================================
     TOAST
===================================================== -->

<div
    id="toast"
    class="toast"
>
    Product added to bag.
</div>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script
    src="<?php echo e(asset('js/app.js')); ?>?v=20261008"
></script>


</body>
</html><?php /**PATH C:\xampp\htdocs\novawear\resources\views/welcome.blade.php ENDPATH**/ ?>