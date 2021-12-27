<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Products</title>
</head>

<body>
  <h1>Create Products</h1>
  <form action="/products" method="POST">
    @csrf
    Name : <input type="text" name="name"><br>
    Description : <input type="text" name="description"><br>
    Price : <input type="number" name="price"><br>
    Img_url : <input type="type" name="image_url"><br>

    <input type="submit" value="Save">
  </form>
</body>

</html>