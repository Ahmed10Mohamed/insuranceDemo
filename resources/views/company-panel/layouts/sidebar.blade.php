<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar nq-rtl-layout">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
           <div class="app-brand demo">
                    <a href="{{ route('Admin-Dashboard') }}" class="app-brand-link">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="app-brand-logo demo" />
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
                        <i class="ti tabler-x d-block d-xl-none ti-md align-middle"></i>
                    </a>
                </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
          <li class="menu-header small">
              <span class="menu-header-text" data-i18n="لوحة التحكم">لوحة التحكم</span>
            </li>
            <!-- Dashboard -->

            <li class="menu-item @if (checkRoute('Company-Dashboard')) active @endif">
                <a href="{{route('Company-Dashboard')}}" class="menu-link">
                    <i class="menu-icon tf-icons ti tabler-smart-home"></i>
                    <div data-i18n="لوحة التحكم">لوحة التحكم</div>

                </a>
            </li>
            
         
          


            <li class="menu-header small">
              <span class="menu-header-text" data-i18n="الاعدادت">الاعدادت</span>
            </li>

            <li class="menu-item @if(checkRoute('Company-Profile') || checkRoute('Company-Profile.Password'))    active open @endif ">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons ti tabler-settings"></i>
                    <div data-i18n="البيانات الشخصية">البيانات الشخصية</div>
                  </a>

                    <ul class="menu-sub">
                        <li class="menu-item @if (checkRoute('Company-Profile')) active @endif">
                            <a href="{{route('Company-Profile')}}" class="menu-link">
                            <div data-i18n="الملف الشخصى">الملف الشخصى</div>
                            </a>
                        </li>
                        <li class="menu-item @if (checkRoute('Company-Profile.Password')) active @endif">
                            <a href="{{route('Company-Profile.Password')}}" class="menu-link">
                            <div data-i18n="كلمة المرور">كلمة المرور</div>
                            </a>
                        </li>
                    </ul>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <div class="menu-mobile-toggler d-xl-none rounded-1">
          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
          </a>
        </div>
        <!-- / Menu -->
