@extends('layouts.app')

@section('title','Home Page')

@section('content')

    <!-- Image Full Page Slider -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('assets/silder/silder-1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/silder/silder-2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/silder/silder-3.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/silder/silder-1.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('assets/silder/silder-2.jpg') }}" alt="Third slide">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Brands Slider  -->
    <div id="imageCarousel" class="carousel slide mx-auto mt-5" data-bs-ride="carousel">
        <!-- Indicators/Dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image1.jpg') }}"
                                 alt="Image 1"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image2.jpg') }}"
                                 alt="Image 2"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image5.jpg') }}"
                                 alt="Image 3"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image6.jpg') }}"
                                 alt="Image 4"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image7.jpg') }}"
                                 alt="Image 5"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/silder/image8.jpg') }}"
                                 alt="Image 6"
                                 class="img-fluid w-100"
                                 style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls/Arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Category Slider -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Categories</h2> <!-- Added header -->
        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
                <!-- Category Item 1 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Laptops" class="img-fluid rounded-circle"> <!-- Dummy image for Laptops -->
                    </div>
                    <h5>Laptops</h5>
                </div>
                </div>
                <!-- Category Item 2 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Mobiles" class="img-fluid rounded-circle"> <!-- Dummy image for Mobiles -->
                    </div>
                    <h5>Mobiles</h5>
                </div>
                </div>
                <!-- Category Item 3 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Accessories" class="img-fluid rounded-circle"> <!-- Dummy image for Accessories -->
                    </div>
                    <h5>Accessories</h5>
                </div>
                </div>
                <!-- Category Item 4 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Televisions" class="img-fluid rounded-circle"> <!-- Dummy image for Televisions -->
                    </div>
                    <h5>Televisions</h5>
                </div>
                </div>
                <!-- Category Item 5 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Furniture" class="img-fluid rounded-circle"> <!-- Dummy image for Furniture -->
                    </div>
                    <h5>Furniture</h5>
                </div>
                </div>
            </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
                <!-- Category Item 6 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Footwear" class="img-fluid rounded-circle"> <!-- Dummy image for Footwear -->
                    </div>
                    <h5>Footwear</h5>
                </div>
                </div>
                <!-- Category Item 7 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Books" class="img-fluid rounded-circle"> <!-- Dummy image for Books -->
                    </div>
                    <h5>Books</h5>
                </div>
                </div>
                <!-- Category Item 8 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Sports" class="img-fluid rounded-circle"> <!-- Dummy image for Sports -->
                    </div>
                    <h5>Sports</h5>
                </div>
                </div>
                <!-- Category Item 9 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Toys" class="img-fluid rounded-circle"> <!-- Dummy image for Toys -->
                    </div>
                    <h5>Toys</h5>
                </div>
                </div>
                <!-- Category Item 10 -->
                <div class="col">
                <div class="category-item text-center">
                    <div class="icon-container">
                    <img src="https://via.placeholder.com/100" alt="Groceries" class="img-fluid rounded-circle"> <!-- Dummy image for Groceries -->
                    </div>
                    <h5>Groceries</h5>
                </div>
                </div>
            </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
    </div>


    <!-- Image Banner Slider small -->
    <div id="Controls" class="carousel slide mx-auto mt-4" style="max-hight: 250px;" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/silder/silder-1.jpg') }}" alt="First slide" style="height: 250px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/silder/silder-2.jpg') }}" alt="Second slide" style="height: 250px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/silder/silder-3.jpg') }}" alt="Third slide" style="height: 250px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/silder/silder-1.jpg') }}" alt="Fourth slide" style="height: 250px; object-fit: cover; border-radius: 8px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/silder/silder-2.jpg') }}" alt="Fifth slide" style="height: 250px; object-fit: cover; border-radius: 8px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Controls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Controls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{--  there Image Slider  --}}
    <div id="image" class="carousel slide mx-auto mt-5" data-bs-ride="carousel">
        <!-- Indicators/Dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#image" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#image" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#image" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image1.jpg') }}" alt="Image 1" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image2.jpg') }}" alt="Image 2" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image3.jpg') }}" alt="Image 3" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image4.jpg') }}" alt="Image 4" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image5.jpg') }}" alt="Image 5" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image6.jpg') }}" alt="Image 6" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Slide -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image7.jpg') }}" alt="Image 7" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image8.jpg') }}" alt="Image 8" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('assets/silder/image9.jpg') }}" alt="Image 9" class="img-fluid w-100" style="object-fit: cover; height: 150px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls/Arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#image" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#image" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{--  Trusted By Logo Slider  --}}
    <div class="container rounded">
        <h1 class="text-center">Authorized Brands</h1>
        <div class="slider">
            <div class="logos">
            <i class="fab fa-js fa-4x"></i>
            <i class="fab fa-linkedin-in fa-4x"></i>
            <i class="fab fa-dribbble fa-4x"></i>
            <i class="fab fa-medium-m fa-4x"></i>
            <i class="fab fa-github fa-4x"></i>
            </div>
            <div class="logos">
            <i class="fab fa-js fa-4x"></i>
            <i class="fab fa-linkedin-in fa-4x"></i>
            <i class="fab fa-dribbble fa-4x"></i>
            <i class="fab fa-medium-m fa-4x"></i>
            <i class="fab fa-github fa-4x"></i>
            </div>
        </div>
    </div>



    @endsection




<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });

</script>
