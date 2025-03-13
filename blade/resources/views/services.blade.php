@extends('layouts.landing')

@section('title', 'Services')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services</h1>
                @component('_components.card')
                    @slot('card', 'card')

                    @slot('title')
                        Service 1
                    @endslot
                    @slot('content')
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Nullam nec purus ut felis fermentum aliquam.
                    @endslot
                    
                @endcomponent
                @component('_components.card')
                    @slot('title')
                        Service 2
                    @endslot
                    @slot('content')
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec purus ut felis fermentum aliquam. Nullam nec purus ut felis fermentum aliquam.
                    @endslot
                    
                @endcomponent
            </div>
        </div>
    </div>
@endsection


