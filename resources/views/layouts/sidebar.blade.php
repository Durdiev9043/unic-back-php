{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
          <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary text-white">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link align-middle px-0 text-white">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('distirct.user.index.count') }}" data-bs-toggle="collapse" class="nav-link text-white px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Tumanlar xodimlari</span>
                        </a>

                    </li>
                    <li>
                        <a href="{{ route('location.index') }}" class="nav-link px-0 text-white align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">location</span></a>
                    </li>
                    <li>
                        <a href="{{ route('task.index') }}" class="nav-link px-0 text-white align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Barcha qoshilgan ishlar</span></a>
                    </li>
                    <li>
                        <a href="{{ route('district.index') }}" class="nav-link px-0 text-white align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Tumanlar</span></a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex text-white align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item text-white" href="#">New project...</a></li>
                        <li><a class="dropdown-item text-white" href="#">Settings</a></li>
                        <li><a class="dropdown-item text-white" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-white" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
{{--        --}}
{{--        <div class="col-sm p-3 min-vh-100">--}}
{{--            <!-- content -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
