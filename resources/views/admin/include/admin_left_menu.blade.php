
<!-- Menu -->
<div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Main Menu -->
        <div class="side-menu-container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('admin_index') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl4">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Category <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('category') }}">Add New Category</a></li>
                                <li><a href="{{ route('allcategory') }}">All Categorys</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl5">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Subcategory <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl5" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('subcategory') }}">Add New Subcategory</a></li>
                                <li><a href="{{ route('allsubcategory') }}">All Subcategorys</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl6">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Brand <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl6" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('brand') }}">Add New Brand</a></li>
                                <li><a href="{{ route('allbrands') }}">All Brands</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl99">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Color <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl99" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('color') }}">Add New Color</a></li>
                                <li><a href="{{ route('allcolors') }}">All Colors</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl97">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Belt <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl97" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('belt') }}">Add New Belt</a></li>
                                <li><a href="{{ route('allbelts') }}">All Belts</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl18">
                        <i class="fa fa-cubes" aria-hidden="true"></i> Products <span class="caret"></span>
                    </a>
                    <!-- Dropdown level 1 -->
                    <div id="dropdown-lvl18" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('product') }}">Add New Product</a></li>
                                <li><a href="{{ route('allproducts') }}">All Products</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>