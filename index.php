<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    
    <?php 
    
        include_once __DIR__ . "./Classes/User.php";
        include_once __DIR__ . "./Classes/RegisteredUser.php";
        include_once __DIR__ . "./Classes/ShoppingCart.php";
        include_once __DIR__ . "./Classes/Product.php";

        
        $cart1 = new ShoppingCart();
        
        $product1 = new Product("Croccantini 1kg", 23.50);
        $product2 = new Product("Cuccia", 54.00);
        
        $user1 = new RegisteredUser("Federica", "Massoletti", "Via Costanza, 2 20100 Milano", $cart1, "fm@mail.com", "12345", 20);
        
        // var_dump($cart1);
        
        $user1->shoppingCart->addItem($product1);
        $user1->shoppingCart->addItem($product2);
        
        // var_dump($cart1);
        
        var_dump($user1);

        echo "TOTAL PRICE: " . $user1->shoppingCart->getTotalPrice();

    ?>


</body>
</html>