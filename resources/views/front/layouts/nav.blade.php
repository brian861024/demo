<nav class="navbar bg-white shadow navbar-shrink" id="mainNav">
  <div class="container pt-4 ps-4" style="max-width: 90%;">
    <!-- LOGO -->
    <a class="navbar-brand" href="{{ url('/InTheGreen/home') }}">
      <img id="nav-logo" src="{{ asset('img/3.png') }}" alt="在田裡 Logo" height="60">
    </a>

    <div class="d-none d-lg-flex">
      <a href="#" class="navlink mx-3 text-decoration-none fw-semibold glow-button">品牌故事</a>
      <a href="{{ url('/InTheGreen/Member/login') }}" class="navlink mx-3 text-decoration-none fw-semibold glow-button">會員中心</a>
      <a href="{{ url('/InTheGreen/FarmIntroduce') }}" class="navlink mx-3 text-decoration-none fw-semibold glow-button">走進農場</a>
      <a href="{{ url('/InTheGreen/Rental') }}" class="navlink mx-3 text-decoration-none fw-semibold glow-button">租一塊田</a>
      <a href="#" class="navlink mx-3 text-decoration-none fw-semibold glow-button">活動報名</a>
      <a href="{{ url('/InTheGreen/Library') }}" class="navlink mx-3 text-decoration-none fw-semibold glow-button">種植筆記本</a>
      <a href="#" class="navlink mx-3 text-decoration-none fw-semibold glow-button">預約私廚</a>
    </div>

    <!-- 漢堡按鈕 -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Offcanvas 主體 -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close text-reset mt-2 me-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <hr class="mx-3 navHr">

      <div class="offcanvas-body ms-2">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">首頁</a>
          </li>
          <li class="nav-item">
            <a class="nav-link glow-button" href="#">品牌故事</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/InTheGreen/Member/login') }}">會員中心</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/InTheGreen/FarmIntroduce') }}">走進農場</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/InTheGreen/Rental') }}">租一塊田</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">活動報名</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/InTheGreen/Library') }}">種植筆記本</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">預約私廚</a>
          </li>

          <!-- 下拉選單 -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              更多
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">共耕公約</a></li>
              <li><a class="dropdown-item" href="#">回憶相簿</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">聯絡我們</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<script>
  let lastScrollTop = 0;
  const navbar = document.getElementById('mainNav');

  window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // 往下滑：隱藏 navbar（但保留 DOM 空間）
      navbar.classList.add("hide-navbar");
    } else {
      // 往上滑：顯示 navbar
      navbar.classList.remove("hide-navbar");
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
</script>