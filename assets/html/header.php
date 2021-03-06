<header>
    <nav class="navbar navbar-expand-lg main-header">
        <div class="container-fluid">
            <a class="logo-btn" data-text="Awesome" href="">
                <span class="actual-text">&nbsp;Employees Management&nbsp;</span>
                <span class="hover-text" aria-hidden="true">&nbsp;Employees Management &nbsp;</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="link" href="<?=BASE_URL?>dashboard">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="link" href="<?=BASE_URL?>dashboard/employees">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Employees
                        </a>
                    </li>
                </ul>
                <button class="logout-btn" onclick="window.location.href='<?=BASE_URL?>/login/logout'">
                    <div class="default-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
                        </svg>
                        <span>
                            <?=isset($_SESSION['username']) ? $_SESSION['username'] : "" ; ?>
                        </span>
                    </div>
                    <div class="hover-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M16 9v-4l8 7-8 7v-4h-8v-6h8zm-2 10v-.083c-1.178.685-2.542 1.083-4 1.083-4.411 0-8-3.589-8-8s3.589-8 8-8c1.458 0 2.822.398 4 1.083v-2.245c-1.226-.536-2.577-.838-4-.838-5.522 0-10 4.477-10 10s4.478 10 10 10c1.423 0 2.774-.302 4-.838v-2.162z" />
                        </svg>
                        <span>Log Out</span>
                    </div>
                </button>
            </div>
        </div>
    </nav>
    </div>

    <section class="animated-background">
        <div id="stars1"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

</header>