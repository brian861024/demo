@extends('front.layouts.memberLayout')

@section('member-content')

  <h2 class="mb-4">會員點數查詢</h2>
  <hr>

  {{-- 點數摘要區塊 --}}
  <div class="mt-4 mb-4">
    <h5>目前可用點數：<span class="text-success fw-bold">150</span> 點</h5>
    <p class="text-muted">點數可用於商城折抵、兌換商品等。</p>
  </div>

  {{-- 點數紀錄表格 --}}
  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
          <th>日期</th>
          <th>項目</th>
          <th>變動點數</th>
          <th>備註</th>
        </tr>
      </thead>
      <tbody>
        {{-- 範例資料，實際請用 @foreach 帶入 --}}
        <tr>
          <td>2025-07-01</td>
          <td>活動參加獎勵</td>
          <td class="text-success">+50</td>
          <td>參加自然農法體驗日</td>
        </tr>
        <tr>
          <td>2025-06-20</td>
          <td>商城兌換</td>
          <td class="text-danger">-30</td>
          <td>兌換有機紅蘿蔔</td>
        </tr>
        <tr>
          <td>2025-06-01</td>
          <td>註冊贈點</td>
          <td class="text-success">+100</td>
          <td>新會員註冊贈送</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
