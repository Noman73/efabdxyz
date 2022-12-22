<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{URL::to('admin/home')}}">
                         <img id="brand_logo" src="{{asset('storage/logo/logo.png')}}" alt="" /></a></div>
                <li class="label">Main</li>
                

                <li><a href="{{URL::to('admin/home')}}"><i class="ti-dropbox"></i> Dashboard </a></li>
                <li>
                    <a href="{{URL::to('admin/package')}}" aria-expanded="false"><i class="ti-package"></i><span
                        class="nav-text">Package</span></a>
                </li>
                <li>
                    <a href="{{URL::to('admin/customer')}}" aria-expanded="false"><i class="ti-user"></i><span
                        class="nav-text">Customer</span></a>
                </li>
                <li>
                    <a href="{{URL::to('admin/pin_generate')}}" aria-expanded="false"><i class="ti-back-right"></i><span
                        class="nav-text">Pin Generate</span></a>
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











