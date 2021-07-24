  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
         <ul class="nav navbar-nav flex-row" style="justify-content: center">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" style="padding: 0 !important" href="{{route('seller.dashboard')}}">
                          <svg width="125px" height="70px" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 1302.28 300.7">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #e6ab67;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path
                                            d="M450.71,167.45q28-28,28-67.78,0-39.36-28-67.55-23.41-23.41-57-28h-76.9v293h16.59V195.64h54.71l65.29,101.54h20.31L406.14,192.94Q431.22,186.94,450.71,167.45Zm-67.57,11.4H333.41V20.92h49.73q32.53,0,55.76,23t23.21,55.74q0,33-23.21,56.07T383.14,178.85Z" />
                                        <path class="cls-1"
                                            d="M1258.23,44q-44-44-106.4-44-62.19,0-106.21,44t-44,106.22q0,62.38,44,106.42t106.21,44q62.36,0,106.4-44t44-106.42Q1302.28,88.09,1258.23,44Zm-11.92,200.72q-39.16,39.18-94.48,39.16-55.14,0-94.3-39.16t-39.15-94.5q0-55.11,39.15-94.31t94.3-39.15q55.31,0,94.48,39.15t39.18,94.31Q1285.49,205.58,1246.31,244.75Z" />
                                        <polygon
                                            points="591.1 142.47 591.1 158.85 551.05 158.85 551.05 297.18 534.67 297.18 534.67 158.85 494.62 158.85 494.62 142.47 534.67 142.47 534.67 4.16 551.05 4.16 551.05 142.47 591.1 142.47" />
                                        <polygon
                                            points="663.9 20.51 663.9 280.8 703.96 280.8 703.96 297.18 607.47 297.18 607.47 280.8 647.52 280.8 647.52 20.51 607.47 20.51 607.47 4.13 703.96 4.13 703.96 20.51 663.9 20.51" />
                                        <path class="cls-1"
                                            d="M938,180.9a47.29,47.29,0,0,0-14.48,92.3,131.18,131.18,0,0,1-53.12,10.71q-55.11,0-94.2-39t-39-94.3q0-55.11,39-94.07t94.2-39A131.13,131.13,0,0,1,922.64,28,47.29,47.29,0,1,0,971.29,39.8l-.2-.21c-1.7-1.54-3.42-3-5.16-4.52,0,0-.1-.08-.16-.1Q924.69.62,870.37.62q-62.39,0-106.22,44t-43.82,106q0,62.39,43.82,106.21T870.37,300.7q55.33,0,96.92-35.43c1.18-1,2.36-2.06,3.54-3.11a3.05,3.05,0,0,0,.44-.44A47.26,47.26,0,0,0,938,180.9ZM953.68,46.78c.52.31,1,.64,1.49,1a34.65,34.65,0,0,1,3.47,2.88l.2.21a30.41,30.41,0,1,1-5.16-4.06Zm1.18,207a30.64,30.64,0,1,1,4-3.11A30.5,30.5,0,0,1,954.86,253.79Z" />
                                        <path
                                            d="M265.68,200.65,194.38,4.16h-17L124.29,148.89q-45.72,7.43-80.26,42Q0,234.93,0,297.08v.1H16.79v-.1q0-55.11,39.15-94.3,27-27,61.55-35.36L69.83,297.18H87.45l48.78-132.89q6.86-.66,14-.67,55.31,0,94.48,39.16l.07.07a43.26,43.26,0,0,1,10,15.86l28.51,78.47H300.7ZM150.25,146.83c-2.6,0-5.14,0-7.68.18L185.88,29l53.25,146.63Q200.7,146.83,150.25,146.83Z" />
                                    </g>
                                </g>
                            </svg>

            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
           
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1">
                  <span class="user-name text-bold-700">{{Auth::guard('admin')->user()->nom}}</span>
                </span>
                <span class="avatar avatar-online">
                  <img src="{{asset('public/admin/images/portrait/small/avatar-s-19.png')}}" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Modifer Profile</a>

               <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form{{Auth::guard('admin')->user()->id}}').submit();">
                                {{ __('Logout') }}
                            </a>

                <form id="logout-form{{Auth::guard('admin')->user()->id}}" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                </form>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>
