<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Contact Form</title>
</head>

<body class="justify-content-center bg-secondary">
    <header>
        <?php include 'nav.htm'; ?>
    </header>

    <?php require_once 'process.php'; ?>
    <div class="justify-content-center p-3 m-auto mt-4 w-50 bg-light">
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type=" text" class="form-control" name="name" value="">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" name="phone" value="">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="">
            </div>
            <div class="form-group p-3 text-center">
                <input type="submit" name="save" class="btn btn-primary btn-lg" value="Save">
            </div>
        </form>
    </div>

</body>

</html>