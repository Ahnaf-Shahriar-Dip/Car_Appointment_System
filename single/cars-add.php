<?php
    require_once 'dbConnect.php';
    // User clicked submit in the form to update the data
    if(isset($_POST['add'])){
        session_start();
        $car_license = $_POST['car_license'];
        $car_registration = $_POST['car_registration'];
        $car_model = $_POST['car_model'];

        $car_colour = $_POST['colour'];



        $user_id = $_SESSION['id'];
        $query = "INSERT INTO cars (car_license, car_registration, car_model, user_id,colour) VALUES ('$car_license', '$car_registration', '$car_model', '$user_id','$car_colour')";
        $result = mysqli_query($conn, $query);
        if($result){
            $_SESSION['caradd'] = '1';
            header('Location: cars.php');
        }
        else{
            $_SESSION['caraddfailed'] = '1';
            header('Location: cars.php');
}
    }
?>


