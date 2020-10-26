<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Product Category</th>
        <th scope="col">No of sale</th>
        <th scope="col">Total Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $key => $product)
        <tr>
            <td>{{ $product->product_name }}</td>
            <td class="text-capitalize">{{ $product->product_cat }}</td>
            <td class="text-capitalize">{{ $product->total_product }}</td>
            <td class="text-capitalize">{{ $product->price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
