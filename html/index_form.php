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
    <div class="header">
        <div class="wrap">
            <div class="header__logo">
                <a href="/"><img src="/html/images/logo.png" alt=""></a>
            </div>
            <div class="header__title">
                자가도뇨보험 <strong class="header__point">2주년</strong> 기념!<br/>
                기쁨 <strong class="header__point">2배</strong> 쿠폰 이벤트
            </div>
            <div class="header__imgbox">
                <img src="/html/images/header-img.png" class="header__img" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container__info">
            <div class="wrap">
                <ul class="container__info-box">
                    <li class="container__info-item">
                        <h3 class="container__info-title">대상</h3>
                        2018년 12월 1일 부터, 80만원 이상 콜로플라스트 도뇨카테터 구매 고객
                    </li>
                    <li class="container__info-item">
                        <h3 class="container__info-title">내용</h3>
                        구매 확인 고객에게 3가지 쿠폰 중 1가지를 선택할 수 있는 기회 제공
                    </li>
                    <li class="container__info-item">
                        <h3 class="container__info-title">기간</h3>
                        2018년 12월 1일 ~ 2019년 1월 31일
                    </li>
                    <li class="container__info-item">
                        <h3 class="container__info-title container__info-title--no-absolute">3가지 행운 선물</h3>
                        <ul class="container__coupon-info">
                            <li class="container__coupon-item">
                                <h3 class="container__coupon-item-header">
                                    <span class="container__coupon-item-idx">쿠폰1.</span>
                                    “2+2! 넉넉한 수량 가즈아~!”
                                </h3>
                                행사 기간 구매 고객에게 스피디캐스 2박스 추가 증정<br/>
                                행사 기간 이후 재 구매 고객에게 스피디캐스 2박스 추가 증정
                            </li>
                            <li class="container__coupon-item">
                                <h3 class="container__coupon-item-header">
                                    <span class="container__coupon-item-idx">쿠폰2.</span>
                                    “건강한 방광과 장을 동시에”
                                </h3>
                                이번 구매 고객에게 페리스틴 50% 할인 혹은 직장카테터 20개 까지 50% 할인
                            </li>
                            <li class="container__coupon-item">
                                <h3 class="container__coupon-item-header">
                                    <span class="container__coupon-item-idx">쿠폰3.</span>
                                    “1+1! 여행 및 외출용 카테터 준비는 미리미리!”
                                </h3>
                                행사 기간 구매 고객에게 스피디캐스 컴팩 혹은 컴팩트세트 1박스 추가 증정<br/>
                                행사 기간 이후 재 구매 고객에게 스피디캐스 컴팩 혹은 컴팩트세트 1박스 추가 증정
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="event">
            <div class="wrap">
                <!-- page_1 폼 -->
                <form action="">
                    <div class="form event__form clearfix" style="margin-top:1em;">
                        <div class="float-left input event__form-inputbox">
                            <label for="couponbox" class="blind">쿠폰입력박스</label>
                            <input type="text" id="couponbox" class="event__form-input" placeholder="쿠폰번호를 입력해주세요.">
                        </div>
                        <div class="float-left btnbox event__form-btnbox">
                            <button type="submit" class="event__form-btn">쿠폰 등록</button>
                        </div>
                    </div>
                </form>

                <!-- page_2 당첨 확인 후 -->
                <div class="event__after-win" style="display:none;">
                    <div class="event__happy-box">
                        <img src="/html/images/happy-bg.png" class="event__happy-bg" alt="">
                        <div class="event__happy-text">
                            <h1 class="event__happy-text-title">당첨을 축하드립니다.</h1>
                            아래 선물 중에서 마음에 드는 물품을 선택해주세요
                        </div>
                    </div>
                    <ul class="event__selectbox clearfix">
                        <li class="event__select-item float-left">
                            <label for="eventItem1" class="event__select-itembox radio">
                                <input type="radio" name="eventItem" id="eventItem1" class="event__select-radio blind radio__input" data-item="1">
                                <div class="event__select-item-imgbox">
                                    <img src="/html/images/win-img-1.png" class="event__select-item-img" alt="넉넉한 수량 가즈아~!">
                                </div>
                                <span class="event_-select-radio radio__icon"></span>
                            </label>
                        </li>
                        <li class="event__select-item float-left">
                            <label for="eventItem2" class="event__select-itembox radio">
                                <input type="radio" name="eventItem" id="eventItem2" class="event__select-radio blind radio__input" data-item="2">
                                <div class="event__select-item-imgbox">
                                    <img src="/html/images/win-img-2.png" class="event__select-item-img" alt="건강한 방광과 장을 동시에_02">
                                </div>
                                <span class="event_-select-radio radio__icon"></span>
                            </label>
                        </li>
                        <li class="event__select-item float-left">
                            <label for="eventItem3" class="event__select-itembox radio">
                                <input type="radio" name="eventItem" id="eventItem3" class="event__select-radio blind radio__input" data-item="3">
                                <div class="event__select-item-imgbox">
                                    <img src="/html/images/win-img-3.png" class="event__select-item-img" alt="여행 및 외출용 카테터 준비는 미리미리_03">
                                </div>
                                <span class="event_-select-radio radio__icon"></span>
                            </label>
                        </li>
                    </ul>
                    <div class="event__select-info" id="event__select-item1" style="display:none;">
                        <div class="event__select-info-descbox">
                            <p class="event__select-info-desc">“건강한 방광과 장을 동시에＂로 장관리 제품 50% 할인을 선택 하셨습니다.</p>
                            <p class="event__select-info-desc">아래 구성품 중에서 한 가지를 선택해 주세요.</p>
                            <p class="event__select-info-desc">
                                유의사항 : 심한 변비나 치질 등이 있는 경우 사전에 치료를 받아야 할 수 있습니다.<br/>
                                페리스틴 사용 전에 물관장이 필요한지 의료인과 상담 후 결정하시길 바랍니다.
                            </p>
                        </div>
                        <div class="event__select-info-table">
                            <table>
                                <colgroup>
                                    <col width="30">
                                    <col class="event__select-info-table-col1">
                                    <col class="event__select-info-table-col2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="event__select-info-table-th">샘플 신청 제품</th>
                                    <th class="event__select-info-table-th">샘플 신청 수량</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $eventItem1Depth = array(
                                    array(
                                        'title' => '스피디캐스 남성 10사이즈/길이40cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 남성 12사이즈/길이40cm',
                                        'count' => '박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 남성 14사이즈/길이40cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 여성 8사이즈/길이20cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 여성 10사이즈/길이20cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 여성 12사이즈/길이20cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 여성 14사이즈/길이20cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 보이 8사이즈/길이30cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 보이 10사이즈/길이30cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 보이 12사이즈/길이30cm',
                                        'count' => '2박스(60개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 소아 6사이즈/길이20cm',
                                        'count' => '2박스(60개)',
                                    ),
                                )
                                ?>
                                <?php
                                for($i=0;$i<count($eventItem1Depth);$i++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <label for="eventItem1__dp<?=$i;?>" class="radio">
                                                <input type="radio" name="eventItem1-dp" id="eventItem1__dp<?=$i;?>"
                                                       class="blind radio__input">
                                                <span class="radio__icon"></span>
                                            </label>
                                        </td>
                                        <td class="event__select-info-table-td">
                                            <label for="eventItem1__dp<?=$i;?>"><?=$eventItem1Depth[$i]['title'];?></label>
                                        </td>
                                        <td class="event__select-info-table-td">
                                            <label for="eventItem1__dp<?=$i;?>"><?=$eventItem1Depth[$i]['count'];?></label>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="event__select-info" id="event__select-item2" style="display:none;">
                        <div class="event__select-info-descbox">
                            <p class="event__select-info-desc">“건강 방광과 장을 동시에＂로 장관리 제품 50% 할인을 선택 하셨습니다.</p>
                            <p class="event__select-info-desc">아래 구성품 중에서 한 가지를 선택해 주세요.</p>
                            <p class="event__select-info-desc">
                                유의사항 : 심한 변비나 치질 등이 있는 경우 사전에 치료를 받아야 할 수 있습니다.<br/>
                                페리스틴 사용 전에 물관장이 필요한지 의료인과 상담 후 결정하시길 바랍니다.
                            </p>
                        </div>
                        <div class="event__select-info-table">
                            <table>
                                <colgroup>
                                    <col width="30">
                                    <col class="event__select-info-table-col1">
                                    <col class="event__select-info-table-col2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="event__select-info-table-th">샘플 신청 제품</th>
                                    <th class="event__select-info-table-th">할인</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $eventItem2Depth = array(
                                    array(
                                        'title' => '물통 1개 + 펌프 1개 + 성인용 카테터 2개',
                                        'count' => '50% 할인',
                                    ),
                                    array(
                                        'title' => '성인용 카테터 10개',
                                    ),
                                    array(
                                        'title' => '소아용 카테터 10개',
                                    ),
                                )
                                ?>
                                <?php
                                for($i=0;$i<count($eventItem2Depth);$i++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <label for="eventItem2__dp<?=$i;?>" class="radio">
                                                <input type="radio" name="eventItem2-dp" id="eventItem2__dp<?=$i;?>"
                                                       class="blind radio__input">
                                                <span class="radio__icon"></span>
                                            </label>
                                        </td>
                                        <td class="event__select-info-table-td">
                                            <label for="eventItem2__dp<?=$i;?>"><?=$eventItem2Depth[$i]['title'];?></label>
                                        </td>
                                        <?php if ($i != 0) continue; ?>
                                        <td class="event__select-info-table-td" rowspan="3">
                                            <?=$eventItem2Depth[0]['count'];?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="event__select-info" id="event__select-item3" style="display:none;">
                        <div class="event__select-info-descbox">
                            <p class="event__select-info-desc">“여행 및 외출용 미리 준비＂로 컴팩 및 컴팩트 세트 1박스 추가 증정을 선택 하셨습니다.</p>
                            <p class="event__select-info-desc">아래 구성품 중에서 한 가지를 선택해 주세요.</p>
                        </div>
                        <div class="event__select-info-table">
                            <table>
                                <colgroup>
                                    <col width="30">
                                    <col class="event__select-info-table-col1">
                                    <col class="event__select-info-table-col2">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th class="event__select-info-table-th">샘플 신청 제품</th>
                                    <th class="event__select-info-table-th">샘플 신청 수량</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $eventItem3Depth = array(
                                    array(
                                        'title' => '스피디캐스 컴팩트 여성 12사이즈/길이14cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 여성 14사이즈/길이14cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 남성 12사이즈/길이33cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 세트 여성용 10사이즈/길이7cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 세트 여성용 12사이즈/길이7cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 세트 여성용 14사이즈/길이7cm',
                                        'count' => '1박스(30개)',
                                    ),
                                    array(
                                        'title' => '스피디캐스 컴팩트 세트 남성용 12사이즈/길이30cm',
                                        'count' => '1박스(30개)',
                                    ),
                                )
                                ?>
                                <?php
                                for($i=0;$i<count($eventItem3Depth);$i++) {
                                    ?>
                                    <tr>
                                        <td>
                                            <label for="eventItem3__dp<?=$i;?>" class="radio">
                                                <input type="radio" name="eventItem1-dp" id="eventItem3__dp<?=$i;?>"
                                                       class="blind radio__input">
                                                <span class="radio__icon"></span>
                                            </label>
                                        </td>
                                        <td class="event__select-info-table-td">
                                            <label for="eventItem3__dp<?=$i;?>"><?=$eventItem3Depth[$i]['title'];?></label>
                                        </td>
                                        <td class="event__select-info-table-td">
                                            <label for="eventItem3__dp<?=$i;?>"><?=$eventItem3Depth[$i]['count'];?></label>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="btnbox text-center event__btnbox">
                        <button class="btn btn--blue btn--full" onclick="popup.open('reg-adr')">배송지 등록</button>
                        <!--
                        <button class="btn btn--deepgray btn--full" onclick="popup.open('reg-adr')">배송지 등록 완료</button>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 카카오 팝업 -->
    <a href="#//" class="pop-sns">
        <img src="/html/images/icon-kakao.png" alt="">
    </a>
</div>
</body>
</html>