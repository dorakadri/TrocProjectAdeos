<aside class="sidebar sidebar-default sidebar-base navs-rounded-all " id="first-tour" data-toggle="main-sidebar"
    data-sidebar="responsive">
    <div class="sidebar-body pt-0 ">
        <div class="sidebar-list">
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="{{ route('Annonce.index') }}" tabindex="-1">
                        <span class="default-icon">Social</span>
                        <span class="mini-icon" data-bs-toggle="tooltip" title="Social"
                            data-bs-placement="right">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('Annonce.index') }}">
                        <i class="icon material-symbols-outlined">
                            newspaper
                        </i>
                        <span class="item-name">Newsfeed</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#profile" role="button" aria-expanded="false"
                        aria-controls="profile">
                        <i class="icon material-symbols-outlined">
                            person
                        </i>
                        <span class="item-name">Profiles</span>
                        <i class="right-icon material-symbols-outlined">chevron_right</i>
                    </a>
                    <ul class="sub-nav collapse" id="profile" data-bs-parent="#sidebar-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reclamation.index') }}">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name">my claims</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="profile1.html">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name">my exchanges </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('Community.index')}}">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name"> My Communities</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="{{ route('Event.index') }}">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> PI </i>
                                <span class="item-name">Events</span>
                            </a>
                        </li>
                        @if (auth()->user()->role === '2')
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('charites.index') }}">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> PI </i>
                                <span class="item-name"> MY charity events</span>
                            </a>
                        </li>
  @endif

  @if (auth()->user()->role === '0')
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('donations.index') }}">
                                <i class="icon material-symbols-outlined filled">
                                    fiber_manual_record
                                </i>
                                <i class="sidenav-mini-icon"> PI </i>
                                <span class="item-name">My donations</span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item static-item">
                    <a class="nav-link static-item disabled" href="#" tabindex="-1">
                        <span class="default-icon">Discover</span>
                        <span class="mini-icon" data-bs-toggle="tooltip" title="Social"
                            data-bs-placement="right">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page"
                    href="/communities">
                        <i class="icon material-symbols-outlined">
                            groups
                        </i>
                        <span class="item-name">Communities</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('charites.index') }}">


                        <i class=" icon material-symbols-outlined">
                            grade
                        </i>
                        <span class="item-name">Charity Events</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('post.index') }}">


                        <i class=" icon material-symbols-outlined">
                            grade
                        </i>
                        <span class="item-name">forum</span>
                    </a>
                </li>
           
                <li class="nav-item">
                    <a class="nav-link" href="/home/associations">
                        <i class="icon material-symbols-outlined filled">
                            fiber_manual_record
                        </i>
                        <i class="sidenav-mini-icon"> P </i>
                        <span class="item-name"> Associations </span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>
