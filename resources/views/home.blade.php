@extends('layouts.app')

@section('content')
<!-- Hero Section - Ancho completo -->
<div class="container-fluid p-0">
    <div class="w-100 bg-dark hero-header" style="margin-top: -25px; min-height: 600px;">
        <div class="container-fluid px-4 px-lg-5 h-100">
            <div class="row align-items-center h-100 py-5">
                <div class="col-lg-6 text-center text-lg-start text-white">
                    <h1 class="display-3 fw-bold animated slideInLeft">Sabores que<br>Enamoran</h1>
                    <p class="lead animated slideInLeft mb-4 pb-2">Descubre la experiencia culinaria única que tenemos para ti. Platos preparados con los ingredientes más frescos y el amor de nuestros chefs. Desde desayunos tradicionales hasta cenas gourmet, cada bocado es una celebración.</p>
                    <a href="" class="btn btn-primary btn-lg py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid rounded-4 shadow" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Restaurant hero image" style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container px-4 px-lg-5">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                        <h5>Master Chefs</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                        <h5>Quality Food</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Online Order</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                        <h5>24/7 Service</h5>
                        <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container px-4 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Restaurant interior" style="height: 250px; object-fit: cover;">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Restaurant food" style="margin-top: 25%; height: 200px; object-fit: cover;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Restaurant dining" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Restaurant chef" style="height: 250px; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="text-uppercase mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="text-uppercase mb-0">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Menu Start -->
<div class="container-fluid py-5">
    <div class="container px-4 px-lg-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($breakfastFoods as $food)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                @if($food->image)
                                <img class="flex-shrink-0 img-fluid rounded" src="{{asset('assets/img/'.$food->image)}}" alt="" style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                <img class="flex-shrink-0 img-fluid rounded" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Food placeholder" style="width: 80px; height: 80px; object-fit: cover;">
                                @endif
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$food->name}}</span>
                                        <span class="text-primary">${{$food->price}}</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($food->description, 0, 70)}}</small>
                                    <a type="button" href="{{route('food.details', $food->id)}}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($launchFoods as $launchFood)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                @if($launchFood->image)
                                <img class="flex-shrink-0 img-fluid rounded" src="{{asset('assets/img/'.$launchFood->image)}}" alt="" style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                <img class="flex-shrink-0 img-fluid rounded" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Food placeholder" style="width: 80px; height: 80px; object-fit: cover;">
                                @endif
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$launchFood->name}}</span>
                                        <span class="text-primary">${{$launchFood->price}}</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($launchFood->description, 0, 70)}}</small>
                                    <a type="button" href="{{route('food.details', $launchFood->id)}}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($dinnerFoods as $dinnerFood)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                @if($dinnerFood->image)
                                <img class="flex-shrink-0 img-fluid rounded" src="{{asset('assets/img/'.$dinnerFood->image)}}" alt="" style="width: 80px; height: 80px; object-fit: cover;">
                                @else
                                <img class="flex-shrink-0 img-fluid rounded" src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?ixlib=rb-4.0.3&auto=format&fit=crop&w=80&h=80&q=80" alt="Food placeholder" style="width: 80px; height: 80px; object-fit: cover;">
                                @endif
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$dinnerFood->name}}</span>
                                        <span class="text-primary">${{$dinnerFood->price}}</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($dinnerFood->description, 0, 70)}}</small>
                                    <a type="button" href="{{route('food.details', $dinnerFood->id)}}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Alert Messages -->
<div class="container-fluid py-2">
    <div class="container px-4 px-lg-5">
        <div class="row">
            <div class="col-12">
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(Session::has('booked'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('booked')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(Session::has('empty'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('empty')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Reservation Start -->
<div class="container-fluid py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video" style="background-image: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center; min-height: 500px; display: flex; align-items: center; justify-content: center;">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                <h1 class="text-white mb-4">Book A Table Online</h1>
                <form method="POST" action="{{route('foods.booking.table')}}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" value="{{ old('name') }}">
                                <label for="name" class="text-white">Your Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" value="{{ old('email') }}">
                                <label for="email" class="text-white">Your Email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input name="date" type="text" class="form-control datetimepicker-input @error('date') is-invalid @enderror" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" value="{{ old('date') }}">
                                <label for="datetime" class="text-white">Date & Time</label>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="num_people" class="form-select @error('num_people') is-invalid @enderror" id="select1">
                                    <option value="">Select</option>
                                    <option value="1" {{ old('num_people') == '1' ? 'selected' : '' }}>People 1</option>
                                    <option value="2" {{ old('num_people') == '2' ? 'selected' : '' }}>People 2</option>
                                    <option value="3" {{ old('num_people') == '3' ? 'selected' : '' }}>People 3</option>
                                </select>
                                <label for="select1" class="text-white">No Of People</label>
                                @error('num_people')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="spe_request" class="form-control @error('spe_request') is-invalid @enderror" placeholder="Special Request" id="message" style="height: 100px">{{ old('spe_request') }}</textarea>
                                <label for="message" class="text-white">Special Request</label>
                                @error('spe_request')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container px-4 px-lg-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Master Chefs</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden shadow-sm">
                    <div class="rounded-circle overflow-hidden mx-auto mt-4" style="width: 200px; height: 200px;">
                        <img class="img-fluid w-100 h-100" src="https://images.unsplash.com/photo-1581299894007-aaa50297cf16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Chef" style="object-fit: cover;">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">John Master</h5>
                        <small class="text-muted">Head Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden shadow-sm">
                    <div class="rounded-circle overflow-hidden mx-auto mt-4" style="width: 200px; height: 200px;">
                        <img class="img-fluid w-100 h-100" src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Chef" style="object-fit: cover;">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Sarah Kitchen</h5>
                        <small class="text-muted">Sous Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden shadow-sm">
                    <div class="rounded-circle overflow-hidden mx-auto mt-4" style="width: 200px; height: 200px;">
                        <img class="img-fluid w-100 h-100" src="https://images.unsplash.com/photo-1566554273541-37a9ca77b91f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Chef" style="object-fit: cover;">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Mike Grill</h5>
                        <small class="text-muted">Grill Master</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden shadow-sm">
                    <div class="rounded-circle overflow-hidden mx-auto mt-4" style="width: 200px; height: 200px;">
                        <img class="img-fluid w-100 h-100" src="https://images.unsplash.com/photo-1556910103-1c02745a341f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Chef" style="object-fit: cover;">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-1">Emma Baker</h5>
                        <small class="text-muted">Pastry Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-4 px-lg-5">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($reviews as $review)
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>{{$review->review}}</p>
                <div class="d-flex align-items-center">
                    <div class="ps-3">
                        <h5 class="mb-1">{{$review->name}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->
@endsection