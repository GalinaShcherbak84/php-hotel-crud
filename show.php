<?php require_once __DIR__ . '/scripts/get_details.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>
<body>
    <main class="container">
    <?php if(!empty($room)){ ?>
        <h1 class="my-4">Details room <?php echo $room['room_number'] ?></h1>
        <ul>
            <li>
                Floor: <?php echo $room['floor'] ?>
            </li>
            <li>
                Beds: <?php echo $room['beds'] ?>
            </li>
        </ul>
    <?php }else{ ?>
        <h2>No details found</h2>
    <?php } ?>

        <a href="./index.php">Home</a>
    </main>
</body>
</html>