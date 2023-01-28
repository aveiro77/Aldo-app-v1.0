@extends('dashboard.layouts.main')

@section('container')    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div> 

<div class="table-responsive">
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-bordered table-sm">
        <thead>
          <tr align="center">
            <th scope="col">Product</th>
            <th scope="col">Category</th>
            <th scope="col">Qty</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody id="dataTable">
          @foreach($data as $product => $value)
            <tr>
              <td>{{ $product }}</td>
                @foreach($value as $k => $v)
                  <td align="right">{{ $v }}</td>
                @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
    
  </div>

@endsection
