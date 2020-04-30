<!-- Main Sidebar Container -->
<div>  
  <aside class="main-sidebar sidebar-dark-primary toggled">
    <a href="dashboard.php" class="brand-link">
      <span class="brand-text font-weight-light">আল-মাদিনা</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="" class="d-block"> স্বাগতম, রসেল মাহমুদ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
          <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="category.php" class="nav-link">
                  <i class="nav-icon fa fa-list-alt"></i>
                  <p> ক্যাটাগরি
                    <span class="right badge badge-danger">নতুন</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="nav-icon fa fa-cart-plus"></i>
                  <p> প্রোডাক্ট যুক্ত করুন
                    <span class="right badge badge-info">নতুন</span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('product.index')}}" class="nav-link">
                  <i class="nav-icon fa fa-list"></i>
                  <p>প্রোডাক্ট সমূহ
                    <span class="right badge badge-info">নতুন</span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{}}" class="nav-link">
                  <i class="nav-icon fa fa-registered"></i>
                  <p> রেজিস্টার
                    <span class="right badge badge-danger">নতুন</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">
                  <i class="nav-icon fa fa-fire"></i>
                  <p>ড্যাশবোর্ড
                    <span class="right badge badge-info">নতুন</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">
                  <i class="nav-icon fa fa-rocket" aria-hidden="true"></i>
                  <p>যোগাযোগ করুন
                    <span class="right badge badge-info">নতুন</span>
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

</div>