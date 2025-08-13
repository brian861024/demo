@extends('front.layouts.memberLayout')

@section('member-content')

  <h2 class="mb-4">會員待繳查詢</h2>
  <hr>

  <div class="table-responsive mt-4">
    <table class="table table-bordered align-middle">
      <thead class="table-light">
        <tr>
          <th>項目</th>
          <th>金額</th>
          <th>到期日</th>
          <th>狀態</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        {{-- 範例資料，請用 @foreach($unpaidItems as $item) 帶入 --}}
        <tr>
          <td>2024 年度租地費（小農 A 區）</td>
          <td>NT$3,000</td>
          <td>2025-08-01</td>
          <td><span class="badge bg-warning text-dark">未繳</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">前往繳費</a>
          </td>
        </tr>
        <tr>
          <td>自然農法體驗課程</td>
          <td>NT$800</td>
          <td>2025-07-31</td>
          <td><span class="badge bg-warning text-dark">未繳</span></td>
          <td>
            <a href="#" class="btn btn-sm btn-outline-primary">前往繳費</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection
