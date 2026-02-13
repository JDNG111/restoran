@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <div class="container">
            @if(Session::has('success'))
            <p class="alert {{Session::get('alert-class', 'alert-success')}}">{{Session::get('success')}}</p>
            @endif
</div>

 <div class="container">
            @if(Session::has('delete'))
            <p class="alert {{Session::get('alert-class', 'alert-success')}}">{{Session::get('delete')}}</p>
            @endif
</div>
              <h5 class="card-title mb-4 d-inline">Orders</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">town</th>
                    <th scope="col">country</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">address</th>
                    <th scope="col">total_price</th>
                    <th scope="col">status</th>
                    <th scope="col">Change status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                                      <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}/td>
                    <td>{{$order->town}}</td>
                    <td>{{$order->country}}</td>
                    <td>{{$order->phone_number}}</td>
                    <td>{{$order->address}}</td>
                    <td>${{$order->price}}</td>

                    <td>{{$order->status}}</td>
                    <td><a href="{{route('orders.edit', $order->id)}}" class="btn btn-warning text-white  text-center ">Change Status</a></td>
                     <td><a href="{{route('orders.delete', $order->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

@endsection