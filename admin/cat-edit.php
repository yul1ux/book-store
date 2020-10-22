<?php
  include("conf/config.php");
  include("conf/auth.php");
  $id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM categories WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Categorie Edit</title>
  </head>
  <body>
   <form action="cat-update.php" method="POST">
     <input type="hidden" name="id" value="<?php echo $row['id']?>">
     <label for="name" >Category Name</label>
     <input type="text" name="name" value="<?php echo $row['name']?>">
     <label for="remark">Remark</label>
     <textarea name="remark" id="remark"><?php echo $row['remark'] ?></textarea>

     <input type="submit" value="update cat">
    
   </form>
      
  </body>
  </html>