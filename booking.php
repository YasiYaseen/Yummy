<?php
include_once 'connect.php';

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$date=$_POST["date"];
$time=$_POST["time"];
$people=$_POST["people"];
$message=$_POST["message"];


if($name !=""&& $email !="" && $phone !="" && $date!='' && $time != "" && $people!=''){
    try {
        $query="INSERT INTO booking (name,email,phone,date,time,people,message) VALUES (?,?,?,?,?,?,?)";
        $statement=$conn->prepare($query);
        $statement->bind_param("sssssis",$name,$email,$phone,$date,$time,$people,$message);
        if($statement->execute()){
            echo json_encode(["success"=>"Booking succesful \n we will contact you soon"]);
        }
    } catch (\Throwable $th) {
        echo json_encode(["error"=>"Booking failed \n :".$th->getMessage()]);
    }
}else {
    echo json_encode(["error"=>"Please fill all required data"]);
}

?>