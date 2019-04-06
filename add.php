<?php
    require_once('dbConnect.php');

    $response = array();
    $response["success"] = 0;
    $response["message"] = "Add Sms status fail!";
            
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $sms_to = (int) $_POST['sms_to'];
        $sent_status = (int) $_POST['sent_status'];
        $msg_response = $_POST['msg_response'];

        // echo var_dump($msg_response); die;

        $sql = "INSERT INTO sms(sms_to, sent_status, msg_response) VALUE (".$sms_to . ",".$sent_status .",'".$msg_response."')";
        $result = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {
            $response["success"] = 1;
			$response["message"] = "Add Sms status succeed.";
        }

        $conn->close();
    }

    echo json_encode($response);
?>