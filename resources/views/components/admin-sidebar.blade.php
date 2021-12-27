<div style="width:250px;">
    <div class="p-3" style="width: 250px;">
        <a href="/dms/?sidebarCategory=student"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <span class="fs-3">Admin Panel</span>
        </a>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://avatars.githubusercontent.com/u/38310111?v=4" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>{{ Auth::guard('admin')->user()->name }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
                <li>
                    <form method="post">
                        <button class="dropdown-item" name="profileBtn" type="submit">Profile</button>
                    </form>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a href="{{route('admin.logout')}}" name="signOutBtn" type="submit" class="dropdown-item">Log out</a>
                </li>
            </ul>
        </div>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto accordion">
            <li>
                <a href="{{route('admin.dashboard')}}" class="nav-link {{ $sidebarItem == 'Dashboard' ? 'active' : 'link-dark'}}">
                    Admins
                </a>
            </li>
            <!-- <li>
                <a href="" class="nav-link {{ $sidebarItem == 'Brands' ? 'active' : 'link-dark'}} ">
                    All Users
                </a>
            </li>             -->
            <li>
                <a href="{{route('admin.products')}}" class="nav-link {{ $sidebarItem == 'Products' ? 'active' : 'link-dark'}}">
                    Products
                </a>
            </li>
            <!-- <li>
                <a href="" class="nav-link {{ $sidebarItem == 'Category' ? 'active' : 'link-dark'}}">
                    Orders
                </a>
            </li> -->
        </ul>
    </div>
</div>    

<div class="verticalLine" style="border-left: 1px solid #b1b1b1;"></div>