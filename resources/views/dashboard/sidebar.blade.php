 <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #191C6D;">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  <img src="{{ asset('/assets/img/white-triphomer-logo.png') }}" alt="loog" class="img-fluid"></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

                  <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-plane-departure"></i>
                    <span>Flight</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Flight Components:</h6>
                        <a class="collapse-item" href="{{ route('flight.inner.pages') }}">Flights</a>
                        <a class="collapse-item" href="flight-listing.html">Flight Listing</a>
                        <a class="collapse-item" href="flight-payment.html">Flight Payment</a>
                        <a class="collapse-item" href="flight-thanku.html">Flight Thanku</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-hotel"></i>
                    <span>Hotel</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hotel Components:</h6>
                        <a class="collapse-item" href="hotel-listing.html">Hotel Listing</a>
                        <a class="collapse-item" href="hotel-payment.html">Hotel Payment</a>
                        <a class="collapse-item" href="hotel-thanku.html">Hotel Thanku</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCar"
                    aria-expanded="true" aria-controls="collapseCar">
                    <i class="fa fa-car"></i>
                    <span>Car</span>
                </a>
                <div id="collapseCar" class="collapse" aria-labelledby="headingCar" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Car Components:</h6>
                        <a class="collapse-item" href="car-listing.html">Car Listing</a>
                        <a class="collapse-item" href="car-payment.html">Car Payment</a>
                        <a class="collapse-item" href="car-thanku.html">Car Thanku</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pages Screens:</h6>
                        <a class="collapse-item" href="{{ route('pages') }}">All Pages</a>
                        <a class="collapse-item" href="{{ route('add-page') }}">Add New</a>
                        <a class="collapse-item" href="{{ route('image_upload')}}">Upload Image</a>
                        <div class="collapse-divider"></div>

                    </div>
                </div>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->