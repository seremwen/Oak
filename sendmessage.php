<?php 
 include('connect.php');
 
$name = $_POST['name'];
$email = $_POST['email'];
$messages = $_POST['messages'];


 
$query = "INSERT INTO messages(id, name, email, messages)
VALUES (NULL, '{$name}', '{$email}', '{$messages}')";
 
if (mysqli_query($mysqli,$query)) {
 
echo "<script type=\"text/javascript\">
                alert(\"Message sent successfully.\");
                window.location = \"index.php\"
            </script>";
 
} else
die("Failed: " . mysqli_error($mysqli));
?>;