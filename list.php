<?php
    require_once('dbConnect.php');
    
    $sql = "SELECT * FROM sms";
    if(isset($_GET['status'])) {
        $sent_status = $_GET['status'];
        $sql = "SELECT * FROM sms WHERE sent_status=".$sent_status;
    }
    
    // echo $sql; die;
    $result = $conn->query($sql);
    $conn->close();

    $list = array();
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }

    echo json_encode($list);
?>