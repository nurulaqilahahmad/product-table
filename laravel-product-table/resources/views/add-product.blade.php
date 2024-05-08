<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/style.css') }}">
    <title>Add New | Product Table</title>
</head>
<body>
    
    <div class="title-section">
        <h1>Add New Product</h1>
        <div>
            <a href="/" class="back-btn">Back</a>
        </div>
    </div>

    <form action="">
        <p>Name:</p>
        <input type="text" placeholder="Name" style="width: 50%;">
        <p>Price (RM):</p>
        <input type="text" placeholder="99.90" style="width: 50%;">
        <p>Detail:</p>
        <input type="text"  placeholder="Detail" style="width: 50%;">
        <p>Publish:</p>
        <input type="radio" name="publish" id="yes" value="Yes"><label for="yes">Yes</label></br>
        <input type="radio" name="publish" id="no" value="No"><label for="no">No</label>
        </br>
        </br>
        <input type="submit" value="Submit" style="width: 4rem; height: auto; color: white; background-color: blue; padding: 8px; border: none; border-radius: 4px; justify-content: center; align-items: center;">
    </form>

</body>
</html>