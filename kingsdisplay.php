<?php
include("kingsconnection.php");
error_reporting(0);
$query = "SELECT * FROM `gogreen`";
$data = mysqli_query($conn, $query);

?>


<table border= "1" cellspacing="0" cellpadding="10">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Conpassword</th>
        <th>Profession</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
</tr>

<?php
    if(mysqli_num_rows($data)>0){
        while($bob = mysqli_fetch_array($data)){
?>

<tr>
    <td>
        <?php
            echo $bob['fname']
        ?>
    </td>
    <td>
        <?php
            echo $bob['lname']
        ?>
    </td>
    <td>
        <?php
            echo $bob['password']
        ?>
    </td>
    <td>
        <?php
            echo $bob['cmpassword']
        ?>
    </td>
    <td>
        <?php
            echo $bob['profession']
        ?>
    </td>
    <td>
        <?php
            echo $bob['email']
        ?>
    </td>
    <td>
        <?php
            echo $bob['pnumber']
        ?>
    </td>
    <td>
        <?php
            echo $bob['address']
        ?>
    </td>
</tr>

<?php
    }
?>
<?php
    }
?>
</table>