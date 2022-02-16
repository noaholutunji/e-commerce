@include('partials.header')


<div class="p-3 mb-auto bg-info text-dark text-center display-5">Get all kind of phones here at the cheapest price possible </div>
                   
                                
                                    

     <h1 class="text-center my-2">Add a Product</h1>
        <div style="width: 30%; margin: 25px auto;">
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="brand" placeholder="Brand">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="image" placeholder="Image url">
                </div>
                
                <div class="form-group">
                    <input class="form-control" type="text" name="description" placeholder="Description">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Submit!</button>
                </div>
            </form>
            <a href="/products">Go Back</a>
        </div>
    </div>  
    </div> 
                           
                       


