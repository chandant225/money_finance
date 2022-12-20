   @extends('client.layouts.master')
   @section('content')
       <!-- Carousel Start -->
       <div class="container-fluid p-0">
           <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img class="" src="img/carousel-1.jpg" alt="Image">
                       <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                               <h5 class="text-white text-uppercase">Business Consultancy</h5>
                               <h3 class="display-1 text-white mb-md-4">We Provide Solution On Your Business</h3>
                               <a href="" class="btn btn-primary py-md-2 px-md-3 me-3 rounded-pill">Get Quote</a>
                               <a href="" class="btn btn-secondary py-md-2 px-md-3 rounded-pill">Contact Us</a>
                           </div>
                       </div>
                   </div>
                   <div class="carousel-item">
                       <img class="" src="img/carousel-2.jpg" alt="Image">
                       <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                               <h5 class="text-white text-uppercase">Business Consultancy</h5>
                               <h3 class="display-1 text-white mb-md-4">Take Our Help To Reach The Top Level</h3>
                               <a href="" class="btn btn-primary py-md-2 px-md-3 me-3 rounded-pill">Get Quote</a>
                               <a href="" class="btn btn-secondary py-md-2 px-md-3 rounded-pill">Contact Us</a>
                           </div>
                       </div>
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
       </div>
       <!-- Carousel End -->

       <!-- why choose us -->
       <section class="container">
           <div class="row">
               <div class="col-lg-6 d-flex flex-column justify-content-center">
                   <h3 class="text-primary fw-bold" style="letter-spacing: 3px">WHY CHOOSE US</h3>
                   <h5>1,50+ Business Company Doing Bookkeeping with us.</h5>
                   <p>The Tax Adviser is a team of highly trained Chartered Accountants based in sydney. We provide a
                       comprehensive range of accounting and taxation services.<br></br>
                       At THE TAX ADVISER, we offer a complete range of accounting and taxation services.
                   </p>
               </div>
               <div class="col-lg-6">
                   <img src="{{ asset('img/why-choose-us.png') }}" alt="why choose us">
               </div>
           </div>
           <div class="row g-0 bg-success">
               <div class="col">
                   <img src="{{ asset('img/tax-returns.png') }}" alt="">
               </div>
               <div class="col">
                   <img src="{{ asset('img/accounting.png') }}" alt="">
               </div>
               <div class="col">
                   <img src="{{ asset('img/consulting.png') }}" alt="">
               </div>
               <div class="col">
                   <img src="{{ asset('img/book-keeping.png') }}" alt="" class="h-100">
               </div>
               <div class="col">
                   <img src="{{ asset('img/bussiness-setup.png') }}" alt="">
               </div>
           </div>
       </section>
       <!-- why choose us end -->

       <!-- why choose us -->
       <section class="mt-5 pt-3">
           <div class="row">
               <div class="col-lg-6">
                   <img src="{{ asset('img/tax.png') }}" alt="why choose us" class="w-100">
               </div>
               <div class="col-lg-6 d-flex flex-column justify-content-center pr-3">
                   <h3 class="text-primary fw-bold" style="letter-spacing: 3px">INDIVIDUAL TAX RETURNS - FROM COMFORT OF
                       YOUR PLACE</h3>
                   <h5>Whether it's a basic tax return or complicated tax return, our professional accountants can assis you
                       in preparation of your tax return. We will provide you with annual tax lodgment and continuing tax
                       support.</h5>
                   <p>The Tax Adviser is a team of highly trained Chartered Accountants based in sydney. We provide a
                       comprehensive range of accounting and taxation services.<br></br>
                       At THE TAX ADVISER, we offer a complete range of accounting and taxation services.
                   </p>
               </div>
           </div>
       </section>
       <!-- why choose us end -->

       <!-- About Start -->
       {{-- <div class="container bg-secondary p-0">
           <center>
               <h1 class="py-4">Welcome To <span class="text-success">THE TAX ADVISER</span></h1>
           </center>
           <div class="row p-2">
               @if (isset($about))
                   <div class="col-lg-6">
                       <img style="object-fit: cover;height:100%;"
                           src="{{ env('APP_URL') . 'uploads/service/' . $about->filename }}" alt="{{ $about->title }}"
                           class="card-img-top">
                   </div>
                   <div class="col-lg-6">
                       <h3 class="text-primary fs-bold">{{ $about->title }}</h3>
                       <p class="card-text"> {!! $about->description !!}</p>
                       <a href="{{ route('serviceDetails', ['slug' => $about->slug]) }}" class="btn btn-success ">Read
                           More</a>
                   </div>
               @else
                   <h3>no about us data.</h3>
               @endif
           </div>
       </div> --}}
       <!-- About End -->


       <!-- Services Start -->
       <div style="background-color: #f4f4f4" class="pt-6">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h3 class="display-5 mb-0">What We Offer</h3>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           @if (count($services) == 0)
               <center>
                   <h3 class="text-danger">no services avaliable yet</h3>
               </center>
           @elseif(count($services) >= 1)
               <div class="">
                   @foreach ($services as $service)
                       <div class="row my-4 pt-3">
                           @if ($loop->iteration % 2 == 0)
                               <div class="col-lg-6">
                                   <img style="object-fit: cover;height:100%;"
                                       src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                       alt="{{ $service->title }}" class="card-img-top">
                               </div>
                               <div style="padding: 0 4rem;" class="col-lg-6">
                                   <h3 class="text-primary fw-bold" style="letter-spacing: 3px;text-transform: uppercase;">
                                       {{ $service->title }}</h3>
                                   <p class="card-text"> {!! $service->description !!}</p>
                               </div>
                           @else
                               <div style="padding: 0 4rem;" class="col-lg-6">
                                   <h3 class="text-primary fw-bold"
                                       style="letter-spacing: 3px; text-transform: uppercase;">
                                       {{ $service->title }}</h3>
                                   <p class="card-text"> {!! $service->description !!}</p>
                               </div>
                               <div class="col-lg-6">
                                   <img style="object-fit: cover;height:100%;"
                                       src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                       alt="{{ $service->title }}" class="card-img-top">
                               </div>
                           @endif

                       </div>
                   @endforeach
               </div>
           @endif
       </div>
       <!-- Services End -->


       <!-- Features Start -->
       <div class="container">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h3 class="display-5 mb-0">Why Choose Us!!!</h3>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           <div style="text-align: justify" class="row g-5">
               <div class="col-lg-4">
                   <div style="text-align: justify" class="row g-5">
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/itax.jpg" class="icon-img" alt="">
                           </div>
                           <h5 class="fw-bold">INDIVIDUAL TAXES</h5>
                           <p class="mb-0">
                               Whether it's a basic tax return or complicated tax return, our professional accountants can
                               assist you in preparation of your tax return. We will provide you with annual tax lodgment..
                           </p>
                       </div>
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/businnes.jpg" class="icon-img" alt="">
                           </div>
                           <h5 class="fw-bold">BUSINESS TAXES</h5>
                           <p class="mb-0">If you own a business, tax compliance can be time-consuming and complicated.
                               With The Tax Adviser, You can focus on your business and
                               don't have to worry about your tax obligations.</p>
                       </div>

                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="d-block bg-primary h-100 text-center">
                       <img class="img w-100 h-100" src="img/choose.jpg" alt="">
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="row g-5">
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/ibook.jpg" class="icon-img" alt="">
                           </div>
                           <h5 class="fw-bold">BOOKKEEPING</h5>
                           <p class="mb-0">

                               Sometime bookkeeping can be a time consuming and Stressful. Outsourcing can be a better
                               option. This will provide you and your team more time to do the meaningful work you're
                               passionate about.</p>
                       </div>
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/cost.jpg" class="icon-img" alt="">
                           </div>
                           <h5 class="fw-bold">PAYROLL SERVICES</h5>
                           <p class="mb-0">
                               Businesses have an obligation to manage the payments of wages to their employees and as a
                               business grows this can become a complicated and time consuming process.</p>
                       </div>
                   </div>
               </div>
           </div>
           <center class="mt-4">
               <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                   <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                       style="width: 60px; height: 60px;">
                       <img src="/img/cost.jpg" class="icon-img" alt="">
                   </div>
                   <h5 class="fw-bold">CONSULTING SERVICES</h5>
                   <p class="mb-0">
                       if you are starting a small business you will need to work out which type of business
                       structure to use.</p>
               </div>
           </center>
       </div>

       <section>
           <div class="book-consultation">
               <img src="{{ asset('img/book-conslt.jpg') }}" alt="book-conslt.jpg">
               <div class="overlay"></div>
               <div class="text-wrapper">
                   <center>
                       <h2 style="letter-spacing: 3px" class="text-success">STILL CONFUSED ABOUT OUR FEATURES?</h2>
                       <h2 style="letter-spacing: 4px" class="text-white py-3">GET A CONSULTATION</h2>
                       <button class="btn-sm btn-primary px-3">CONTACT NOW</button>
                   </center>
               </div>
           </div>
       </section>

       <section>
           <div class="container">
               <h3 style="letter-spacing: 3px" class="text-primary fw-bold mt-4 pt-3">OUR AFFILIATIONS</h3>
               <hr>
               </hr>
               <div class="d-flex">
                   <div class="col">
                       <img src="{{ asset('img/treva.png') }}" alt="treva.png">
                   </div>
                   <div class="col">
                       <img src="{{ asset('img/treva2.png') }}" alt="treva.png">
                   </div>
                   <div class="col">
                       <img src="{{ asset('img/circle.png') }}" alt="treva.png">
                   </div>
                   <div class="col">
                       <img src="{{ asset('img/hexa.png') }}" alt="treva.png">
                   </div>
                   <div class="col">
                       <img src="{{ asset('img/fox.png') }}" alt="treva.png">
                   </div>
               </div>
           </div>
       </section>

       <section style="background-color: #f4f4f4" class="py-4">
           <div class="container">
               <h3 style="letter-spacing: 3px" class="text-primary fw-bold mt-4 pt-3">HAPPY CLIENTS</h3>
               <p>Let's See What Are Our Happy Clients Are Saying About Us.</p>
               <hr>
               </hr>
               <div class="row">
                   <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center border-end py-3">
                       <img src="{{ asset('img/team-2.jpg') }}" alt="team-2" class="testimonial-img">
                       <h5 class="pt-4 fw-bold">JOHN DOE</h5>
                       <p>Ceo founder</p>
                       <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                           content of a page
                           when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                           distribution of letters,of using Lorem Ipsum is that it has a mor</p>
                   </div>
                   <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center py-3">
                       <img src="{{ asset('img/team-1.jpg') }}" alt="team-2" class="testimonial-img">
                       <h5 class="pt-4 fw-bold">JOHN SNOW</h5>
                       <p>Knight Watch</p>
                       <p class="px-4">It is a long established fact that a reader will be distracted by the readable
                           content of a page
                           when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                           distribution of le</p>
                   </div>
                   <div class="col-lg-12 d-flex flex-column justify-content-center align-items-center py-3">
                       <button class="btn btn-success px-3">VIEW ALL TESTIMONIALS</button>
                   </div>

               </div>
       </section>


       <section>
           <div class="container">
            <h3 style="letter-spacing: 3px" class="text-primary fw-bold mt-4 pt-3">OUR SERVICES</h3>
            <hr>
            </hr>
               <div class="swiper service-mySwiper">
                   <div class="swiper-wrapper">
                       @if (count($services) == 0)
                           <div class="intro">
                               <h1 class="text-gray fw-bold">No any services avaliable yet.</h1>
                           </div>
                       @elseif(count($services) >= 1)
                           @foreach ($services as $service)
                               <div class="swiper-slide">
                                   <div class="card shadow">
                                       <img style="object-fit: cover;"
                                           src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                           alt="{{ $service->title }}" class="card-img-top">
                                       <div class="card-body">
                                           <h5 class="card-title">{{ $service->title }}</h5>
                                           <p class="card-text"> {!! Str::words($service->description, 10, ' ...') !!}</p>
                                           <a href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"
                                               class="btn btn-success ">Read More</a>
                                       </div>
                                   </div>
                               </div>
                           @endforeach
                       @endif
                   </div>
               </div>
           </div>
       </section>


       <!-- Team Start -->
       <div id="team" class="container py-6 px-5">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h3 class="display-5 mb-0">Our Team Members</h3>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           <div class="row g-3">
               <div class="col-lg-3">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img w-100" src="img/t1.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h5 class="text-white">Full Name</h5>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img w-100" src="img/t2.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h5 class="text-white">Full Name</h5>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img w-100" src="img/t3.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h5 class="text-white">Full Name</h5>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img w-100" src="img/t4.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h5 class="text-white">Full Name</h5>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Team End -->


       <!-- Testimonial Start -->
       {{-- <div class="container bg-secondary p-0">
           <div class="row g-0">
               <div class="col-lg-6" style="min-height: 500px;">
                   <div class="position-relative h-100">
                       <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                   </div>
               </div>
               <div class="col-lg-6 py-6 px-5">
                   <h4 class="mb-4">What Say Our Client!!!</h4>
                   <div class="owl-carousel testimonial-carousel">
                       <div class="testimonial-item">
                           <p class="fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed
                               duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem
                               magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                           <div class="d-flex align-items-center">
                               <img class="img rounded-circle" src="img/testimonial-1.jpg" alt="">
                               <div class="ps-4">
                                   <h4>Client Name</h4>
                                   <span class="text-uppercase">Profession</span>
                               </div>
                           </div>
                       </div>
                       <div class="testimonial-item">
                           <p class="fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed
                               duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem
                               magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                           <div class="d-flex align-items-center">
                               <img class="img rounded-circle" src="img/testimonial-2.jpg" alt="">
                               <div class="ps-4">
                                   <h4>Client Name</h4>
                                   <span class="text-uppercase">Profession</span>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div> --}}
       <!-- Testimonial End -->
   @endsection
