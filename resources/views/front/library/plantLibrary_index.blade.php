{{-- resources/views/home.blade.php --}}

@extends('front.layouts.app')
<!-- 種植筆記本 -->
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

    /* 分類按鈕列 */
    .translucent-bar {
        display: flex;
        justify-content: flex-start;
        margin-top: 4rem;
        border: none;
        background-color: rgba(255, 255, 255, 0.4);
        border-radius: 0;
    }

    .translucent-bar a {
        padding: 1.8rem 2rem;
        color: #000;
        text-decoration: none;
        font-weight: 500;
        white-space: nowrap;
        border: none;
        border-radius: 0;
        transition: background-color 0.3s ease;
    }

    .translucent-bar a:last-child {
        border-right: none;
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

    /* 統一控制圖片樣式 */
    .image-wrapper {
        width: 25vw;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        position: relative;
        margin: 2rem auto;
    }

    .libraryMajor .image-wrapper {
        width: 50vw; /* 只讓 Major 的圖片框寬度是 50vw */
    }

    .image-wrapper img.cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
        display: block;
    }

    .image-wrapper img.cover:hover {
        transform: scale(1.05);
    }
</style>

@section('content')
<!-- 種植筆記本 -->
<div class="content-wrapper">
    <!-- 分類按鈕列 -->
    <div class="translucent-bar">
        <a class="bg-white" href="#">全部</a>
        <a href="#">種植入門</a>
        <a href="#">果樹類</a>
        <a href="#">害蟲處理</a>
        <a href="#">有機養土</a>
    </div>
    <!-- 搜尋區塊 -->
    <div class="bg-white p-3">
        <div class="justify-content-center d-flex">
            <form class="input-group w-50" action="/search" method="GET">
                <input type="text" class="form-control" name="q" placeholder="搜尋...">
                <button type="submit" class="input-group-text">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <div class="justify-content-center d-flex">
            <a id="expandBtn" class="btn btn-outline-secondary text-black">所有標籤</a>
        </div>
        <div id="categoryDiv" class="d-none animate__animated">
            <!-- 分類橫列 -->
            <ul class="nav nav-pills mb-3 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-black" href="">#香草</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">#蔬菜</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">#蔬果</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">#肥料</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- 頭條 -->
    <div class="libraryMajor bg-white p-3 pt-5">
        <span class="">April 25, 2017</span>
        <hr />
        <div>
            <h1 class="m-5 fw-bold">種植香草的五個小技巧</h1>
            <p class="m-4">
                香草不僅能美化陽台，還能入菜。<br>本文介紹五個簡單步驟，幫助你快速上手並打造自己的香草小園地。<br>
                首先，選擇適合陽光充足的位置，因為多數香草植物如羅勒、迷迭香都喜歡陽光充足的環境。<br>
                接著，準備疏鬆且排水良好的土壤，可以混合椰纖土與珍珠石，提供根系良好的生長空間。<br>
            </p>
        </div>
        <div class="image-wrapper">
            <img src="{{ asset('img/method1.jpg') }}" alt="文章圖片" class="cover">
        </div>
        <a href="{{ url('/InTheGreen/Library/1') }}" class="btn btn-outline-dark m-4">閱讀更多</a>
        <hr />
    </div>

    <!-- 文章區 -->
    <div class="row g-0 align-items-stretch bg-white p-3 pb-5">
        <div class="col-md-6 p-0">
            <div class="libraryArticle bg-white h-100 d-flex flex-column justify-content-between text-center px-5 py-4">
                <div>
                    <span class="text-muted">August 1, 2025</span>
                    <hr />
                    <h1 class="fw-bold mb-4">打造陽台蔬菜箱的三步驟</h1>
                    <p class="mb-4 px-2">
                        想吃自己種的菜？本文介紹如何用簡單工具打造適合陽台的小型蔬菜箱，從選擇材料到種植方法，讓你輕鬆上手。
                    </p>
                </div>
                <div>
                    <div class="image-wrapper">
                        <img src="{{ asset('img/method2.jpg') }}" alt="文章圖片" class="cover mb-4">
                    </div>
                    <a href="{{ url('/InTheGreen/Library/1') }}" class="btn btn-outline-dark">閱讀更多</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-0">
            <div class="libraryArticle bg-white h-100 d-flex flex-column justify-content-between text-center px-5 py-4">
                <div>
                    <span class="text-muted">August 2, 2025</span>
                    <hr />
                    <h1 class="fw-bold mb-4">認識常見香草植物與功效</h1>
                    <p class="mb-4 px-2">
                        香草不只是裝飾，還有療癒功效！本文列出五種常見香草植物的簡介與日常應用方式，例如薄荷、迷迭香與羅勒。
                    </p>
                </div>
                <div>
                    <div class="image-wrapper">
                        <img src="{{ asset('img/method3.jpg') }}" alt="文章圖片" class="cover mb-4">
                    </div>
                    <a href="{{ url('/InTheGreen/Library/1') }}" class="btn btn-outline-dark">閱讀更多</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-0">
            <div class="libraryArticle bg-white h-100 d-flex flex-column justify-content-between text-center px-5 py-4">
                <div>
                    <span class="text-muted">August 3, 2025</span>
                    <hr />
                    <h1 class="fw-bold mb-4">害蟲防治的自然解法</h1>
                    <p class="mb-4 px-2">
                        害蟲困擾你的陽台農園？學習如何使用天然材料如辣椒水、大蒜噴劑等方法驅除害蟲，安全又環保。
                    </p>
                </div>
                <div>
                    <div class="image-wrapper">
                        <img src="{{ asset('img/method1.jpg') }}" alt="文章圖片" class="cover mb-4">
                    </div>
                    <a href="{{ url('/InTheGreen/Library/1') }}" class="btn btn-outline-dark">閱讀更多</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 p-0">
            <div class="libraryArticle bg-white h-100 d-flex flex-column justify-content-between text-center px-5 py-4">
                <div>
                    <span class="text-muted">August 4, 2025</span>
                    <hr />
                    <h1 class="fw-bold mb-4">從廚房廢物製作堆肥土</h1>
                    <p class="mb-4 px-2">
                        將廚餘再利用吧！用剩菜、果皮、咖啡渣簡單自製堆肥，既減少垃圾，又讓植物更茂盛，循環又環保。
                    </p>
                </div>
                <div>
                    <div class="image-wrapper">
                        <img src="{{ asset('img/method2.jpg') }}" alt="文章圖片" class="cover mb-4">
                    </div>
                    <a href="{{ url('/InTheGreen/Library/1') }}" class="btn btn-outline-dark">閱讀更多</a>
                </div>
            </div>
        </div>
        <small class="text-white">設計風格參考自 HTML5 UP / Massively</small>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const expandBtn = document.getElementById("expandBtn");
    const categoryDiv = document.getElementById("categoryDiv");

    expandBtn.addEventListener("click", function () {
        // 加入 fadeOut 動畫
        categoryDiv.style.setProperty('--animate-duration', '0.3s');
        expandBtn.classList.add("animate__animated", "animate__fadeOut");

        // 動畫結束後隱藏按鈕並顯示分類
        expandBtn.addEventListener("animationend", function handler() {
            expandBtn.classList.add("d-none"); // 隱藏按鈕
            categoryDiv.classList.remove("d-none"); // 顯示分類區塊

            // 加入淡入動畫
            categoryDiv.classList.add("animate__animated", "animate__fadeIn");

            // 移除事件監聽，避免重複觸發
            expandBtn.removeEventListener("animationend", handler);
        });
    });
});
</script>
@endsection
