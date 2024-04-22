<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach($this->product as $product)
        <div class="bg-white rounded-lg shadow p-4">
            <a href="{{ route('product', $product) }}" class="inset-0 w-full h-full">
                <img src="{{ $product->image->path }}" alt="{{ $product->image->path }}">
                <h2 class="font-medium text-lg">{{ $product->name }}</h2>
                <span class="text-gray-700 text-sm">{{ $product->price }}</span>
            </a>
        </div>
    @endforeach
</div>
