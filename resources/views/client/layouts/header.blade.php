   <!-- Topbar Start -->
   <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
       <div class="row gx-0">
           <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
               <div class="d-inline-flex align-items-center">
                   <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                   <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                   <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                   <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                   <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
               </div>
           </div>
           <div class="col-md-6 text-center text-lg-end">
               <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                   <div class="me-3 pe-3 border-end py-2">
                       <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                   </div>
                   <div class="py-2">
                       <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Topbar End -->


   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5">
       <a href="{{ route('home') }}" class="navbar-brand p-0">
           <img src="{{ asset('logo.png') }}" class="w-25" alt="logo.png" />
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto  me-n3">
               <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
               <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
               <a href="{{ route('services') }}" class="nav-item nav-link">Service</a>
               <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
           </div>
       </div>
       <button type="button" class="ms-3 btn btn-primary w-50 px-3" data-bs-toggle="modal"
           data-bs-target="#exampleModal">Book an
           appointment</button>
   </nav>
   <!-- Navbar End -->

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Book an appointment</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form method="post" action="{{ route('contact.mail') }}">
                       @csrf
                       <div class="row g-3">
                           <div class="col-6">
                               <div class="form-floating">
                                   <input type="text" name="name" class="form-control" id="form-floating-1"
                                       placeholder="John Doe">
                                   <label for="form-floating-1">Full Name</label>
                               </div>
                           </div>
                           <div class="col-6">
                               <div class="form-floating">
                                   <input type="email" name="email" class="form-control" id="form-floating-2"
                                       placeholder="name@example.com">
                                   <label for="form-floating-2">Email address</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <input type="number" name="phone" class="form-control" id="form-floating-3"
                                       placeholder="Phone number">
                                   <label for="form-floating-3">Phone Number</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <input type="text" name="subject" class="form-control" id="form-floating-3"
                                       placeholder="Subject">
                                   <label for="form-floating-3">Subject</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <div class="form-floating">
                                   <textarea class="form-control" name="message" placeholder="Message" id="form-floating-4" style="height: 150px"></textarea>
                                   <label for="form-floating-4">Message</label>
                               </div>
                           </div>
                           <div class="col-12">
                               <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                           </div>
                       </div>
                   </form>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
