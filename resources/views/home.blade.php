@vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/style.scss'])

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('layouts')
@section('content')




  <div class="card-group" style="position:absolute; bottom:60px">
    <div class="card" style="width: 400px;height:300px">
      <img class="card-img-top" src="https://static-bebeautiful-in.unileverservices.com/how-to-choose-the-right-skincare-products-for-your-skin-typemobilehome.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card" style="width: 400px;height:300px">
      <img class="card-img-top" src="https://static-bebeautiful-in.unileverservices.com/how-to-choose-the-right-skincare-products-for-your-skin-typemobilehome.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card" style="width: 400px;height:300px">
      <img class="card-img-top" src="https://static-bebeautiful-in.unileverservices.com/how-to-choose-the-right-skincare-products-for-your-skin-typemobilehome.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>


{{-- <h1>Home</h1>

<button class="btn btn-danger" id="demo" >Super </button> --}}

@endsection

@extends('footer')



