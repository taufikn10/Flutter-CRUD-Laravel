<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Products</title>
</head>

<body>
  <h1>List Products</h1>
  <h3>{{ $subjudul }}</h3>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($products as $product)
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
          <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        </td>
        <td>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button>
              Delete
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>

    <a href="{{ route('products.create') }}">Create</a>

  </table>
</body>

</html>