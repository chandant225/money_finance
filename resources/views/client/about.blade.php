@extends('client.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">About Us</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">About</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


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
@endsection