<x-admin>
    <div style="display:flex;height: 100vh;">
        @php 
        $sidebarItem = "Products";
        @endphp
        <x-admin-sidebar :sidebarItem="$sidebarItem"/>
        
        <div class="p-3" style="width: 100%;">
            <!-- <div id="search">
                <form method="POST" style="display:flex;padding-top:10px">
                    <div class="form-group">
                        <input name="searchtext" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Search a Student">
                    </div>
                    <div style="bottom:0;padding-left:10px">
                        <button style="height:37px" name="searchbtn" type="submit" class="btn transparent-bg btn-primary">
                            <span class="material-icons-outlined">
                                search
                            </span>
                        </button>
                    </div>
                </form>
            </div> -->
        
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">selling price</th>                        
                        <th class="text-center" scope="col">actual price</th>
                        <th class="text-center" scope="col">dicount</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->selling_price }}</td>
                        <td class="text-center">{{ $product->actual_price }}</td>
                        <td class="text-center">{{ $product->discount }}%</td>
                        <td class="text-center">
                            <form method="post">
                                @csrf
                                <a style="height:23px" name="profileBtn" href="{{route('admin.edit-product', $product->id)}}" type="submit" class="btn btn-sm">
                                    <span class="material-icons">
                                        edit
                                    </span>
                                </a>
                            </form>
                        </td>
                        <td class="text-center">
                            <form method="post">
                                <a name="deleteItem" class="btn btn-sm" href="{{route('delete_product', $product->id)}}">
                                    <span class="material-icons">
                                        delete
                                    </span>
                                </a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <form method="post" action="{{route('insert_product')}}" class="p-3 d-flex flex-column align-items-center" enctype="multipart/form-data" style=" margin-top:10px">
            @csrf
            <div >
            <input type="text" name="name" placeholder="Product Name" class="form-control shadow-none m-2">
            <input type="text" name="category" placeholder="category" class="form-control shadow-none m-2">
            <input type="text" name="subcategory" placeholder="subCategory" class="form-control shadow-none m-2">
            <input type="number"  name="selling_price" placeholder="Selling price" class="form-control shadow-none m-2">
            <input type="number"  name="actual_price" placeholder="Actual price" class="form-control shadow-none m-2">
            <input type="number"  name="discount" placeholder="discount" class="form-control shadow-none m-2">
            <input type="file" accept="image/*" name="product-images[]" class="product-images form-control shadow-none m-2" placeholder="image" multiple>
            </div>

            <div class="preview_img d-flex flex-wrap" style="padding:10px 0;width: 230px;">
            </div>
            
            <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary ">Insert Product</button>
        </form>
    </div>
</x-admin>