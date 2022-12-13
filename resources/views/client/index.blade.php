   @extends('client.layouts.master')
   @section('content')
       <!-- Carousel Start -->
       <div class="container-fluid p-0">
           <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                       <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                               <h5 class="text-white text-uppercase">Business Consultancy</h5>
                               <h1 class="display-1 text-white mb-md-4">We Provide Solution On Your Business</h1>
                               <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a>
                               <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
                           </div>
                       </div>
                   </div>
                   <div class="carousel-item">
                       <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                       <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                               <h5 class="text-white text-uppercase">Business Consultancy</h5>
                               <h1 class="display-1 text-white mb-md-4">Take Our Help To Reach The Top Level</h1>
                               <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get Quote</a>
                               <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact Us</a>
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
       <div class="container-fluid bg-secondary p-0">
           <div class="row g-0">
               <div class="col-lg-6 py-6 px-5">
                   <h1 class="display-5 mb-4">Welcome To </br> <span class="text-success">THE TAX ADVISER</span></h1>
                   <p class="mb-4">The Tax Adviser is a team of highly trained Chartered Accountants based in sydney. We
                       provide a comprehensive range of  accounting and taxation services.</p>
                   <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Get A Quote</a>
               </div>
               <div class="col-lg-6">
                   <div class="h-100 d-flex flex-column  bg-primary p-5">
                       <div class="d-flex text-white">
                           <div class="ps-4">
                               <h3 class="text-gray">At The TAX ADVISER, we offer a complete range of accounting and
                                   taxation services, including.</h3>
                               <ul style="text-align: justify">
                                   <li>
                                       Preparation of tax returns accurately & efficiently for a reasonable tax deductible
                                       fee.
                                   </li>
                                   <li>
                                       Accounting and Book keeping services for Individuals, Partnerships, Companies, Trusts
                                       & Self Managed Superfunds.
                                   </li>
                                   <li>
                                       Completing Activity Statements (BAS/IAS), Business tax returns, financial statements,
                                       and all necessary paperwork to the ATO
                                   </li>
                                   <li>
                                       Tax planning advice.
                                   </li>
                                   <li>
                                       Recommending appropriate accounting software, setting up your system and training
                                       your staff.
                                   </li>
                                   <li>
                                       Formation of Business Structures such as Companies, Discretionary Trusts.
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- About End -->


       <!-- Services Start -->
       <div class="container-fluid pt-6 px-5">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h1 class="display-5 mb-0">What We Offer</h1>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           @if (count($services) == 0)
               <center>
                   <h1 class="text-danger">no services avaliable yet</h1>
               </center>
           @elseif(count($services) >= 1)
               <div class="row g-5">
                   @foreach ($services as $service)
                       <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img style="object-fit: cover;" src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                alt="{{ $service->title }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text"> {!! Str::words($service->description, 15, ' ...') !!}</p>
                                <a href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"
                                    class="btn btn-success ">Read More</a>
                            </div>
                        </div>
                       </div>
                   @endforeach
               </div>
           @endif
       </div>
       <!-- Services End -->


       <!-- Features Start -->
       <div class="container-fluid py-6 px-5">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           <div class="row g-5">
               <div class="col-lg-4">
                   <div class="row g-5">
                       <div class="col-12">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <i class="fa fa-cubes fs-4 text-white"></i>
                           </div>
                           <h3>One Stop Solutions</h3>
                           <p class="mb-0">
                               We at The Tax Adviser, provide accounting, financial reporting, ATO obligation support, SMSF
                               administration and all the financial expertise required in today’s complex business
                               environment.
                           </p>
                       </div>
                       <div class="col-12">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <i class="fa fa-percent fs-4 text-white"></i>
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
                       <img class="img-fluid" src="img/feature.jpg" alt="">
                       <div class="p-4">
                           <p class="text-white mb-4">Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et
                               sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et.</p>
                           <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn More</a>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="row g-5">
                       <div class="col-12">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <i class="far fa-smile-beam fs-4 text-white"></i>
                           </div>
                           <h3>Ongoing Support</h3>
                           <p class="mb-0">Client partnership approach and consultation to clients throughout the year
                               rather than year end work. Our consultants are available for discussion with minimal
                               turnaround time.</p>
                       </div>
                       <div class="col-12">
                           <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                               style="width: 60px; height: 60px;">
                               <i class="fa fa-award fs-4 text-white"></i>
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
       <div class="container-fluid bg-secondary px-0">
           <div class="row g-0">
               <div class="col-lg-6 py-6 px-5">
                   <h1 class="display-5 mb-4">Request A Free Quote</h1>
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
       <div class="container-fluid py-6 px-5">
           <div class="text-center mx-auto mb-5" style="max-width: 600px;">
               <h1 class="display-5 mb-0">Our Team Members</h1>
               <hr class="w-25 mx-auto bg-primary">
           </div>
           <div class="row g-5">
               <div class="col-lg-4">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h3 class="text-white">Full Name</h3>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h3 class="text-white">Full Name</h3>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="team-item position-relative overflow-hidden">
                       <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                       <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                           <h3 class="text-white">Full Name</h3>
                           <p class="text-white text-uppercase mb-0">Designation</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Team End -->


       <!-- Testimonial Start -->
       <div class="container-fluid bg-secondary p-0">
           <div class="row g-0">
               <div class="col-lg-6" style="min-height: 500px;">
                   <div class="position-relative h-100">
                       <img class="position-absolute w-100 h-100" src="img/testimonial.jpg" style="object-fit: cover;">
                   </div>
               </div>
               <div class="col-lg-6 py-6 px-5">
                   <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
                   <div class="owl-carousel testimonial-carousel">
                       <div class="testimonial-item">
                           <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed
                               duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem
                               magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                           <div class="d-flex align-items-center">
                               <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                               <div class="ps-4">
                                   <h3>Client Name</h3>
                                   <span class="text-uppercase">Profession</span>
                               </div>
                           </div>
                       </div>
                       <div class="testimonial-item">
                           <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed
                               duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem
                               magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                           <div class="d-flex align-items-center">
                               <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                               <div class="ps-4">
                                   <h3>Client Name</h3>
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
