@extends('front.layouts.memberLayout')

@section('member-content')

<h2 class="mb-4">會員資料編輯</h2>
<hr>

{{-- 聯絡方式 --}}
<h4 class="mt-4">聯絡方式</h4>
<form action="{{ url('/member/update/contact') }}" method="POST" class="mb-5" style="max-width: 720px;">
  @csrf
  <div class="mb-3">
    <label for="email" class="form-label">電子信箱</label>
    <input type="email" class="form-control" id="email" name="email" value="user@example.com" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">手機號碼</label>
    <input type="tel" class="form-control" id="phone" name="phone" value="0912345678" required>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">地址</label>
    <input type="text" class="form-control" id="address" name="address" value="台北市中正區忠孝東路一段1號">
  </div>
  <button type="submit" class="btn btn-dark">更新聯絡方式</button>
</form>

@endsection
