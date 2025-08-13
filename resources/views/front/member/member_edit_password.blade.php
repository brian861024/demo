@extends('front.layouts.memberLayout')

@section('member-content')

<h2 class="mb-4">會員資料編輯</h2>
<hr>

{{-- 更改密碼 --}}
<h4 class="mt-4">更改密碼</h4>
<form action="{{ url('/member/update/password') }}" method="POST" class="mb-5" style="max-width: 720px;">
  @csrf
  <div class="mb-3">
    <label for="current_password" class="form-label">目前密碼</label>
    <input type="password" class="form-control" id="current_password" name="current_password" required>
  </div>
  <div class="mb-3">
    <label for="new_password" class="form-label">新密碼</label>
    <input type="password" class="form-control" id="new_password" name="new_password" required>
  </div>
  <div class="mb-3">
    <label for="new_password_confirmation" class="form-label">確認新密碼</label>
    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
  </div>
  <button type="submit" class="btn btn-dark">變更密碼</button>
</form>

@endsection
