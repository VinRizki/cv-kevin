<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "kevin_rizki_dwi_putra@teknokrat.ac.id";
  $headers = "From: $email \r\n";
  $headers .= "Reply-To: $email \r\n";

  $fullMessage = "Nama: $name\n";
  $fullMessage .= "Email: $email\n";
  $fullMessage .= "Nomor Telepon: $phone\n\n";
  $fullMessage .= "Subjek: $subject\n";
  $fullMessage .= "Pesan:\n$message";

  mail($to, $subject, $fullMessage, $headers);

  echo "Pesan telah terkirim. Terima kasih!";
}
?>
