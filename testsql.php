<html>
<head>
</head>
<body>
<div>
<?php

$con=mysqli_connect("localhost","root","Djarumsuper86","fiki"); 
// cek koneksi 
if (mysqli_connect_errno()) { 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} 

for($i=1;$i<500;$i++) { 
    $mysqli_query ="INSERT INTO fiki.biodata (no_id,nama_depan,nama_belakang,alamat) VALUES ('NULL', 'fiki', 'aprianto', 'sukabumi')";
    echo "Number " . $i . "<br>"; 
    // <<-- closing 
    if (!mysqli_query($con,$mysqli_query)) { 
        die('Error: ' . mysqli_error($con)); 
    } 
} 
mysqli_close($con);
?>
</div>
</body>
</html>
