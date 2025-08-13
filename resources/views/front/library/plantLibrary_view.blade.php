{{-- resources/views/home.blade.php --}}

@extends('front.layouts.app')

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

    .translucent-bar {
        display: flex;
        justify-content: flex-start;
        margin-top: 4rem;
        background-color: rgba(255, 255, 255, 0.4);
    }

    .translucent-bar a {
        padding: 1.8rem 2rem;
        color: #000;
        text-decoration: none;
        font-weight: 500;
        white-space: nowrap;
        transition: background-color 0.3s ease;
    }

    .translucent-bar a:hover {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .content-wrapper {
        max-width: 80%;
        margin: 8rem auto 3rem auto;
        padding: 0 1rem;
    }

    .libraryMajor {
        text-align: center;
        line-height: 1.8;
    }

    .libraryMajor .cover {
        width: 50vw;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        margin: 2rem auto;
    }
</style>

@section('content')

<div class="content-wrapper">

    <!-- 分類按鈕列 -->
    <div class="translucent-bar">
        <a class="bg-white" href="#">全部</a>
        <a href="#">種植入門</a>
        <a href="#">果樹類</a>
        <a href="#">害蟲處理</a>
        <a href="#">有機養土</a>
    </div>

    <!-- 文章主內容 -->
    <div class="libraryMajor bg-white p-3 pt-5">
        <span class="text-muted">April 25, 2017</span>
        <hr />
        <span class="text-muted">小蹄</span>

        <h1 class="m-5 fw-bold">種植香草的五個小技巧</h1>

        <p class="m-4">
            香草不只能美化陽台，還能入菜，是許多人陽台園藝的首選。<br>
            本文將分享五個簡單步驟，幫助你輕鬆上手，打造屬於自己的香草小天地。<br>
            首先，選擇陽光充足的位置。像羅勒、迷迭香等香草植物，大多都喜歡陽光。<br>
            再來是土壤準備，建議使用疏鬆、排水性良好的介質，像是椰纖土混合珍珠石，能提供根部良好的發展空間。
        </p>

        <img src="{{ asset('img/method1.jpg') }}" alt="文章圖片" class="cover">

        <p class="m-4">
            除了環境與土壤，澆水與修剪的習慣也很重要。<br>
            適當修剪可以促進側芽生長，讓香草更加茂盛。<br>
            每週檢查植株健康，也能早期發現病蟲害，避免擴散。<br>
            跟著這些小技巧，就能讓你的陽台香草園一年四季都綠意盎然！
        </p>

        <a href="{{ url('/InTheGreen/Library') }}" class="btn btn-outline-dark m-4">回上一頁</a>
        <br />
        <a href="#" id="favoriteBtn" class="text-dark text-decoration-none" title="收藏此文章">
            <span id="favoriteText" class="animate__animated">收藏</span>
            <i id="favoriteIcon" class="bi bi-heart text-danger animate__animated"></i>
        </a>

        <hr />
    </div>

</div>

<script>
    // 收藏後愛心變實心
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("favoriteBtn");
        const text = document.getElementById("favoriteText");
        const icon = document.getElementById("favoriteIcon");
        let isFavorited = false;

        btn.addEventListener("click", function (e) {
            e.preventDefault();

            text.style.setProperty('--animate-duration', '0.3s');
            icon.style.setProperty('--animate-duration', '0.3s');

            // 加入淡出動畫
            text.classList.remove("animate__fadeIn");
            icon.classList.remove("animate__fadeIn");
            text.classList.add("animate__fadeOut");
            icon.classList.add("animate__fadeOut");

            // 等淡出結束後再切換內容與淡入
            text.addEventListener("animationend", function handler() {
                // 切換狀態
                isFavorited = !isFavorited;

                // 更新文字與 icon
                text.textContent = isFavorited ? "已收藏" : "收藏";
                icon.className = `bi ${isFavorited ? "bi-heart-fill" : "bi-heart"} text-danger animate__animated`;

                // 清除淡出 → 加入淡入
                text.classList.remove("animate__fadeOut");
                text.classList.add("animate__fadeIn");

                icon.classList.remove("animate__fadeOut");
                icon.classList.add("animate__fadeIn");

                // 移除事件監聽避免重複觸發
                text.removeEventListener("animationend", handler);
            });
        });
    });
</script>
@endsection

