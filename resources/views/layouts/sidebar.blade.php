<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ route('/') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/rkive.png') }}" alt=""
                    style="height: 40px; width: auto;"><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/rkive.png') }}" alt=""
                    style="height: 40px; width: auto"></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('/') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo1.png') }}" alt=""
                    style="height: 35px; width: auto;"></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span>Dashboard</span></a></li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('task') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-task') }}"></use>
                            </svg><span>Task</span></a></li>
            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('document')}}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                </svg>
                <svg class="fill-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#fill-social') }}"></use>
                </svg><span>Document Management</span></a></li>
                <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title active" href="#"
                            data-bs-original-title="" title="">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"></use>
                            </svg><span>Legal Contract</span>
                            <div class="according-menu"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="">
                            <li><a href="{{route('contract')}}" data-bs-original-title="" title="">Contract Table</a></li>
                            <li><a href="{{route('createcontract')}}" data-bs-original-title=""
                                    title="">Create Contract</a></li>
                        </ul>
             
        
      </nav>
    </div>
  </div>
 