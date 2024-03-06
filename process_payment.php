<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost"; 
    $username = "root";
    $password = ""; 
    $dbname = "payment";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO payment_form (amount, phone, name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $amount, $phone, $name);

    
    $amount = $_POST['amount'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $stmt->execute();

   
    $stmt->close();
    $conn->close();

    
    //header("Location: index.html");
    //exit();
}
?>




