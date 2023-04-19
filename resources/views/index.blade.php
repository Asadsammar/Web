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
            <div class="h4">Products</div>
            <div>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th width="30">ID</th>
                        <th>Item Code</th>
                        <th>Name Of Goods</th>
                        <th>Catagory Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th width="150">Action</th>
                    </tr>
                         @foreach($products as $product)
                         <tr>
                         <td>{{ $product->id }}</td>
                        <td>{{ $product->item_code }}</td>
                        <td>{{ $product->name_of_goods }}</td>
                        <td>{{ $product->catagory_item }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>
                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" onclick="deleteProducts({{ $product->id }})" class="btn btn-danger btn-sm">Delete</a>

                        </td>
                        </tr>
                        
                        <td>
                            <form id="products-edit-action-{{ $product->id }}" action="{{ route('products.destroy',$product->id) }}" method="post">
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6">Record Not Found</td>
                    </tr>
                    

                </table>
            </div>
        </div>

    </div>

    
</body>
</html>
<script>
    function deleteProducts(id) {
        if (confirm("Are you sure you want to delete?")) {
            document.getElementById('products-edit-action-'+id).submit();
        }
    }
</script>