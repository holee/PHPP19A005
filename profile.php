<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php
        include_once "./includes/style.php";
    ?>
</head>
<body>
    <?php
        include_once "./includes/navbar.php";
        require_once "./connections/connection.php";
    ?>
    <div class="mx-3">
    <form action="" method="GET">
        <div class="m-2">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" class="form-control">
        </div>
        <div class="m-2">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" class="form-control">
        </div>
        <div class="m-2">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-select">
                <option value="">Please select your gender.</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
        </div>
        <div class="m-2">
            <label for="file">Image</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="m-2">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <input type="submit" value="Create Profile"  class="btn btn-primary"/>
    </form>
</div>
</body>
</html>