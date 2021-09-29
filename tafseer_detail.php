<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quran  </title>
    <body>

     
    
 <?php 
    include "header.php"; ?>
<?php

// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'root', 'root', 'dbquran');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

?>
<!doctype html>
<html>
    <head>
        <title>กุรอานตัฟซีร</title>
    </head>
    <body>

       

        <?php

        // Create a query
        $query = 'SELECT id,name,youtubeId
            FROM videos_tafseer
            ORDER BY name';

        // Execute the query
        $result = mysqli_query($connect, $query);

        // If there is no result, display an error message
        if (!$result)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }
        
      

        // Display the number of recirds found
        //echo '<p>เจอผลลัพธ์ ' .  mysqli_num_rows($result)  . ' วิดีโอ : </p>';
        echo '<div class="container hero">
        <div class="row">
            <div class="col-md-8 offset-md-2">'; 
        // Loop through the records found
        while ($record = mysqli_fetch_assoc($result))
        {

            // Output the record using if statements and echo
            echo '<hr>';

            echo '<p>'.$record['name'].'</p>';

            $url = 'https://www.youtube.com/watch?v='.$record['youtubeId'];

            //echo '<a href="'.$url.'">'.$url.'</a>';

            echo '<br><br>';

            echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$record['youtubeId'].'?modestbranding=1" 
                rameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>';

        }

        ?>       
        </div>
    </div> 
    </div>

<?php include "footer.php"; ?>
</body>
</html>

<div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>
</html>
