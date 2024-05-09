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

    <form method="post" action="/createProduct">
        @csrf
        <p>Name:</p>
        <input type="text" placeholder="Name" class="text-input-field" id="productName" name="productName">
        <p>Price (RM):</p>
        <input type="text" placeholder="99.90" class="text-input-field" id="productPrice" name="productPrice">
        <p>Detail:</p>
        <textarea  placeholder="Detail" rows="5" cols="50" class="text-input-field" id="productDetails" name="productDetails"></textarea>
        <p>Publish:</p>
        <input type="radio" name="productPublish" id="productPublish" value="Yes"><label for="yes"> Yes</label></br>
        <input type="radio" name="productPublish" id="productPublish" value="No"><label for="no"> No</label>
        </br>
        </br>
        <div class="submit">
            <input type="submit" value="Submit" class="submit-btn">
        </div>
    </form>

</body>
</html>