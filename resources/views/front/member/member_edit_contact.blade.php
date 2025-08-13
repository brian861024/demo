@extends('front.layouts.memberLayout')

@section('member-content')

<h2 class="mb-4">會員資料編輯</h2>
<hr>

{{-- 基本資料 --}}
<h4 class="mt-4">基本資料</h4>
<form action="{{ url('/member/update/basic') }}" method="POST" class="mb-5" style="max-width: 720px;">
  @csrf
  <div class="mb-3">
    <label for="last_name" class="form-label">姓氏</label>
    <input type="text" class="form-control" id="last_name" name="last_name" value="王" required>
  </div>
  <div class="mb-3">
    <label for="first_name" class="form-label">名字</label>
    <input type="text" class="form-control" id="first_name" name="first_name" value="小明" required>
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">性別</label>
    <select id="gender" name="gender" class="form-select" required>
      <option value="male">男</option>
      <option value="female">女</option>
      <option value="other">其他</option>
    </select>
  </div>
  <button type="submit" class="btn btn-dark">更新基本資料</button>
</form>

@endsection
