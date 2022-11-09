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
                                    {{--<a href="#">Xếp hạng--}}
                                        {{--<span class="pull-right-container">--}}
                                          {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                        {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/xep-hang/dashboard">Marketing Dashboard</a></li>--}}
                                        {{--<li><a href="/marketing/xep-hang/bang-xep-hang">Bảng xếp hạng</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="treeview">--}}
                                    {{--<a href="#">Dữ liệu--}}
                                        {{--<span class="pull-right-container">--}}
                                  {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/du-lieu/ket-noi-facebook">Kết nối Facebook</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/landipage">Kết nối Landipage</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/seeding">Kho số seeding</a></li>--}}
                                        {{--<li><a href="/marketing/du-lieu/optin-form">Optin Form</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li class="treeview">--}}
                                    {{--<a href="#">Nâng cao--}}
                                        {{--<span class="pull-right-container">--}}
                                  {{--<i class="fa fa-angle-right pull-right"></i>--}}
                                {{--</span>--}}
                                    {{--</a>--}}
                                    {{--<ul class="treeview-menu">--}}
                                        {{--<li><a href="/marketing/nang-cao/automation">Automation</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/khuyen-mai">Voucher khuyến mãi</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/landipage">Landipage</a></li>--}}
                                        {{--<li><a href="/marketing/nang-cao/nhan-tin-fanpage">Nhắn tin fanpage</a></li>--}}
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
            {{--<span>Lịch hẹn</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="/setting/quan-ly-khach-hang">--}}
            {{--<i class="fa fa-files-o"></i>--}}
            {{--<span>Quản lý khách hàng</span>--}}
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
            {{--<a href="#">Xếp hạng--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/xep-hang/dashboard">Marketing Dashboard</a></li>--}}
            {{--<li><a href="/marketing/xep-hang/bang-xep-hang">Bảng xếp hạng</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Dữ liệu--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/du-lieu/ket-noi-facebook">Kết nối Facebook</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/landipage">Kết nối Landipage</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/seeding">Kho số seeding</a></li>--}}
            {{--<li><a href="/marketing/du-lieu/optin-form">Optin Form</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Nâng cao--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/marketing/nang-cao/automation">Automation</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/khuyen-mai">Voucher khuyến mãi</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/landipage">Landipage</a></li>--}}
            {{--<li><a href="/marketing/nang-cao/nhan-tin-fanpage">Nhắn tin fanpage</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-pie-chart"></i>--}}
            {{--<span>Quản lý bán hàng</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Quản lý nhóm--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-dich-vu">Nhóm dịch vụ</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-san-pham">Nhóm sản phẩm</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nhom/nhom-tinh-cach">Nhóm tính cách</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Quản lý SP và DV--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-dich-vu">Danh sách dịch vụ</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-thu-thuat">Danh sách thủ thuật (công)</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-sp-dv/danh-sach-san-pham">Danh sách sản phẩm</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="/quan-ly-ban-hang/nha-cung-cap">Nhà cung cấp</a></li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Quản lý đơn hàng--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-don-hang/danh-sach-don-hang">Danh sách đơn hàng</a></li>--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-don-hang/da-thu-trong-ky">Đã thu trong kỳ</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="treeview">--}}
            {{--<a href="#">Quản lý nạp ví--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/quan-ly-ban-hang/quan-ly-nap-vi/da-thu-trong-ky">Đã thu trong kỳ</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-edit"></i>--}}
            {{--<span>Chăm sóc khách hàng</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/cham-soc-khach-hang/nhan-vien">CSKH nhân viên</a></li>--}}
            {{--<li><a href="/cham-soc-khach-hang/phong-ban">CSKH phòng ban</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-table"></i>--}}
            {{--<span>Thống kê</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Doanh số & Doanh thu--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/ds-dt/doanh-thu">Doanh thu</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/bd-he-thong">BĐ hệ thống</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/don-he-thong">Nguồn thu từ đơn hệ thống</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/duyet-chi">Duyệt chi</a></li>--}}
            {{--<li><a href="/thong-ke/ds-dt/ds-nhom-sp-dv">Doanh số nhóm SP&DV</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Marketing--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/marketing/bang-xep-hang">Bảng xếp hạng</a></li>--}}
            {{--<li><a href="/thong-ke/marketing/bao-cao-doanh-thu">Báo cáo doanh thu</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Telesales--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="/thong-ke/telesale/bang-xep-hang">Bảng xếp hạng</a></li>--}}
            {{--<li><a href="/thong-ke/telesale/bao-cao-doanh-thu">Báo cáo doanh thu</a></li>--}}
            {{--<li><a href="/thong-ke/telesale/bd-cv-lich-hen">BĐ C.việc & lịch hẹn</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Phòng ban khác--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li><a href="#">Xếp hạng CarePage</a></li>--}}
            {{--<li><a href="#">Báo cáo DT CarePage</a></li>--}}
            {{--<li><a href="#">Báo cáo DT Lễ tân</a></li>--}}
            {{--<li><a href="#">Báo cáo KTV</a></li>--}}
            {{--</ul>--}}
            {{--</li>--}}


            {{--<li class="treeview">--}}
            {{--<a href="#">Tin nhắn đã gửi</a>--}}
            {{--<a href="#">Quản lý tổng đài</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-envelope-open-o"></i>--}}
            {{--<span>Kho vận</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Sản phẩm kho</a>--}}
            {{--<a href="#">Lịch sử nhập, xuất kho</a>--}}
            {{--<a href="#">Báo cáo tồn</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">--}}
            {{--<i class="fa fa-map"></i>--}}
            {{--<span>Duyệt chi</span>--}}
            {{--<span class="pull-right-container">--}}
            {{--<i class="fa fa-angle-right pull-right"></i>--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<ul class="treeview-menu">--}}
            {{--<li class="treeview">--}}
            {{--<a href="#">Danh mục duyệt chi</a>--}}
            {{--<a href="#">Lý do duyệt chi</a>--}}
            {{--<a href="#">Danh sách duyệt chi</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}

        </ul>
    </section>
</aside>