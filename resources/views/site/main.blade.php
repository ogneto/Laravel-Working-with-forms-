@extends('site.layouts._partials.basic-html')
@section('title', 'Main Page')


@section('content')

    <h2> This is the main page of my app! </h2>

    @component('site.layouts._components.form-component', ['addresses' => $addresses])
        <p> This form is in the main page! I'm using the "var" slot to insert it in the view! </p>
    @endcomponent

@endsection