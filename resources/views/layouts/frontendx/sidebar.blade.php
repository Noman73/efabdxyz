<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{URL::to('/home')}}">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span></a></div>
                <li class="label">Main</li>
                <li><a href="{{URL::to('/home')}}"><i class="ti-home"></i> Dashboard </a></li>
                @if(auth()->user()->pin_no==null)
                <li><a href="{{URL::to('/pin-verify')}}" aria-expanded="false"><i class="ti-pin"></i> <span
                    class="nav-text">Pin Varify</span></a>
                </li>
                @endif
                <li>
                    <a href="{{URL::to('/profile')}}" aria-expanded="false"><i class="ti-user"></i><span class="nav-text">Profile</span></a>
                </li>
                <li>
                    <a href="{{URL::to('/tree'.'/'.auth()->user()->id)}}" aria-expanded="false"><i class="ti-download"></i><span
                        class="nav-text">Tree</span></a>
                </li>
                <li>
                    <a href="{{URL::to('/matching')}}" aria-expanded="false"><i class="ti-money"></i><span
                        class="nav-text">Matching</span></a>
                </li>
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
</div>
{{-- end sidebar --}}



