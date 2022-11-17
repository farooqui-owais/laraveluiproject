<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light mt-5 sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('first')}}">
              <span data-feather="home"></span>
              Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('profile')}}">
              <span data-feather="file"></span>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('account')}}">
              <span data-feather="bar-chart-2"></span>
              Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Loans
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Notifications
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('transactions')}}">
              <span data-feather="layers"></span>
              Transactions
            </a>
          </li>
        </ul>        
      </div>
    </nav>