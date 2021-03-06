<x-admin>
    <div style="display:flex;height: 100vh">
        @php 
        $sidebarItem = "Dashboard";
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
                        <th class="text-center" scope="col">ViewProfile</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">{{Auth::guard('admin')->user()->name}}</td>
                        <td class="text-center">
                            <form method="post">
                                <input type="hidden" name="rowId" value="1">
                                <button style="height:23px" name="profileBtn" type="submit" class="btn btn-sm">
                                    <span class="material-icons-outlined">
                                        visibility
                                    </span>
                                </button>
                            </form>
                        </td>
                        <td class="text-center">
                            <form method="post">
                                <input type="hidden" name="rowId" value="1">
                                <button name="deleteItem" type="submit" class="btn btn-sm">
                                    <span class="material-icons">
                                        delete
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin>