<?php 
// HEADER 
include 'templates/header.php';
?>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $number = $_POST["number"];
       $message = $_POST["message"];
   }
?>
        <div class="col">
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" value="<?php echo isset($name) ? $name : ''; ?>" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="number"></label>
                <input type="text" class="form-control" id="number" value="<?php echo isset($number) ? $number : ''; ?>" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="email" value="<?php echo isset($email) ? $email : ''; ?>" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="password"></label>
                <input type="text" class="form-control" id="password" value="<?php echo isset($password) ? $password : ''; ?>" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="message"></label>
                <input type="text" class="form-control" id="message" value="<?php echo isset($message) ? $message : ''; ?>" readonly>
            </div>
        </div>
</ul>
<?php 
// FOOTER 
include 'templates/footer.php';
?>
