<div class="bst-sidebar">
    <div class="bst-sidebar-nav-wrapper">
        <div class="bst-site-link mrgn-b-md bg-white overflow-wrapper">
            <div class="bst-site-info pull-left"><i class="ti-world mrgn-r-sm"> </i> <span>Ecommerce </span> </div>
            <button class="c-hamburger c-hamburger--htra bst-bars pull-right"> <span>toggle menu</span></button>
        </div>
        <div class="bst-sidebar-link mrgn-b-sm bg-white bst-shadow">
            <a href="{{route('dashboard')}}"> <i class="ti-dashboard mrgn-r-sm {{ (request()->routeIs('dashboard')) ? 'active' : '' }}"> </i> <span class="closed-menu-title {{ (request()->routeIs('dashboard')) ? 'active' : '' }}">Dashboard</span> </a>
        </div>
        <div class="bst-sidebar-menu pad-lr-lg pad-tb-md bg-white bst-shadow">
            <div class="sidebar-nav navbar-nav">
                <ul class="nav nav-pills flex-column sidebar-menu">
                    <li class="sidenav-heading text-uppercase">Dashboards</li>
                    <li class="has-children {{ (request()->routeIs('categories','brands','products')) ? 'active' : '' }} nav-item"><a href="#/"><i class="ti-tag" aria-hidden="true"></i> <span>Catalog</span></a>
                        <ul class="list-unstyled sub-menu {{ (request()->routeIs('categories','brands','products')) ? '' : 'collapse' }}">
                            <li class="nav-item"><a class="{{ (request()->routeIs('categories')) ? 'active' : '' }}" href="{{route('categories')}}"><span>Categories</span></a></li>
                            <li class="nav-item"><a class="{{ (request()->routeIs('brands')) ? 'active' : '' }}" href="{{route('brands')}}"><span>Manufacturers</span></a></li>
                            <li class="nav-item"><a class="{{ (request()->routeIs('products')) ? 'active' : '' }}" href="{{route('products')}}"><span>Products</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children nav-item"><a href="#/"><i class="ti-shopping-cart-full" aria-hidden="true"></i> <span>Sales</span></a>
                        <ul class="list-unstyled sub-menu collapse">
                            <li class="nav-item"><a class="" href="#"><span>Categories</span></a></li>
                            <li class="nav-item"><a class="" href="#"><span>Manufacturers</span></a></li>
                            <li class="nav-item"><a class="" href="#"><span>Products</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children {{ (request()->routeIs('logo','slider-index')) ? 'active' : '' }} nav-item"><a href="#/"><i class="ti-files" aria-hidden="true"></i> <span>Pages</span></a>
                        <ul class="list-unstyled sub-menu {{ (request()->routeIs('logo','slider-index')) ? '' : 'collapse' }}">
                            <li class="nav-item"><a class="{{ (request()->routeIs('logo')) ? 'active' : '' }}" href="{{route('logo')}}"><span>Logos</span></a></li>
                            <li class="nav-item"><a class="{{ (request()->routeIs('slider-index')) ? 'active' : '' }}" href="{{route('slider-index')}}"><span>Slider</span></a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>

    </div>
</div>
