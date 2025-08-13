
<style>
  body {
    position: relative;
  }

  body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('img/hero1.jpg') }}');
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    opacity: 0.6;
    z-index: -1;
    pointer-events: none;
  }
</style>

@extends('front.layouts.app')

@section('content')

<div class="container-fluid bg-white box-shadow" style="margin-top:12rem;">
  <div class="d-md-none d-flex justify-content-between align-items-center p-3 border-bottom">
    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu">
      <i class="bi bi-list"></i> 左側展開
    </button>    
    <h5 class="mb-0">會員中心</h5>
  </div>

  <div class="row" style="margin-left:3rem; margin-bottom:5rem">
    <!-- 側邊欄（桌機顯示） -->
    <aside class="col-md-3 d-none d-md-block py-4 ps-4">
      <div class="mb-3 fw-bold">會員中心</div>
      <hr class="navHr">

      <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=role') }}">會員規章</a></div>

      <div class="mb-2">
        <div class="nav-link" data-bs-toggle="collapse" href="#memberInfoCollapse" role="button" aria-expanded="false" aria-controls="memberInfoCollapse">
          會員資料編輯 <i class="bi bi-caret-down-fill toggle-icon"></i>
        </div>
        <div class="collapse ps-3" id="memberInfoCollapse">
          <div class="mt-2 mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=contact') }}">基本資料</a></div>
          <div class="mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=info') }}">聯絡方式</a></div>
          <div class="mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=password') }}">密碼變更</a></div>
        </div>
      </div>

      <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=rental') }}">訂閱項目查詢(租地)</a></div>
      <!-- <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/store') }}">點數商城</a></div> -->
      <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=points') }}">點數查詢</a></div>
      <!-- <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/family') }}">家庭群組</a></div> -->
      <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=payment') }}">待繳查詢</a></div>
      <hr />
      <!-- <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=favoriteNote') }}">收藏筆記</a></div> -->
    </aside>

    <!-- 側邊欄（小螢幕 offcanvas） -->
    <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarMenu">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">會員中心</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <hr class="mx-3 navHr">
      <div class="offcanvas-body">
        <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=role') }}">會員規章</a></div>

        <div class="mb-2">
          <div class="nav-link" data-bs-toggle="collapse" href="#offcanvasMemberInfoCollapse" role="button" aria-expanded="false" aria-controls="offcanvasMemberInfoCollapse">
            會員資料編輯 <i class="bi bi-caret-down-fill toggle-icon"></i>
          </div>
          <div class="collapse ps-3" id="offcanvasMemberInfoCollapse">
            <div class="mt-2 mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/1/edit?showItem=contact') }}">基本資料</a></div>
            <div class="mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/1/edit?showItem=info') }}">聯絡方式</a></div>
            <div class="mb-1"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/1/edit?showItem=password') }}">密碼變更</a></div>
          </div>
        </div>

        <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=rental') }}">訂閱項目查詢(租地)</a></div>
        <!-- <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/store') }}">點數商城</a></div> -->
        <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=points') }}">點數查詢</a></div>
        <!-- <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/family') }}">家庭群組</a></div> -->
        <div class="mb-2"><a class="nav-link" href="{{ url('/InTheGreen/Member/login/show?showItem=payment') }}">待繳查詢</a></div>
      </div>
    </div>

    <!-- 主內容區 -->
    <main class="col-md-9 px-4 py-4">
      @yield('member-content')
    </main>
  </div>
</div>

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('[data-bs-toggle="collapse"]');

    toggles.forEach(function (toggle) {
      const icon = toggle.querySelector('.toggle-icon');
      const targetId = toggle.getAttribute('href') || toggle.getAttribute('data-bs-target');
      const targetEl = document.querySelector(targetId);

      if (icon && targetEl) {
        targetEl.addEventListener('show.bs.collapse', function () {
          icon.classList.add('rotate');
        });

        targetEl.addEventListener('hide.bs.collapse', function () {
          icon.classList.remove('rotate');
        });
      }
    });
  });
</script>