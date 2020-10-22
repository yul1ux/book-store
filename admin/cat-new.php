<?php include("conf/auth.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <style>
.cat-new{
    display: block;
    position: absolute;
    left: 45%;
    top:35%;
}
.cat-new form label{display: block;
                    margin:6px;}
.cat-new form input[type=submit]{
    display: block;
    cursor: pointer;
    outline: none;
    border:none;
    background:#1324bf;
    color:white;
    padding: 5px;

}
    </style>
</head>
<body>
<div class="cat-new">
    <form action ="cat-add.php" method="POST">
    <label for = "name">Category Name</label>
    <input type="name" name="name" id="name">
    <label for = "remark">Remark</label>
    <textarea name= "remark"  id="remark"></textarea>
    <input type="submit" value="Add category">
    </form>
</div>
</body>
</html> 