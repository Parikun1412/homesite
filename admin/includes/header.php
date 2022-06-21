    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
          <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
            <i class="bi bi-search"></i>
          </div>
          <input class="form-control" type="text" placeholder="Search for anything">
          <div class="position-absolute top-50 translate-middle-y search-close-icon">
            <i class="bi bi-x-lg"></i>
          </div>
        </form>
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item mobile-search-button">
              <a class="nav-link" href="javascript:;">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                <div class="">
                  <i class="bi bi-gear"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="position-relative">
                  <span class="notify-badge">8</span>
                  <i class="bi bi-bell"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="javascript:;">
                  <div class="msg-header">
                    <p class="msg-header-title">Notifications</p>
                    <p class="msg-header-clear ms-auto">Marks all as read</p>
                  </div>
                </a>
                <div class="header-notifications-list">
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="notify">
                        <i class="bi bi-basket2"></i>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                            ago</span></h6>
                        <p class="msg-info">You have recived new orders</p>
                      </div>
                    </div>
                  </a>
                </div>
                <a href="javascript:;">
                  <div class="text-center msg-footer">View All Notifications</div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="user-setting">
                  <img src="https://via.placeholder.com/110X110/212529/fff" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex flex-row align-items-center gap-2">
                      <img src="https://via.placeholder.com/110X110/212529/fff" alt="" class="rounded-circle" width="54" height="54">
                      <div class="">
                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="log-out-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </nav>
    </header>
    <!--end top header-->