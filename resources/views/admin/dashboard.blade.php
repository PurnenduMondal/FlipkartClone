<x-admin>
    <div style="display:flex;height: 100vh">
        @php 
        $sidebarItem = "Dashboard";
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
                        <th class="text-center" scope="col">ViewProfile</th>
                        <th class="text-center" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">student1</td>
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


        <form class="p-3" style="display:flex; align-items:center; flex-direction:column;margin-top:10px" method="post">
            <input style="width:200px" type="text" name="courseName" placeholder="Course Name">
            <input style="width:200px" type="number" min="2010" max="9999" name="batchYear" placeholder="Batch Year">
            <input style="width:200px" type="number" min="2" max="10" name="semCount" placeholder="Number Of Semesters">
            <button type="submit" name="createNewCourseBtn" class="addbtn btn btn-primary">Add A New Course</button>
        </form>

    </div>
</x-admin>