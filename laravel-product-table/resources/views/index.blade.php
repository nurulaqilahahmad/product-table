<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Product Table</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">

    <div class="title-section" style="width: 50%; display: flex; flex-direction: row; justify-content: space-between; align-items: center;">
        <h1>Laravel</h1>
        <div>
            <button style="height: auto; color: white; background-color: green; padding: 8px; border: none; border-radius: 4px;">Create New Product</button>
        </div>
    </div>


    <table class="product-table" style="width: 50%; border: 1px solid black;">
        <thead style="border: 1px solid black; text-align: justify;">
            <tr>
                <th style="padding: 8px;">No</th>
                <th style="padding: 8px;">Name</th>
                <th style="padding: 8px;">Price (RM)</th>
                <th style="padding: 8px;">Details</th>
                <th style="padding: 8px;">Publish</th>
                <th style="padding: 8px;">Action</th>
            </tr>
        </thead>
        <tbody style="border: 1px solid black;">
            <tr>
                <td style="padding: 8px;">1</td>
                <td style="padding: 8px;">C</td>
                <td style="padding: 8px;">56.89</td>
                <td style="padding: 8px;">Detail of product c</td>
                <td style="padding: 8px;">Yes</td>
                <td style="padding: 8px;">
                    <button style="width: 4rem; height: auto; color: white; background-color: lightblue; padding: 8px; border: none; border-radius: 4px;">Show</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: blue; padding: 8px; border: none; border-radius: 4px;">Edit</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: red; padding: 8px; border: none; border-radius: 4px;">Delete</button>
                </td>
            </tr>
            <tr>
                <td style="padding: 8px;">2</td>
                <td style="padding: 8px;">B</td>
                <td style="padding: 8px;">23.33</td>
                <td style="padding: 8px;">B detail</td>
                <td style="padding: 8px;">Yes</td>
                <td style="padding: 8px;">
                    <button style="width: 4rem; height: auto; color: white; background-color: lightblue; padding: 8px; border: none; border-radius: 4px;">Show</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: blue; padding: 8px; border: none; border-radius: 4px;">Edit</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: red; padding: 8px; border: none; border-radius: 4px;">Delete</button>
                </td>
            </tr>
            <tr>
                <td style="padding: 8px;">3</td>
                <td style="padding: 8px;">A</td>
                <td style="padding: 8px;">60.56</td>
                <td style="padding: 8px;">A detail...</td>
                <td style="padding: 8px;">No</td>
                <td style="padding: 8px;">
                    <button style="width: 4rem; height: auto; color: white; background-color: lightblue; padding: 8px; border: none; border-radius: 4px;">Show</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: blue; padding: 8px; border: none; border-radius: 4px;">Edit</button>
                    <button style="width: 4rem; height: auto; color: white; background-color: red; padding: 8px; border: none; border-radius: 4px;">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>