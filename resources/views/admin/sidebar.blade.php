<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
          <a href="{{ route('admin.dashboard') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
                  class="logo-name">Otika</span>
          </a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Main</li>
          <li class="dropdown">
              <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.news.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Yangiliklar</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.directors.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Rahbariyat</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.teachers.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Ustozlar</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.categories.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Categories</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.lessons.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Qo'shimcha darslar</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.sports.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Sport to'garaklar</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.tasks.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Maktab Vazifalari</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.resources.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Foydali Resurslar</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.requisites.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Rekvizitlar</span></a>
          </li>
             <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="monitor"></i><span>Dars Jadvali</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('admin.oneshifts.index') }}">1-Smena</a></li>
            <li><a class="nav-link" href="{{ route('admin.twoshifts.index') }}">2-Smena</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.announcements.index') }}" class="nav-link"><i data-feather="monitor"></i><span>E'lonlar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.faqs.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Tez-tez so'raladigan savollar</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.sliders.index') }}" class="nav-link"><i data-feather="monitor"></i><span>O'quvchilar soni</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.connections.index') }}" class="nav-link"><i data-feather="monitor"></i><span> Bog'lanish</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.galleries.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Maktab galereyasi</span></a>
        </li>
      </ul>
  </aside> 
</div>
