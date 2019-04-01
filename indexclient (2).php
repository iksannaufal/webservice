<?php

$jsonfile = file_get_contents("https://turreted-worries.000webhostapp.com/indexserver.php/data/");
$data = json_decode($jsonfile, true);

$data = $data["data"];
	
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Makanan</title>
 <link rel="stylesheet" href="bootstrap.min.css">
 
</head>
<body>
  <br>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="insertdata.php"><i class="icon-plus"></i> Insert Data</a>
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>id</th>
     <th>Nama makanan</th>
     <th>harga</th>
     <th>stok</th>
     
     
     
    </tr>  

    <?php 
    foreach ($data as $row) :   ?>
    <tr>
     
     <td><?=$row["id_makanan"]; ?></td>
     <td><?=$row["nama_makanan"]; ?></td>
     <td><?=$row["harga"]; ?></td>
     <td><?=$row["stok"]; ?></td>
    
    

     
     <td>
      <form method="post" action="update.php">
        <input type="hidden" name="id_makanan" value="<?=$row['id_makanan']?>">      
        <button class="btn btn-xs btn-primary" type="submit">Edit</button>
      </form>
      <form method="post" action="delete.php">
        <input type="hidden" name="id_makanan" value="<?=$row['id_makanan']?>">        
        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
      </form>
     </td>
    </tr>
    <?php endforeach; ?>
   </table>
  </div> 
 </div>
</div>
</body>
</html>

