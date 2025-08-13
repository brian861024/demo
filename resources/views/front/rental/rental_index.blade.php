{{-- resources/views/home.blade.php --}}
@extends('front.layouts.app')
<style>
    .img-fluid{
        width: 50vw;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        margin: 2rem auto;
    }
</style>
@section('content')
<!-- 租一塊田 -->
<div class="page-content">
    <!-- 輪播 -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="height: 50vh; overflow: hidden;">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/hero1.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/hero2.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/hero3.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- 方案介紹 -->
    <div class="container my-5">
        <div class="row">
            <!-- 左側卡片清單 -->
            <div class="col-md-4">
                <div class="nav flex-column nav-pills" id="card-tab" role="tablist" aria-orientation="vertical">
                    <div class="card mb-4">
                        <a class="card-body text-decoration-none active" id="card1-tab" data-bs-toggle="pill" href="#card1" role="tab">
                            <h5 class="card-title">小菜窪</h5>
                            <hr />
                            <p class="card-text">輕鬆上手的小田地，適合初學者體驗種植樂趣。</p>
                        </a>
                    </div>
                    <div class="card mb-4">
                        <a class="card-body text-decoration-none" id="card2-tab" data-bs-toggle="pill" href="#card2" role="tab">
                            <h5 class="card-title">後花園</h5>
                            <hr />
                            <p class="card-text">打造專屬迷你農場，想種什麼就種什麼。</p>
                        </a>
                    </div>
                    <div class="card mb-4">
                        <a class="card-body text-decoration-none" id="card3-tab" data-bs-toggle="pill" href="#card3" role="tab">
                            <h5 class="card-title">大地主</h5>
                            <hr />
                            <p class="card-text">大面積耕作體驗，適合家庭或團體一起參與。</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 右側介紹內容 -->
            <div class="col-md-8">
                <div class="tab-content" id="card-tabContent">
                    <!-- 小 -->
                    <div class="tab-pane fade show active m-3" id="card1" role="tabpanel" aria-labelledby="card1-tab">
                        <h3 class="fw-bold text-muted">小菜窪</h3>
                        <br />
                        <hr />
                        <img src="{{ asset('img/method1.jpg') }}" class="img-fluid rounded mb-3" alt="小菜窪">
                        <div class="ms-4 me-4">
                            <p>
                                「小菜窪」是一塊為都市人量身打造的微型田地，特別適合初學者或親子家庭體驗種植的樂趣。無需農業經驗，我們提供基礎教學與工具支援，讓每個人都能安心下田。
                            </p>
                            <p>
                                無論是播下一顆小小的菜籽，或是和孩子一起拔草澆水，每一步都是重新認識土地的起點。這不僅是農作，更是一場回到生活本質的練習。
                            </p>
                            <p>
                                若你嚮往慢下來、親近自然，「小菜窪」會是你踏進田野生活的第一站。
                            </p>
                        </div>
                    </div>
                    <!-- 中 -->
                    <div class="tab-pane fade m-3" id="card2" role="tabpanel" aria-labelledby="card2-tab">
                        <h3 class="fw-bold text-muted">後花園</h3>
                        <br />
                        <hr />
                        <img src="{{ asset('img/method2.jpg') }}" class="img-fluid rounded mb-3" alt="後花園">
                        <div class="ms-4 me-4">
                            <p>
                                「後花園」方案提供更大的自由與空間，讓你可以依照自己的生活節奏，種植喜愛的蔬果與花草。這裡沒有制式化農法，只有你與自然的對話。
                            </p>
                            <p>
                                無論你想打造一片香草角落、還是番茄爬滿支架的藤蔓秘境，我們都提供水源、土壤與技術支援，讓你的構想得以實現。
                            </p>
                            <p>
                                這不只是一塊土地，它是一座實現理想生活的小實驗場，是一個屬於你自己的綠色呼吸空間。
                            </p>
                        </div>
                    </div>
                    <!-- 大 -->
                    <div class="tab-pane fade m-3" id="card3" role="tabpanel" aria-labelledby="card3-tab">
                        <h3 class="fw-bold text-muted">大地主</h3>
                        <br />
                        <hr />
                        <img src="{{ asset('img/method3.jpg') }}" class="img-fluid rounded mb-3" alt="大地主">
                        <div class="ms-4 me-4">
                            <p>
                                「大地主」方案專為想深入參與農務或攜家帶眷、揪團體驗農事的朋友而設計。我們提供大片耕地，讓你可以進行更系統性的種植規劃，甚至發展屬於你的耕作風格。
                            </p>
                            <p>
                                不只是插秧播種，更可以體驗整個季節的轉換與收穫的成就感。適合家庭、團隊、教學單位等一同參與，共同經歷土地帶來的真實感動。
                            </p>
                            <p>
                                如果你嚮往一種生活方式，而不只是短暫體驗，那麼「大地主」會是你在田裡長期扎根的起點。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <hr />
                <button class="btn btn-dark m-3">共耕公約</button>
                <button class="btn btn-dark m-3">加入我們</button>
            </div>
        </div>
    </div>

   

</div>

@endsection