<?php
    include "db_connect.php";
    $query = "select * from parcel_tracks";
    $data = mysqli_query($conn,$query);
    $parcel_tracks_arr = array();
    while($row = mysqli_fetch_assoc($data)){
        array_push($parcel_tracks_arr,new db_view(
            $row['id'],
            $row['parcel_id'],
            $row['status'],
            $row['date_created']
        ));
    }
    echo json_encode($parcel_tracks_arr);
    class db_view{
        function db_view($id,$parcel_id,$status,$date_created){
            $this->id = $id;
            $this->parrcel_id = $parcel_id;
            $this->status = $status;
            $this->date = $date_created;
        }
    }
?>

