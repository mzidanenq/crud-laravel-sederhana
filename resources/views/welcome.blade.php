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
        <center><h1>Product Add</h1></center>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Merek</label>
            <input type="text" name="merek" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kuantitas</label>
            <input type="number" name="kuantitas" class="form-control">
        </div>
        <center>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </center>
        
    </form>

    <a class="btn btn-secondary btn-sm" href="{{route('product.view')}}">View Product</a>
</div>
<script src={{ asset("/js/app.js") }}></script>
</body>
</html>