@extends('main')

@section('page-content')

<div class="container">
  <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
    @include('include.header')

    <!-- Error message -->
    <form method="POST" action="./add">
      @csrf
      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="last_name">
        <span class="error_message">{{$errors->first('last_name')}}</span>
      </div>
      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name">
        <span class="error_message">{{$errors->first('first_name')}}</span>
      </div>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" class="form-control" name="phone_no">
        <div class="error_message">{{$errors->first('phone_no')}}</div>
      </div>
      <div class="form-group">
        <label>Phone Type</label>
        <select name="contactcategory" class="form-control">
          @foreach($data['contactCategories'] as $contactcategory)
          <option value="{{$contactcategory->id}}">{{$contactcategory->desc}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Add Contact</button>
    </form>

    @include('include.footer')
  </div>
</div>

@endsection