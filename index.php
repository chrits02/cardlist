
<?php

    require "dbc.php";

    if (isset($_POST['btn_post'])) {
        $filetext = $_POST['post_text'];
                    
        $query = "INSERT INTO tbl_cardlist (post_text) VALUES ( ?)";
        
        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, "s", $filetext);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php");
        } else {
            echo "Something went wrong!";
            
        }
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> Cardlist by Phawee Toraparppisan</title>
        
        <link rel="stylesheet" href="style.css">
        
    </head>
    
    <body>
        
    <h1>CardList</h1>
    <div class="submit-form">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="text" name="post_text" class="post_text" placeholder="text here!" required>
            <input type="submit" value="Submit!" name="btn_post" class="btn_post">
        </form>
    
    </div> 
    
    <hr width="80%">
    
        <h2>Recently Card</h2>
        <div class="container-list">
            
            <?php
                        
                        require "dbc.php";
                        $query = "SELECT * FROM tbl_cardlist ORDER BY post_id DESC";
                        if($result = mysqli_query($conn, $query)) {
                            while ($card = mysqli_fetch_array($result)) {
                                

                    
                    
            ?>
            
                <div class="list">
                    <a class="list-text"><?php echo $card['post_text']; ?></a>
                
                </div>
            
            
            <?php
                                    
                                }}
                                
            ?>
        
        
        
        </div>
        
    </body>
</html>