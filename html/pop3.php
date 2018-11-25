<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/html/css/main.css">
    <script src="/html/js/vender/jquery.js"></script>
    <script src="/html/js/func.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="i2-header">
        <div class="wrap">
            <div class="header__title-box">
                <span class="header__title-desc">EVENT</span>
                <h1 class="header__title">
                    <img src="/html/images/index2-header-text.png" alt="이벤트 참여 방법">
                </h1>
            </div>
            <ul class="header__stepbox">
                <li class="header__step-li">
                    <h2 class="header__step-idx">STEP 01</h2>
                    <div class="header__step-item">
                        구매 후 콜로플라스트 케어(소비자상담실)<br/>
                        <a href="tel:1588-7866"><strong>1588-7866</strong></a> 전화 및 <strong>카톡 상담</strong>을 이용하시면!
                    </div>
                </li>
                <li class="header__step-li">
                    <h2 class="header__step-idx">STEP 02</h2>
                    <div class="header__step-item">
                        구매 이력 확인 및 구매 영수증 등<br/>
                        증빙자료를 통해 대상자를 확인 한 뒤!
                    </div>
                </li>
                <li class="header__step-li">
                    <h2 class="header__step-idx">STEP 03</h2>
                    <div class="header__step-item">
                        콜로플라스트에서 이벤트 참여가 가능한<br/>
                        쿠폰을 고객님의 카카오톡으로 발송!
                    </div>
                </li>
                <li class="header__step-li">
                    <h2 class="header__step-idx">STEP 04</h2>
                    <div class="header__step-item">
                        발급 받은 쿠폰을 콜로플라스트<br/>
                        이벤트 페이지 접속 후 응모하면 끝!
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="i2-container">
        <div class="wrap">
            <div class="container__title-box">
                <h1 class="container__title">
                    <img src="/html/images/index2-body-text.png" alt="꼭 알아두세요.">
                </h1>
            </div>
            <ul class="container__info">
                <li class="container__info-item">자가도뇨 카테터 80만원이상 구매자에 한함</li>
                <li class="container__info-item"> 동일인 3개월 내 중복 응모 불가</li>
                <li class="container__info-item">2018년 11월 1일 이후 구매자 부터 적용 (입금일 기준)</li>
                <li class="container__info-item">의료기 샵 및 대리점 구매자는 구매 제품, 날짜, 및 구매 금액 등이 기재된 영수증 증빙 필요</li>
                <li class="container__info-item">발행 받은 쿠폰의 사용 기간은 2019년 6월 30일까지</li>
                <li class="container__info-item">신청자가 많아 쿠폰 발행 및 상품 배송은 주차별로 순차적으로 이루어지게 되니 양해 부탁드립니다.</li>
                <li class="container__info-item">이벤트로 받은 제품 개봉 시 환불이나 교환이 불가합니다.</li>
                <li class="container__info-item">배송되는 샘플의 경우 경우에 따라 유효기간이 1년 이내의 제품이 발송될 수 있습니다. <br/>유효기간이 임박한 제품부터 먼저 사용을 부탁드립니다.</li>
            </ul>
            <div class="btnbox container__btnbox">
                <button type="button" class="btn btn--blue btn--full">
                    이벤트 참여를 통해 선택하신 물품을 변경하고 싶으신가요?<i></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="blackbg" onclick="popup.close()"></div>
<div class="popup ck-event">
    <div class="popup__header">
        <button class="popup__close" onclick="popup.close()">닫기</button>
        <h1 class="popup__title popup__title--small">
            이벤트 참여를 통해 선택해주신<br/>
            물품을 변경 할 수 있습니다.
        </h1>
    </div>
    <div class="popup__footer">
        <div class="btnbox">
            <button type="submit" class="btn btn--blue btn--full">확인</button>
        </div>
    </div>
</div>
</body>
</html>