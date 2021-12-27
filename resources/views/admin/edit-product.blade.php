<x-admin>
    <div style="display:flex;height: 100vh;">
        @php 
        $sidebarItem = "Products";
        @endphp
        <x-admin-sidebar :sidebarItem="$sidebarItem"/>
    
    <form method="post" action="{{route('update_product')}}" class="p-3" enctype="multipart/form-data" >
        @csrf
        <input type="hidden" name="id" value="{{ $product->id }}">
        <input type="text" name="name" placeholder="Product Name" value="{{$product->name}}">
        <input type="text" name="category" placeholder="category" value="{{$product->category}}">
        <input type="text" name="subcategory" placeholder="subCategory" value="{{$product->subcategory}}">
        <input type="number"  name="price" placeholder="price" value="{{$product->price}}">
        <input type="number"  name="discount" placeholder="discount" value="{{$product->discount}}">
        <input type="file"  name="image" placeholder="image" >
        
        <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary">Update Product</button>
    </form>
</x-admin>