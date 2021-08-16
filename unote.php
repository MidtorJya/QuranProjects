<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="Stylesheet" href="surah-translation.css">
    <title>Quran  </title>

    <style>
      @font-face {
        font-family:'Uthmani' ;
        src: url('assets/UthmanicHafs1Ver09.otf') format ('truetype');
      }
     .arabic{
         font-family: 'Uthmani', serif;
         font-size: 20px;
         font-weight: normal;
         direction: rtl;
         padding: 0 5px;
         margin: 0;
     }
     .latin{
        font-family:  serif;
        font-size: 14px;
        font-weight: normal;
        direction: ltr;
        padding: 0;
        margin: 0;
     }
      .arabic_number {
        font-size: 28px;
        font-weight: normal;
        
     }
    
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #33FFD4;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  bottom: 23px;
  right: 28px;
  width: 70px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
 
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

      </style>
  </head>
  <body>


  
  <?php
  include "nav2.php";
    include "koneksi.php";
    
    if(isset($_GET['surah']) || isset($_GET['nama_surah'])){
        $surah = $_GET['surah'];
        $nama_surah = $_GET['nama_surah'];

       // echo '<a href="index.php">back</a>';
            echo '<h3 class="text-center bg-dark text-white">' . $nama_surah .'</h3>';
            echo '<hr>'; 
            
            
/*echo '

<div class="container-fluid mt-0 bg-active p-3 ">
          <div class="d-inline float-left ml-5">
              
               <div class="dropdown ">
                    <button class="btn btn-outline-info  dropdown-toggle" id="surahmenu" data-toggle="dropdown"
                         aria-expanded="false" href="">
                         <strong class="text-info">Al-Fatihah</strong></button>
                    <ul class="dropdown-menu dropdown-menu" style="width:350px; height:auto;margin-top:110px;"
                         aria-labelledby="surahmenu">
                         <li><a class="dropdown-item" href="Al-fatihah.php">
                                   <h6>1.Al-Fatihah</h6><span class="text-info"> (The openner) </span>
                                   <h4 class="d-inline float-right text-info ">ٱلْفَاتِحَة</h4>
                              </a></li>
                              <li><hr class="dropdown-driver"></li>

                              <li><a class="dropdown-item" href="">
                              <h6>2.Al-Baqarah</h6><span class="text-info"> (The cow)</span>
                              <h4 class="d-inline float-right text-info">ٱلْبَقَرَة</h4>
                         </a></li>

                         <li><hr class="dropdown-driver"></li>
                    <li><a class="dropdown-item" href="">
                              <h6>3.Al-Imran</h6><span class="text-info"> (The family of imran)</span>
                              <h4 class="d-inline float-right text-info">آلِ عِمْرَان</h4>
                         </a></li>

                         <li><hr class="dropdown-driver"></li>
                         <li><a class="dropdown-item" href="">
                                   <h6>3.Al-Imran</h6><span class="text-info"> (The family of imran)</span>
                                   <h4 class="d-inline float-right text-info">آلِ عِمْرَان</h4>
                              </a></li>

                              <li><hr class="dropdown-driver"></li>
                              <li><a class="dropdown-item" href="">
                                        <h6>3.Al-Imran</h6><span class="text-info"> (The family of imran)</span>
                                        <h4 class="d-inline float-right text-info">آلِ عِمْرَان</h4>
                                   </a></li>

                              <hr class="dropdown-driver">
                              </li>
                              </div>
                              </div>
                    
                              </div>
                   
                   </div>
                  ' ;*/
              

                     $tampil = mysqli_query($koneksi, "SELECT
            a.text as arabic ,
            b.text as indonesia ,
            audio as audios
            
            FROM
            arabicquran a LEFT OUTER JOIN indonesianquran b
            ON a.index=b.index
            WHERE a.surah = $surah
               ");
             $ayat = 1;
             while( $data = mysqli_fetch_array($tampil)){
                 $str = $data['arabic'];
                 echo '<p class="arabic">'. $str . format_arabic_number($ayat) . '</p>';
                 echo '<p class="latin">' . '[' . $ayat . ']' .$data['indonesia'] .  '</p>';
                // echo '<p class="latin">' .$data['audios'] .  '</p>';
                
                //echo '<audio controls >
                //<source src="horse.ogg" type="audio/ogg">
                 //<source src="audio/001.mp3>'.$data['audios'] .'" type="audio/mp3"></audio>' ;  
                 
                echo 
                '<audio controls loop>
                <source src="audio/'.$data['audios']. '" type="audio/mpeg">
                </audio><br>';
                
                //'<audio controls loop>
                //<source src="audio/"'.$data['audios']. 'type="audio/mpeg">
                 //</audio>';


                 //echo '<src="audio/'.$data['audios'].'">';

                 echo '
                <i class="fa fa-edit" style="font-size:36px"></i>
                 <button class="open-button " onclick="openForm()">Note</button>
         
                 <div class="form-popup" id="myForm">
                   <form action="/action_page.php" class="form-container">
                     <h1>Login</h1>
                 
                     <label for="email"><b>Email</b></label>
                     <input type="text" placeholder="Enter Email" name="email" required>
                 
                     <label for="psw"><b>Password</b></label>
                     <input type="password" placeholder="Enter Password" name="psw" required>
                 
                     <button type="submit" class="btn">Login</button>
                     <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                   </form>
                 </div>
                 

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> ';
                 echo '<hr>';
                 $ayat++;
             }
            }
            ;
    
        //function for ayat arabic
        function format_arabic_number($number)
        {
            $arabic_number = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
            $jum_karakter = strlen($number);
           // $temp = "";

            for ($i =0; $i< $jum_karakter; $i++) {
                $char = substr($number, $i, 1);
                // $temp .= $arabic_number[$char];

            }
            return '<span class="arabic_number">' . $temp . ' </span>';            
        } 

?>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</div>
    <?php include "footer.php"; ?>

</body>
</html>
                                                                                                                                    