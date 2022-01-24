<b>Add Code on ProductController: </b>
public function index(){
    $product = Product::orderBy('status', 'DESC')->get();
    $productOrderByDate = $product->groupBy(function ($val) {
        return Carbon::parse($val->created_at)->format('d/m/Y');
    });
    return view('welcome', compact('productOrderByDate'));
}

<b>Add Code on Welcome Page: </b>
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

![Screenshot from 2022-01-24 12-26-51](https://user-images.githubusercontent.com/96822921/150732961-505ce637-e606-4637-a30b-b19c0582e1fe.png)
