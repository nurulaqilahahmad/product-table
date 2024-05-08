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
            <tr>
                <td>1</td>
                <td>C</td>
                <td>56.89</td>
                <td>Detail of product c</td>
                <td>Yes</td>
                <td>
                    <a href="show-product" class="show-btn">Show</a>
                    <a href="edit-product" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>B</td>
                <td>23.33</td>
                <td>B detail</td>
                <td>Yes</td>
                <td>
                    <a href="show-product" class="show-btn">Show</a>
                    <a href="edit-product" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>A</td>
                <td>60.56</td>
                <td>A detail...</td>
                <td>No</td>
                <td>
                    <a href="show-product" class="show-btn">Show</a>
                    <a href="edit-product" class="edit-btn">Edit</a>
                    <a href="#" class="delete-btn">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>