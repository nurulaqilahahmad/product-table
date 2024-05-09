<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/style.css') }}">
    <title>Edit | Product Table</title>
</head>
<body>
    
    <div class="title-section">
        <h1>Edit Product</h1>
        <div>
            <a href="/" class="back-btn">Back</a>
        </div>
    </div>
    @foreach ($product as $product)
    <form method="post" action="{{url('editProduct')}}">
        @csrf
        <input type="hidden" id="productID" name="productID" value="{{$product->productID}}">
        <p>Name:</p>
        <input type="text" class="text-input-field" id="productName" name="productName" value="{{$product->productName}}">
        <p>Price (RM):</p>
        <input type="text" class="text-input-field" id="productPrice" name="productPrice" value="{{$product->productPrice}}">
        <p>Detail:</p>
        <textarea rows="5" cols="50" class="text-input-field" id="productDetails" name="productDetails" value="{{$product->productDetails}}"><?php echo $product->productDetails ?></textarea>
        <p>Publish:</p>
        <input type="radio" name="productPublish" id="productPublish" value="Yes" <?php if ($product->productPublish == 'Yes') echo 'checked="checked"'; ?>><label for="yes"> Yes</label></br>
        <input type="radio" name="productPublish" id="productPublish" value="No" <?php if ($product->productPublish == 'No') echo 'checked="checked"'; ?>><label for="no"> No</label>
        </br>
        </br>
        <div class="submit">
            <input type="submit" value="Submit" class="submit-btn">
        </div>
    </form>
    @endforeach

</body>
</html>