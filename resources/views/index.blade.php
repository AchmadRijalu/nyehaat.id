@extends('layouts.app')

@section('content')
    <navbar></navbar>
    @if (Session::has('customer'))
        <home :customer="{{ Session::get('customer') }}"></home>
    @else
        <home></home>
    @endif
@endsection
