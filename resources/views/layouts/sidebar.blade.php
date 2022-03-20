<div class="container-fluid">
    <div class="row">
        <div class="col-2 col-s-5 col-m-3">
            <div class="sidebar-container" id="sidebar">
                <div class="sidebar-logo">
                    <a href="{{ route('home') }}">
                        <span>Home</span>
                    </a>
                    <a href="" id="togglesidebar">
                        <i class="fa fa-bars float-right" id="toggle-icon" aria-hidden="true"></i>
                    </a>
                </div>
                <ul class="sidebar-navigation">
                    <li class="{{ request()->is('*user*') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <i class="fa fa-user" aria-hidden="true"></i><span>Users</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('*post*') ? 'active' : '' }}">
                        <a href="{{ route('post.index', Auth::id()) }}">
                            <i class="fa fa-home" aria-hidden="true"></i><span>Posts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
