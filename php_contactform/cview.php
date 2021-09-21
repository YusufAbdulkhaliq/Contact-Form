<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'nav.htm'; ?>
    <title>Contacts</title>

</head>

<body>
    <div class="bg-secondary">
        <h1>Contact List</h1>
        <table class="table table-dark" method="get">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'process.php' ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>