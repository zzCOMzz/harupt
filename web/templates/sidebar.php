<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="?">
      <i class="fas fa-fw fa-home"></i>
      <span>Home</span>
    </a>
  </li>
  <?php if ($_SESSION['login']['level'] == 1): ?>
    <li class="nav-item">
      <a class="nav-link" href="?page=users">
        <i class="fas fa-fw fa-users"></i>
        <span>Master User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?page=input-peralatan">
        <i class="fas fa-fw fa-edit"></i>
        <span>Input Peralatan</span>
      </a>
    </li>
  <?php endif; ?>
  <li class="nav-item">
    <a class="nav-link" href="?page=data-peralatan">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Peralatan</span>
    </a>
  </li>
</ul>
