<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action=""method="get">
    <label for=""></label> <br><br>
       <input type="text"name="name">
       <input type="submit"value="submit"><br><br>
  </form>
     <?php
     
        $name = $_GET['name'];
        echo "hello $name";
     
     ?>
</body>
</html>