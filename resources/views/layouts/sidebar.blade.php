@php $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; @endphp
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            @if(\Illuminate\Support\Facades\Auth::user())
            <li>
                <a href="/menu">
                    <i class="fa fa-bars"></i>
                    <span>Setting Menu</span>
                </a>
            </li>
            @endif


            @if(isset($menu))
                @forelse($menu as $item)
                    <li class="{{isset($item->children)? 'treeview' : ''}}">
                        <a href="/{{$item->slug}}">
                            <i class="fa fa-bars"></i> <span>{{$item->name}}</span>
                            @if(isset($item->children))
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            @endif
                        </a>
                        @if(isset($item->children))
                            <ul class="treeview-menu">
                                @forelse($item->children as $item1)
                                <li class="{{isset($item1->children) ? 'treeview' : ''}}">
                                    <a href="/{{$item1->slug}}">{{$item1->name}}
                                        @if(isset($item1->children))
                                        <span class="pull-right-container">
                                          <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                        @endif
                                    </a>
                                    @if(isset($item1->children))
                                    <ul class="treeview-menu">
                                        @forelse($item1->children as $item2)
                                        <li><a href="/{{$item2->slug}}">{{$item2->name}}</a></li>
                                        @empty
                                        @endforelse
                                    </ul>
                                    @endif
                                </li>
                                @empty
                                @endforelse


                                {{--<li><a href="/marketing/fanpage">Fanpage</a></li>--}}
                                {{--<li><a href="/marketing/fanpage-post">Fanpage Post</a></li>--}}
                                {{--<li class="treeview">--}}
                                    {{--<a href="#">X???p h???ng--}}
                                        {{--<span class="pull-right-container">--}}
                                          {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                        {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/xep-hang/dashboard">Marketing Dashboard</a></li>--}}
                                        {{--<li><a href="/marketing/xep-hang/bang-xep-hang">B???ng x???p h???ng</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="treeview">--}}
                                    {{--<a href="#">D??? li???u--}}
                                        {{--<span class="pull-right-container">--}}
                                  {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/du-lieu/ket-noi-facebook">K???t n???i Facebook</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/landipage">K???t n???i Landipage</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/seeding">Kho s??? seeding</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/optin-form">Optin Form</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="treeview">--}}
                                    {{--<a href="#">N??ng cao--}}
                                        {{--<span class="pull-right-container">--}}
                                  {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/nang-cao/automation">Automation</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/khuyen-mai">Voucher khuy???n m??i</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/landipage">Landipage</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/nhan-tin-fanpage">Nh???n tin fanpage</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            </ul>
                        @endif
                    </li>
                @empty
                @endforelse
            @endif





            {{--<li class="active">--}}
            {{--<a href="/setting/lich-hen">--}}
            {{--<i class="fa fa-bars"></i>--}}
            {{--<span>L???ch h???n</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="/setting/quan-ly-khach-hang">--}}
            {{--<i class="fa fa-files-o"></i>--}}
            {{--<span>Qu???n l?? kh??ch h??ng</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-square-o"></i> <span>Marketing</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/fanpage">Fanpage</a></li>--}}
            {{--<li><a href="/marketing/fanpage-post">Fanpage Post</a></li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">X???p h???ng--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/xep-hang/dashboard">Marketing Dashboard</a></li>--}}
            {{--<li><a href="/marketing/xep-hang/bang-xep-hang">B???ng x???p h???ng</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">D??? li???u--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/du-lieu/ket-noi-facebook">K???t n???i Facebook</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/landipage">K???t n???i Landipage</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/seeding">Kho s??? seeding</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/optin-form">Optin Form</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">N??ng cao--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/nang-cao/automation">Automation</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/khuyen-mai">Voucher khuy???n m??i</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/landipage">Landipage</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/nhan-tin-fanpage">Nh???n tin fanpage</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>Qu???n l?? b??n h??ng</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Qu???n l?? nh??m--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-dich-vu">Nh??m d???ch v???</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-san-pham">Nh??m s???n ph???m</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-tinh-cach">Nh??m t??nh c??ch</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Qu???n l?? SP v?? DV--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-dich-vu">Danh s??ch d???ch v???</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-thu-thuat">Danh s??ch th??? thu???t (c??ng)</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-san-pham">Danh s??ch s???n ph???m</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="/quan-ly-ban-hang/nha-cung-cap">Nh?? cung c???p</a></li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Qu???n l?? ????n h??ng--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-don-hang/danh-sach-don-hang">Danh s??ch ????n h??ng</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-don-hang/da-thu-trong-ky">???? thu trong k???</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="treeview">--}}
            {{--<a href="#">Qu???n l?? n???p v??--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nap-vi/da-thu-trong-ky">???? thu trong k???</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-edit"></i>--}}
            {{--<span>Ch??m s??c kh??ch h??ng</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/cham-soc-khach-hang/nhan-vien">CSKH nh??n vi??n</a></li>--}}
            {{--<li><a href="/cham-soc-khach-hang/phong-ban">CSKH ph??ng ban</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-table"></i>--}}
            {{--<span>Th???ng k??</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Doanh s??? & Doanh thu--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/ds-dt/doanh-thu">Doanh thu</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/bd-he-thong">B?? h??? th???ng</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/don-he-thong">Ngu???n thu t??? ????n h??? th???ng</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/duyet-chi">Duy???t chi</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/ds-nhom-sp-dv">Doanh s??? nh??m SP&DV</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Marketing--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/marketing/bang-xep-hang">B???ng x???p h???ng</a></li>--}}
            {{--<li><a href="/thong-ke/marketing/bao-cao-doanh-thu">B??o c??o doanh thu</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Telesales--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/telesale/bang-xep-hang">B???ng x???p h???ng</a></li>--}}
            {{--<li><a href="/thong-ke/telesale/bao-cao-doanh-thu">B??o c??o doanh thu</a></li>--}}
            {{--<li><a href="/thong-ke/telesale/bd-cv-lich-hen">B?? C.vi???c & l???ch h???n</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Ph??ng ban kh??c--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">X???p h???ng CarePage</a></li>--}}
            {{--<li><a href="#">B??o c??o DT CarePage</a></li>--}}
            {{--<li><a href="#">B??o c??o DT L??? t??n</a></li>--}}
            {{--<li><a href="#">B??o c??o KTV</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}


            {{--<li class="treeview">--}}
            {{--<a href="#">Tin nh???n ???? g???i</a>--}}
            {{--<a href="#">Qu???n l?? t???ng ????i</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-envelope-open-o"></i>--}}
            {{--<span>Kho v???n</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">S???n ph???m kho</a>--}}
            {{--<a href="#">L???ch s??? nh???p, xu???t kho</a>--}}
            {{--<a href="#">B??o c??o t???n</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-map"></i>--}}
            {{--<span>Duy???t chi</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Danh m???c duy???t chi</a>--}}
            {{--<a href="#">L?? do duy???t chi</a>--}}
            {{--<a href="#">Danh s??ch duy???t chi</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}

        </ul>
    </section>
</aside>