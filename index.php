<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home Page</title>
</head>
<body>
    <div class="top">
        <div class="box">
        <form action="index.php" method="post">
        <input type="text" name="color" placeholder="Color...">
        <input type="text" name="pluralNoun" placeholder="Plural..."> 
        <input type="text" name="celeb" placeholder="Celeb..."> 
        <input type="submit">
        </div>
    </div>

        </form>
    
    <div class="bottom">
       <?php 
       $color = $_POST["color"];
       $pluralNoun = $_POST["pluralNoun"];
       $celebrity = $_POST["celeb"];
       echo "Roses are $color <br>"; 
       echo "$pluralNoun are nice <br>"; 
       echo "I love $celebrity";
        ?>
    </div>
       

</body>
</html>