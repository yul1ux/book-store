<?php include("conf/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Book</title>
    <style>
    form{
        background:#0b2942;
        width:500px;
        position: absolute;
        left: 32%;
        padding:10px;
        }
    form label{display: block;
               color:whitesmoke;
               margin:4px;}
    form input{display: block;
               width: 100%;
              }
    form input[type=submit]{
        width: auto;
        margin:15px;
        outline:none;
        border:none;
        background: #59CB94;
        padding:8px;
        border-radius: 4px;
        display:inline;
        cursor:pointer;
    }
    form a{text-decoration:none;
           color:white;
           float:right;
           margin:15px;}
    </style>
</head>
<body>
    <form action="book-add.php" method="POST" enctype="multipart/form-data">
      <label for="title">Book Title</label>
      <input type="text" name="title" id="title">

      <label for="author">Author</label>
      <input type="text" name="author" id="author">

      <label for="sumarry">Summary</label>
      <textarea name="summary" id="summary"></textarea>

      <label for="price">Price</label>
      <input type="text" name="price" id="price">

      <label for="category">Category</label>
      <select name="category_id" id="category">
        <option value="0">-----Choose-----</option>
        <?php 
          include("conf/config.php");
          $result = mysqli_query($conn,"SELECT id, name FROM categories");

          while($row=mysqli_fetch_assoc($result)):

        ?>
        <option value="<?php echo $row['id']?>">
        <?php echo $row['name']?>
        </option>
          <?php endwhile; ?>
      </select>
      <label for="cover">Cover</label>
      <input type="file" name="cover" id="cover">
      <input type="submit" value="Add Book">
      <a href="book-list.php" class="back">Back</a>
    </form>
</body>
</html>