<table>
@foreach ($products as $product)
        <tr><td>{{ $product->name }}</td><td>{{ $product->price }}</td></tr>
@endforeach
</table>
