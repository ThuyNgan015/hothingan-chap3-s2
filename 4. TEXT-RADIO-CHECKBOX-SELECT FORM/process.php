<?php require_once 'templates/header.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $message = $_POST['message'];
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $objects = $_POST['objects'];
}
?>


<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php

    ?>
    <tr>
        <td><?php
            echo $name;
            ?></td>
        <td><?php 
        echo $email;
            ?></td>
        <td><?php 
        echo $pass;
            ?></td>
        <td><?php
        echo $phone; 
            ?></td>
        <td><?php
        echo $message; 
            ?></td>
        <td><?php
        echo $province;
            ?></td>
        <td><?php
        echo $gender;
            ?></td>
        <td><?php
        for ($i=0; $i<count($objects); $i++){
            if($i<count($objects)-1){
                echo $objects[$i]."|";
            }else{
                echo $objects[$i];
            }
        }
            ?></td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>