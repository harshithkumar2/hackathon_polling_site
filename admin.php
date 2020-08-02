$count = mysqli_query($conn,"SELECT SUM(status) as 'votes'FROM register");
$rows = mysqli_fetch_assoc($count);
echo $rows['votes'];
