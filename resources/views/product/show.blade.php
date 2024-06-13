<x-layout>
    <div class="justify-center lg:flex">
        <!-- Informazioni prodotto -->
        <div class="flex-1 flex flex-col lg:w-1/2 p-8 lg:order-2">
            <!-- Nome -->
            <h1 class="text-3xl pt-5">Nike Air Force 1 '07 Next Nature</h1>
            <!-- Categoria -->
            <a href="" class="text-xl mt-4">Scarpa donna</a>
            <!-- Prezzo -->
            <h4 class="text-xl mt-2">150€</h4>
            <div class="my-4 lg:block hidden sticky flex justify-center">
                <div class="flex flex-col">
                    <button class="btn btn-neutral mb-2">Aggiungi al carrello</button>
                    <button class="btn btn-active">Aggiungi ai preferiti</button>
                </div>
            </div>
        </div>


        <!-- Carosello e miniature -->
        <div class="flex-1 flex flex-col justify-center items-center md:flex-row h-full lg:w-1/2 lg:order-1">
            <!-- Thumbnail Images -->
            <div class="flex md:flex-col overflow-x-auto md:overflow-y-auto space-x-2 md:space-x-0 md:space-y-2 p-4">
                <img src="https://picsum.photos/id/237/350/500" alt="Image 1" class="w-24 h-24 object-cover cursor-pointer" onclick="showSlide(1)">
                <img src="https://picsum.photos/id/238/350/500" alt="Image 2" class="w-24 h-24 object-cover cursor-pointer" onclick="showSlide(2)">
                <img src="https://picsum.photos/id/239/350/500" alt="Image 3" class="w-24 h-24 object-cover cursor-pointer" onclick="showSlide(3)">
                <img src="https://picsum.photos/id/236/350/500" alt="Image 4" class="w-24 h-24 object-cover cursor-pointer" onclick="showSlide(4)">
            </div>

            <!-- Main Carousel -->
            <div class="carousel w-full h-full">
                <div id="slide1" class="carousel-item relative w-full max-w-lg mx-auto">
                    <img src="https://picsum.photos/id/237/350/500" class="w-full h-auto object-contain" />
                </div>
                <div id="slide2" class="carousel-item relative w-full max-w-lg mx-auto">
                    <img src="https://picsum.photos/id/238/350/500" class="w-full h-auto object-contain" />
                </div>
                <div id="slide3" class="carousel-item relative w-full max-w-lg mx-auto">
                    <img src="https://picsum.photos/id/239/350/500" class="w-full h-auto object-contain" />
                </div>
                <div id="slide4" class="carousel-item relative w-full max-w-lg mx-auto">
                    <img src="https://picsum.photos/id/236/350/500" class="w-full h-auto object-contain" />
                </div>
            </div>

        </div>
    </div>
    <div class="my-4 lg:hidden sticky flex justify-center">
        <div class="flex flex-col items-center">
            <button class="btn btn-neutral mb-2">Aggiungi al carrello</button>
            <button class="btn btn-active">Aggiungi ai preferiti</button>
        </div>
    </div>


    <!-- JavaScript for handling the thumbnail click -->
    <script>
        function showSlide(slideIndex) {
            const slides = document.querySelectorAll('.carousel-item');
            slides.forEach((slide, index) => {
                slide.style.display = (index === slideIndex - 1) ? 'block' : 'none';
            });
        }

        // Initialize the carousel to show the first slide
        showSlide(1);
    </script>
</x-layout>
