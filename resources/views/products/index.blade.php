<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


</head>

<body>
    {{-- session --}}
    <div class="m-4">

        @if (@session('success'))
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif
    </div>
    <div class="container">
        <div class="navbar">
            <h1>Products</h1>
            <a href="{{ route('products.create') }}" class="m-4 btn btn-primary">Add Product</a>

        </div>


        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>

                        <td>
                            {{-- Action ko lagi yo aba --}}
                            <a href="{{ route('products.show', $item) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('products.edit', $item) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $item) }} " method="POST"
                                style="display: inline" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
