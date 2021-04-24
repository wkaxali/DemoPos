@include('adminNavbar')
<h1>Hello World<h1>

<link rel='stylesheet' type='text/css' href='.../css/abc.css'/>

<?php

//create connection
$con = mysqli_connect("localhost", "root", "","erp" );

//check_connection
if (mysqli_connect_errno()) {
    echo "Failed to connect: " .mysqli_connect_error() ;
}

//inserting row
$sql = "INSERT INTO companyinfo (CompanyName, StoreName, Address) VALUES ('companyname', 'storename', 'address')";


//displaying table
$result = mysqli_query($con,"SELECT * FROM companyinfo");


echo "<table>";
echo "<tr>
        <th>CompanyName</th>
        <th>StoreName</th>
        <th>Address</th>
    </tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['CompanyName'] . "</td>";
echo "<td>" . $row['StoreName'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "</tr>";
}


?>