<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h1>
            <a href="">Income & Expense Traker</a>
        </h1>
        <span>I&S</span>
    </div>
    <div class="profile-bg"></div>
    <ul class="list-unstyled components">
        <li class="">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                <i class="fas fa-laptop"></i>
                Details
                <i class="fas fa-angle-down fa-pull-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{!! route('enterDetail') !!}">Add Income/Expense</a>
                </li>
                <li>
                    <a href="{!! route('showDetail') !!}">Show All Income/Expense</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="{!! route('logout') !!}">
                <i class="fas fa-user"></i>
               Logout
            </a>
        </li>

    </ul>
</nav>