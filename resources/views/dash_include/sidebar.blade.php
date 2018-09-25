<nav class="main-menu">
    <ul>
        <li>
            <a href="{!! route('enterDetail') !!}">
                <i class="fa fa-home nav_icon"></i>
                <span class="nav-text">
					Home
					</span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="javascript:">
                <i class="fa fa-file-text-o nav_icon"></i>
                <span class="nav-text">Detail</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="{!! route('enterDetail') !!}">
                        Add Income/Expense
                    </a>
                </li>
                <li>
                    <a class="subnav-text"href="{!! route('showDetail') !!}">
                        Show All Income/Expense
                    </a>
                </li>
            </ul>
        </li>
        <li class="has-subnav">
            <a href="javascript:;">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span class="nav-text">
					Profile Setting
				</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="/dash/{{Auth::user()->id}}">
                        Show Profile
                    </a>
                </li>
                <li>
                    <a class="subnav-text" href="{!! route('editProfile') !!}">
                        Edit Profile
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <ul class="logout">
        <li>
            <a href="{!! route('logout') !!}">
                <i class="icon-off nav-icon"></i>
                <span class="nav-text">
			Logout
			</span>
            </a>
        </li>
    </ul>
</nav>