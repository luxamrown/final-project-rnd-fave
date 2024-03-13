<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div>
        @forelse ($home as $x)
            <div class="card" style="width: 18rem;">
                <h3>{{ $x->productName }}</h3>
                <h3>{{ $x->productDescription }}</h3>
                <h3>{{ $x->productPrice }}</h3>
                <h3>{{ $x->productStock }}</h3>
                <img src="{{ asset('storage/'.$x->productImage) }}" alt="Nike Air Jordan 1">
            </div>
        @empty
            <h3>Data is empty.</h3>
        @endforelse
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>