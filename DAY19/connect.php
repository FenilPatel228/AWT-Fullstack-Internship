
        
        
    <?php
        mysqli_connect("localhost", "root", "", "demo1");

        if(mysqli_connect_error())
            echo "Connection Error.";
        else
            echo "Database Connection Successfully.";
            
        $query = "INSERT INTO Student VALUES('228', 'Fenil', 'Patel', 'ASOIT')";
        $result = $conn->query($query);
        
    ?>
            
