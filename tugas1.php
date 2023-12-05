<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF007F;}
</style>
</head>
<body>

<?php
$nimErr = $namaErr = $emailErr = $alamatErr = "";
$nim = $nama = $email = $alamat = "";
$nim_Def = $name_Def = $email_Def = $alamat_Def = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nim"])) {
    $nimErr = "NIM wajib diisi";
    $nim_Def = 22090027;
  } else {
    $nim = test_input($_POST["nim"]);
    $nim_Def = 22090027;
  }
  if (empty($_POST["nama"])) {
    $namaErr = "Nama wajib diisi";
    $name_Def= "Muhammad Noval Aula";
  } else {
    $nama = test_input($_POST["nama"]);
    $name_Def = "Muhammad Noval Aula";
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email wajib diisi"; 
    $email_Def = "nopallatte30@gmail.com";
  } else {
    $email = test_input($_POST["email"]);
    $email_Def = "nopallatte30@gmail.com";
  }
    
  if (empty($_POST["alamat"])) {
    $alamatErr = "Alamat wajib diisi";
    $alamat_Def = "slawi";
  } else {
    $alamat = test_input($_POST["alamat"]);
    $alamat_Def = "slawi";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Form Validasi PHP</h2>
<p><span class="error">* kolom yang harus diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NIM: <input type="text" name="nim">
  <span class="error">* <?php echo $nimErr;?></span>
  <br><br>
  Nama: <input type="text" name="nama">
  <span class="error">* <?php echo $namaErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Alamat: <input type="text" name="alamat">
  <span class="error">* <?php echo $alamatErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Kirim">
</form>

<?php
 echo "<h2>Your Input</h2>";
 echo $nim_Def . "<br>";
 echo $name_Def . "<br>";
 echo $email_Def . "<br>";
 echo $alamat_Def. "<br>";
  echo "<h2>Your Input</h2>";
  echo $nim . "<br>";
  echo $nama . "<br>";
  echo $email . "<br>";
  echo $alamat . "<br>";
?>

</body>
</html>