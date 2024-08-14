<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1>Products Details</h1>
        <dl class="row">
            <dt class="col-sm-3">Name</dt>
            <dd class="col-sm-9">{{ $product->name }}</dd>

            <dt class="col-sm-3">Description</dt>
            <dd class="col-sm-9">{{ $product->description }}</dd>

            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">{{ $product->price }}</dd>
        </dl>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    </div>
</body>

</html>
