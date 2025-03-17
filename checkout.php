<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="Papalucas/logo.svg" alt="Papalucas Stores Logo" class="logo">
        </div>
        <nav>
            <ul>
                <li><a href="papalucas.html">Home</a></li>
                <li><a href="products.html">Shop</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
        <?php

        ?>
        <table>
            <tr>
            <th>Item</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            </tr>
            <tr>
                foreach($_SESSION['cart'] as $item){
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['name']; ?></td>
                }
            </tr>

    
        </table>
</body>
</html>

