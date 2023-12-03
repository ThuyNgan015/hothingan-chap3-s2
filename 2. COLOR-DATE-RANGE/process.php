<?php
// HEADER
include 'templates/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $color = $_POST["color"] ?? "Not specified";
    $range = $_POST["range"] ?? "Not specified";
    $date = $_POST["date"] ?? "Not specified";
?>

    <div class="col">
        <input type="text" class="form-control" style="background-color: #C0C0C0" value="Color: <?php echo isset($color) ? $color : ''; ?>" readonly>
    </div>
    <div class="col">
        <input type="text" class="form-control" style="background-color: #008080" value="Range: <?php echo isset($range) ? $range : ''; ?>" readonly>
    </div>
    <div class="col">
        <input type="text" class="form-control" style="background-color: #FF0000" value="Date: <?php echo isset($date) ? $date : ''; ?>" readonly>
    </div>

<?php
} else {
    header("Location: form.php");
    exit();
}

// FOOTER
include 'templates/footer.php';
?>
