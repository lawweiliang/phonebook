@extends('template')

@section('title', 'PhoneBook')

@section('css')
@include('include.css')
@endsection



@section('javascript')
@include('include.js')
@endsection

@section('content')
@yield('page-content')
@endsection