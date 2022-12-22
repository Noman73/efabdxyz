 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                  
                   
                    <li><a href="{{URL::to('/home')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Dashboard</span></a></li>
                    @if(auth()->user()->pin_no==null)
                    <li><a href="{{URL::to('/pin-verify')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Pin Varify</span></a></li>
                    @endif
                    <li><a href="{{URL::to('/profile')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Profile</span></a></li>
                    <li><a href="{{URL::to('/tree'.'/'.auth()->user()->id)}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Tree</span></a></li>
                    <li><a href="{{URL::to('/matching')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Matching</span></a></li>
                    <li><a href="{{URL::to('/direct-commision')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Direct COMM.</span></a></li>
                    <li><a href="{{URL::to('/withdraw')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Withdraw</span></a></li>
                    <li>
                        <li><a href="{{URL::to('/pin')}}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                            class="nav-text">Pin</span></a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i>{{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>