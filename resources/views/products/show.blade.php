<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>
<p>Discount: {{ $product->discount }}</p>

<h2>Additional Fields</h2>
<ul>
    @foreach ($product->additionalFields as $field)
        <li>{{ $field->key }}: {{ $field->value }}</li>
    @endforeach
</ul>

<h2>Images</h2>
@foreach ($product->images as $image)
    <img src="{{ $image->url }}" alt="{{ $product->name }}">
@endforeach
