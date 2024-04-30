<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php
            if (!isset($_SESSION['username'])) {
                echo '<li><a href="signup.php">Signup</a></li>
                      <li><a href="login.php">Login</a></li>';
            } else {
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if ($row['role'] == 0) {
                    echo '<li><a href="booking.php">Book Appointment</a></li>
                          <li><a href="appointments.php">See Appointment</a></li>
                          <li><a href="cars.php">Add Cars</a></li>
                          <li><a href="user_update.php">Update info</a></li>
                          <li><a href="logout.php">Logout</a></li>
                          <li><p style="font-weight: bold; margin-top: 0px; font-size: 14px; color:black; word-spacing: 5px;">I am ' . $_SESSION['username'] . ' A Normal User</p></li>
                          <ul>';
                }

                if ($row['role'] == 1) {
                    echo '<li><a href="customers_admin.php">See All Customers</a></li>
                          <li><a href="appointments_admin.php">See All Appointments</a></li>
                          <li><a href="mechanics_admin.php">See All Mechanics</a></li>
                          <li><a href="logout.php">Logout</a></li>
                          <li><p style="font-weight: bold; margin-top: 0px; font-size: 14px; color:black; word-spacing: 5px;">I am ' . $_SESSION['username'] . ' An Admin</p></li>';

                }
                echo '</ul></li>';
            }
        ?>
    </ul>
</nav>
