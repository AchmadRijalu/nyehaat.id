@extends('layouts.app')

@section('content')
    <navbar></navbar>
    @if (Session::has('customer'))
        {{ Session::get('customer') }}
        <home :customer="{{ Session::get('customer') }}"></home>
    @else
        <home></home>
    @endif
@endsection
