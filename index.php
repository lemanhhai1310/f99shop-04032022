<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<nav class="home__navbar uk-navbar-container uk-visible@m" uk-navbar uk-sticky uk-scrollspy-nav="closest: li; scroll: true; offset: 80;">
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#f99shoplagi">F99Shop là gì?</a></li>
            <li><a href="#quyenloi">Quyền lợi khi hợp tác</a></li>
            <li><a href="#tinhnang">Tính năng nổi bật</a></li>
            <li><a href="#hesinhthai">Hệ sinh thái sản phẩm</a></li>
            <li><a href="#camket">Cam kết từ F99</a></li>
        </ul>
    </div>
</nav>
<div class="home__banner uk-position-relative">
    <div class="uk-position-cover home__banner__overlay"></div>
    <div class="uk-position-relative home__banner__section">
        <div class="uk-container uk-container-xlarge">
            <div class="uk-child-width-1-3@m uk-flex-middle uk-flex-center" uk-grid>
                <div>
                    <div class="uk-text-center uk-section-small">
                        <div class="item__30">
                            <img src="images/Group5675951.png" alt="">
                        </div>
                        <div class="item__30">
                            <div class="item__16">
                                <div class="home__banner__boxLeft__title">LIÊN KẾT THƯƠNG HIỆU</div>
                            </div>
                            <div class="item__16">
                                <a href="" class="home__banner__boxLeft__btn uk-button uk-button-primary uk-border-pill"><span>Giúp bạn gia tăng 30% Doanh thu & Lợi nhuận</span></a>
                            </div>
                            <div class="item__16">
                                <div class="home__banner__boxLeft__txt">Giá rẻ - Hàng hóa có sẵn - Dịch vụ đổi trả linh hoạt</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-text-center">
                        <img src="images/Layer4xxx1.png" alt="">
                    </div>
                </div>
                <div>
                    <div class="home__banner__box uk-background-image@m" data-src="images/Union.png" uk-img>
                        <div class="home__banner__box1 uk-width-1-1 uk-height-1-1 uk-flex uk-flex-middle uk-section-small">
                            <div class=" uk-width-1-1">
                                <form action="" name="submit-to-google-sheet">
                                    <div class="item__30">
                                        <div class="uk-text-center home__banner__form__title">Đăng ký nhận gói ưu đãi lên tới <br class="uk-visible@m">
                                            <span>70.000.000</span> vnđ ngay tại đây</div>
                                    </div>
                                    <div class="item__30">
                                        <div class="item__16">
                                            <input class="uk-input home__banner__form__input uk-border-rounded" name="name" type="text" placeholder="* Họ tên chủ cửa hàng">
                                        </div>
                                        <div class="item__16">
                                            <input class="uk-input home__banner__form__input uk-border-rounded" name="phone" type="text" placeholder="* Số điện thoại">
                                        </div>
                                        <div class="item__16">
                                            <input class="uk-input home__banner__form__input uk-border-rounded" name="address" type="text" placeholder="Địa chỉ cửa hàng">
                                        </div>
                                    </div>
                                    <div class="item__30">
                                        <button type="submit" class="home__banner__form__btn uk-button uk-button-primary uk-width-1-1 uk-border-rounded"><span>ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</span></button>
                                        <div id="loader"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="f99shoplagi" class="home__f99lagi uk-section" uk-slider="center: false;autoplay: true;">
    <div class="uk-container uk-container-expand-right" uk-toggle="cls: uk-padding-remove-right; mode: media; media: @m">
        <div class="uk-flex-middle uk-grid-small uk-grid-30-m" uk-grid>
            <div class="uk-width-auto@m">
                <div class="home__f99lagi__box1">
                    <div class="item__30">
                        <div class="item__16">
                            <div class="home__f99lagi__title">f99Shop là Gì?</div>
                        </div>
                        <div class="item__16">
                            <div class="home__f99lagi__divider"></div>
                        </div>
                    </div>
                    <div class="item__30 uk-visible@m">
                        <a class="home__f99lagi__icon home__f99lagi__icon--left" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="home__f99lagi__icon home__f99lagi__icon--right" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <div class="item__30">
                        <ul class="home__f99lagi__box1__list uk-list uk-list-bullet">
                            <li><span>F99Shop FarmTech - Chuỗi thực phẩm</span> là chuỗi cửa hàng liên kết thương hiệu của F99 - Sàn thương mại điện tử chuyên cung cấp trái cây, thực phẩm sạch</li>
                            <li>Được xây dựng, phát triển để hợp tác và đồng hành với các tiểu thương, đơn vị kinh doanh nhỏ lẻ trong ngành cung ứng trái cây, thực phẩm, góp phần tối ưu quy trình và đem đến lợi ích cho các đối tác nhà bán.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-position-relative">
                    <div class="home__f99lagi__boxSlider uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-grid-10 uk-grid-30-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/image6.png',
                                    'name' => 'Hoa quả nhập khẩu Lâm Quyên Fr...',
                                    'address' => 'Số 4-A29 Nghĩa Tân, Cầu Giấy, Hà Nội',
                                ),
                                array(
                                    'src' => 'images/image62.png',
                                    'name' => 'Cửa hàng trái cây Dương Đào',
                                    'address' => 'Số 4-A29 Nghĩa Tân, Cầu Giấy, Hà Nội',
                                ),
                                array(
                                    'src' => 'images/image63.png',
                                    'name' => 'Hoa quả nhập khẩu Lâm Quyên Fr...',
                                    'address' => 'Số 4-A29 Nghĩa Tân, Cầu Giấy, Hà Nội',
                                ),
                                array(
                                    'src' => 'images/image64.png',
                                    'name' => 'Hoa quả nhập khẩu Lâm Quyên Fr...',
                                    'address' => 'Số 4-A29 Nghĩa Tân, Cầu Giấy, Hà Nội',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <li class="uk-width-auto@m uk-width-2-3">
                                    <div class="uk-cover-container home__f99lagi__coverImg">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                        <canvas width="370" height="540"></canvas>
                                        <div class="home__f99lagi__coverImg__overlay uk-position-cover"></div>
                                        <div class="home__f99lagi__coverImg__box uk-padding-small uk-position-bottom">
                                            <div class="home__f99lagi__coverImg__address line-clamp-1 item__8"><?= $v['address'] ?></div>
                                            <div class="home__f99lagi__coverImg__name line-clamp-1 item__8"><?= $v['name'] ?></div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="uk-hidden@m uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    <ul class="uk-hidden@m uk-slider-nav uk-dotnav uk-flex-center uk-position-small"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="quyenloi" class="uk-section home__quyenloi uk-position-relative">
    <img class="uk-position-top-left home__quyenloi__bg uk-visible@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true" src="images/image19.png" alt="">
    <div class="uk-container">
        <div class="item__60">
            <div class="item__30">
                <div class="home__f99lagi__title uk-text-center">Quyền lợi Khi Hợp Tác Với <br class="uk-visible@m">
                    F99Shop Farmtech - Chuỗi thực Phẩm</div>
            </div>
            <div class="item__30">
                <div class="home__f99lagi__divider uk-margin-auto"></div>
            </div>
        </div>
        <div class="item__60">
            <div class="uk-child-width-1-5@m" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: .home__quyenloi__box; delay: 300; repeat: false">
                <?php
                $data = array(
                    array(
                        'src' => 'images/img1.png',
                        'txt' => '1. Hỗ trợ gói lắp đặt bảng biển và Marketing lên tới <span>70 triệu đồng.</span>',
                    ),
                    array(
                        'src' => 'images/img2.png',
                        'txt' => '2. Nhập trái cây với mức giá tốt nhất, giúp chủ cửa hàng gia tăng <span>5 - 15%</span> lợi nhuận bán hàng.',
                    ),
                    array(
                        'src' => 'images/img3.png',
                        'txt' => '3. Áp dụng giải pháp Marketing Online <span>miễn phí</span>, hiện đại thu hút khách hàng',
                    ),
                    array(
                        'src' => 'images/img4.png',
                        'txt' => '4. Cung cấp giải pháp công nghệ tiên tiến. Giao diện ứng dụng <span>đơn giản, dễ sử dụng.</span>',
                    ),
                    array(
                        'src' => 'images/img5.png',
                        'txt' => '5. Được tham gia <span>đào tạo về dịch vụ, bài trí sắp xếp hàng hóa, hỗ trợ</span> khai trương chuyên nghiệp.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-text-center home__quyenloi__box" uk-scrollspy-class="<?= ($k%2==0)?'uk-animation-slide-top':'' ?>">
                        <div class="item__24">
                            <img src="<?= $v['src'] ?>" alt="">
                        </div>
                        <div class="item__24">
                            <div class="home__quyenloi__txt"><?= $v['txt'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="item__60 uk-text-center">
            <button style="text-transform: inherit" class="home__banner__form__btn uk-button uk-button-primary uk-border-rounded"><span>Ưu đãi của F99Shop</span></button>
        </div>
    </div>
</div>
<div id="tinhnang" class="home__tinhnang uk-background-blend-multiply uk-light" data-src="images/image11.png" uk-img>
    <div class="uk-container uk-container-expand-left">
        <div class="uk-child-width-auto uk-flex-right uk-flex-middle" uk-grid>
            <div class="uk-width-expand uk-visible@m">
                <div class="uk-text-right">
                    <img src="images/SimpleMockupFreeScene1.png" alt="">
                </div>
            </div>
            <div class="uk-width-auto@m">
                <div class="home__tinhnang__section uk-section">
                    <div class="item__43">
                        <div class="item__30">
                            <div class="home__f99lagi__title">Những Tính Năng Nổi Bật <br class="uk-visible@m"> Của F99Shop</div>
                        </div>
                        <div class="item__30">
                            <div class="home__f99lagi__divider"></div>
                        </div>
                    </div>
                    <div class="item__43">
                        <ul class="uk-list home__tinhnang__list uk-list-circle">
                            <li>Dễ dàng đặt hàng mọi lúc mọi nơi</li>
                            <li>Cập nhật giá tốt mỗi ngày với với loạt chương trình ưu đãi hấp dẫn</li>
                            <li>Giao hàng siêu tốc: Đơn hàng được xử lý và giao ngay trong ngày</li>
                            <li>Dễ dàng theo dõi trạng thái đơn hàng theo thời gian thực để tối ưu hiệu quả kinh doanh</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="" class="home__hinhanh uk-position-relative">
    <img class="home__hinhanh__bg uk-position-top-right uk-visible@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true" src="images/image20.png" alt="">
    <div class="uk-section">
        <div class="uk-container">
            <div class="item__30">
                <div class="home__f99lagi__title uk-text-center">Hình ảnh các cửa hàng trước và sau <br class="uk-visible@m">
                    khi tham gia vào hệ thống f99Shop</div>
            </div>
            <div class="item__30">
                <div class="home__f99lagi__divider uk-margin-auto"></div>
            </div>
        </div>
    </div>
    <div class="slider-container">
        <div class="slider-content-wrapper uk-grid uk-flex-nowrap uk-grid-8 uk-child-width-auto" style="width: max-content">
            <?php for ($j=1;$j<=2;$j++): ?>
            <div>
                <div class="uk-grid-8 uk-child-width-auto uk-flex-nowrap" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'img_before' => 'images/Artboard9@2x2.png',
                            'img_after' => 'images/Artboard9@2x3.png',
                        ),
                        array(
                            'img_before' => 'images/Artboard9@2x4.png',
                            'img_after' => 'images/Artboard9@2x5.png',
                        ),

                        array(
                            'img_before' => 'images/Artboard9@2x2.png',
                            'img_after' => 'images/Artboard9@2x3.png',
                        ),
                        array(
                            'img_before' => 'images/Artboard9@2x4.png',
                            'img_after' => 'images/Artboard9@2x5.png',
                        ),

                        array(
                            'img_before' => 'images/Artboard9@2x2.png',
                            'img_after' => 'images/Artboard9@2x3.png',
                        ),
                        array(
                            'img_before' => 'images/Artboard9@2x4.png',
                            'img_after' => 'images/Artboard9@2x5.png',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <div class="">
                            <div class="uk-position-relative">
                                <span class="home__hinhanh__icon uk-position-center"></span>
                                <div class="uk-grid-8 uk-child-width-auto uk-flex-nowrap" uk-grid>
                                    <div class="">
                                        <div class="uk-cover-container" style="max-width: inherit">
                                            <img src="<?= $v['img_before'] ?>" alt="" uk-cover="">
                                            <canvas class="uk-visible@m" width="474" height="504"></canvas>
                                            <canvas class="uk-hidden@m" width="300" height="318"></canvas>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="uk-cover-container" style="max-width: inherit">
                                            <img src="<?= $v['img_after'] ?>" alt="" uk-cover="">
                                            <canvas class="uk-visible@m" width="474" height="504"></canvas>
                                            <canvas class="uk-hidden@m" width="300" height="318"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div id="hesinhthai" class="uk-position-relative uk-height-viewport">
    <div class="home__hesinhthai__bg uk-position-top uk-background-top-center uk-background-norepeat" data-src="images/image22.png" uk-img></div>
    <div class="home__hesinhthai__section uk-section uk-position-relative">
        <div class="item__100">
            <div class="item__60">
                <div class="item__30 uk-light">
                    <div class="item__16">
                        <div class="home__f99lagi__title uk-text-center">Hệ Sinh Thái sản phẩm f99Shop</div>
                    </div>
                    <div class="item__16">
                        <div class="home__hesinhthai__txt uk-text-center">F99Shop chuyên cung cấp các loại hoa quả nội địa đa dạng theo <br class="uk-visible@m"> mùa và hoa quả nhập khẩu giá tốt nhất thị trường</div>
                    </div>
                </div>
                <div class="item__30 uk-light">
                    <div class="home__f99lagi__divider uk-margin-auto"></div>
                </div>
            </div>
            <div class="item__60">
                <div class="uk-container">
                    <div uk-slider="autoplay: true">

                        <div class="uk-position-relative">

                            <div class="uk-slider-container-offset uk-slider-container uk-light">
                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid-match" uk-grid>
                                    <?php
                                    $data = array(
                                        array(
                                            'src' => 'images/taomy.png',
                                            'txt' => 'Táo Mỹ',
                                        ),
                                        array(
                                            'src' => 'images/dautay.png',
                                            'txt' => 'Dâu Tây Hàn',
                                        ),
                                        array(
                                            'src' => 'images/vietquat.png',
                                            'txt' => 'Việt Quất',
                                        ),
                                        array(
                                            'src' => 'images/nhouc.png',
                                            'txt' => 'Nho Úc',
                                        ),
                                        array(
                                            'src' => 'images/camuc.png',
                                            'txt' => 'Cam Úc',
                                        ),
                                        array(
                                            'src' => 'images/nhomy.png',
                                            'txt' => 'Nho Mỹ',
                                        ),
                                        array(
                                            'src' => 'images/cherry.png',
                                            'txt' => 'Cherry',
                                        ),
                                        array(
                                            'src' => 'images/duanhat.png',
                                            'txt' => 'Dưa Nhật',
                                        ),
                                        array(
                                            'src' => 'images/quytuc.png',
                                            'txt' => 'Quýt Úc',
                                        ),
                                        array(
                                            'src' => 'images/lehan.png',
                                            'txt' => 'Lê Hàn',
                                        ),
                                        array(
                                            'src' => 'images/cammy.png',
                                            'txt' => 'Cam Mỹ',
                                        ),
                                        array(
                                            'src' => 'images/nadailoan.png',
                                            'txt' => 'Na Đài Loan',
                                        ),

                                        array(
                                            'src' => 'images/kiwiNewzealand.png',
                                            'txt' => 'Kiwi Newzealand',
                                        ),
                                        array(
                                            'src' => 'images/luuaicap.png',
                                            'txt' => 'Lựu Ai Cập',
                                        ),
                                        array(
                                            'src' => 'images/dualuoidailoan.png',
                                            'txt' => 'Dưa Lưới Đài Loan',
                                        ),
                                        array(
                                            'src' => 'images/xoai.png',
                                            'txt' => 'Xoài',
                                        ),
                                        array(
                                            'src' => 'images/vai.png',
                                            'txt' => 'Vải',
                                        ),
                                        array(
                                            'src' => 'images/camcanh.png',
                                            'txt' => 'Cam Canh',
                                        ),
                                        array(
                                            'src' => 'images/buoi.png',
                                            'txt' => 'Bưởi',
                                        ),
                                        array(
                                            'src' => 'images/le.png',
                                            'txt' => 'Lê',
                                        ),
                                        array(
                                            'src' => 'images/thanhlong.png',
                                            'txt' => 'Thanh Long',
                                        ),
                                        array(
                                            'src' => 'images/tao.png',
                                            'txt' => 'Táo',
                                        ),
                                        array(
                                            'src' => 'images/na.png',
                                            'txt' => 'Na',
                                        ),
                                        array(
                                            'src' => 'images/quyt.png',
                                            'txt' => 'Quýt',
                                        ),
                                        array(
                                            'src' => 'images/duaxiemxo.png',
                                            'txt' => 'Dừa Xiêm Sọ',
                                        ),
                                        array(
                                            'src' => 'images/camxanh.png',
                                            'txt' => 'Cam Sành',
                                        ),
                                        array(
                                            'src' => 'images/duahau.png',
                                            'txt' => 'Dưa Hấu',
                                        ),
                                        array(
                                            'src' => 'images/dualuoivovang.png',
                                            'txt' => 'Dưa Lưới Vỏ Vàng',
                                        ),
                                        array(
                                            'src' => 'images/mangcut.png',
                                            'txt' => 'Măng Cụt',
                                        ),
                                        array(
                                            'src' => 'images/camcaophong.png',
                                            'txt' => 'Cam Cao Phong',
                                        ),
                                    );
                                    foreach ($data as $k=>$v): ?>
                                        <?php if ($k%2==0): ?>
                                        <li>
                                        <div class="uk-grid-10 uk-grid-30-m uk-child-width-1-1 uk-grid-match" uk-grid>
                                            <div>
                                                <div class="home__hesinhthai__card uk-card uk-card-default uk-border-rounded uk-overflow-hidden">
                                                    <div class="uk-cover-container">
                                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                        <canvas width="270" height="220"></canvas>
                                                    </div>
                                                    <div class="home__hesinhthai__card__body uk-card-body uk-text-center uk-padding-small">
                                                        <div class="home__hesinhthai__card__txt"><?= $v['txt'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div>
                                                <div class="home__hesinhthai__card uk-card uk-card-default uk-border-rounded uk-overflow-hidden">
                                                    <div class="uk-cover-container">
                                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                        <canvas width="270" height="220"></canvas>
                                                    </div>
                                                    <div class="home__hesinhthai__card__body uk-card-body uk-text-center uk-padding-small">
                                                        <div class="home__hesinhthai__card__txt"><?= $v['txt'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="uk-hidden@s uk-light">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                            <div class="uk-visible@s">
                                <a class="home__hesinhthai__icon home__hesinhthai__icon--left uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="home__hesinhthai__icon home__hesinhthai__icon--right uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@m"></ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="item__100">
            <div class="item__60">
                <div class="item__30">
                    <div class="home__f99lagi__title uk-text-center">Các bước đăng ký tham gia chuỗi <br class="uk-visible@m">
                        cửa hàng thương hiệu f99Shop</div>
                </div>
                <div class="item__30">
                    <div class="home__f99lagi__divider uk-margin-auto"></div>
                </div>
            </div>
            <div class="item__60">
                <div class="uk-container">
                    <div class="uk-child-width-1-6@m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/ix1.png',
                                'txt' => 'Đồng thuận hợp tác và gửi thông tin về F99Shop',
                            ),
                            array(
                                'src' => 'images/ix2.png',
                                'txt' => 'Lựa chọn sản phẩm và các gói chính sách hỗ trợ để ký hợp đồng cùng F99Shop',
                            ),
                            array(
                                'src' => 'images/ix3.png',
                                'txt' => 'Đồng phối hợp với F99Shop tái khai trương cửa hàng ',
                            ),
                            array(
                                'src' => 'images/ix4.png',
                                'txt' => 'Tham gia các khóa đào tạo kỹ năng toàn diện cho chủ Shop',
                            ),
                            array(
                                'src' => 'images/ix5.png',
                                'txt' => 'Trở thành Đối tác Nhà bán trên sàn TMĐT F99 để hưởng tối đa lợi ích hỗ trợ',
                            ),
                            array(
                                'src' => 'images/ix6.png',
                                'txt' => 'Bán hàng, mở rộng tệp khách hàng và phát triển thương hiệu',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="uk-text-center">
                                    <div class="item__16">
                                        <div class="uk-position-relative">
                                            <img src="images/dk1.png" alt="">
                                            <img class="uk-position-center" style="scale: 1" src="<?= $v['src'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="item__16">
                                        <div class="uk-position-relative home__hesinhthai__line"><span><?= $k+1 ?></span></div>
                                    </div>
                                    <div class="item__16">
                                        <div class="home__quyenloi__txt"><?= $v['txt'] ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="camket" class="uk-position-relative">
    <div class="uk-position-cover home__camket__overlay"></div>
    <div class="home__camket uk-section uk-position-relative">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-flex-middle" uk-grid>
                <div>
                    <div class="item__60">
                        <div class="item__30">
                            <div class="home__f99lagi__title">Cam kết từ f99Shop</div>
                        </div>
                        <div class="item__30">
                            <div class="home__f99lagi__divider"></div>
                        </div>
                        <div class="item__30">
                            <div class="home__camket__txt">Các chính sách được F99Shop xây dựng nhằm hỗ trợ <br class="uk-visible@m"> tối đa cho Quý đối tác</div>
                        </div>
                    </div>
                    <div class="item__60">
                        <ul class="uk-list home__camket__list">
                            <li>Không thu tiền chuyển nhượng</li>
                            <li>Không chia sẻ hoa hồng</li>
                            <li>Không bắt buộc đặt hàng của F99 đối với các mặt hàng giá trị cao</li>
                            <li>Không mất phí tham gia hệ thống</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true" src="images/Group5675949.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer__top uk-section uk-background-norepeat uk-background-bottom-right" data-src="images/image24.png" uk-img>
        <div class="uk-container">
            <div class="item__60">
                <div class="footer__top__card uk-card uk-card-body uk-flex uk-flex-middle uk-background-norepeat uk-background-center-center uk-background-cover" data-src="images/Rectangle8179.png" uk-img>
                    <div style="min-height: inherit" class="home__banner__box1 uk-width-1-1 uk-flex uk-flex-middle uk-flex-center">
                        <div class="uk-width-2-5@m">
                            <form name="submit-to-google-sheet-bottom">
                                <div class="item__30 uk-light">
                                    <div class="uk-text-center home__banner__form__title">Đăng ký nhận gói ưu đãi lên tới <br class="uk-visible@m">
                                        <span>70.000.000</span> vnđ ngay tại đây</div>
                                </div>
                                <div class="item__30">
                                    <div class="item__16">
                                        <input class="uk-input home__banner__form__input uk-border-rounded" name="name" type="text" placeholder="* Họ tên chủ cửa hàng">
                                    </div>
                                    <div class="item__16">
                                        <input class="uk-input home__banner__form__input uk-border-rounded" name="phone" type="tel" placeholder="* Số điện thoại">
                                    </div>
                                    <div class="item__16">
                                        <input class="uk-input home__banner__form__input uk-border-rounded" name="address" type="text" placeholder="Địa chỉ cửa hàng">
                                    </div>
                                </div>
                                <div class="item__30">
                                    <button type="submit" class="home__banner__form__btn uk-button uk-button-primary uk-width-1-1 uk-border-rounded"><span>ĐĂNG KÝ NHẬN ƯU ĐÃI NGAY</span></button>
                                    <div id="loader1"></div>
                                </div>
                            </form>
                            <script>
                                const scriptURL = 'https://script.google.com/macros/s/AKfycbw5qJL-6rfwLyOMDfMKNhVx5JSm94Y_p1ejKHQ1DwYP17JLDcoXXleCIfspJNIC1imocQ/exec'
                                function showSuccessMessage (response) {
                                    console.log('Success!', response);
                                    UIkit.modal('#modal-center-Success-form').show();
                                    $(".home__banner__form__input").val('');
                                    $('#loader').hide();
                                    $('#loader1').hide();
                                    $(".home__banner__form__input").removeClass('valid');
                                }

                                $(function() {
                                    // Initialize form validation on the registration form.
                                    // It has the name attribute "registration"
                                    $("form[name='submit-to-google-sheet']").validate({
                                        // Specify validation rules
                                        rules: {
                                            // The key name on the left side is the name attribute
                                            // of an input field. Validation rules are defined
                                            // on the right side
                                            name: {
                                                required: true,
                                            },
                                            phone: {
                                                required: true,
                                                minlength: 10,
                                                maxlength: 10,
                                                number: true
                                            },
                                            address: {
                                                required: false,
                                            },
                                        },
                                        // Specify validation error messages
                                        messages: {
                                            name: "Vui lòng nhập họ và tên",
                                            phone: {
                                                required: "Vui lòng nhập số điện thoại",
                                                number: "Số điện thoại không đúng định dạng",
                                                minlength: "Your phone must be at least 10 characters long",
                                            },
                                        },
                                        // Make sure the form is submitted to the destination defined
                                        // in the "action" attribute of the form when valid
                                        submitHandler: function(form) {
                                            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                                                .then(response => showSuccessMessage(response))
                                                .catch(error => console.error('Error!', error.message))
                                            $('#loader').show();
                                        },
                                        success: function (element) {
                                            // $(".home__banner__form__input").val('');
                                        }
                                    });
                                    $("form[name='submit-to-google-sheet-bottom']").validate({
                                        // Specify validation rules
                                        rules: {
                                            // The key name on the left side is the name attribute
                                            // of an input field. Validation rules are defined
                                            // on the right side
                                            name: {
                                                required: true,
                                            },
                                            phone: {
                                                required: true,
                                                minlength: 10,
                                                maxlength: 10,
                                                number: true
                                            },
                                            address: {
                                                required: false,
                                            },
                                        },
                                        // Specify validation error messages
                                        messages: {
                                            name: "Vui lòng nhập họ và tên",
                                            phone: {
                                                required: "Vui lòng nhập số điện thoại",
                                                number: "Số điện thoại không đúng định dạng",
                                                minlength: "Your phone must be at least 10 characters long",
                                            },
                                        },
                                        // Make sure the form is submitted to the destination defined
                                        // in the "action" attribute of the form when valid
                                        submitHandler: function(form) {
                                            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                                                .then(response => showSuccessMessage(response))
                                                .catch(error => console.error('Error!', error.message))
                                            $('#loader1').show();
                                        },
                                        success: function (element) {
                                            // $(".home__banner__form__input").val('');
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item__60">
                <div class="uk-child-width-1-3@m uk-grid-small" uk-grid>
                    <div>
                        <div class="item__30">
                            <img src="images/logo.png" alt="">
                        </div>
                        <div class="item__30">
                            <ul class="uk-list footer__top__list1">
                                <li class="map">Địa chỉ: Tầng 2 - Tòa nhà CT2, Ban cơ yếu Chính Phủ, Khu đất M2 đường Khuất Duy Tiến, P. Nhân Chính, Q. Thanh Xuân, Hà Nội</li>
                                <li class="phone">1800 282 899</li>
                                <li class="mail">phongkinhdoanh@f99corp.com</li>
                                <li class="web">www.f99.com.vn</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="item__30">
                            <div class="footer__top__title">Menu</div>
                        </div>
                        <div class="item__30">
                            <ul class="uk-list uk-list-bullet footer__top__list2" uk-scrollspy-nav="closest: li; scroll: true; offset: 80;">
                                <li class="uk-active"><a href="#f99shoplagi">F99Shop là gì?</a></li>
                                <li><a href="#quyenloi">Quyền lợi khi hợp tác</a></li>
                                <li><a href="#tinhnang">Tính năng nổi bật</a></li>
                                <li><a href="#hesinhthai">Hệ sinh thái sản phẩm</a></li>
                                <li><a href="#camket">Cam kết từ F99</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="item__30">
                            <div class="footer__top__title">Bản đồ</div>
                        </div>
                        <div class="item__30">
                            <div class="uk-cover-container">
                                <iframe class="uk-position-cover" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1646251027293!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" uk-responsive></iframe>
                                <canvas width="400" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom uk-section-xsmall uk-text-center">
        <div class="uk-container">
            <div class="footer__bottom__txt">© 2022 F99Shop. All Rights Reserved.</div>
        </div>
    </div>
</div>
<div class="uk-position-fixed uk-position-center-right uk-position-small home__boxfix uk-visible@l">
    <div class="item__20 uk-hidden">
        <a href="" class="home__icon home__icon--phone"></a>
    </div>
    <div class="item__20">
        <a href="https://www.facebook.com/F99Shophethongcuahangthucphamcongnghe" target="_blank" class="home__icon home__icon--fb"></a>
    </div>
</div>
<div id="modal-center-Success-form" class="uk-flex-top modal1" uk-modal>
    <div class="uk-modal-dialog modal1__dialog uk-modal-body uk-margin-auto-vertical uk-background-norepeat uk-background-cover" data-src="images/Rectangle8179.png" uk-img>

        <button class="uk-modal-close-default uk-light" type="button" uk-close></button>
        <div class="uk-text-center uk-section">
            <div class="item__60 uk-light">
                <div class="item__30">
                    <div class="home__f99lagi__title">ĐĂNG KÝ THÀNH CÔNG !</div>
                </div>
                <div class="item__30">
                    <div class="home__f99lagi__divider uk-margin-auto"></div>
                </div>
            </div>
            <div class="item__60">
                <div class="item__30 uk-light">
                    <div>F99Shop cám ơn quý khách hàng đã để lại thông tin quan tâm. <br class="uk-visible@m">
                        Chúng tôi sẽ liên hệ quý khách trong thời gian sớm nhất! <br class="uk-visible@m">
                        Để cập nhật các ưu đãi mới hấp dẫn của F99Shop, mời quý khách <br class="uk-visible@m">
                        hàng theo dõi tại đây</div>
                </div>
                <div class="item__30">
                    <a href="https://www.facebook.com/F99Shophethongcuahangthucphamcongnghe" class="home__banner__form__btn uk-button uk-button-primary uk-border-rounded"><span>TỚI FANPAGE F99SHOP NGAY</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // UIkit.modal('#modal-center-Success-form').show();
</script>
<?php require "template-parts/layouts/footer.php"; ?>