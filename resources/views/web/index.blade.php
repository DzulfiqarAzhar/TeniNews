@extends('web.layout.template-web')
@section('title', 'TeniNews Home')

@section('content')
<!-- Blog entries-->
<div class="col-lg-8">
    <div id="app">
    </div>
</div>
@endsection
@section('js')
@vite(['resources/js/app.js','resources/css/app.css'])
@endsection
