<?php
include("dbcon.php");
error_reporting(0);
$query = "SELECT * FROM `registration`";
$data = mysqli_query($con, $query);

?>


<table border= "1" cellspacing="0" cellpadding="10">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Conpassword</th>
        <th>Gender</th>
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
            echo $bob['username']
        ?>
    </td>
    <td>
        <?php
            echo $bob['email']
        ?>
    </td>
    <td>
        <?php
            echo $bob['cppassword']
        ?>
    </td>
    <td>
        <?php
            echo $bob['cmpassword']
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