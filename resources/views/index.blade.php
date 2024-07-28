<ul>
    @foreach ($products as $product)
        <li><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></li>
    @endforeach
</ul>
