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

        $user1 = new User("Federica", "Massoletti");

        var_dump($user1);
    
    ?>


</body>
</html>