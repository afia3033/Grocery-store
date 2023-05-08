<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">
    .div_center{
        text-align: left;
        padding-top: 40px;
    }

    .city {
  font-size: 40px;
  padding-bottom: 40px;
}

.text_color{

    color: black;
    padding-bottom: 20px;
}


label{
display: inline-block;
width: 200px;


}


.div_design{
    padding-bottom: 15px;
    
}
    </style>

  </head>
  <body>
    <div class="container-scroller">
    
    @include('admin.sidebar')
    @include('admin.header')

    <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
            </div>

            @endif
        
        <div class="div_center">  
        <h2 class="city">Add Product</h2></div>
        <div class="div_design">

        <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Product Title : </label>
        <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
        </div>

        <div class="div_design">
        <label>Product Description : </label>
        <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
        </div>

        <div class="div_design">
        <label>Product Price : </label>
        <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
        </div>

        <div class="div_design">
        <label>Discounted Price : </label>
        <input class="text_color" type="number" name="dis_price" placeholder="Write a Discounted Price">
        </div>

        <div class="div_design">
        <label>Product Quantity : </label>
        <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
        </div>

        <div class="div_design">
        <label>Product Brand : </label>
        <select class="text_color" name="brand" required="">
        <option value="" selected="">Add a Brand Here</option>
        @foreach($brand as $brand)
        <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
        @endforeach
    
    </select>
        </div>

        <div class="div_design">
        <label>Product Image Here : </label>
        <input type="file" name="image" required="">
        </div>

        <div class="div_design">
            <input type="submit" value="Add Product" class="btn btn-primary">
        </div>
        </form>
    </div>
    @include('admin.script')
      <!-- partial -->
     
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
  </body>
</html>