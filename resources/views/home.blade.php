<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top-Cat</title>
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wdth,wght@0,62..125,100..900;1,62..125,100..900&family=Noto+Serif:ital,wdth,wght@0,62.5..100,100..900;1,62.5..100,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="Product">
        <div class="OnSale_Container">
            <div class="OnSale">
                <div class="Sale"><h1 class="SaleTitle">On Sale</h1> <img class="SaleImg" src="asset/discount.png" alt="Discount!"></div>
                <div class="OnSaleProduct">
                    <div class="d-flex">
                        @forelse ($home as $x)
                            <div style="margin:20px">
                                <img src="{{ $x->productImage }}" alt="Picture" width="425px" height="550px">
                                <h2>{{ $x->productName }}</h2>
                                <div class="SalePrice"><h1 class="PrevPrice">Rp 1.399.000</h1><h1 class="DiscPrice">Rp {{ $x->productPrice }}</h1></div>
                                <a href=""><img src="{{ asset('/asset/Stripe.png') }}" alt=""></a>
                            </div>
                        @empty
                            <h1>Data is empty.</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="New_Container">
            <div class="New">
                <h1 class="NewTitle">Newest Product</h1> 
                <div class="NewProduct">
                    <div class="d-flex">
                        @forelse ($home as $x)
                            <div style="margin:20px">
                                <img src="{{ $x->productImage }}" alt="Picture" width="425px" height="550px">
                                <h2>{{ $x->productName }}</h2>
                                <div class="SalePrice"><h1 class="PrevPrice">Rp 1.399.000</h1><h1 class="DiscPrice">Rp {{ $x->productPrice }}</h1></div>
                                <a href=""><img src="{{ asset('/asset/Stripe.png') }}" alt=""></a>
                            </div>
                        @empty
                            <h1>Data is empty.</h1>
                        @endforelse
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        <div class="Other_Container">
            <div class="Other">
                <h1 class="OtherTitle">Other Product</h1>
                <div class="OtherProduct">
                    <div class="d-flex">
                        @forelse ($home as $x)
                            <div style="margin:20px">
                                <img src="{{ $x->productImage }}" alt="Picture" width="425px" height="550px">
                                <h2>{{ $x->productName }}</h2>
                                <div class="SalePrice"><h1 class="PrevPrice">Rp 1.399.000</h1><h1 class="DiscPrice">Rp {{ $x->productPrice }}</h1></div>
                                <a href=""><img src="{{ asset('/asset/Stripe.png') }}" alt=""></a>
                            </div>
                        @empty
                            <h1>Data is empty.</h1>
                        @endforelse
                    </div>
                </div>
                <br><br>
                <div>
                    {{ $home->links() }}
                </div>
            </div>
        </div>
        <div class="arrow">
            <a href=""><img src="{{ asset('/asset/Arrow.png') }}" alt=""></a>
        </div>
    </section>
    <section class="Footer_Container">
        <div class="Footer">
            <img class="Footer_Logo" src="{{ asset('asset/Union.png') }}" alt="">
                <div class="Footer_Content">
                    <div><h2>The clothing</h2><h2>brand for cats</h2><h2>with hats</h2></div>
                    <div><h2>North America</h2><br><br><a href="">cattopemail@gmail.com</a><br><br><h3>+1 (555) 123-4567</h3><br><h3>123 Main Street</h3><h3>Cityville, CA 90210</h3><h3>United States</h3><br><br><br><a href="https://maps.app.goo.gl/kMH7E7PXG9PtCbTa9">See on Map</a></div>
                    <div><h2>South America</h2><br><br><a href="">cattopemail@gmail.com</a><br><br><h3>+55 123 456 7890</h3><br><h3>456 Rio Avenue</h3><h3>Sambatown, SA 12345</h3><h3>Brazil</h3><br><br><br><a href="https://maps.app.goo.gl/pSd36zNuYWsCRAXk7">See on Map</a></div>
                    <div>
                        <h2>Our Socials</h2>
                        <div class="Socials">
                            <div class="Socials_Icon"><a href=""><i class="fa-brands fa-instagram"></i></a></div>
                            <div class="Socials_Icon"><a href=""><i class="fa-brands fa-facebook"></i></a></div>
                            <div class="Socials_Icon"><a href=""><i class="fa-brands fa-twitter"></i></a></div>
                            <div class="Socials_Icon"><a href=""><i class="fa-regular fa-envelope"></i></a></div>
                            <div class="Socials_Icon"><a href=""><i class="fa-solid fa-phone"></i></a></div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="FAVE_Container">
        <h1 class="FAVE">Crafted with perfection, absolutely zero flaws, and an absurd level of finesse that breaks the space-time continuum by <a href="https://favesolution.com/">FAVE Solution</a></h1>
    </section>
</body>
<script src="{{ asset('js/fontawesome.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
</html>