<aside>
    <nav class="navbar navbar-expand-dark bg-dark flex-md-column flex-row align-item-start py-2">
        <div class="collapse navbar-collapse">
            <ul class="flex-md-column-flex-row navbar-nav w100 justify-content-between">
                <li class="nav-item active">
                    <a class="nav-link pl-0 text-nowrap" href="#"><i class="fa fa-bullseye fa-fw"></i> <span class="font-weight-bold">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="#"><i class="fa fa-book fa-fw"></i> <span class="d-none d-md-inline">Car</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="#"><i class="fa fa-cog fa-fw"></i> <span class="d-none d-md-inline">Contact Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="#"><i class="fa fa-heart codeply fa-fw"></i> <span class="d-none d-md-inline">About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pl-0" href="#"><i class="fa fa-star codeply fa-fw"></i> <span class="d-none d-md-inline">rent report</span></a>
                </li>
                <li>
                    <form method="POST" class="nav-link pl-0" action="{{ route('logout') }}">
                        @csrf
                        <button class="fa fa-bullseye fa-fw" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</aside>