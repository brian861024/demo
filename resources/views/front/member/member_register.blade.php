
@extends('front.layouts.memberLayout')

@section('member-content')

  <!-- 個資聲明 Modal -->
  <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="privacyModalLabel">個人資料蒐集聲明</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
        </div>
        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
          <p>親愛的用戶您好：</p>
          <p>為提供您完整的會員服務，本網站將依《個人資料保護法》規定蒐集、處理及利用您所提供的個人資料，包含但不限於：姓名、性別、聯絡方式、地址、帳號資訊等。</p>
          <ul>
            <li>使用目的：會員管理、客服聯繫、行銷推廣。</li>
            <li>保存期限：依法律規定或您主動申請刪除為止。</li>
            <li>您有權隨時查閱、補充、更正或刪除您的個資。</li>
          </ul>
          <p>若您繼續使用本網站，即表示您已詳閱並同意上述內容。</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">我知道了</button>
        </div>
      </div>
    </div>
  </div>

  <h2 class="mb-4">會員註冊</h2>
  <hr>
  <!-- 註冊表單 -->
  <form action="" method="POST" class="mt-4" style="max-width: 400px;">
    @csrf
    <div class="row mb-3">
      <div class="col-md-4">
        <label for="member_last_name" class="form-label">姓氏</label>
        <input type="text" class="form-control" id="member_last_name" name="member_last_name" placeholder="請輸入姓氏" required>
      </div>
      <div class="col-md-8">
        <label for="member_first_name" class="form-label">名字</label>
        <input type="text" class="form-control" id="member_first_name" name="member_first_name" placeholder="請輸入名字" required>
      </div>
    </div>

    <div class="mb-3">
      <label for="member_sex" class="form-label">性別</label>
      <select id="member_sex" name="member_sex" class="form-select" required>
        <option value="">請選擇性別</option>
        <option value="male">男生</option>
        <option value="female">女生</option>
        <option value="transgender">非二元性別</option>
        <option value="prefer_not_say">不透露</option>
        <option value="other">其他</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="member_email" class="form-label">* 電子信箱</label>
      <input type="email" class="form-control" id="member_email" name="member_email" placeholder="請輸入 Email" required>
    </div>

    <div class="mb-3">
      <label for="member_phone" class="form-label">* 手機</label>
      <input type="tel" class="form-control" id="member_phone" name="member_phone" placeholder="請輸入手機號碼" required>
    </div>

    <div class="mb-3">
      <label for="member_password" class="form-label">* 密碼</label>
      <input type="password" class="form-control" id="member_password" name="member_password" placeholder="請輸入密碼" required>
    </div>

    <div class="mb-4">
      <label for="password_confirmation" class="form-label">* 確認密碼</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="請再次輸入密碼" required>
    </div>

    <div class="mb-5">
      <label class="form-label">地址</label>
      <div class="d-flex gap-2 mb-2">
        <select name="city" class="form-select" required>
          <option value="">請選擇縣市</option>
          <option>台北市</option>
          <option>新北市</option>
          <option>桃園市</option>
          <option>台中市</option>
          <!-- 其他城市 -->
        </select>
        <select name="district" class="form-select" required>
          <option value="">請選擇區域</option>
          <option>桃園區</option>
          <option>中壢區</option>
          <option>蘆竹區</option>
          <option>新莊區</option>
          <option>林口區</option>
        </select>
      </div>
      <input type="text" class="form-control" id="Member_address" name="Member_address" placeholder="請輸入地址" required>
    </div>

    <div class="form-check mb-4">
      <input class="form-check-input" type="checkbox" id="agreePolicy" required>
      <label class="form-check-label" for="agreePolicy">
        我已閱讀並同意 <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#privacyModal">個資蒐集聲明</a>
      </label>
    </div>

    <button type="submit" class="btn btn-dark w-100 mb-5">註冊</button>

    <div>
      已經有帳號? <a class="ms-2 text-dark" href="{{ url('/InTheGreen/Member/login') }}"> 登入</a>
    </div>
  </form>

@endsection

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const privacyModal = new bootstrap.Modal(document.getElementById('privacyModal'));
    privacyModal.show();
  });
</script>