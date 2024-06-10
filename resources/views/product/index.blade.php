@extends('layouts.basic')

@section('content')
    <div class="container mt-2 p-5">
        <h1 class="mt-3 fw-medium">Products</h1>
        <br>
        <h5>Take a look at our products</h5>
        <div class="row">

            <div class="col-6 p-3">
                <div class="card border-0 p-3 shadow-lg h-100 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src=""
                                 class="img-fluid rounded-start" style="height: 200px ; width: 200px"
                                 alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="col d-flex justify-content-end">
                                    <div class="p-1 rounded-3 border-danger border-2 border">
                                        <a href="">
                                            <i class="bi bi-x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <h2 class="card-title"></h2>
                                <p class="card-text"></p>
                                <div class="row d-flex">
                                    <div class="d-flex mx-auto my-auto">
                                        <span class="btn btn-primary border-0 rounded-5"></span>
                                    </div>
                                    <div class="col d-flex justify-content-end mt-5 justify-content-end">
                                        <a href=""
                                           style="min-width: 100px" class="btn btn-primary"
                                           type="submit">UZS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
