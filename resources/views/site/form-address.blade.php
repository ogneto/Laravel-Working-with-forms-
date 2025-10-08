@extends('site.layouts._partials.basic-html')
@section('title', 'Addresses')

@section('content')

    @component('site.layouts._components.form-address-component')

    <p>Welcome to our form! </p>
    <p>There are some rules you need to know before creating an address! </p>

    <ul>
        <li>1- The field "address" is required!</li>
        <li>2- You can't create an address that already exists in the database!</li>
    </ul>

    <hr>

    @endcomponent

@endsection