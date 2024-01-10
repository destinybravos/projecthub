<?php
include_once '../connect.php';
include_once  '../notification/Notify.php';  
$notify = new Notify;

$student_id = $_POST['student_id'];
$chapter1 = $_POST['chapter1'];
$sup_id = getSupervisorID($student_id, $conn);

$sql_string= "UPDATE chapter1 SET chapter1='$chapter1' WHERE student_id='$student_id '";
    if($conn->query($sql_string)){
        $notify->sendNotification($sup_id, $student_id, 'Your supervisor just updated your chapter one', 'chapter1');   
        echo json_encode([
            'status' => 'success'
        ]);
    }else{
        echo json_encode([
            'status' => 'error'
        ]);
    }



    function getSupervisorID($student_id, $conn){
        $sql = "SELECT * FROM assign WHERE std_id = '$student_id'";
        if($result = $conn->query($sql)){
            if($result->num_rows > 0){
                $data = $result->fetch_assoc();
                return $data['supervisor_id'];
            }else{
                return 0;
            }
        }else{
           return 0;
        }
    }
?>