
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <ul class="nav side-menu">
      <li><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
      <li><a><i class="fa fa-edit"></i> Blog <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('blogs.index')}}">All Blog</a></li>
          <li><a href="{{route('blogs.create')}}">Add Blog</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->