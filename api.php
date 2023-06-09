<?php  
    // koneksi ke database mysql 
    include "conn.php";


    $sql = "SELECT * FROM pegawai";
    $query = mysqli_query ($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nama_pegawai"]."";

        $item[] = array (
            'id' => $data["id_pegawai"],
            'nama_pegawai' =>$data["nama_pegawai"],
            'NIK' => $data["NIK"],
            'alamat' => $data["alamat"]
        );
    }
    $response = array(
        'status' => 'OK',
        'data' =>$item
    );

    echo json_encode($response);



    // // //query menambahkan data 
    // $sql = "INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `NIK`, `alamat`) 
    // VALUES ('5', 'Dadang', '41818110038', 'Jakarta Utara ');";

    // echo $sql;





?>