
<nav class="navbar navbar-expand-lg bg-primary text-uppercase fixed-top">        
    <form class="form-header" action="" method="POST">
        <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
        <button class="au-btn--submit" type="submit">
            <i class="zmdi zmdi-search"></i>
        </button>
    </form>
    <div class="header-button" style="float:right">
        <div class="noti-wrap">
            <div class="noti__item js-item-menu">
                <i class="zmdi zmdi-notifications"></i>
                <span class="quantity">3</span>
                <div class="notifi-dropdown js-dropdown">
                    <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                           <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                            <p>You got a email notification</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                            <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                            <p>Your account has been blocked</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                            <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                            <p>You got a new file</p>
                            <span class="date">April 12, 2018 06:50</span>
                        </div>
                    </div>
                    <div class="notifi__footer">
                        <a href="#">All notifications</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="account-wrap" style="margin-left:600px">
            <div class="account-item clearfix js-item-menu">
                <div class="image">
                    <img src="{{asset('backend/assets/themes/images/icon/avatar-user-profile-male-logo.jpg')}}" alt="John Doe" />
                </div>
                <div class="content">
                    <a class="js-acc-btn" href="#"></a>
                    
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('backend/assets/themes/images/icon/avatar-user-profile-male-logo.jpg')}}" alt="logo" />
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                            <a href="#"></a>
                            </h5>
                            <span class="email"></span>
                        </div>
                    </div>
                    <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-money-box"></i>Reach us</a>
                        </div>
                        <div class="account-dropdown__item">
                            <a href="#">
                                <i class="zmdi zmdi-money-box"></i>Raise Query</a>
                        </div>
                    </div>
                    <div class="account-dropdown__footer">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i>  {{ __('Logout') }}
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>