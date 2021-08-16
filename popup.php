<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body 
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #9be2cd;
  color: #F2F5F5;
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
  background-color: #F2F5F5;
}

/* Full-width input fields */
.form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
}

.form-container input[type=text2] {
width: 100%;  
  padding: 15px;
  margin: 5px 0 22px 0;
  height : 150px;
  border: none;
  background: white;
}


/* When the inputs get focus, do something */
.form-container input[type=text]:focus {
  background-color: white;
  outline: none;
}
.form-container input[type=text2]:focus {
  background-color: white;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color:#86DCEC ;
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
  background-color: #E473A1
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<i class="fa fa-edit" style="font-size:36px"></i>
<button class="open-button " onclick="openForm()">Note</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
   

    <label for="email"><b>หัวข้อ</b></label>
    <input type="text" placeholder="" name="email" required>
  
    <label for="psw"><b>คำอธิบาย</b></label>
    <input type="text2" placeholder="" name="psw" required>

    <button type="submit" class="btn">บันทึก</button>
    <button type="button" class="btn cancel" onclick="closeForm()">ปิด</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
