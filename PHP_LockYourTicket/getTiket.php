<?php
 include "conn2.php";
        
    $q=mysqli_query($conn,"SELECT * FROM ordertable");
    $response = array();

    if(mysqli_num_rows($q)>0){
        $response["data"] = array();
        while($r=mysqli_fetch_array($q)){
            $user = array();
            $user["OrderID"] = $r["OrderID"];
            $user["JenisTiket"] = $r["JenisTiket"];
            $user["JumlahTiket"] = $r["JumlahTiket"];
            $user["TotalHarga"]=$r["TotalHarga"];
            array_push($response["data"], $user);
        }
        $response["success"] = 1;
        $response["message"] = "Data user berhasil dibaca";
        echo json_encode($response);
    }
    else{
        $response["success"] = 0;
        $response["message"] = "Tidak ada data";
        echo json_encode($response);
    }
?>