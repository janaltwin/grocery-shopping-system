<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Products</title>
</head>
<body>
    <div class="product-form">
        <h1 class="text-4x1 font-bold text-white text-center">Add Product</h1>
    <form method="post" action="{{route('add.product')}}">
        {{ csrf_field() }}
        <label for="">Name:</label>
        <input type="text" name="name">

        <label for="">Price:</label>
        <input type="text" name="price">

        <label for="">Description:</label>
        <input type="text" name="description">
        
        <label for="">Image:</label>
        <input type="text" name="image">  

        <button type="submit">ADD</button>

    </form>
    </div>
    <table>
    <tbody>
       @foreach ($products as $product)
       
           
       @endforeach
           
       
    </tbody>
</table>
</body>
</html>
