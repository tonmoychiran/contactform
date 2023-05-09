<?php
include 'connection.php';
session_start();
$statement="SELECT * from messages";
$result=mysqli_query($conn,$statement);
//if user is loggedin redirect to loginpage
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: admin.html');
    exit;
}
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpagestyle.css">

</head>
<body>
    <h1>Admin Panel</h1>
    <table>
        <tr>
            <th> First Name  </th>
            <th> Last Name </th>
            <th> Email </th>
            <th> Contact Number </th>
            <th> Message </th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fName'] . "</td>";
            echo "<td>" . $row['lName'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phnNo'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <form action="logout.php" method="post">
    <input type="submit" value="Logout">
    </form>
</body>