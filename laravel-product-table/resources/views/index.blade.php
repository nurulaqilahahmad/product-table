<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/style.css') }}">
    <title>Product Table</title>
</head>

<body>

    <div class="title-section">
        <h1>Laravel</h1>
        <div>
            <a href="add-product" class="create-btn">Create New Product</a>
        </div>
    </div>


    <table class="product-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price (RM)</th>
                <th>Details</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $product)
            <tr>
                <td></td>
                <td>{{$product->productName}}</td>
                <td>{{$product->productPrice}}</td>
                <td>{{$product->productDetails}}</td>
                <td>{{$product->productPublish}}</td>
                <td>
                    <a href="show-product/{{$product->productID}}" class="show-btn">Show</a>
                    <a href="edit-product" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>