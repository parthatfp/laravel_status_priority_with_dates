<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
              All Product List
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#SL.</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($productOrderByDate as $products)
                            @foreach ($products as $key => $product)
                            <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>
                            @if($product->status == 1)
                                <span class="badge badge-info" style="background: #577e4a; width: 65px;">Active</span>
                            @else
                                <span class="badge badge-info" style="background: black; width: 65px;">InActive</span>
                            @endif
                            </td>
                            <td>{{ $product->created_at }}</td>
                            <td>Edit</td>
                            </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>