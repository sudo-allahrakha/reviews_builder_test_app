@extends('layouts.app')
@section('content')
    <section>

        <div class="overlay" id="spinner-overlay">
            <div class="spinner-border text-primary" role="status"></div>
        </div>


        <div class="bg-light container-fluid px-3 py-3 justify-content-center" id="content-container">
            <h3 class="text-center">What our customers say</h3>
            <div class="card card-body">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <div class="content">
                            <img class="float-start me-2" src="{{ asset('assets/images/google_logo.png') }}"
                                width="100" />
                            <div class="fs-3 mx-2 text-dark">Rating</div>
                            <p>
                                <strong>5</strong>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                                20 Reviews
                            </p>
                        </div>
                        <div class="review ms-auto">
                            <button class="btn btn-secondary float-end">Write a review</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper" id="swiper-wrapper">

                    <div class="swiper-slide my-3">
                        <div class="row my-3">
                            <div class="col-md-4 col-lg-3 col-sm-6 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/placeholder/user.jpg') }}" class="rounded-circle"
                                                style="width: 50px" alt="Profile Picture">
                                            <div class="ms-3">
                                                <h5 class="card-title">User Name</h5>
                                                <p class="card-text">2 days ago</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 ms-auto">
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </span>
                                            <span class="ms-2">Rating</span>
                                        </div>
                                        <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Provident
                                            quo expedita, unde dolorum doloribus atque nam cumque quod aliquam magnam
                                            reiciendis
                                            voluptates tempora quidem voluptatibus exercitationem quam quia omnis placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/placeholder/user.jpg') }}" class="rounded-circle"
                                                style="width: 50px" alt="Profile Picture">
                                            <div class="ms-3">
                                                <h5 class="card-title">User Name</h5>
                                                <p class="card-text">2 days ago</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 ms-auto">
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </span>
                                            <span class="ms-2">Rating</span>
                                        </div>
                                        <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Provident
                                            quo expedita, unde dolorum doloribus atque nam cumque quod aliquam magnam
                                            reiciendis
                                            voluptates tempora quidem voluptatibus exercitationem quam quia omnis placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/placeholder/user.jpg') }}" class="rounded-circle"
                                                style="width: 50px" alt="Profile Picture">
                                            <div class="ms-3">
                                                <h5 class="card-title">User Name</h5>
                                                <p class="card-text">2 days ago</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 ms-auto">
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </span>
                                            <span class="ms-2">Rating</span>
                                        </div>
                                        <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Provident
                                            quo expedita, unde dolorum doloribus atque nam cumque quod aliquam magnam
                                            reiciendis
                                            voluptates tempora quidem voluptatibus exercitationem quam quia omnis placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4  col-lg-3 col-sm-6 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/placeholder/user.jpg') }}" class="rounded-circle"
                                                style="width: 50px" alt="Profile Picture">
                                            <div class="ms-3">
                                                <h5 class="card-title">User Name</h5>
                                                <p class="card-text">2 days ago</p>
                                            </div>
                                        </div>
                                        <div class="mt-3 ms-auto">
                                            <span class="text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </span>
                                            <span class="ms-2">Rating</span>
                                        </div>
                                        <p class="card-text mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Provident
                                            quo expedita, unde dolorum doloribus atque nam cumque quod aliquam magnam
                                            reiciendis
                                            voluptates tempora quidem voluptatibus exercitationem quam quia omnis placeat?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-pagination mt-3"></div>
            </div>

        </div>
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Make an AJAX request to fetch JSON data 

        $('#spinner-overlay').hide(); // Hide spinner overlay initially
        $('#spinner-overlay').fadeIn(); // Fade in spinner overlay
        $.ajax({
            url: "{{ route('reviews') }}",
            type: "GET",
            beforeSend: function() {
                $('#loading-spinner').show();
            },
            success: function(response) {
                // console.log(response);

                //Todo: json validation 

                let reviews = response.reviews;
                console.log(reviews);
                let total = 0;
                let startSlide = ' <div class="swiper-slide my-3"><div class="row my-3">';
                let endSlide = '</div></div>';
                let sliderHTML = '';
                let slide = '';
                reviews.forEach(review => {
                    if (total % 4 === 0) {
                        if (slide !== '') {
                            sliderHTML += startSlide + slide + endSlide;
                        }
                        slide = '';
                    }
                    slide +=
                        '<div class="col-md-4 col-lg-3 col-sm-6 my-1"><div class="card"><div class="card-body"><div class="d-flex align-items-center">' +
                        '<img src="' + review.user.thumbnail +
                        '" class="rounded-circle" style="width: 50px" alt="Profile Picture">' +
                        '<div class="ms-3"><h5 class="card-title">' + review.user.name +
                        '</h5><p class="card-text">' + review.date + '</p></div></div>' +
                        '<div class="mt-3 ms-auto">' +
                        '<span class="text-warning"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></span></div>' +
                        '<p class="card-text mt-3">' + review.snippet + '</p></div></div></div>'

                    // console.log(slide);
                    total++;
                });

                if (slide !== '') {
                    sliderHTML += startSlide + slide + endSlide;
                }

                // console.log(sliderHTML);
                document.getElementById('swiper-wrapper').innerHTML = sliderHTML;
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert("error")
            },
            complete: function() {
                $('#spinner-overlay').fadeOut();
            }
        });
    </script>
@endsection
