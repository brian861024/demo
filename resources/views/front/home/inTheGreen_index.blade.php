
@extends('front.layouts.app')

@section('content')

<!-- ============ 輪播 =========== -->
<div id="carousel" class="carousel slide carousel-fade animate__animated animate__fadeIn" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="9000">
      <img src="{{ asset('img/hero1.jpg') }}" class="d-block vw-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="9000">
      <img src="{{ asset('img/hero2.jpg') }}" class="d-block vw-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="9000">
      <img src="{{ asset('img/hero3.jpg') }}" class="d-block vw-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- ============ 輪播 =========== -->

<!-- ============ 按鈕 =========== -->
<div id="trigger-point" style="height: 1px;"></div>
<div class="container pt-4 ps-5" style="max-width: 85%;">
  <div class="mt-5 mb-5 ps-5 ms-5">
    <div class="d-flex justify-content-center py-2 flex-wrap">
      <a href="#" class="mx-3 text-decoration-none fw-semibold glow-button">品牌故事</a>
      <a href="{{ url('/InTheGreen/Member/login') }}" class="mx-3 text-decoration-none fw-semibold glow-button">會員中心</a>
      <a href="{{ url('/InTheGreen/FarmIntroduce') }}" class="mx-3 text-decoration-none fw-semibold glow-button">走進農場</a>
      <a href="{{ url('/InTheGreen/Rental') }}" class="mx-3 text-decoration-none fw-semibold glow-button">租一塊田</a>
      <a href="#" class="mx-3 text-decoration-none fw-semibold glow-button">活動報名</a>
      <a href="{{ url('/InTheGreen/Library') }}" class="mx-3 text-decoration-none fw-semibold glow-button">種植筆記本</a>
      <a href="#" class="mx-3 text-decoration-none fw-semibold glow-button">預約私廚</a>
    </div>
  </div>
<div>
<!-- ============ 按鈕 =========== -->

<!-- ============ 文案 =========== -->
<div class="container my-5 ">
  <div>
    <h2 class="fw-bold text-muted m-4 pb-3">ABOUT</h2>
  </div>
  <div class="row align-items-center">
    <!-- 左側圖片 -->
    <div class="col-md-6 text-md-end text-center mb-4 mb-md-0">
      <img src="{{ asset('img/people.jpg') }}" alt="土地與生活" class="img-fluid rounded shadow" style="max-width: 80%;">
    </div>

    <!-- 右側文案 -->
    <div class="col-md-6">
      <h3 class="fw-bold text-muted mb-3">在田裡 In The Green</h3>
      <hr>
      
      <h5 class="fw-bold text-muted pt-2 pb-3" style="font-size: 1.5rem; line-height: 1.6;">
        土地，不只是耕種的工具，<br>
        更是重拾生活與內心連結的起點。<br><br>

        在這片田野，<br>
        你不必匆忙、不需奔波——<br>
        只要靜靜地，讓心慢下來。
      </h5>
      
      <p class="fw-bold text-muted pt-3" style="line-height: 1.6;">
        曬太陽、種菜、泡咖啡<br>
        大人可以喘口氣，小孩可以玩泥巴，<br>
        一起感受生活的真實與美好。
      </p>
    </div>
  </div>
</div>
<!-- ============ 文案 =========== -->

<!-- ============ 租田的橫幅 =========== -->
<div class="mx-auto mt-5" style="max-width: 1800px;">
  <div class="img-mask-wrapper">
    <img src="{{ asset('img/hero2.jpg') }}" alt="租田導引">
    <div class="img-mask"></div>
    <div class="img-mask-text">
      <h2 class="fw-bold">在田裡。農事｜屬於你的第三空間</h2>
      <p class="mt-2">這裡不是農場，是你的喘息地</p>
      <a href="#" class="btn btn-outline-light mt-3">了解更多</a>
    </div>
  </div>
</div>
<!-- ============ 租田的橫幅 =========== -->

<!-- ============ 活動 =========== -->

<!-- ============ 活動 =========== -->

@endsection

<script>
  window.addEventListener('DOMContentLoaded', () => {
    const navlinks = document.querySelectorAll('.navlink');
    const logo = document.getElementById('nav-logo');
    const navbar = document.getElementById('mainNav');
    logo.src = "{{ asset('img/2.png') }}";
    // 先隱藏nav的連結 
    navlinks.forEach(el => el.style.display = 'none');
    navbar.classList.remove('fixed-top', 'bg-white', 'shadow', 'navbar-shrink');
  });

  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('mainNav');
    const logo = document.getElementById('nav-logo');
    const navlinks = document.querySelectorAll('.navlink');
    const trigger = document.getElementById('trigger-point');
    const triggerTop = trigger.getBoundingClientRect().top;

    if (triggerTop <= 0) {
      navbar.classList.add('fixed-top', 'bg-white', 'shadow', 'transition', 'navbar-shrink');
      logo.src = "{{ asset('img/3.png') }}";
      navlinks.forEach(el => el.style.display = 'block'); // 或 'block'，看你需求
    } else {
      navbar.classList.remove('fixed-top', 'bg-white', 'shadow', 'navbar-shrink');
      logo.src = "{{ asset('img/2.png') }}";
      navlinks.forEach(el => el.style.display = 'none');
    }
  });
</script>