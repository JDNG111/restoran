@extends('layouts.app')

@section('content')

            <div class="container-xxl py-5 bg-dark hero-header mb-5" style="margin-top: -25px">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h3 class="display-3 text-white mb-3 animated slideInDown">You paid for the products successfully</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Success</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
<div class="container">
            @if(Session::has('success'))
            <p class="alert {{Session::get('alert-class', 'alert-success')}}">{{Session::get('success')}}</p>
            @endif
</div>
            @endsection