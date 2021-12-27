<x-admin>
    <div style="display:flex;height: 100vh;">
        @php 
        $sidebarItem = "Products";
        @endphp
        <x-admin-sidebar :sidebarItem="$sidebarItem"/>
        
        <div class="p-3" style="width: 100%;">
            <div id="search">
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
            </div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">price</th>
                        <th class="text-center" scope="col">dicount</th>
                        <th class="text-center" scope="col">Edit</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->price }}</td>
                        <td class="text-center">{{ $product->discount }}%</td>
                        <td class="text-center">
                            <form method="post">
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

        <form method="post" action="{{route('insert_product')}}" class="p-3" enctype="multipart/form-data" style="display:flex; flex-direction:column; align-items:center;margin-top:10px">
            @csrf
            <input type="text" name="name" placeholder="Product Name">
            <input type="text" name="category" placeholder="category">
            <input type="text" name="subcategory" placeholder="subCategory">
            <input type="number"  name="price" placeholder="price">
            <input type="number"  name="discount" placeholder="discount">
            <input type="file"  name="image" placeholder="image">
            
            <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary">Insert Product</button>
        </form>
    </div>
</x-admin>