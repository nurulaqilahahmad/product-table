<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/style.css') }}">
    <title>Show | Product Table</title>
</head>
<body>

    <div class="title-section">
        <h1>Show Product</h1>
        <div>
            <a href="/" class="back-btn">Back</a>
        </div>
    </div>
    @foreach ($product as $product)
    <div>
        <p><b>Name:</b> {{$product->productName}}</p>
        <p><b>Price (RM):</b> RM {{$product->productPrice}}</p>
        <p><b>Details:</b> {{$product->productDetails}}</p>
        <p><b>Publish:</b> {{$product->productPublish}}</p>
    </div>
    @endforeach

</body>
</html>