@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Food Items</h5>
          <form method="POST" action="{{route('store.foods')}}" enctype="multipart/form-data">
                <!-- Email input -->
                 @csrf
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
                 
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="file" name="image" id="form2Example1" class="form-control"  />
                 
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
               
                <div class="form-outline mb-4 mt-4">

                  <select name="category" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Choose Category</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Launch">Launch</option>
                    <option value="Dinner">Dinner</option>
                  </select>
                </div>

                <br>
              

      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>

@endsection