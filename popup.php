<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/popup.css">
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
