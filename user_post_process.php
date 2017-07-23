<?php
    if($_POST){
        echo "Posted!<br>";
        $test = 20 ;
        $postContent = $_POST['post'];
        include ('dbconnect.php');
        $sql = "INSERT INTO user_post (post_content) values('$postContent')";
        $runQuery = mysqli_query($connection,$sql);
        //$num_row = mysqli_num_rows($runQuery);
        
        $displayPostQuery = "SELECT post_content FROM user_post
                        WHERE post_id = 4 ";
        $getPost = mysqli_query($connection,$displayPostQuery);
        $postContent = mysqli_num_rows($getPost);
        if($postContent==0){
            echo "No post found!";
        }
        else{
            $post = mysqli_fetch_array($getPost);
            echo "<h2>".  $post['post_content']."</h2>";
        }
    
    }
else{
    header("location:index.php");
}
echo"<br><a href=\"logout.php\">Log out</a>" ;
?>