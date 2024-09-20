<?php
include_once 'creds.php';
$result = mysqli_query($conn, "SELECT * FROM wp4m_questions");
$row = mysqli_fetch_row($result);
echo $row['0'];
echo $row['1'];
echo $row['2'];
echo $row['3'];
echo $row['4'];
echo $row['5'];
?>
