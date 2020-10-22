<?php include("conf/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
   <link rel ="stylesheet" href="css/style.css">
</head>
<body>
<div class="cat-list">
<h2>Category List</h2>
 <ul class="menu">
       <li><a href="book-list.php">Manage Books</a></li>
       <li><a href="cat-list.php">Manage Categories</a></li>
      <li><a href="order-manage.php">Manage Orders</a></li>
      <li style="float:right;"><a href="logout.php" >Logout</a></li>
    </ul>
<div class="cat-list__item">
<?php 
     include("conf/config.php");
     $result = mysqli_query($conn, "SELECT * FROM categories");
?>
<ul>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
          <li title="<?php echo $row['remark'] ?>">
          [<a href="cat-del.php?id=<?php echo $row['id']?>" class="del">Del</a>]
          [<a href="cat-edit.php?id=<?php echo $row['id']?>" class="edit">Edit</a>]
      <?php echo $row['name'] ?>
        </li>
    <?php endwhile; ?>
</ul>
</div>
</div>
<a href="cat-new.php" class="new">New Category</a>
</body>
</html>