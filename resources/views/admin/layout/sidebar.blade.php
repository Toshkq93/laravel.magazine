<!-- Brand Logo -->
<a href="{{ route('home') }}" class="brand-link" target="_blank">
    <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Горячие предложения
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('hotdeals.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все предложения</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('hotdeals.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Добавить предложение</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Продукты
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('products.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все продукты</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Добавить продукт</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Модификации
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('modifications.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все модификации</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('modifications.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Добавить модификацию</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Категории
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все категории</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Добавить категорию</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Валюты
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('currencies.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все валюты</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('currencies.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Добавить валюту</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

