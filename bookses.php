<?php 
 include('connect.php');
 
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$program = $_POST['program'];
$program_level = $_POST['program_level'];
$module = $_POST['module'];
$university = $_POST['university'];
$service = $_POST['service'];
$start_date = $_POST['start_date'];
$num_hours = $_POST['num_hours'];
$dropdown = $_POST['dropdown'];
$country = $_POST['country'];

 
$query = "INSERT INTO bk_session(id, fullname, email, cell, program, program_level, module, university, service, start_date, num_hours, contact_via, country)
VALUES (NULL, '{$fullname}', '{$email}', '{$cell}', '{$program}', '{$program_level}', '{$module}', '{$university}', '{$service}', '{$start_date}', '{$num_hours}', '{$dropdown}', '{$country}')";
 
if (mysqli_query($mysqli,$query)) {
 
echo "<script type=\"text/javascript\">
                alert(\"Message sent successfully.\");
                window.location = \"index.php\"
            </script>";
 
} else
die("Failed: " . mysqli_error($mysqli));
?>;