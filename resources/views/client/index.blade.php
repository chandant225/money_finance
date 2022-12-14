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


       <!-- About Start -->
       <div class="container bg-secondary p-0">
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
       </div>
       <!-- About End -->


       <!-- Services Start -->
       <div class="container pt-6 px-5">
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
                       <div class="row my-4">
                           @if ($loop->iteration % 2 == 0)
                               <div class="col-lg-6">
                                   <img style="object-fit: cover;height:100%;"
                                       src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                       alt="{{ $service->title }}" class="card-img-top">
                               </div>
                               <div class="col-lg-6">
                                   <h3 class="text-primary fs-bold">{{ $service->title }}</h3>
                                   <p class="card-text"> {!! $service->description !!}</p>
                                   <a href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"
                                       class="btn btn-success ">Read More</a>
                               </div>
                           @else
                               <div class="col-lg-6">
                                   <h3 class="text-primary fs-bold">{{ $service->title }}</h3>
                                   <p class="card-text"> {!! $service->description !!}</p>
                                   <a href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"
                                       class="btn btn-success ">Read More</a>
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
           <div class="row g-5">
               <div class="col-lg-4">
                   <div class="row g-5">
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/itax.jpg" class="icon-img" alt="">
                           </div>
                           <h3>One Stop Solutions</h3>
                           <p class="mb-0">
                               We at The Tax Adviser, provide accounting, financial reporting, ATO obligation support, SMSF
                               administration and all the financial expertise required in today’s complex business
                               environment.
                           </p>
                       </div>
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/businnes.jpg" class="icon-img" alt="">
                           </div>
                           <h3>Flexibility</h3>
                           <p class="mb-0">Having a flexible approach by offering face-to-face and online meetings allows
                               us to accommodate what works best for you.We are happy to do home, office visits or catch-ups
                               after hours. We’ll always be on time and return your calls the same day.</p>
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
                           <h3>Ongoing Support</h3>
                           <p class="mb-0">Client partnership approach and consultation to clients throughout the year
                               rather than year end work. Our consultants are available for discussion with minimal
                               turnaround time.</p>
                       </div>
                       <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <img src="/img/cost.jpg" class="icon-img" alt="">
                           </div>
                           <h3>Cost Effective</h3>
                           <p class="mb-0">We offer quality services within the budget. Our complete bookkeeping,
                               reporting and finance management solution will cost you less than remuneration of an
                               accountant.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>


       <!-- Quote Start -->
       <div class="container bg-secondary px-0 mt-3">
           <div class="row g-0">
               <div class="col-lg-6 py-6 px-5">
                   <h3 class="display-5 mb-4">Request A Free Quote</h3>
                   <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et dolor
                       diam tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea at lorem sed et,
                       lorem et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam ipsum dolore stet stet elitr
                       ut. Ipsum amet labore lorem lorem diam magna sea, eos sed dolore elitr.</p>
                   <form>
                       <div class="row gx-3">
                           <div class="col-6">
                               <div class="form-floating">
                                   <input type="text" class="form-control" id="form-floating-1"
                                       placeholder="John Doe">
                                   <label for="form-floating-1">Full Name</label>
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-floating mb-3">
                                   <input type="email" class="form-control" id="form-floating-2"
                                       placeholder="name@example.com">
                                   <label for="form-floating-2">Email address</label>
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-floating">
                                   <select class="form-select" id="floatingSelect" aria-label="Financial Consultancy">
                                       <option selected>Financial Consultancy</option>
                                       <option value="1">Strategy Consultancy</option>
                                       <option value="2">Tax Consultancy</option>
                                   </select>
                                   <label for="floatingSelect">Select A Service</label>
                               </div>
                           </div>
                           <div class="col-6">
                               <button class="btn btn-primary w-100 h-100" type="submit">Request A Quote</button>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="col-lg-6" style="min-height: 400px;">
                   <div class="position-relative h-100">
                       <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                   </div>
               </div>
           </div>
       </div>
       <!-- Quote End -->


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
       <div class="container bg-secondary p-0">
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
       </div>
       <!-- Testimonial End -->
   @endsection
