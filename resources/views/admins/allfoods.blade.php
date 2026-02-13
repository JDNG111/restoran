@extends('layouts.admin')

@section('content')

 <div class="row">
        <div class="col">
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
              <h5 class="card-title mb-4 d-inline">Foods</h5>
              <a  href="{{route('create.foods')}}" class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">price</th>
                    <th scope="col">category</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($foods as $food)

<tr>
                    <th scope="row">{{$food->id}}</th>
                    <td>{{$food->name}}</td>
                    <td><img width="60" height="60" src="{{asset('assets/img/'.$food->image.'')}}"></td>
                    <td>${{$food->price}}</td>
                    <td>{{$food->category}}</td>
                     <td><a href="{{route('delete.foods', $food->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>

                    @endforeach
                  
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


@endsection