<div class="iq-top-navbar"> <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar p-lg-0">
    <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center flex-lg-row-reverse gap-3 pb-2 pb-lg-0">
            <a class="sidebar-toggle" data-toggle="sidebar" data-active="true" href="javascript:void(0);">
                <div class="icon material-symbols-outlined iq-burger-menu">
                    menu
                </div>
            </a>
            <a href="/Annonce" class="d-flex align-items-center gap-2 iq-header-logo">
                <img style="width:4rem" src="images/logo.png" alt="">
                <h3 class="logo-title d-none d-sm-block" data-setting="app_name">We Share</h3>
            </a>

        </div>

        @include('Userinterface.partials._navsearch')
        <ul class="navbar-nav navbar-list">
            <li class="nav-item">
                <a href="index-2.html" class="d-flex align-items-center">
                    <i class="material-symbols-outlined">home</i>
                </a>
            </li>
      
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                    id="group-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="material-symbols-outlined">group</span>
                </a>
                <div class="sub-drop sub-drop-large dropdown-menu " aria-labelledby="group-drop">
                    <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary">
                            <div class="header-title">
                                <h5 class="mb-0 text-white">Friend Request</h5>
                            </div>
                            <small class="badge  bg-light text-dark ">4</small>
                        </div>
                        <div class="card-body p-0">
                            <div class="iq-friend-request">
                                <div
                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                            alt="" loading="lazy">
                                        <div class="ms-3">
                                            <h6 class="mb-0 ">Jaques Amole</h6>
                                            <p class="mb-0">40 friends</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-friend-request">
                                <div
                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                            alt="" loading="lazy">
                                        <div class="ms-3">
                                            <h6 class="mb-0 ">Lucy Tania</h6>
                                            <p class="mb-0">12 friends</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-friend-request">
                                <div
                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                            alt="" loading="lazy">
                                        <div class=" ms-3">
                                            <h6 class="mb-0 ">Manny Petty</h6>
                                            <p class="mb-0">3 friends</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-friend-request">
                                <div
                                    class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                            alt="" loading="lazy">
                                        <div class="ms-3">
                                            <h6 class="mb-0 ">Marsha Mello</h6>
                                            <p class="mb-0">15 friends</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-primary rounded">Confirm</a>
                                        <a href="javascript:void(0);"
                                            class="me-3 btn btn-secondary rounded">Delete Request</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="javascript:void(0);" class=" btn text-primary">View More Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="search-toggle dropdown-toggle d-flex align-items-center"
                    id="notification-drop" data-bs-toggle="dropdown">
                    <i class="material-symbols-outlined">notifications</i>
                </a>
                <div class="sub-drop dropdown-menu" aria-labelledby="notification-drop">
                    <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary">
                            <div class="header-title bg-primary">
                                <h5 class="mb-0 text-white">All Notifications</h5>
                            </div>
                            <small class="badge  bg-light text-dark">4</small>
                        </div>
                        <div class="card-body p-0">
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                            alt="">
                                    </div>
                                    <div class="ms-3 w-100">
                                        <h6 class="mb-0 ">Emma Watson Bni</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">95 MB</p>
                                            <small class="float-right font-size-12">Just Now</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3 w-100">
                                        <h6 class="mb-0 ">New customer is join</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Cyst Bni</p>
                                            <small class="float-right font-size-12">5 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3 w-100">
                                        <h6 class="mb-0 ">Two customer is left</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Cyst Bni</p>
                                            <small class="float-right font-size-12">2 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="w-100 ms-3">
                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">Cyst Bni</p>
                                            <small class="float-right font-size-12">3 days ago</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                    id="mail-drop" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-symbols-outlined">mail</i>
                    <span class="mobile-text d-none ms-3">Message</span>
                </a>
                <div class="sub-drop dropdown-menu" aria-labelledby="mail-drop">
                    <div class="card shadow-none m-0">
                        <div class="card-header d-flex justify-content-between bg-primary">
                            <div class="header-title bg-primary">
                                <h5 class="mb-0 text-white">All Message</h5>
                            </div>
                            <small class="badge bg-light text-dark">4</small>
                        </div>
                        <div class="card-body p-0 ">
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex  align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/01.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class=" w-100 ms-3">
                                        <h6 class="mb-0 ">Bni Emma Watson</h6>
                                        <small class="float-left font-size-12">13 Jun</small>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/02.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                        <small class="float-left font-size-12">20 Apr</small>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/03.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 ">Why do we use it?</h6>
                                        <small class="float-left font-size-12">30 Jun</small>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/04.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 ">Variations Passages</h6>
                                        <small class="float-left font-size-12">12 Sep</small>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="iq-sub-card">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img class="avatar-40 rounded" src="../assets/images/user/05.jpg"
                                            alt="" loading="lazy">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                        <small class="float-left font-size-12">5 Dec</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-lg-none">
                <a href="https://templates.iqonic.design/socialv/bs5/html/dist/app/chat.html"
                    class="dropdown-toggle d-flex align-items-center" id="mail-drop-1"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-symbols-outlined">mail</i>
                    <span class="mobile-text  ms-3">Message</span>
                </a>
            </li>
            <li class="nav-item dropdown user-dropdown">
                <a href="javascript:void(0);" class="d-flex align-items-center dropdown-toggle"
                    id="drop-down-arrow" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <img    src="{{ Auth::user()->profile_photo_url }}" class="img-fluid rounded-circle me-3"
                    alt="{{ Auth::user()->name }}"  loading="lazy">
                    @else 
                    <img    src="/public/images/logo.png" class="img-fluid rounded-circle me-3"
                    alt="{{ Auth::user()->name }}"  loading="lazy">
                    @endif
                  
                </a>
                <div class="sub-drop dropdown-menu caption-menu" aria-labelledby="drop-down-arrow">
                    <div class="card shadow-none m-0">
                        <div class="card-header ">
                            <div class="header-title">
                                <h5 class="mb-0 "> {{ Auth::user()->name }}</h5>
                            </div>
                        </div>
                        <div class="card-body p-0 ">
                            <a class="d-flex align-items-center iq-sub-card border-0" href="/profile">
                                <span class="material-symbols-outlined">
                                    line_style
                                </span>
                                <div class="ms-3">
                               
                                    <p 
                                        class="mb-0 h6">
                                        My Profile
                                    </p>
                                </div>
                            </a>
                            <a class="d-flex align-items-center iq-sub-card border-0" href="{{ route('profile.show') }}">
                                <span class="material-symbols-outlined">
                                    edit_note
                                </span>
                                <div class="ms-3">
                                    <p
                                        class="mb-0 h6">
                                        Edit Profile
                                    </p>
                                </div>
                            </a>
                      
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="d-flex align-items-center iq-sub-card" href="{{ route('logout') }}"       @click.prevent="$root.submit();">
                                <span class="material-symbols-outlined">
                                    login
                                </span>
                                <div class="ms-3">
                                    <p class="mb-0 h6">
                                        Sign out
                                    </p>
                                </div>
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>    </div> 
 @include('Userinterface.partials._sidebar')