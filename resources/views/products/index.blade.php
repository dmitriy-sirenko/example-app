<table>
@foreach ($products as $product)
        <tr><td>{{ $product->name }}</td><td>{{ $product->price }}</td><td>{{ $product->discount }}</td></tr>
@endforeach
</table>
