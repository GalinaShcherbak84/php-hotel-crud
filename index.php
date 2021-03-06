<?php require_once __DIR__ . '/scripts/get_rooms.php' ?>
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
        <h1 class="my-4">Rooms</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room number</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php // loop DB records
                    if(!empty($rooms)){
                        foreach($rooms as $room){ ?>
                          <tr>
                            <td><?php echo $room['id']; ?></td>
                            <td><?php echo $room['room_number']; ?></td>
                            <td>
                                <a class="text-success" 
                                href="./show.php?id=<?php echo $room['id']; ?>">
                                    View
                                </a>
                            </td>
                          </tr>  
                      <?php  }
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>