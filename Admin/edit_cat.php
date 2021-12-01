<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form label, form input, form textarea, form button {
            margin: 1em 0;
        }
    </style>
</head>
<body>
    <div>
        <form action="execute.php" method="POST">
            <label for="">Serial No.</label>
            <input type="text" name="sr_no"><br>
            <label for="">Product Name</label>
            <input type="text" name="product_name"><br>
            <label for="">Product_id</label>
            <input type="text" name="product_id" read_only><br>
            <label for="">Description</label>
            <textarea name="product_desc" id="" cols="30" rows="2"></textarea><br>
            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>
