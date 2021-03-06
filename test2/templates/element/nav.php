 <!--/header-w3l-->
 <?php

  if(!isset($about)){
    $about="";
  }
  if(!isset($index)){
    $index="";
  }
  if(!isset($service)){
    $service="";
  }
  if(!isset($contact)){
    $contact="";
  }
 ?>
 <div class="header-w3l">
    <!-- header -->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <a class="navbar-brand" href="<?= $this->Url->build(['controller'=>'pages','action'=>'game'])?>">
            SE<span class="fab fa-xbox sub-logo"></span>G
          </a>
          <!-- if logo is image enable this   
            <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
            </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item  <?= $index ?>">
                <a class="nav-link" href="<?= $this->Url->build(['controller'=>'pages','action'=>'index']) ?>">Home</a>
              </li>
              <li class="nav-item <?= $about ?>">
                <a class="nav-link " href="<?= $this->Url->build(['controller'=>'Pages','action'=>'about']) ?>">About</a>
              </li>
              <li class="nav-item <?= $service ?>">
                <a class="nav-link " href=" <?= $this->Url->build(['controller'=>'Pages','action'=>'services'])  ?>">Services</a>
              </li>
              <li class="nav-item <?= $contact ?>">
                <a class="nav-link  " href="<?= $this->Url->build(['controller'=>'Pages','action'=>'contact'])  ?>">Contact</a>
              </li>
              <li class="search-bar ml-lg-3 mr-lg-5 mt-lg-0 mt-4">
                <!--/search-right-->
                <form class="search position-relative">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required="">
                  <span class="fas fa-search search__icon"></span>
                </form>

                <!--//search-right-->
              </li>

            </ul>
</div>

        
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox">
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!-- //header -->
  </div>
  <!--//header-w3l-->
  