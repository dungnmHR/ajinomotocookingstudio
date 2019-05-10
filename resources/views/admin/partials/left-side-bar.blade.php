 <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> 
                    <span>
                        <img alt="image" class="img-circle" src="{{asset('assets/img/user-default.png')}}" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                    <span class="clear"> <span class="block m-t-xs"> <small class="font-bold">{{Auth::user()->email}}</small>
                    </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Thay đổi mật khẩu</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Đăng xuất</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>

                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    DNM
                </div>
            </li>
            <li class={{$flag == "dashboard" ? "active" : ""}}>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Bảng tin</span></span></a>
            </li>

            <li class={{$flag == "post_l" || $flag == "post_n" || $flag == "cat_l" || $flag == "cat_n" || 
                            $flag == "tag_l" || $flag == "  tag_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-file-powerpoint-o"></i> 
                    <span class="nav-label">Bài viết </span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li class={{$flag == "post_l" ? "active" : ""}}>
                        <a href="#">Danh sách bài viết</a>
                    </li>
                    <li class={{$flag == "post_n" ? "active" : ""}}>
                        <a href="#">Thêm bài viết mới</a>
                    </li>
                    <li class={{$flag == "cat_l" || $flag == "cat_n" ? "active" : ""}}>
                        <a href="#">Chuyên mục <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "cat_l" ? "active" : ""}}>
                                <a href="#">Danh sách</a>
                            </li>
                            <li class={{$flag == "cat_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li class={{$flag == "tag_l" || $flag == "tag_n" ? "active" : ""}}>
                        <a href="#">Thẻ <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "tag_l" ? "active" : ""}}>
                                <a href="#">Danh sách</a>
                            </li>
                            <li class={{$flag == "tag_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class={{$flag == "class_l" || $flag == "class_n" ? "active" : ""}}>
                <a href="#"><i class="fa fa-university"></i> <span class="nav-label">Lớp học</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "class_l" ? "active" : ""}}><a href="#">Danh sách lớp học</a></li>
                    <li class={{$flag == "class_n" ? "active" : ""}}><a href="#">Thêm lớp học mới</a></li>
                    <li class={{$flag == "obj_l" || $flag == "obj_n" ? "active" : ""}}>
                        <a href="#">Đối tượng học<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "obj_l" ? "active" : ""}}>
                                <a href="#">Danh sách</a>
                            </li>
                            <li class={{$flag == "obj_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li class={{$flag == "place_l" || $flag == "place_n" ? "active" : ""}}>
                        <a href="#">Địa điểm học<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "place_l" ? "active" : ""}}>
                                <a href="#">Danh sách</a>
                            </li>
                            <li class={{$flag == "place_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class={{$flag == "mem_l" || $flag == "mem_n" || $flag == "down" || $flag == "reg_l" || $flag == "reg_n"  ? "active" : ""}}>
                <a href="#"><i class="fa fa-slideshare"></i> 
                    <span class="nav-label">Học viên</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "mem_l" ? "active" : ""}}><a href="#">Danh sách học viên</a></li>
                    <li class={{$flag == "mem_n" ? "active" : ""}}><a href="#">Thêm học viên mới</a></li>
                    <li class={{$flag == "reg_l" || $flag == "reg_n" ? "active" : ""}}>
                        <a href="#">Đơn đăng kí <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "reg_l" ? "active" : ""}}>
                                <a href="#">Tất cả đơn đăng kí</a>
                            </li>
                            <li class={{$flag == "reg_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li class={{$flag == "down" ? "active" : ""}}><a href="#">Xuất danh sách học viên</a></li>
                </ul>
            </li>

            <li class={{$flag == "al_l" || $flag == "al_l" || $flag == "cat_al_n" || $flag == "cat_al_l" ? "active" : ""}}>
                <a href="#"><i class="fa fa-picture-o"></i> 
                    <span class="nav-label">Album</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "al_l" ? "active" : ""}}><a href="#">Tất cả Album</a></li>
                    <li class={{$flag == "al_n" ? "active" : ""}}><a href="#">Thêm album mới</a></li>
                    <li class={{$flag == "cat_al_l" || $flag == "cat_al_n" ? "active" : ""}}>
                        <a href="#">Chuyên mục album <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li class={{$flag == "cat_al_l" ? "active" : ""}}>
                                <a href="#">Danh sách</a>
                            </li>
                            <li class={{$flag == "cat_al_n" ? "active" : ""}}>
                                <a href="#">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class={{$flag == "comment" ? "active" : ""}}>
                <a href="#"><i class="fa fa-comments-o"></i> <span class="nav-label">Bình luận</span></span></a>
            </li>

            <li class={{$flag == "lien_ket" || $flag == "banner" || $flag == "logo" 
                        || $flag == "page" || $flag == "info" ? "active" : ""}}>
                <a href="#"><i class="fa fa-gears"></i> 
                    <span class="nav-label">Quản lý giao diện</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li class={{$flag == "lien_ket" ? "active" : ""}}><a href="{{route('danh-sach-lien-ket')}}">Trang liên kết</a></li>
                    <li class={{$flag == "banner" ? "active" : ""}}><a href="#">Banner</a></li>
                    <li class={{$flag == "logo" ? "active" : ""}}><a href="#">Logo</a></li>
                    <li class={{$flag == "page" ? "active" : ""}}><a href="#">Trang</a></li>
                    <li class={{$flag == "page" ? "active" : ""}}><a href="#">Thông tin website</a></li>                          
                </ul>
            </li>
            <li class={{$flag == "gallery" ? "active" : ""}}>
                <a href="{{route('gallery')}}"><i class="fa fa-qrcode"></i> <span class="nav-label">Quản lý File</span>  </a>
            </li>

            <li class="landing_link">
                <a target="_blank" href=""><i class="fa fa-star"></i> <span class="nav-label">Website</span>
            </li>
        </ul>
    </div>
</nav>