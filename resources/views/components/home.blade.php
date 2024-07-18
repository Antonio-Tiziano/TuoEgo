
<div class=" justify-center mb-5 md:mb-10">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 text-center">
        <h2 class="text-2xl font-bold tracking-tight text-active">New arrivals!</h2>
        {{-- dato si chiama products --}}

        @foreach ($products as $product)
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    @if ($product->img)
                    <img src="{{Storage::url($product->img)}}" alt="..." class="h-full w-full object-cover object-center lg:h-full lg:w-full">

                    @else
                    <img src="{{Storage::url("img/default-image.webp")}}" alt="..." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    @endif
                </div>
                <div class="mt-4 flex flex-col items-start">
                    <h5 class="text-primary mb-1 text-xl font-extrabold">
                        <a href="{{route('show.product')}}">{{$product->price}}</a>
                    </h5>
                    <h3 class="text-active text-2xl font-extrabold">
                        <a href="{{route('show.product')}}">{{$product->name}}</a>
                    </h3>
                    <p class="10 mt-1 text-left text-sm text-active">{{$product->description}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mx-auto text-center">
        <button class="btn btn-active btn-neutral">Scopri di più</button>
    </div>
</div>



<div class="container mx-auto">
    <div class="flex flex-col md:flex-row justify-center">

        <div class="w-full lg:w-1/4 md:w-1/3 p-5 flex items-center justify-center m-4">
            <!-- Card 1 -->
            <div class="card bg-base-100 shadow-xl image-full relative">
                <figure><img src="storage/img/IMG_4187.jpg" alt="Shoes" /></figure>
                <div class="card-body absolute bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center p-4">
                    <h2 class="card-title font-bold text-5xl px-3 pt-5">Sail into Summer!</h2>
                    <p>With the latest arrivals</p>
                    <div class="card-actions m-2">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/4 md:w-1/3 p-5 flex items-center justify-center m-4">
            <!-- Card 2 -->
            <div class="card bg-base-100 shadow-xl image-full relative">
                <figure><img src="storage/img/uno.jpeg" alt="Shoes" /></figure>
                <div class="card-body absolute bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center p-4">
                    <h2 class="card-title font-bold text-5xl px-3 pt-5">Sail into Summer!</h2>
                    <p>With the latest arrivals</p>
                    <div class="card-actions m-2">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/4 md:w-1/3 p-5 flex items-center justify-center m-4">
            <!-- Card 3 -->
            <div class="card bg-base-100 shadow-xl image-full relative">
                <figure><img src="storage/img/IMG_4195.jpg" alt="Shoes" /></figure>
                <div class="card-body absolute bottom-0 left-0 right-0 flex flex-col items-center justify-center text-center p-4">
                    <h2 class="card-title font-bold text-5xl px-3 pt-5">Sail into Summer!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions m-2">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
