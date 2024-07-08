<?php

if(isset($_POST['JenisTiket']) && isset($_POST['JumlahTiket']) && isset($_POST['TotalHarga'])){
    // Include the necessary files
    require_once "conn2.php";
    require_once "validate.php";
    // Call validate, pass form data as parameter and store the returned value
    $JenisTiket = validate($_POST['JenisTiket']);
    $JumlahTiket = validate($_POST['JumlahTiket']);
    $TotalHarga =  validate($_POST['TotalHarga']);
    
    $sql = "insert into ordertable values('','$JenisTiket', '$JumlahTiket ','$TotalHarga')";
    // Execute the query. Print "success" on a successful execution, otherwise "failure".
    if(!$conn->query($sql)){
        echo "failure";
    }else{
        echo "success";   
    }
}
?>

