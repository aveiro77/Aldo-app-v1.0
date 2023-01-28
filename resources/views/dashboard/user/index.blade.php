@extends('dashboard.layouts.main')

@section('container')    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div> 

<section id='main'>
    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                <li class="list-group-item">Id : {{ $data['id'] }}</li>
                <li class="list-group-item">Email : {{ $data['email'] }}</li>
                <li class="list-group-item">Balance : {{ $data['balance'] }}</li>
                <li class="list-group-item">Rating : {{ $data['rating'] }}</li>
            </ul>
        </div>
    </div>
</section>

@endsection
