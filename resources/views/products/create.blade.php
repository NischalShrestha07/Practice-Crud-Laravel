<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="flex navbar" style="display: flex; justify-content: space-between">
            <h1>Create Product</h1>
            <a href="{{ route('products.index') }}" class="btn btn-dark ">Back</a>

        </div>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                @error('name')
                    <span class="btn btn-danger">
                        {{ $message }}
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" cols="20" rows="10">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <span class="btn btn-danger">
                    {{ $message }}
                </span>
            @enderror
            <div class="form-group">
                <label for="price">Price</label>
                <textarea name="price" class="form-control" id="price">{{ old('price') }}</textarea>
            </div>
            @error('price')
                <span class="btn btn-danger">
                    {{ $message }}
                </span>
            @enderror
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>
</body>

</html>
