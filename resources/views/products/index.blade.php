@include('partials.header')


<div class="jumbotron mb-0">
      <h4 class="text-center text-info">Shop with 100% confidence on Phone Market</h4>
     <a href="/products/create" class="btn btn-primary btn-lg mt-5 btn-center">Add Product</a>

    </div>
    

     <div class="container">

            <div class="row text-center" style="display:flex; flex-wrap: wrap;">
     @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 mr-5 my-4">
              
            <div class="card pt-3" style="width: 20rem;">
            <img src="{{ $product->image }}" class="img-fluid">
            <div class="card-body">
            <h4>{{ $product->name }}</h4>
            <p class="card-text">{{ $product->brand }}</p>
            <p class="card-text">{{ str_limit($product->description, 20) }}</p>
            <p class="card-text">${{ $product->price }}</p>
   
          <a href="{{ $product->path() }}"class="btn btn-primary">More Info</a>
    
    </div>
</div>
</div>         
            @endforeach       
                       
    </div>
    </div>
   

    @include('partials.footer')