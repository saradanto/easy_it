<x-main>
    <body>
        {{-- container-->row-->col12/colmd6*2 --}}
        {{-- container-->row-->col12/colmd3*4 --}}
        <div class="container container-fluid">
            <div class="row">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2"> {{-- swiper-navigation swiper-pagination --}}
                    <div class="swiper-wrapper">
                        <div class="col-12">
                            <div class="col-12 col-md-6 swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="col-12 col-md-6 swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="col-12 col-md-6 swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="col-12 col-md-6 swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="col-12 col-md-6 swiper-slide">
                                <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                            </div>
                            <div class="col-12 col-md-6 swiper-slide">
                                <h4 class="txt-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                                {{-- stars --}}
                                {{-- price --}}
                                {{-- description articolo --}}
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, eos laboriosam! Aliquam, esse nihil adipisci quas quisquam earum hic modi consequatur quibusdam omnis quod est sint veniam corrupti velit! Non.</p>
                                {{-- button(quantità + aggiungi al carrello) --}}
                                {{-- preferiti --}}
                                {{-- description categorie + colori etc... --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="col-12 col-md-3 swiper-slide">
                            <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                        </div>
                        <div class="col-12 col-md-3 swiper-slide">
                            <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                        </div>
                        <div class="col-12 col-md-3 swiper-slide">
                            <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                        </div>
                        <div class="col-12 col-md-3 swiper-slide">
                            <img src="https://dummyimage.com/300x300/d4d4d4/fff" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</x-main>