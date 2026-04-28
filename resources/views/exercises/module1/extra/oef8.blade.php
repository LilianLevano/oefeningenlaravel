<x-site-layout>
    <div>
        <ul class="list-disc">
            @foreach($products as $product)
                <li>Naam product: {{$product['product']}}

                    @if($product['price'] < 2)

                        <span class="pl-5 pr-5 bg-green-400">On sale!!</span>

                    @else

                    @endif
                <ul class="list-disc ml-10">
                    <li>Prijs: {{$product['price']}}</li>
                    <li>Beschrijving: {{$product['description']}}</li>
                </ul>

                </li>

            @endforeach
        </ul>
    </div>
</x-site-layout>
