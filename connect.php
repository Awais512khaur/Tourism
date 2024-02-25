<?php    
 $location = $_POST['location'];
 $hotel = $_POST['hotel'];
 $rider = $_POST['rider'];
 $duration = $_POST['duration'];

    // Database Connection
    $conn = new mysqli('localhost', 'root', '', 'tourism_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into custom(location, hotel, rider, duration) values(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $location, $hotel, $rider, $duration);
        $stmt->execute();
        echo "Success!!!";
        $stmt->close();
        $conn->close();
    }
?>