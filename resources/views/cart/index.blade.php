@extends('layouts.basic')

@section('content')

    <div class="container">
        <div class="mt-5">
            <h1>Your Cart</h1>
        </div>
    </div>
    <div class="container py-4 py-md-5 px-4 px-md-3">
        <div class="row d-flex mt-5 w-25 ms-4">
            <div class="col">
                <a href="https://www.paynet.uz/">
                    <img width="70" src="{{asset('assets/img/paynet.jpg')}}" alt="paynet">
                </a>
            </div>
            <div class="col">
                <a href="https://payme.uz/home/main">
                    <img width="50" src="{{asset('assets/img/payme.jpg')}}" alt="payme">
                </a>
            </div>
            <div class="col">
                <a href="https://www.paypal.com/paypalme/">
                    <img width="70" src="{{asset('assets/img/paypal.png')}}" alt="paypal">
                </a>
            </div>
        </div>
    </div>
@endsection
