<x-layout>

<h1>Edit product</h1>

<x-errors />

<form method="post" action="{{ route('products.update', $product) }}">
    @method('PATCH')

    <x-products.form :product="$product" /> 

</form> 

</x-layout>