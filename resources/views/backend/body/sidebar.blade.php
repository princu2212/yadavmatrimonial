<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('/dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-code-view"></i>
                        <span>Slide</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('slide') }}"><i class="ri-user-add-line"></i>Add Slide</a></li>
                        <li><a href="{{ route('slide.show') }}"><i class="ri-eye-line"></i>View Slide</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-heart-line"></i>
                        <span>Matrimonial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('matrimonial.create') }}"><i class="ri-user-add-line"></i>Add Groom |
                                Bride</a></li>
                        <li><a href="{{ route('matrimonial.show') }}"><i class="ri-eye-line"></i>View Groom |
                                Bride</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-heart-line"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog.create') }}"><i class="ri-user-add-line"></i>Add Blog</a></li>
                        <li><a href="{{ route('blog.show') }}"><i class="ri-eye-line"></i>View Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-information-line"></i>
                        <span>About</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="ri-information-line"></i>About</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-team-line"></i>
                        <span>Member</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="ri-user-add-line"></i>Add Member</a></li>
                        <li><a href="#"><i class="ri-eye-line"></i>View Members</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>
                <li><a href="{{ route('contact.create') }}"><i class="ri-mail-line"></i>Contact Message</a></li>
                <li><a href="{{ route('footer.create') }}"><i class="ri-layout-bottom-line"></i>Footer</a></li>

                <li class="menu-title">Role and Permission</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-admin-line"></i>
                        <span>Admin</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#"><i class="ri-user-add-line"></i>Add Admin</a></li>
                        <li><a href="#"><i class="ri-eye-line"></i>View Admins</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
