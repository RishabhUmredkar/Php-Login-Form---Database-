
<?php

include 'connect.php';
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cert = $_POST['cer'];
  $file_name = $_FILES['pdf']['name'];
  $file_tmp = $_FILES['pdf']['tmp_name'];

  $insertquery = "INSERT INTO form(name, email, cer, pdf) VALUES ('$name','$email','$cert','$file_name')";

  $res = mysqli_query($con,$insertquery);

  if($res){
    move_uploaded_file($file_tmp,"./pdf/".$file_name);
    header("Location: index.php");
    ?>
     <script>
      alert("Data is Inserted");
      
      </script>
    <?php
  }
  else{
    header("Location: index.php");
    ?>
    <script>
    alert("Data is not Inserted");

    </script>
    <?php
  }
}

?>