<?php
   if (isset($_POST['input'])) {
      $nama1 = $_POST['nama1'];
      $nama2 = $_POST['nama2'];
      $nama3 = $_POST['nama3'];
      $nama4 = $_POST['nama4'];
      $nama5 = $_POST['nama5'];
      echo "<b>Jawaban nama-nama rasul yang dikumpul:</b><br>";
      echo "1. $nama1 <br>";
      echo "2. $nama2 <br>";
      echo "3. $nama3 <br>";
      echo "4. $nama4 <br>";
      echo "5. $nama5 <br>";
   }
?>

<?php
   if (isset($_POST['login'])) {
      $usn = $_POST['usn'];
      $pwd = $_POST['pwd'];
      if ($usn == "mahasiswa" && $pwd == "mhs") {
         echo "<h2>Selamat! Login berhasil.</h2>";
      } else {
         echo "<h2>Maaf login gagal, coba lagi!</h2>";
      }
   }
?>

<?php
   if (isset($_POST['jawab'])) {
      $jawaban = $_POST['jawaban'];
      if ($jawaban == "Firaun") {
         echo "<h2>Pilihan anda benar! Jawabannya $jawaban.</h2>";
      } else {
         echo "<h2>Pilihan anda salah! anda memilih $jawaban.</h2>";
      }
   }
?>

<?php
   if (isset($_POST['pilih'])) {
      echo "<h2>Hobi yang Anda pilih adalah: <br></h2>";
      if (isset($_POST['hobi1'])) {
         echo "+ " . $_POST['hobi1'] . "<br>";
      }
      if (isset($_POST['hobi2'])) {
         echo "+ " . $_POST['hobi2'] . "<br>";
      }
      if (isset($_POST['hobi3'])) {
         echo "+ " . $_POST['hobi3'] . "<br>";
      }
      if (isset($_POST['hobi4'])) {
         echo "+ " . $_POST['hobi4'] . "<br>";
      }
      if (isset($_POST['hobi5'])) {
         echo "+ " . $_POST['hobi5'] . "<br>";
      }
      if (isset($_POST['hobi6'])) {
         echo "+ " . $_POST['hobi6'] . "<br>";
      }
      if (isset($_POST['hobi7'])) {
         echo "+ " . $_POST['hobi7'] . "<br>";
      }
   }
?>

<?php
   if (isset($_POST['pilihProdi'])) {
      $prodi = $_POST['prodi'];
      echo "Program Studi Anda adalah: 
      <font color=blue><b>$prodi</b></font>";
   }
?>
<?php
   if(isset($_POST['kirim'])){
      $alamat = nl2br($_POST['alamat']);
      echo "Alamat lengkap Anda di: <br>";
      echo "<font color=blue><b>$alamat</b></font>";
   }
?>