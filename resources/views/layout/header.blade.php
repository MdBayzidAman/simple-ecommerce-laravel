<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="./asset/image/logo/logo.png"
      type="image/x-icon"
    />
    <title>Foodie</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="overlay"></div>
    <!-- HEADER  -->
    <header>
      <div class="header-top">
        <div class="container flexbox">
          <ul class="header-social-container">
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </li>

          </ul>
          <div class="header-alert-notification">
            <p>
              <b>Get 20% off</b> on your first order!
            </p>
          </div>
          <div class="header-top-actions">
            <select name="currency" id="">
              <option value="usd" selected>USD $</option>
              <option value="eur" >EUR €</option>
              <option value="bdt" >BDT ৳</option>
            </select>
            <select name="language" id="">
              <option value="English" selected >English</option>
              <option value="Bangla" >Bangla</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Header logo and search section  -->
      <div class="header-main">
        <div class="container flexbox flex-col">
          <a href="" class="header-logo">
            <img src="./asset/image/logo/logo.png" alt="logo" width="100" >
          </a>
          <!-- header search -->
          <div class="header-search">
            <input type="search" class="search-field" name="search" placeholder="Enter food or restaurant name">
            <button class="search-btn"><i class="fa fa-search"></i></button>
          </div>
          <div class="header-actions">
            <button class="action-btn">
              <i class="fa-regular fa-user"></i>
            </button>
            <button class="action-btn">
              <i class="fa-regular fa-heart"></i>
              <span class="count">0</span>
            </button>
            <button class="action-btn">
              <i class="fa-solid fa-bag-shopping"></i>
              <span class="count">0</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Desktop Navbar menu  -->
      <nav class="desktop-nav-menu">
        <div class="container">
          <ul class="desktop-navbar-list">
            <li class="menu-category">
              <a href="#" class="menu-title">HOME</a>
            </li>
            <li class="menu-category">
              <a href="#" class="menu-title">HOT OFFERS</a>
              <div class="dropdown-panel">
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Fast food</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Hamburger</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">French fries</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Chicken nuggets</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Pizza</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./asset/image/product/ff-5.jpg" alt="" width="250" height="120">
                    </a>
                  </li>
                </ul>
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">healthy food</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Salad</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Vegetable soup</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Fruit smoothie </a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Hummus wrap</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./asset/image/product/ff-5.jpg" alt="" width="250" height="120">
                    </a>
                  </li>
                </ul>
                <ul class="dropdown-panel-list">
                  <li class="menu-title">
                    <a href="#">Kebab</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Shish kebab</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Doner kebab </a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Tandoori kebab</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">Seekh kebab</a>
                  </li>
                  <li class="panel-list-item">
                    <a href="#">
                      <img src="./asset/image/product/ff-5.jpg" alt="" width="250" height="120">
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="menu-category">
              <a href="#" class="menu-title">POPULAR ITEMS</a>
                <ul class="dropdown-list">
                  <li class="dropdown-item">
                    <a href="#">Fast food</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Biryani</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Healthy foods</a>
                  </li>
                  <li class="dropdown-item">
                    <a href="#">Kebab</a>
                  </li>
                </ul>
              
            </li>
            <li class="menu-category">
              <a href="#" class="menu-title">DISCOUNTS</a>
            </li>
            <li class="menu-category">
              <a href="#" class="menu-title">BLOG</a>
            </li>


          </ul>
        </div>
      </nav>
      <!-- Mobile bottom navbar  -->
      <div class="mobile-bottom-nav">
        <button class="action-btn mobileMenuOpenBtn">
          <i class="fa-solid fa-bars"></i>
        </button>
        <button class="action-btn">
          <i class="fa-regular fa-heart"></i>
          <span class="count">0</span>
        </button>
        <button class="action-btn">
          <i class="fa-solid fa-bag-shopping"></i>
          <span class="count">0</span>
        </button>
        <button class="action-btn mobileMenuOpenBtn">
          <i class="fa-regular fa-user"></i>
        </button>          
        <button class="action-btn CategorySidebarOpenBtn">
          <i class="fa-solid fa-grip"></i>
        </button>          
      </div>
      <!-- Mobile side menu  -->
      <nav class="mobile-nav-menu has-scrollbar">
        <div class="menu-top">
          <h2 class="menu-title">Menu</h2>
          <button class="menu-close-btn">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <ul class="mobile-menu-category-list">
          <li class="menu-category">
            <a class="menu-title" href="#">Home</a>
          </li>
          <li class="menu-category">
            <button class="accordion-menu accordionBtn">
              <p class="menu-title">Category</p>
              <div>
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-minus"></i>
              </div>
            </button>
            <ul class="submenu-category-list accordionCategoryList">
              <li class="submenu-category">
                <a href="#" class="submenu-title">Fast food</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Biryani food</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Healthy food</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Kebab</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <button class="accordion-menu accordionBtn">
              <p class="menu-title">Hot Offers</p>
              <div>
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-minus"></i>
              </div>
            </button>
            <ul class="submenu-category-list accordionCategoryList">
              <li class="submenu-category">
                <a href="#" class="submenu-title">Hamburger</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Biryani</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">French fries</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Pizza</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <button class="accordion-menu accordionBtn">
              <p class="menu-title">New Items</p>
              <div>
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-minus"></i>
              </div>
            </button>
            <ul class="submenu-category-list accordionCategoryList ">
              <li class="submenu-category">
                <a href="#" class="submenu-title">Chicken nuggets</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Salad</a>
              </li>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Hummus wrap</a>
              </li>
            </ul>
          </li>
          <li class="menu-category">
            <a class="menu-title" href="#">Discounts</a>
          </li>
          <li class="menu-category">
            <a class="menu-title" href="#">Blog</a>
          </li>
        </ul>
        <div class="menu-bottom">
          <ul class="menu-category-list">
            <li class="menu-category">
              <button class="accordion-menu accordionBtn">
                <p class="menu-title">Language</p>
                <i class="fa-solid fa-caret-left caret"></i>
              </button>
              <ul class="submenu-category-list accordionCategoryList active">
                <li class="submenu-category">
                  <a href="#" class="submenu-title">English</a>
                </li>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">Bangla</a>
                </li>
              </ul>
            </li>
            <li class="menu-category">
              <button class="accordion-menu accordionBtn">
                <p class="menu-title">currency</p>
                <i class="fa-solid fa-caret-left caret"></i>
              </button>
              <ul class="submenu-category-list accordionCategoryList">
                <li class="submenu-category">
                  <a href="#" class="submenu-title">USD $</a>
                </li>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">EUR </a>
                </li>
                <li class="submenu-category">
                  <a href="#" class="submenu-title">BDT ৳</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="menu-social-links">
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <i class="fa-brands fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    