<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran-th</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav2.css">
  
</head>
<style>.text {
    
    color: white;
    font-size: 10vw; 
    font-weight: bold;
    text-align: center;
  }
</style>
<body>
    
<?php include "nav2.php"; ?>
            
           
            <div class="header-dark">
        
         
  <div class="text">อัลกุรอาน</div>
</div>
                 <!--?php
	require 'connection.php';
    require 'highlight.php';
     ?>
        
			<form name="frmSearch" method="post" action="">
                <div class="search-box">
                    <div>
                        <input type="text" name="keyword" class="demoInputBox" value="<?php echo $keyword; ?>"	/>
                    </div>				
                    <div>
                        <input type="submit" name="go" class="btnSearch" value="Search">
                    </div>
                </div>
                </form>	
                ?php 
                require 'resultsearch.php';
                ?> -->
        </div>
   
		</div>
   
	</body>
</html>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>