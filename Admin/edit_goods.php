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
            <select name="prod_name" id="">
                <option value="fresh produce">Fresh Produce</option>
                <option value="frozen foods">Frozen foods</option>
                <option value="Meat">Meat</option>
                <option value="Dairy">Dairy</option>
                <option value="spices">Spices</option>
                <option value="baked goods">Baked Goods</option>
                <option value="Beverages">Beverages</option>
            </select><br>
            <label for="">Good's Name</label>
            <input type="text" name="goods_name"><br>
            <label for="">Goods ID</label>
            <input type="text" name="goods_id" read_only><br>
            <label for="">Price</label>
            <input type="text" name="price" id=""><br>
            <label for="">Image</label>
            <input type="file" name ="image"><br>
            <button type="submit" name="submit">Insert</button>
        </form>
    </div>
</body>
</html>
