<?
  session_start();
  session_destroy();
  echo "<script>alert('Logout efetuado com sucesso!');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
?>