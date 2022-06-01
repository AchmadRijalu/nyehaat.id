@extends('layouts.app')

@section('content')
    <navbar></navbar>
    @if (Session::has('customer'))
        @if (Session::has('formdata'))
            <home :customer="{{ Session::get('customer') }}" :formdata="{{ Session::get('formdata') }}"></home>
        @else
            <home :customer="{{ Session::get('customer') }}"></home>
        @endif
    @else
        @if (Session::has('formdata'))
            <home :formdata="{{ Session::get('formdata') }}"></home>
        @else
            <home></home>
        @endif
    @endif
@endsection
