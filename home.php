<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <?php 
            include('dbconnect.php');
            
            $sql = "SELECT user_id, post_content FROM user_post";
            $select = mysqli_query($connection,$sql);
            $numrows = mysqli_num_rows($select);
            //echo $numrows."<br>";
        
        
        
        
        ?>
         
        <h1>Home</h1>
        <form method="post" action="user_post_process.php">
            <label for="post">Post something here</label>
            <input type="text" name ="post" id="post">
            
            <br><br>
            
            <input type="submit" value="post" class="post">
            <a href="logout.php">Log out</a>
            <br><br>
        </form>
        <?php
        
            if($numrows==0){
                echo"No post found!";
            }
            else{
                while($posts = mysqli_fetch_array($select)){
                    echo "<h1>" ;
                    echo $posts['post_content']."<br>";
                    echo "</h1>";
                }
                }
        ?>
        
    </body>
</html>