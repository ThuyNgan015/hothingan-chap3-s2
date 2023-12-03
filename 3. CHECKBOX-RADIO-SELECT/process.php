<?php // HEADER
    require "templates/header.php";
?>
<?php
    $province = isset($_POST["province"]) ? $_POST["province"] : "";
    $object = isset($_POST["object"]) ? $_POST["object"] :[];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <?php    
                if($gender== "Male"){
                    $url = "./images/male.png";
                } else{
                    $url = "./images/female.png";

                }
            ?>
            <img src="<?=$url ?>" alt="">
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                echo "<div>".implode('',$object)."</div>"
            ?>
        </div>
    </div>

<?php // FOOTER
    require "templates/footer.php";
    
 ?>
 