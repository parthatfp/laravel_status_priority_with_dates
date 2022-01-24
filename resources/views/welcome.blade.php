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
         <div class="row">
            <div class="col-md-9">
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
                           @php
                           $key = 0;
                           @endphp
                           @foreach ($productOrderByDate as $products)
                           @foreach ($products as $product)
                           @php
                           $key = ++$key;
                           @endphp
                           <tr>
                              <th scope="row">{{ $key }}</th>
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
                              </tr
                              @endforeach
                              @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card">
                  <div class="card-header">
                     Add Products
                  </div>
                  <div class="card-body">
                     <form action="{{ route('productStore') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                           <label for="" class="form-label">Name</label>
                           <input type="text" name="name" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                           <label for="" class="form-label">Size</label>
                           <select name="size" class="form-control">
                              <option value="">--Select Size--</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XLL">XLL</option>
                           </select>
                        </div>
                        <div class="mb-3">
                           <label for="" class="form-label">Quantity</label>
                           <input type="number" name="qty" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                           <label for="" class="form-label">Status</label>
                           <select name="status" class="form-control">
                              <option value="">--Select Status--</option>
                              <option value="1">Active</option>
                              <option value="0">InActive</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
