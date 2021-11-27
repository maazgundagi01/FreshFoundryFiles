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
        <form action="goods_execute.php" method="POST" enctype="multipart/form-data">
            <label for="">Serial No.</label>
            <input type="text" name="sr_no"><br>
            <label for="">Product Category</label>
            <input type="text" name="prod_name"><br>
            <label for="">Good's Name</label>
            <input type="text" name="goods_name"><br>
            <label for="">Goods ID</label>
            <input type="text" name="goods_id" read_only><br>
            <label for="">Price</label>
            <input type="text" name="price" id=""><br>
            <label for="">Image</label>
            <input type="file" name ="image"><br>
            <button type="submit" name="upload">Insert</button>
        </form>
    </div>
</body>
</html>
