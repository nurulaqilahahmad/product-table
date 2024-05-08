<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Product Table</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
    
    <div class="title-section" style="width: 50%; display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
        <h1>Edit Product</h1>
        <div>
            <button style="width: 4rem; height: auto; color: white; background-color: blue; padding: 8px; border: none; border-radius: 4px;">Back</button>
        </div>
    </div>

    <form action="">
        <p>Name:</p>
        <input type="text" placeholder="Name" style="width: 50%;">
        <p>Price (RM):</p>
        <input type="text" placeholder="99.90" style="width: 50%;">
        <p>Detail:</p>
        <input type="text" placeholder="Detail" style="width: 50%;">
        <p>Publish:</p>
        <input type="radio" value="Yes">
        <input type="radio" value="No">
        <input type="submit" value="Submit">
    </form>

</body>
</html>