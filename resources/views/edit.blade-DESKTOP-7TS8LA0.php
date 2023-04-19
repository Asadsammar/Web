<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M.ASAD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white">PWL UTS CRUD</div>
        </div>
    </div>

    <div class="container ">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Edit Product</div>
            <div>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <form action="{{route ('products.update',$products->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card border-0 shadow-lg">
           <div class="card-body">
            <div class="mb-3">
               <label for="item_code" class="form-label">Item Code</label>
               <input type="text" name="item_code" placeholder="Enter Item Code" class="form-control" value="{{ old('item_code',$products->item_code) }}">
          </div>

          <div class="mb-3">
               <label for="name_of_goods" class="form-label">Name Of Goods</label>
               <input type="text" name="name_of_goods" placeholder="Enter Name Of Goods" class="form-control" value="{{ old('name_of_goods',$products->name_of_goods) }}">
          </div>

          <div class="mb-3">
               <label for="catagory_item" class="form-label">Catagory Item</label>
               <input type="text" name="catagory_item" placeholder="Enter Catagory Item" class="form-control" value="{{ old('catagory_item',$products->catagory_item) }}">
          </div>

          <div class="mb-3">
               <label for="price" class="form-label">Price</label>
               <input type="text" name="price" placeholder="Enter Price" class="form-control" value="{{ old('price',$products->price) }}">
          </div>

          <div class="mb-3">
               <label for="qty" class="form-label">Quantity</label>
               <input type="text" name="qty" placeholder="Enter Quantity" class="form-control" value="{{ old('qty',$products->qty) }}">
          </div>
         </div>
         </div>
         <button type="submit" class="btn btn-primary mt-3">Update Data</button>
    </form>
    </div>

    
</body>
</html>