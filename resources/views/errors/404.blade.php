@extends('layouts.master')
@section('content')
    <div class="container-fluid bg-secondary">
       
        <div class="d-flex flex-column   justify-content-center align-items-center vh-100">
            <div class="text-light">
                <h1 class="fw-bold text-center text-dark">404</h1>
                <h1>Sorry Page Does not Exist!</h1>
                <p class="fs-3" style="text-align: center;">Please check the url</p>
            </div>
            <div>
                <a class="text-dark fw-bold" href="/">Go to Home Page</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection