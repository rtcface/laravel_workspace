@extends('layouts.landing')

@section('title', 'About')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About</h1>
                <p>Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating
                    engines,
                    Blade does not restrict you from using plain PHP code in your views. In fact, 
                    all Blade views are compiled into plain PHP code and cached until they are modified,
                    meaning Blade adds essentially zero overhead to your application. Blade view files use the 
                    .blade.php file extension and are typically stored in the resources/views directory.
                </p>
            </div>
        </div>
    </div>
@endsection