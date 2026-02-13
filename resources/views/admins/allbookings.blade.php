@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="container">
            @if(Session::has('update'))
            <p class="alert {{Session::get('alert-class', 'alert-success')}}">{{Session::get('update')}}</p>
            @endif
</div>
 <div class="container">
            @if(Session::has('delete'))
            <p class="alert {{Session::get('alert-class', 'alert-success')}}">{{Session::get('delete')}}</p>
            @endif
</div>
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">date_booking</th>
                    <th scope="col">num_people</th>
                    <th scope="col">special_request</th>
                    <th scope="col">status</th>
                    <th scope="col">Change status</th>
                    <th scope="col">created_at</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <td>{{$booking->name}}</td>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->date}}</td>
                    <td>{{$booking->num_people}}</td>
                    <td>{{$booking->spe_request}}</td>
                    <td>{{$booking->status}}</td>
                    <td><a href="{{route('bookings.edit', $booking->id)}}" class="btn btn-warning text-white  text-center ">Change Status</a></td>
                    <td>{{$booking->created_at}}</td>
                     <td><a href="{{route('bookings.delete', $booking->id)}}" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

@endsection