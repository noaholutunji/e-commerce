@include('partials.header')

<div class="container mt-5 mr-4 col-md-9">
<div class="card mb-3 pt-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ $product->image }}" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h5 class="text-right">{{ $product->name }}</h5>
      <h5 class="text-right">{{ $product->brand }}</h5>
      <h5 class="text-right">N{{ $product->price }}</h5>
      <h5 class="text-right mb-5">{{ $product->description}}</h5>

      
            <div class="d-flex justify-content-between"> 
            @can('update', $product)         
           <a href="{{ $product->path().'/edit' }}" class="btn btn-warning">Edit Product</a>
        @endcan

        @can('update', $product)  
           <form method="POST" action="{{ $product->path() }}">
      @method('DELETE')
      @csrf
      <button class="mt-3 btn btn-danger btn-sm" type="submit">Delete</button>
    </form>
    @endcan
   
      </div>
    </div>
    <p class="mt-4"> <em>Added By {{ $product->owner->name }}</em></p>
  </div>
</div>