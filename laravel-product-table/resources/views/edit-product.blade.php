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

    <form action="">
        <p>Name:</p>
        <input type="text" placeholder="Name" class="text-input-field">
        <p>Price (RM):</p>
        <input type="text" placeholder="99.90" class="text-input-field">
        <p>Detail:</p>
        <textarea  placeholder="Detail" rows="5" cols="50" class="text-input-field"></textarea>
        <p>Publish:</p>
        <input type="radio" name="publish" id="yes" value="Yes"><label for="yes"> Yes</label></br>
        <input type="radio" name="publish" id="no" value="No"><label for="no"> No</label>
        </br>
        </br>
        <div class="submit">
            <input type="submit" value="Submit" class="submit-btn">
        </div>
        
    </form>

</body>
</html>