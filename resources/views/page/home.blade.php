@extends('layout.main')

@section('main')
    <!-- MAIN SECTION  -->
    <main>
  
      <!-- BANNER  -->
      <div class="banner">
        <div class="container">
          <div class="slide-container has-scrollbar flexbox">
            <div class="slide-item">
              <img src="./asset/image/product/banner-5.jpg" alt="Kebab offers" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Popular Now</p>
                <h2 class="banner-title">Special chicken Kebab! </h2>
                <p class="banner-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="banner-btn">Buy Now</a>
              </div>
            </div>
            <div class="slide-item">
              <img src="./asset/image/product/banner-2.jpg" alt="Kebab offers" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Popular Now</p>
                <h2 class="banner-title">Spicy hot healthy pizza! </h2>
                <p class="banner-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="banner-btn">Buy Now</a>
              </div>
            </div>
            <div class="slide-item">
              <img src="./asset/image/product/banner-3.jpg" alt="Kebab offers" class="banner-img">
              <div class="banner-content">
                <p class="banner-subtitle">Popular Now</p>
                <h2 class="banner-title">Healthy and spicy foods!</h2>
                <p class="banner-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="banner-btn">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- CATEGORY  -->
      <div class="category">
        <div class="container">
          <div class="category-item-container has-scrollbar flexbox">
            <div class="category-item flexbox">
              <div class="category-img-box">
                <img src="./asset/image/product/b-2-kofta.jpg" alt="Biryani" width="30">
              </div>
              <div class="category-content-box">
                <div class="category-content-flex flexbox">
                  <h3 class="category-item-title">Pizza</h3>
                  <p class="category-item-amount">(51)</p>
                </div>
                <a href="#" class="category-btn">Show all</a>
              </div>
            </div>
            <div class="category-item flexbox">
              <div class="category-img-box">
                <img src="./asset/image/product/b-2-kofta.jpg" alt="Biryani" width="30">
              </div>
              <div class="category-content-box">
                <div class="category-content-flex flexbox">
                  <h3 class="category-item-title">Pizza</h3>
                  <p class="category-item-amount">(51)</p>
                </div>
                <a href="#" class="category-btn">Show all</a>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <!-- PRODUCT  -->
      <div class="product-container">
        <div class="container">

          <!-- sidebar -->
          <div class="sidebar has-scrollbar CategorySidebarMenu">
            <!-- sidebar category  -->
            <div class="sidebar-category">
              <div class="sidebar-top flexbox">
                <h2 class="sidebar-title">Category</h2>
                <button class="sidebar-close-btn CategorySidebarCloseBtn">
                  <i class="fa-solid fa-xmark"></i>
                </button>
              </div>
              <ul class="sidebar-menu-category-list">
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/ff-1.jpg" width="20" height="20" alt="Fast food" class="menu-title-img">
                      <p class="menu-title">Fast food</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox flexbox">
                        <p class="product-name">Hamburger</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">French fries</p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Chicken nuggets</p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Pizza</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Pizza</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Pizza</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/hf-2.jpg" width="20" height="20" alt="Salad" class="menu-title-img">
                      <p class="menu-title">healthy food</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Vegetable soup</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Salad</p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Fruit smoothie</p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Hummus wrap</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/b-2-kofta.jpg" alt="Biryani" width="20" height="20" class="menu-title-img">
                      <p class="menu-title">Biryani</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Chicken biryani</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Korma biryani </p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Kacchi biryani </p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Mutton biryani</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/kabab-1.jpg" width="20" height="20" alt="Biryani" class="menu-title-img">
                      <p class="menu-title">Kebab</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Chicken Kebab</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Korma Kebab </p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Kacchi biryani </p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Mutton biryani</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/kabab-1.jpg" width="20" height="20" alt="Biryani" class="menu-title-img">
                      <p class="menu-title">Kebab</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Chicken Kebab</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Korma Kebab </p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Kacchi biryani </p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Mutton biryani</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-menu-category">
                  <button class="sidebar-accordion-menu accordionBtn flexbox">
                    <div class="menu-title-flex">
                      <img src="./asset/image/product/kabab-1.jpg" width="20" height="20" alt="Biryani" class="menu-title-img">
                      <p class="menu-title">Kebab</p>
                    </div>
                    <div>
                      <i class="fa-solid fa-plus"></i>
                      <i class="fa-solid fa-minus"></i>
                    </div>
                  </button>
                  <ul class="sidebar-submenu-category-list accordionCategoryList">
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Chicken Kebab</p>
                        <p class="stock" title="Available">320</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Korma Kebab </p>
                        <p class="stock" title="Available">130</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Kacchi biryani </p>
                        <p class="stock" title="Available">35</p>
                      </a>
                    </li>
                    <li class="sidebar-submenu-category">
                      <a href="#" class="sidebar-submenu-title flexbox">
                        <p class="product-name">Mutton biryani</p>
                        <p class="stock" title="Available">220</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- product showcase  -->
            <div class="product-showcase">
              <h3 class="showcase-heading">Popular Now!</h3>
              <div class="showcase-wrapper">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./asset/image/product/ff-4.jpg" class="showcase-img" width="75" height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#" class="">
                        <h4 class="showcase-title"> Special hamburger</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <div class="price-box">
                        <del>$35.0</del>
                        <div class="price">$31.0</div>
                      </div>
                    </div>
                  </div>
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./asset/image/product/kabab-1.jpg" class="showcase-img" width="75" height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#" class="">
                        <h4 class="showcase-title"> Spicy Kebab </h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <div class="price-box">
                        <del>$19.0</del>
                        <div class="price">$17.0</div>
                      </div>
                    </div>
                  </div>
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./asset/image/product/nd-1.jpg" class="showcase-img" width="75" height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#" class="">
                        <h4 class="showcase-title"> Hot noodles</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                      </div>
                      <div class="price-box">
                        <del>$8.0</del>
                        <div class="price">$6.0</div>
                      </div>
                    </div>
                  </div>
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./asset/image/product/hf-2.jpg" class="showcase-img" width="75" height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#" class="">
                        <h4 class="showcase-title"> Black bean salad</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <div class="price-box">
                        <del>$5.0</del>
                        <div class="price">$3.0</div>
                      </div>
                    </div>
                  </div>
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./asset/image/product/b-1-chicken-biryani.jpg" class="showcase-img" width="75" height="75">
                    </a>
                    <div class="showcase-content">
                      <a href="#" class="">
                        <h4 class="showcase-title"> Spicy chicken biryani</h4>
                      </a>
                      <div class="showcase-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                      </div>
                      <div class="price-box">
                        <del>$35.0</del>
                        <div class="price">$31.0</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="product-box">

            @include('component.homePage.productMinimal')

            @include('component.homePage.productFeatured')

            @include('component.homePage.productGrid')
          </div>
        </div>
      </div>

      <!-- TESTIMONIAL , cta and service -->
      <div class="">
        <div class="container">
          <div class="testimonial-box">
          <!-- testimonial -->
          <div class="testimonial">
              <h2 class="title">Testimonial</h2>
              <div class="testimonial-card">
                <img src="./asset/image/product/ff-1.jpg" alt="" width="80" height="80" class="testimonial-banner">
                <p class="testimonial-name">Alan doe</p>
                <p class="testimonial-title">CEO and founder in dream</p>
                <!-- <img src="./asset/image/etc/quotes.svg" width="26" class="quotation-img" alt=""> -->
                <i class="fa-solid fa-quote-left quotation-img" width="26"></i>
                <p class="testimonial-desc">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quam! Quod volupt
                </p>
              </div>
          </div>
          <!-- cta  -->
          <div class="cta-container">
            <img src="./asset/image/product/nd-2.jpg" alt="" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">20% discount</p>
              <h3 class="cta-title">Friday collection</h3>
              <p class="cta-text">Starting @ $12</p>
              <button class="cta-btn">Buy now</button>
            </a>
          </div>
          <!-- service -->
          <div class="service">
            <h2 class="title">Our Service</h2>
            <div class="service-container">
              <a href="#" class="service-item">
                <div class="service-icon">
                  <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Worldwide Fast delivery</h3>
                  <p class="service-desc">
                    We deliver to all the countries of the world.
                  </p>
                </div>
              </a>
              <a href="#" class="service-item">
                <div class="service-icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">
                    Our customer support is available for you anytime anywhere.
                  </p>
                </div>
              </a>
              <a href="#" class="service-item">
                <div class="service-icon">
                  <i class="fa-solid fa-arrow-rotate-left"></i>
                </div>
                <div class="service-content">
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">
                    Easy and free return
                  </p>
                </div>
              </a>
              <a href="#" class="service-item">
                <div class="service-icon">
                  <i class="fa-solid fa-money-bill"></i>
                </div>
                <div class="service-content">
                  <h3 class="service-title">20% Money Back</h3>
                  <p class="service-desc">
                    For Order Over $100
                  </p>
                </div>
              </a>

            </div>
          </div>
        </div>
      </div>
      </div>



    </main>

@endsection