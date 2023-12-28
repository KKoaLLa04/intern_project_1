<div class="container-fluid">
    <h4>Thiết lập trang giới thiệu</h4>
    <hr>
    <div class="row">
        <div class="col-2">
            <h5>Giới thiệu chung</h5>
            <ol>
                <li class="py-2"><a href="?module=options&action=introduce&child=1">Giới
                        thiệu</a>
                </li>
                <li class="py-2"><a href="?module=options&action=introduce&child=2">Giảng viên nổi tiếng</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=3">Học viên xuất sắc</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=4">Chính sách khuyến học</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=5">Liên hệ hợp tác</a></li>
            </ol>
            <h5>Chính sách</h5>
            <ol>
                <li class="py-2"><a href="?module=options&action=introduce&child=6">Chính sách và quy định</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=7">Chính sách bảo mật</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=8">Vận chuyển & thanh toán</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=9">Chính sách đổi trả</a></li>
                <li class="py-2"><a href="?module=options&action=introduce&child=10">Hướng dẫn đặt hàng</a></li>
            </ol>
        </div>
        <div class="col-10">
            <?php
            if (!empty($_GET['child'])) {
                $child = $_GET['child'];
            } else {
                $child = 1;
            }
            switch ($child) {
                case '1':
                    require_once './introduce/controller/introduce.php';
                    break;

                case '4':
                    require_once './introduce/controller/polite_study.php';
                    break;
                case '5':
                    require_once './introduce/controller/cooperate.php';
                    break;
                case '6':
                    require_once './introduce/controller/polite_general.php';
                    break;
                case '7':
                    require_once './introduce/controller/polite_security.php';
                    break;
                case '8':
                    require_once './introduce/controller/polite_paypal.php';
                    break;
                case '9':
                    require_once './introduce/controller/polite_exchange.php';
                    break;
                case '10':
                    require_once './introduce/controller/polite_order.php';
                    break;
                default:
                    require_once './introduce/controller/introduce.php';
                    break;
            }
            ?>
        </div>
    </div>
</div>