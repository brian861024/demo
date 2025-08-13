@extends('front.layouts.memberLayout')

@section('member-content')

  <h2 class="mb-4">訂閱項目查詢（租地紀錄）</h2>
  <hr>

  {{-- 可替換為 @foreach 顯示使用者訂閱項目 --}}
  <div class="table-responsive mt-4">
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
          <th>租地名稱</th>
          <th>位置</th>
          <th>起租日期</th>
          <th>到期日期</th>
          <th>狀態</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        {{-- 範例資料，請用 @foreach 替換 --}}
        <tr>
          <td>小農A區 第3塊</td>
          <td>桃園市 / 中壢區</td>
          <td>2024-07-01</td>
          <td>2025-06-30</td>
          <td><span class="badge bg-success">使用中</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">查看詳情</a>
            <a href="#" class="btn btn-sm btn-outline-danger">退租</a>
          </td>
        </tr>
        <tr>
          <td>家庭農場B區</td>
          <td>新北市 / 林口區</td>
          <td>2023-02-15</td>
          <td>2024-02-14</td>
          <td><span class="badge bg-secondary">已到期</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">查看詳情</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
