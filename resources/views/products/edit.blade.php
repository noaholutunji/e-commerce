@include('partials.header')

<h2 class="text-center mt-5 mb-2">Edit Product</h2>
        <div style="width: 30%; margin: 25px auto;">
            <form action="{{ $product->path() }}" method="POST">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="{{ $product->brand }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="image" value="{{ $product->image }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Edit</button>
                   
                </div>
            </form>
            <a href="/products">Go Back</a>
    
        </div>
    </div> 
</div>

    @include('partials.footer')