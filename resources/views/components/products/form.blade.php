
@csrf

<label for="name">Name</label>
<input type="text" name="name" id="name" required value="{{ old('name', $product->name ?? '') }}"> 

<label for="description">Description</label>
<textarea type="text" name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="quantity">Quantity</label>
<input type="text" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity ?? '') }}"> 

<button>Save</button>

