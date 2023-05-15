<?php
    if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $response = file_get_contents("https://api.agify.io/?name=$name");
            $data = json_decode($response, true);
            $age = $data['age'];
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
        <?php
            if(isset($_POST['submit'])) {
                echo "Your age is $age years";
            }
        ?>
        <form method="POST" action="index.php">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
            <input type="submit" name="submit" value="Guess Age">
        </form>
    </body>
</html>