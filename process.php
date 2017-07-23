<!DOCTYPE html>
<html>
    <head><title>News Feed</title></head>
    <body>
    <?php 
    if($_POST){
            $username = $_POST['username'];
            $password = $_POST['password'];
            include('dbconnect.php');
            $sql = "SELECT * FROM user WHERE (username='$username' OR name='$username') AND password='$password'";//variables must be in single quote in SQL command
            $select = mysqli_query($connection , $sql);
            $num_row = mysqli_num_rows($select);
        
            if($num_row==0){
                echo "Wrong username or password";
            }
            else{
                $userrow = mysqli_fetch_array($select);
                
                echo "<h1>log in successful!</h1>";
                echo "<br>";
                echo "User Id: ".$userrow['id'];
                echo"<br>";
                echo "Email: ".$userrow['email'];
                
            }
    //header("location:home.php");
    echo"<br><br><a href=\"logout.php\">Log out</a><br>";
    echo "<a href=\"home.php\">News Feed</a>";
    }
else{
    header("location:index.php");
}

?>
    
    </body>

</html>
