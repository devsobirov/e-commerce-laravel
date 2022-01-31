<div class="sidebar-header">
    <div class="d-flex justify-content-between">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
        </div>
        <div class="toggler">
            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
    </div>
</div>
<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item active ">
            <a href="{{ route('admin.home') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Бош сахифа</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="index.html" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Oddiy link</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="{{ route('admin.category.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>kategoriyalar</span>
            </a>
        </li>
        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Sub-menuli link</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="component-alert.html">Sub menu1</a>
                </li>
                <li class="submenu-item ">
                    <a href="component-badge.html">Sub menu2</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
