<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href = {{ asset("/css/app.css") }} rel="stylesheet" />
</head>
<body>

    <div class="container">
        <center><h1>Product List</h1></center>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Merek</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->merek}}</td>
                        <td>{{$product->kuantitas}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('product.edit', $product->id)}}">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{route('product.delete', $product->id)}}" method="POST">
                                            @csrf 
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>    </form>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
          </table>
          <a class="btn btn-primary btn-sm" href="{{route('product.add')}}">Add Product</a>
    </div>


    <script src={{ asset("/js/app.js") }}></script>
</body>
</html>