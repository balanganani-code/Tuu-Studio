<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">


<div class="small-container cart-page">
    <section class="cart-head">
        <div>
            <h1>Shopping Cart</h1>
        </div>

</div>
<button class="continue">
    ←Continue Shopping

</button>

</section>
<section class="cart-info">
    <div class="cart-items">
        <div class="cart-item">

            <img src="assets/images/Khutso.jpg" class="img-fluid">
            <div class="product-info">
                <h3> Notebook</h3>
                <p>A5 Soft cover</p>
            </div>
            <div class="price">
                R120
            </div>
            <div class="quantity">
                <button>-</button>
                <span>1</span>
                <button>-</button>
                <div class="total">
                    R120
                </div>
                <div class="remove"> <a href=""><i class="bi bi-trash"></i>
                    </a></div>

            </div>
            <div class="order-summary">
                <h2> Order Summary</h2>
                <div class="summary-rows">

                    <span>Subtotal</span>
                    <span>R450</span>
                </div>

                <div class="summary-rows">

                    <span>Shipping</span>
                    <span>R60</span>
                </div>

                <div class="summary-rows total-rows">
                    <span>Total</span>
                    <span>R510</span>

                </div>
                <button class="checkout-btn">
                    Proceed to Checkout
                </button>

            </div>

</section>
<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>

    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="assets/images/Khutso.jpg" class="img-fluid">
                <div>
                    <p> Illustration</p>
                    <small> Price:R170.00</small>
                    <br>
                    <a href=""><i class="bi bi-trash"></i>
                    </a>
                </div>
            </div>
        </td>
        <td> <input type="number" value="1"> </td>
        <td> R170</td>
    </tr>

</table>

<div class="total-price">


    <table>
        <tr>
            <td> Subtotal</td>
            <td> R200</td>
        </tr>
        <tr>
            <td> Tax</td>
            <td> R30</td>
        </tr>
        <tr>
            <td>Total</td>
            <td> R230</td>

        </tr>
    </table>
</div>


</div>


<?php include 'includes/footer.php'; ?>