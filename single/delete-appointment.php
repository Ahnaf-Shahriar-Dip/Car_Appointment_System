<?php
    require_once 'dbConnect.php';
    if(isset($_GET['id'])){
        session_start();
        $id = $_GET['id'];
        $query = "DELETE FROM appointments WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if($result){
            session_start();
            $_SESSION['appointmentdelete']="1";
            header("Location: appointments_admin.php");
        }else{
            session_start();
            $_SESSION['appointmentdeletefailed']="1";
            header("Location: appointments_admin.php");
        }
    }
?>