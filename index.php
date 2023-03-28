<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form action="action.php" enctype="multipart/form-data" 
    method="post">
    
    <input class="un " type="text"  name = "name" align="center" placeholder="Student Name" required>
    <input class="un " type="email" name = "email" align="center" placeholder="Email id" required>
    <input class="un " type="text" name = "cer" align="center" placeholder="Certificate No. " required>
    <input class="un" type ="file" name = "pdf" align ="center" accept=".pdf" required> 
    <br>
      <button type="submit" name="submit" class="un" align="center">Submit</button>
</form>  
                
    </div>
     
</body>

</html>



