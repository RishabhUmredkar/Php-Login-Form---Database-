<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php';?>
<style>
    
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  
  
.buttonDownload {
	display: inline-block;
	position: relative;
	padding: 10px 25px;
  
	background-color: #4CC713;
	color: white;
  
	font-family: sans-serif;
	text-decoration: none;
	font-size: 0.9em;
	text-align: center;
	text-indent: 15px;
}

.buttonDownload:hover {
	background-color: #333;
	color: white;
}

.buttonDownload:before, .buttonDownload:after {
	content: ' ';
	display: block;
	position: absolute;
	left: 15px;
	top: 52%;
}

/* Download box shape  */
.buttonDownload:before {
	width: 10px;
	height: 2px;
	border-style: solid;
	border-width: 0 2px 2px;
}

/* Download arrow shape */
.buttonDownload:after {
	width: 0;
	height: 0;
	margin-left: 3px;
	margin-top: -7px;
  
	border-style: solid;
	border-width: 4px 4px 0 4px;
	border-color: transparent;
	border-top-color: inherit;
	
	animation: downloadArrow 2s linear infinite;
	animation-play-state: paused;
}

.buttonDownload:hover:before {
	border-color: #4CC713;
}

.buttonDownload:hover:after {
	border-top-color: #4CC713;
	animation-play-state: running;
}

/* keyframes for the download icon anim */
@keyframes downloadArrow {
	/* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
	0% {
		margin-top: -7px;
		opacity: 1;
	}
	
	0.001% {
		margin-top: -15px;
		opacity: 0;
	}
	
	50% {
		opacity: 1;
	}
	
	100% {
		margin-top: 0;
		opacity: 0;
	}
}
  </style>
</head>
<body>
    <div class="main-div">
        <h1>List of Student</h1>
        <div class ="center-div">
            <div class="table-responsive">
            <div style="overflow-x:auto;">

            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>CERTIFICATE</th>
                        <th>PDF</th>
                        <th>ACTION</th>
                    </tr>
                </thead>   
                <tbody>
                
                    <?php
                    include 'connect.php';

                    $selectquery = "select * from form";

                    $query = mysqli_query($con,$selectquery);

                    $num = mysqli_num_rows($query);
                    echo $num;


                    while($res = mysqli_fetch_array($query) )
                    {
                        ?>
                       
                    <tr>
                        
                        <td> <?php echo $res['id']; ?></td>
                        <td> <?php echo $res['name']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['cer'];?></td>
                        <td><?php echo $res['pdf'];?></td>
                        <!-- <td> <a href="pdf" class="buttonDownload" >Download</a><td> -->
                      <td><a href="data:application/pdf;base64,<?php echo base64_encode(file_get_contents('pdf/'.$res['pdf'])); ?>" download="<?php echo $res['pdf']; ?>" class="buttonDownload">Download-PDF</a></td>

                    </tr>
                      <?php  
                        
                    }
?>
</tbody>  
            </table>
                </div>
            </div>
        </div>
</body>
</html>









