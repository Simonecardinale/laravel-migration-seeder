@extends('layouts.app')

@section('content')
<div class="layover">
    <div class="container-jumbotron w-100">
    </div>
</div>
<div class="title-container d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-body title">E-svapo</h1>
    <a href="{{ route('ecig.index') }}"><button type="button" class="btn btn-primary">Vai allo shop</button></a>
</div>
@endsection