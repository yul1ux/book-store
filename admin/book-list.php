<?php include("conf/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="book-list">
    <h2>Book List</h2>

    <ul class="menu">
  <li><a href="book-list.php">Manage Books</a></li>
  <li><a href="cat-list.php">Manage Categories</a></li>
  <li><a href="order-manage.php">Manage Orders</a></li>
  <li style="float:right;"><a href="logout.php">Logout</a></li>
</ul>
    <?php
      include("conf/config.php");
      $result = mysqli_query($conn,"SELECT books.* , categories.name  FROM books LEFT JOIN categories ON books.category_id = categories.id
      ORDER BY books.created_date DESC");


    ?>
    <ul class="book">

    <?php 
     while($row = mysqli_fetch_assoc($result)): ?>
     <li>
     <img src ="covers/<?php echo $row['cover']?>" height="140" align="left">
     <b><?php echo $row['title'] ?></b>
     <i>by <?php echo $row['author'] ?></i>
     <small>(in <?php echo $row['name'] ?>)</small>
     <span>$<?php echo $row['price'] ?></span>
     <div class="summary"><?php echo $row['summary'] ?></div>

     [<a href="book-del.php?id=<?php echo $row['id']?>" class="del">Del</a>]
     [<a href="book-edit.php?id=<?php echo $row['id']?>" class="edit">Edit</a>]

    </li>
     <?php endwhile; ?>
    </ul>
    </div>
    <a href="book-new.php" class="new">New book</a>

</body>
</html>