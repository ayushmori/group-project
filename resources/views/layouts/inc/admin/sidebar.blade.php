
 <!-- Page Sidebar Start-->
 <div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('admin\images\logo\logo.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('admin/logo/logo_dark.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('admin/images/logo/logo-icon.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn"><a href="#"><img class="img-fluid" src="{{ asset('admin/images/logo/logo-icon.png') }}" alt=""></a>
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li class="sidebar-main-title">
              <div>
                <h6 class="lan-1">General</h6>
                <p class="lan-2">Dashboards,widgets & layout.</p>
              </div>
            </li>
            <li class="sidebar-list">
              <a class="sidebar-link sidebar-title" href="{{ route('admin.dashboard') }}">
                  <i data-feather="home"></i><span  class="lan-3">Dashboard</span>
              </a>
            </li>


            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span>Brands</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/brands/create' )}}">Add Brand</a></li>
                <li><a href="{{ url('admin/brands' )}}">View Brand</a></li>
              </ul>
            </li>



            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span>Category</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/categories/create' )}}">Add Category</a></li>
                <li><a href="{{ url('admin/categories' )}}">View Category</a></li>
              </ul>
            </li>


            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span>Main Slider</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/sliders/create' )}}">Add Main Slider</a></li>
                <li><a href="{{ url('admin/sliders' )}}">View Main Slider</a></li>
              </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="layers"></i><span>Sigle Slider</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.secondsliders.create') }}">Add Sigle Slider</a></li>
                    <li><a href="{{ route('admin.secondsliders.index') }}">View Sigle Sliders</a></li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="layers"></i><span>There Image Slider</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.minisiders.create') }}">Add There Image Slider</a></li>
                    <li><a href="{{ route('admin.minisiders.index') }}">View There Image Slider</a></li>
                </ul>
            </li>





            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="book"></i><span>News</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.news.create')}}">Add News</a></li>
                    <li><a href="{{route('admin.news')}}">View News</a></li>
                </ul>
            </li>

            <li class="sidebar-list">
                <a class="sidebar-link sidebar-title" href="#">
                    <i data-feather="book"></i><span>Product</span>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="{{url('admin/products/create')}}">Add Product</a></li>
                    <li><a href="{{url('/admin/products')}}">View Product</a></li>
                </ul>
            </li>



            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span>Setting</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/settings/about-us' )}}">About-Us</a></li>
                <li><a href="{{ url('admin/contact-us' )}}">Contact-Us</a></li>
              </ul>
            </li>


            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="airplay"></i><span>Documents</span></a>
              <ul class="sidebar-submenu">
                <li><a href="{{ url('admin/main-documents/create' )}}">Document-Add</a></li>
                <li><a href="{{ url('admin/main-documents' )}}">Document-View</a></li>
              </ul>
            </li>

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
  <!-- Page Sidebar Ends-->
