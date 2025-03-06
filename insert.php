<!DOCTYPE html>
<html>

<head>
    <title>campain_feedback</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => campaign_feedback
        $conn = mysqli_connect("localhost", "root", "", "staff");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $id =  $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email =  $_REQUEST['email'];
        $feedback = $_REQUEST['feedback'];
        $rating = $_REQUEST['rating'];
        
        // Performing insert query execution
        // here our table name is feedback
        $sql = "INSERT INTO college  VALUES ('$id', 
            '$name','$email','$feedback','$rating')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

            echo nl2br("\n$id\n $name\n "
                . "$email\n $feedback\n $rating");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
