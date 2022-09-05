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


        $user1 = new RegisteredUser("Federica", "Massoletti", "Via Costanza, 2 20100 Milano", "fm@mail.com", "12345", 20);

        var_dump($user1);

        $product1 = new Product("Croccantini 1kg", 23.50);
        $product2 = new Product("Cuccia", 54.00);

        
        $cart1 = new ShoppingCart();
        var_dump($cart1);
        
        $cart1->addItem($product1);
        $cart1->addItem($product2);
        
        var_dump($cart1);

        echo 'Total Price: ' . $cart1->getTotalPrice();
    ?>


</body>
</html>