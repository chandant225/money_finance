@extends('client.layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Service Detail</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">services</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">{{$service->title}}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <h2 class="py-2">{{$service->title}}</h2>
                    <img style="object-fit: cover;" src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                    alt="{{ $service->title }}" class="card-img-top">
                  <div class="py-4"> {!! $service->description !!}</div>
                </div>
                <!-- Blog Detail End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Services</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        @foreach($services as $service)
                        <a class="h5 mb-3"  href="{{ route('serviceDetails', ['slug' => $service->slug]) }}"><i class="bi bi-arrow-right text-primary me-2"></i>{{$service->title}}</a>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
@endsection