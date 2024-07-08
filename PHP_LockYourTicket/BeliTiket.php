<?php
    header('Content-type:application/json;charset=utf-8');
    include "conn.php";

    $_POST['JenisTiket'] = "Section A";
    $_POST['JumlahTiket'] = "3";
    $_POST['TotalHarga'] = "1170000";
    $_POST['status'] = "Pending";

   
    if(isset($_POST['JenisTiket']) && isset($_POST['JumlahTiket']) &&isset ($_POST['TotalHarga']) &&isset ($_POST['Status'])){
        $JenisTiket = $_POST['JenisTiket'];
        $JumlahTiket = $_POST['JumlahTiket'];
        $TotalHarga = $_POST['TotalHarga'];
        $kondisi = $_POST['kondisi'];
       
       
       

        $q=mysqli_query($conn,"INSERT INTO tiketorder(JenisTiket,JumlahTiket,TotalHarga,kondisi)  VALUES('$JenisTiket','$JumlahTiket','$TotalHarga',$kondisi)");
        $response = array();

        if($q){
            $response["success"] = 1;
            $response["message"] = "Data berhasil ditambah";
            echo json_encode($response);
            }
        else{
            $response["success"] = 0;
            $response["message"] = "Data gagal ditambah";
            echo json_encode($response);
        }
    }
    else{
        $response["success"] = -1;
        $response["message"] = "Data kosong";
        echo json_encode($response);
    }
?>