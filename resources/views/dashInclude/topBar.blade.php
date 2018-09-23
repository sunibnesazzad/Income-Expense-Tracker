<!-- Page Content Holder -->
<div id="content">
    <!-- top-bar -->
    <nav class="navbar navbar-default mb-xl-5 mb-4">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- Search-from -->
            <form action="/queries" method="post" class="form-inline mx-auto search-form">
               {{-- {{csrf_field()}}
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="" name="search">
                <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>--}}
            </form>
            <!--// Search-from -->

        </div>
    </nav>
    <!--// top-bar -->