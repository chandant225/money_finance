   <!-- Topbar Start -->
   <div class="bg-primary">
       <div class="container d-none d-lg-block">
           <div class="row gx-0">
               <div class="col-md-6 text-center text-lg-start ">
                   <div class="d-inline-flex align-items-center">
                       <a class="text-white font-weight-bold py-2 pe-3" href=""><small>HOME</small></a>
                       <a class="text-white font-weight-bold py-2 px-3" href=""><small>NEWS</small></a>
                       <a class="text-white font-weight-bold py-2 px-3" href=""><small>TESTIMONIALS</small></a>
                       <a class="text-white font-weight-bold py-2 px-3" href=""><small>BLOGS</small></a>
                       <a class="text-white font-weight-bold py-2 ps-3" href=""><small>CONTACT</small></a>
                       <div class="me-3 pe-3 py-2">
                           <a class="text-white font-weight-bold py-2 ps-3" href=""><small><i
                                       class="fa fa-envelope-open me-2"></i>info@example.com</small></a>
                       </div>
                   </div>
               </div>
               <div class="col-md-6 text-center d-flex justify-content-end">
                   <div class="d-inline-flex align-items-center">
                       <a class="text-white font-weight-bold py-2 px-1" href=""><small><i
                                   class="fa fa-envelope-open me-2"></i></small></a>
                       <a class="text-white font-weight-bold py-2 px-1" href=""><small><i
                                   class="fa fa-envelope-open me-2"></i></small></a>
                       <a class="text-white font-weight-bold py-2 px-1" href=""><small><i
                                   class="fa fa-envelope-open me-2"></i></small></a>
                       <a class="text-white font-weight-bold py-2 ps-1" href=""><small><i
                                   class="fa fa-envelope-open me-2"></i></small></a>
                   </div>
                   <div class="py-2" style="">
                       <a class="text-white font-weight-bold py-2 ps-3 bg-success px-3" href=""><small> BOOK A
                               FREE
                               CONSULTATION</small></a>
                   </div>
               </div>
           </div>
       </div>
       <!-- Topbar End -->
   </div>


   <div class="container">
       <!-- Navbar Start -->
       <nav class="row">
           <div class="col-lg-3">
               <a href="{{ route('home') }}" class="navbar-brand p-0">
                   <img src="{{ asset('logo.png') }}" class="brand-logo" alt="logo.png" />
               </a>
           </div>
           <div class="col-lg-9 d-flex justify-content-start">
               <div class="d-flex justify-content-center align-items-center gap-3">
                   <a href="{{ route('home') }}" class="nav-item active">TAX RETURNS</a>
                   <a href="{{ route('about') }}" class="nav-item">ACCOUNTING</a>
                   <a href="{{ route('services') }}" class="nav-item">CONSULTING SERVICES</a>
                   <a href="{{ route('services') }}" class="nav-item">SMSFS</a>
                   <a href="{{ route('services') }}" class="nav-item">ABOUT US</a>
                   {{-- @foreach ($menuItems as $item)
                       <a href="{{ route('serviceDetails', ['slug' => $item->slug]) }}"
                           class="nav-item">{{ $item->title }}</a>
                   @endforeach --}}
               </div>
               <button id="online-tax-btn" type="button" class="" data-bs-toggle="modal"
               data-bs-target="#exampleModal">INDIVIDUAL TAX - ONLINE FORM</button>
           </div>
       </nav>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Book an appointment</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-white">
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
