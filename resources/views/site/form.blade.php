@extends('site.layouts._partials.basic-html')
@section('title', 'Student Registration')

@section('content')

    <p> You can create a student register here! </p>

    @component('site.layouts._components.form-component')

        <p> Welcome to our form: </p>

    @endcomponent

@endsection