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


        $user1 = new RegisteredUser("Federica", "Massoletti", "Via Costanza, 2 20100 Milano", "fm@mail.com", "12345", 20);

        var_dump($user1);
    
    ?>


</body>
</html>