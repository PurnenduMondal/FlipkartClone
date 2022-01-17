<x-admin>
    <div style="display:flex;height: 100vh;">
        @php 
        $sidebarItem = "Orders";
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
                        <th class="text-center" scope="col">Order ID</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">selling price</th>           
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Update Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @php 
                    $product = App\Models\Product::find($order->product_id)
                    @endphp
                    <tr>
                        <td class="text-center">{{ $order->id }}</td>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->selling_price }}</td>
                        <td class="text-center">{{ $order->status }}</td>
                        <td class="text-center">
                            <form method="post" action="{{route('admin.orders_status', $order->id)}}">                                    @csrf
                                    <select name="status" onchange="this.form.submit()">
                                        <option>Select Status</option>
                                        <option value="Order Placed">Order Placed</option>
                                        <option value="Delivered">Delivered</option>
                                    </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin>