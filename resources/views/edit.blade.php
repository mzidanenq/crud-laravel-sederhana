<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <link href = {{ asset("/css/app.css") }} rel="stylesheet" />

</head>
<body>
    <div class="container">
        <center><h1>Product Edit</h1></center>
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" value="{{$product->name}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Merek</label>
            <input type="text" name="merek" value="{{$product->merek}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" value="{{$product->price}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kuantitas</label>
            <input type="number" name="kuantitas" value="{{$product->kuantitas}}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
    </form>
    <hr>
    <a class="btn btn-danger btn-sm" href="{{route('product.view')}}">Cancel</a>
</div>
<script src={{ asset("/js/app.js") }}></script>
</body>
</html>