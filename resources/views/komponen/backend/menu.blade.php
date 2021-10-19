<!-- begin:: Aside Menu -->
<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
  <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
    <ul class="kt-menu__nav ">
      @if (Sentinel::getUser()->hasAccess(['home.dashboard']))
      <li class="kt-menu__item " aria-haspopup="true">
        <a href="{{url('dashboard')}}" class="kt-menu__link ">
          <span class="kt-menu__link-icon">
            <i class="fa fa-layer-group"></i>
          </span>
          <span class="kt-menu__link-text">@lang('global.app_dashboard')</span>
        </a>
      </li>
      @endif
      @if(Sentinel::getUser()->hasAnyAccess(['satbar.index','barang.index','sumber.index']))
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
          <span class="kt-menu__link-icon">
            <i class="fa fa-briefcase"></i>
          </span>
          <span class="kt-menu__link-text">@lang('menu.m_master')</span>
          <i class="kt-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="kt-menu__submenu ">
          <span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
              <span class="kt-menu__link">
                <span class="kt-menu__link-text">@lang('menu.m_master')</span>
              </span>
            </li>
            @if(Sentinel::getUser()->hasAccess(['barang.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('barang.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.u_barang')</span>
                </a>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['satbar.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('satbar.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i><span class="kt-menu__link-text">@lang('menu.u_satbar')</span>
                </a>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['sumber.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('sumber.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.u_source')</span>
                </a>
              </li>
            @endif
          </ul>
        </div>
      </li>
      @endif

      @if(Sentinel::getUser()->hasAnyAccess(['inreq.index','inventoris.index']))
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
          <span class="kt-menu__link-icon">
            <i class="fas fa-boxes"></i>
          </span>
          <span class="kt-menu__link-text">@lang('menu.m_inventory')</span>
          <i class="kt-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="kt-menu__submenu ">
          <span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
              <span class="kt-menu__link">
                <span class="kt-menu__link-text">@lang('menu.m_inventory')</span>
              </span>
            </li>
            @if(Sentinel::getUser()->hasAnyAccess(['inreq.index']) && Sentinel::getUser()->hasAnyAccess(['inreq.self-data']))
            <li class="kt-menu__item " aria-haspopup="true">
              <a href="{{route('inreq.index')}}" class="kt-menu__link ">
                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="kt-menu__link-text">@lang('menu.u_inreq')</span>
              </a>
            </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['inreq.index']) && Sentinel::getUser()->hasAnyAccess(['inreq.all-data']))
              <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.u_inreq')</span>
                  <i class="kt-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="kt-menu__submenu ">
                  <span class="kt-menu__arrow"></span>
                  <ul class="kt-menu__subnav">
                    <li class="kt-menu__item " aria-haspopup="true">
                      <a href="{{route('inreq.index')}}?status=proses" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                          <span></span>
                        </i>
                        <span class="kt-menu__link-text">@lang('menu.n_proses')</span>
                      </a>
                    </li>
                    <li class="kt-menu__item " aria-haspopup="true">
                      <a href="{{route('inreq.index')}}?status=terima" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                          <span></span>
                        </i>
                        <span class="kt-menu__link-text">@lang('menu.n_diterima')</span>
                      </a>
                    </li>
                    <li class="kt-menu__item " aria-haspopup="true">
                      <a href="{{route('inreq.index')}}?status=tolak" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                          <span></span>
                        </i>
                        <span class="kt-menu__link-text">@lang('menu.n_ditolak')</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['inventoris.index']) && Sentinel::getUser()->hasAnyAccess(['inventoris.self-data']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('inventoris.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.u_inventory')</span>
                </a>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['inventoris.index']) && Sentinel::getUser()->hasAnyAccess(['inventoris.all-data']))
              <li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.u_inventory')</span>
                  <i class="kt-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="kt-menu__submenu ">
                  <span class="kt-menu__arrow"></span>
                  <ul class="kt-menu__subnav">
                    <li class="kt-menu__item " aria-haspopup="true">
                      <a href="{{route('inventoris.index')}}?status=available" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                          <span></span>
                        </i>
                        <span class="kt-menu__link-text">@lang('menu.n_available')</span>
                      </a>
                    </li>
                    <li class="kt-menu__item " aria-haspopup="true">
                      <a href="{{route('inventoris.index')}}?status=not-available" class="kt-menu__link ">
                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line">
                          <span></span>
                        </i>
                        <span class="kt-menu__link-text">@lang('menu.n_not_available')</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            @endif
          </ul>
        </div>
      </li>
      @endif
      @if(Sentinel::getUser()->hasAnyAccess(['laporan.mingguan']))
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
          <span class="kt-menu__link-icon">
            <i class="fa fa-print"></i>
          </span>
          <span class="kt-menu__link-text">Laporan</span>
          <i class="kt-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="kt-menu__submenu ">
          <span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
              <span class="kt-menu__link">
                <span class="kt-menu__link-text">Laporan</span>
              </span>
            </li>
            @if(Sentinel::getUser()->hasAnyAccess(['laporan.mingguan']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('laporan.filter')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">Laporan Mingguan</span>
                </a>
              </li>
            @endif
          </ul>
        </div>
      </li>
      @endif
      @if(Sentinel::getUser()->hasAnyAccess(['roles.index','users.index','log-viewer::logs.dashboard','log-viewer::logs.list']))
      <li class="kt-menu__section ">
        <h4 class="kt-menu__section-text">@lang('global.app_system')</h4>
        <i class="kt-menu__section-icon flaticon-more-v2"></i>
      </li>
      @endif
      @if(Sentinel::getUser()->hasAnyAccess(['roles.index','users.index','satker.index']))
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
          <span class="kt-menu__link-icon">
            <i class="fa fa-user-alt"></i>
          </span>
          <span class="kt-menu__link-text">@lang('menu.m_user')</span>
          <i class="kt-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="kt-menu__submenu ">
          <span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
              <span class="kt-menu__link">
                <span class="kt-menu__link-text">@lang('menu.m_user')</span>
              </span>
            </li>
            @if(Sentinel::getUser()->hasAnyAccess(['roles.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('roles.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i><span class="kt-menu__link-text">@lang('menu.u_role')</span>
                </a>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['satker.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('satker.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i><span class="kt-menu__link-text">@lang('menu.u_satker')</span>
                </a>
              </li>
            @endif
            @if(Sentinel::getUser()->hasAnyAccess(['users.index']))
              <li class="kt-menu__item " aria-haspopup="true">
                <a href="{{route('users.index')}}" class="kt-menu__link ">
                  <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                    <span></span>
                  </i>
                  <span class="kt-menu__link-text">@lang('menu.m_user')</span>
                </a>
              </li>
            @endif
          </ul>
        </div>
      </li>
      @endif
      @if(Sentinel::getUser()->hasAnyAccess(['log-viewer::logs.dashboard','log-viewer::logs.list']))
      <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
          <span class="kt-menu__link-icon">
            <i class="fa fa-book-dead"></i>
          </span>
          <span class="kt-menu__link-text">@lang('menu.m_log')</span>
          <i class="kt-menu__ver-arrow la la-angle-right"></i>
        </a>
        <div class="kt-menu__submenu ">
          <span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true">
              <span class="kt-menu__link">
                <span class="kt-menu__link-text">@lang('menu.m_log')</span>
              </span>
            </li>
            <li class="kt-menu__item " aria-haspopup="true">
              <a href="{{route('log-viewer::logs.dashboard')}}" class="kt-menu__link ">
                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                  <span></span>
                </i>
                <span class="kt-menu__link-text">@lang('global.app_dashboard')</span>
              </a>
            </li>
            <li class="kt-menu__item " aria-haspopup="true">
              <a href="{{route('log-viewer::logs.list')}}" class="kt-menu__link ">
                <i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
                  <span></span>
                </i><span class="kt-menu__link-text">@lang('global.app_list')</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif
    </ul>
  </div>
</div>
<!-- end:: Aside Menu -->
