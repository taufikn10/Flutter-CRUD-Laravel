<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Products</title>
</head>

<body>
  <H1>Edit Product</H1>
  <form action="{{ route('products.update', $product->id) }}" method="POST">
    @method('PUT')
    @csrf
    Name : <input type="text" name="name" value="{{$product->name}}"><br>
    Description : <input type="text" name="description" value="{{$product->description}}"><br>
    Price : <input type=" number" name="price" value="{{$product->price}}"><br>
    Img_url : <input type=" type" name="image_url" value="{{$product->image_url}}"><br>

    <button type="submit">Save</button>
  </form>
</body>

</html>