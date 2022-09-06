<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">
                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <span class="font-size-h6">Jinka University</span>
            @auth
            <div class="topbar-item">
                <form method="POST" action="{{ route('sessions.destroy') }}">@csrf<button type="submit" class="btn btn-link">Logout</button> </form>
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <a  href="{{ route('user.profile') }}"><span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ auth()->user()->name }}</span></a>
                    <form method="POST" name="profile_form" action="{{ route('user.profile') }}">@csrf</form>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">{{ auth()->user()->name[0] }}</span>
                    </span>


                </div>
                 <p>{{ auth()->user()->office?->name}}</p>
            </div>
            @endauth
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
