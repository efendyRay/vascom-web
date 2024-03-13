<div class="aside-menu flex-column-fluid">
    <!--begin::Aside Menu-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
        <!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion {{ request()->is('dashboard') ? 'sidebar-active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2" style="color: {{ request()->is('dashboard') ? 'white' : 'black' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M13 19H19V9.97815L12 4.53371L5 9.97815V19H11V13H13V19ZM21 20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V9.48907C3 9.18048 3.14247 8.88917 3.38606 8.69972L11.3861 2.47749C11.7472 2.19663 12.2528 2.19663 12.6139 2.47749L20.6139 8.69972C20.8575 8.88917 21 9.18048 21 9.48907V20Z"></path></svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="color: {{ request()->is('dashboard') ? 'white' : 'black' }}">Dashboard</span>
                    </span>
                </a>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion mt-2 {{ request()->is('users/list') ? 'sidebar-active' : '' }}">
                <a href="{{ route('users.list') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2" style="color: {{ request()->is('users/list') ? 'white' : 'black' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="color: {{ request()->is('users/list') ? 'white' : 'black' }}">Manajemen User</span>
                    </span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion mt-2 {{ request()->is('products/list') ? 'sidebar-active' : '' }}">
                <a href="{{ route('products.list') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2" style="color: {{ request()->is('products/list') ? 'white' : 'black' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM11 5H4V19H11V5ZM13 5V19H20V5H13ZM14 7H19V9H14V7ZM14 10H19V12H14V10Z"></path></svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title" style="color: {{ request()->is('products/list') ? 'white' : 'black' }}">Manajemen Product</span>
                    </span>
                </a>
            </div>

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside Menu-->
</div>