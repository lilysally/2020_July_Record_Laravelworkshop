@extends('layouts.master')

@section('page-title', '首頁')

@section('page-content')

    @include('layouts.partials.navigation')

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
          <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
          <ul class="list-unstyled">
            <li>Bootstrap 4.1.3</li>
            <li>jQuery 3.3.1</li>
          </ul>
        </div>
      </div>
    </div>

@endsection
