
@extends('front.layouts.memberLayout')

@section('member-content')

  <h2 class="mb-4">登入 // 歡迎回來，123！</h2>
  <hr>
  <!-- 登入表單 -->
  <form action="" method="POST" class="mt-4" style="max-width: 400px;">
    @csrf

    <div class="mb-3">
      <label for="email" class="form-label">電子信箱</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="請輸入 Email" required>
    </div>

    <div class="mb-5">
      <label for="password" class="form-label">密碼</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
    </div>

    <button type="submit" class="btn btn-dark w-100 mb-5">登入</button>

    <div>
      尚未有帳號? <a class="ms-2 text-dark" href="{{ url('/InTheGreen/Member/login/create') }}"> 註冊</a>
    </div>
  </form>

  <!-- 登入後顯示控制面板 -->
  <p>這裡是你的會員中心，您可以查看田地、活動紀錄、編輯資料等。</p>

@endsection