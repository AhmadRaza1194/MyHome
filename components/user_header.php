
<!-- header section starts  -->
<header class="header bg-dark">
    <nav class="navbar navbar-light bg-danger">
        <a class="navbar-brand text-white p-3 float-start" href="home.php"><i class="fas fa-house px-1"></i>MyHome</a>
            <ul class=" navbar-nav float-end">
                <li class="nav-item bg-dark">
                    <a class="nav-link text-white bg-dark p-3 bt-size" href="post_property.php">post property<i class="fas fa-paper-plane px-1"></i></a>
                </li>
            </ul>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark container-md py-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        my listings <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="dashboard.php">dashboard</a>
                        <a class="dropdown-item" href="post_property.php">post property</a>
                        <a class="dropdown-item" href="my_listings.php">my listings</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        options <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="search.php">filter search</a>
                        <a class="dropdown-item" href="listings.php">all listings</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        help <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="about.php">about us</a>
                        <a class="dropdown-item" href="contact.php">contact us</a>
                        <a class="dropdown-item" href="contact.php#faq">FAQ</a>
                    </div>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav" id="menu">
            <li class="nav-item">
                <a class="nav-link text-white" href="saved.php">saved <i class="far fa-heart"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    account <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                    <a class="dropdown-item" href="login.php">login now</a>
                    <a class="dropdown-item" href="register.php">register new</a>
                    <?php if($user_id != ''){ ?>
                    <a class="dropdown-item" href="update.php">update profile</a>
                    <a class="dropdown-item" href="components/user_logout.php" onclick="return confirm('logout from this website?');">logout</a>
                    <?php } ?>
                </div>
            </li>
        </ul>
    </nav>
</header>
<!-- header section ends -->

<!-- header section ends -->