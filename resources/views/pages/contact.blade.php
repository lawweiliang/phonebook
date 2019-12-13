@extends('main')

@section('page-content')

<div class="container">
  <div class="d-flex w-100 h-100 p-3 mx-auto flex-column">
    @include('include.header')

    <div>
      @if(session()->has('message'))
      @if(session()->get('message')['message_code'])
      <div class="alert alert-success message" role="alert">
        {{session()->get('message')['message_desc']}}
      </div>
      @else
      <div class="alert alert-danger message" role="alert">
        {{session()->get('message')['message_desc']}}
      </div>
      @endif

      <script>
        setTimeout(function() {
          $('.message').hide();
        }, 2000);
      </script>
      @endif
    </div>

    <div class="text-right">
      <a href="./add"><i class="fas fa-plus-circle fa-2x addcontact" title="Add Contact"></i></a>
    </div>

    <table id="contactTable" class="text-center table-striped table-bordered">
      <thead>
        <tr>
          <th>Type</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Phone Number</th>
        </tr>
      </thead>

      <tbody>
        @foreach($data['contacts'] as $contact)
        <tr>
          <td>{{$contact->contactcategory->desc}}</td>
          <td>{{$contact->last_name}}</td>
          <td>{{$contact->first_name}}</td>
          <td>{{$contact->phone_no}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>


    @include('include.footer')
  </div>
</div>

@endsection