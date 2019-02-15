@extends('layout.error')

@section('title') 404 | AAWeb @stop

@section('content')
<section class="section">
    <div class="content">
        <div class="error__number">
            404
        </div>
        <div class="text">The page youz are looking for could not be foundy found!</div>
        <a href="/" class="btn">Go back</a>
    </div>
</section>
@stop