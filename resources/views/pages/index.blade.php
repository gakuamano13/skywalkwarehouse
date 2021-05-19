@extends('layouts.pages.main')

@push('css')
    <link href="{{ asset('css/pages/main.css') }}" rel="stylesheet">
@endpush

@push('js')
<script type="module" src="{{ asset('js/pages/main.js') }}"> </script>
@endpush

@section('title')
Skywalk Warehouse
@endsection

@section('content')
    <div class="effect-fade">
        <div class="" style="position:relative">
        <img src="{{ asset('images/wall.jpg') }}" alt="メインページ" style="width:100%; height:100%; object-fit:cover;">
        <div class="d-flex flex-column align-items-center text-center" style="position:absolute; top: 50%;
        left: 50%; transform: translate(-50%,-50%); margin:0; padding:0; font-family: 'Courgette', cursive;">
            <h2 class="display-2 text-white mb-5">Welcome to</h2>
            <h1 class="display-1 text-white">Skywalk Warehouse</h1>
            <i class="far fa-arrow-alt-circle-down text-light display-3 mt-5"></i>
            <button type="button" class="btn  text-white mt-5 p-3"><a href="{{ route('product.index') }}" style="font-size:18px;">Unlock the <span class="display-3">DOOR</span>  to Our Warehouse</a></button>
        </div>
    </div>
    </div>


@endsection
