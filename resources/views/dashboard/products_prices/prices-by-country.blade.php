@extends('dashboard.layouts.main')

@section('container')    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ $title }}</h1>
</div> 

<div class="table-responsive">
  <div class="table-responsive col-lg-8">

    <div class="input-group input-group-sm mb-3">
      <label class="input-group-text" for="country_option">Countries</label>
      <select class="form-select" id="country_option">
        <option selected>Choose...</option>
          @foreach($countries as $country_name => $country_data)
            <option value="{{ $country_name }}">{{ $country_name }}</option>
          @endforeach
      </select>
    </div>

    <table class="table table-striped table-bordered table-sm">
        <thead>
          <tr align="center">
            <th scope="col">Country</th>
            <th scope="col">Platform</th>
            <th scope="col">Product</th>
            <th scope="col">Cost</th>
            <th scope="col">Count</th>
          </tr>
        </thead>
        <tbody id="dataTable">
          @foreach($data as $country => $country_data)
            @foreach($country_data as $platform => $platform_data)
                @foreach($platform_data as $product => $product_data)
                  
                    <tr>
                        <td>{{ $country }}</td>
                        <td>{{ $platform }}</td>
                        <td>{{ $product }}</td>
                        <td align="right">{{ $product_data['cost'] }}</td>
                        <td align="right">{{ $product_data['count'] }}</td>
                    </tr>
                  
                @endforeach
            @endforeach
          @endforeach
        </tbody>
      </table>
  </div>
    
  </div>

@endsection
