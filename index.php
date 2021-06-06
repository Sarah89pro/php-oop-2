<?php 
require_once __DIR__ . '/partials/scripts/Shop.php';

require_once __DIR__ . '/partials/scripts/Shop-data.php';

require_once __DIR__ . '/partials/scripts/User.php';

require_once __DIR__ . '/partials/scripts/User-data.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>
<body>

<header>
    <h1>The Little Shop</h1>
</header>

<main>

    <!--Products Section-->
    <section>
        <h2>Our Products:</h2>

            <!--Dresses-->
            <h3> <?php echo $dress1->getDressInfo() ?> </h3>
            <h3><?php echo $dress2->getDressInfo() ?> </h3>

            <!--Swimwear-->
            <h3> <?php echo $swimwear1->getSwimwearInfo() ?> </h3>
            <h3> <?php echo $swimwear2->getSwimwearInfo() ?> </h3>
        
    </section>

    <!--Users Section-->
    <section>
        <h2>Our Clients:</h2>

        <?php 
            //Users List
            foreach($users as $user) {
                $new_user = new User($user['name'], $user['lastname'], $user['year_of_birth'], $user['date_entry'],
                $user['address'], $user['phone_number'], $user['orders'], $user['discount']); ?>


                <div>
                    <h3> <?php echo $new_user->getData(); ?> </h3>
                    <h3> <?php echo $new_user->getDiscount(); ?> </h3>
                    <br>
                </div>

            <?php } ?>    
        
    </section>


</main>
    
</body>
</html>