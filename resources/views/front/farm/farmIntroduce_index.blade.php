{{-- resources/views/home.blade.php --}}
@extends('front.layouts.app')

@section('content')
<!-- 農場介紹 -->
<div class="container my-5 page-content" style="margin-top:15rem">
  <div class="row align-items-center">
    <!-- 左側圖片 -->
    <div class="col-md-6 text-md-end text-center mb-4 mb-md-0">
      <img src="{{ asset('img/introduce.jpg') }}" alt="土地與生活" class="img-fluid rounded shadow" style="max-width: 80%;">
    </div>

    <!-- 右側文案 -->
    <div class="col-md-6 animate__animated animate__fadeIn">
      <h3 class="fw-bold text-muted mb-3">在田裡 In The Green</h3>
      <hr>
      
      <h5 class="fw-bold text-muted pt-2 pb-3" style="font-size: 1.5rem; line-height: 1.6;">
        在田裡，是一處讓心慢下來的所在。<br>
        我們相信，<br>
        土地不只是耕作的場域，<br>
        更是人與生活重新連結的起點。<br><br>

        在這裡，你可以租下一塊田地，親手種下季節的心情；<br>
        也可以參與活動、品嘗食物、分享故事，<br>
        重新感受土地的溫度與生命的節奏。<br>
      </h5>
      
      <p class="fw-bold text-muted pt-3" style="line-height: 1.6;">
        在田裡，讓生活重新長出來。
      </p>
    </div>
  </div>
</div>
<!-- 農場介紹 -->

<!-- 農法介紹 -->
<div class="container my-5">
  <div>
    <h2 class="fw-bold text-muted m-4 pb-3">遵循農法</h2>
  </div>
  <div class="row justify-content-center g-4 px-4">
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/method1.jpg') }}" class="card-img-top" alt="自然農法" style="height: 250px; object-fit: cover; object-position: center;">
        <div class="card-body">
          <h5 class="card-title fw-bold">零化肥，純淨自然</h5>
          <hr>
          <p class="card-text">
            我們堅持絕不使用任何農藥與化肥，<br>
            尊重土地的自然節奏，讓作物在純淨的環境中自由生長。<br>
            用心守護每一寸土地的健康與生機。
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/method2.jpg') }}" class="card-img-top" alt="共耕共學" style="height: 250px; object-fit: cover; object-position: center;">
        <div class="card-body">
          <h5 class="card-title fw-bold">社群共耕，共創豐收</h5>
          <hr>
          <p class="card-text">
            與社區夥伴攜手耕作，共同學習與分享。<br>
            透過彼此的經驗交流，一同走進土地的生命力中，<br>
            建立深厚的連結與友誼。
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/method3.jpg') }}" class="card-img-top" alt="永續循環" style="height: 250px; object-fit: cover; object-position: center;">
        <div class="card-body">
          <h5 class="card-title fw-bold">樸園農法，永續循環</h5>
          <hr>
          <p class="card-text">
            從堆肥製作、灌溉管理到雜草的自然控制，<br>
            我們注重每一個環節的小循環，讓土地獲得持續的滋養，<br>
            打造永續共生的綠色生態系統。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 農法介紹 -->

<!-- 農場環境和位置 -->
<div class="container my-5">
  <div>
    <h2 class="fw-bold text-muted m-4 pb-3">交通資訊</h2>
  </div>
  <div class="row align-items-center">
    <!-- 地圖區塊 -->
    <div class="col-md-6 mb-4 mb-md-0">
      <div class="map-container" style="height: 100%; width: 100%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.9806238704299!2d121.17853746745908!3d25.01064820000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468213624372d3f%3A0x4a76aceb19610a6a!2zMzIw5qGD5Zut5biC5Lit5Z2c5biC5pyI5bGx6LevMjQ25be3MTIz6Jmf!5e0!3m2!1szh-TW!2stw!4v1751140104878!5m2!1szh-TW!2stw"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <!-- 文字區塊 -->
    <div class="col-md-6">
      <ul class="list-unstyled text-muted ps-md-4">
        <li class="mb-3"><strong>地址：</strong>台灣某處田園小路 123 號</li>
        <li class="mb-3"><strong>開車：</strong>距桃園高鐵站約 10 分鐘，附設停車位</li>
        <br>
        <li class="mb-3"><strong>大眾運輸：</strong>桃園高鐵站轉紅×× 公車後步行前往</li>
        <p>!! 步行距離較遠, 不建議搭乘大眾前來 !!</p>
      </ul>
    </div>
  </div>
</div>
<!-- 農場環境和位置 -->

@endsection