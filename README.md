<b>Add Code on ProductController: </b>
<p>public function index(){</p>
    <p>$product = Product::orderBy('status', 'DESC')->get();</p>
    <p>$productOrderByDate = $product->groupBy(function ($val) {</p>
        <p>return Carbon::parse($val->created_at)->format('d/m/Y');</p>
    <p>});</p>
    <p>return view('welcome', compact('productOrderByDate'));</p>
<p>}</p>

<b>Add Code on Welcome Page</b>


![Screenshot from 2022-01-24 12-26-51](https://user-images.githubusercontent.com/96822921/150732961-505ce637-e606-4637-a30b-b19c0582e1fe.png)
