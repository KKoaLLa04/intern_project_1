<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= number_format(totalDay()) ?><sup style="font-size: 20px">VNĐ</sup></h3>

                    <p>Doanh thu ngày</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= number_format(totalWeek()) ?><sup style="font-size: 20px">VNĐ</sup></h3>

                    <p>Doanh thu trong 3 ngày</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?= number_format(totalMonth()) ?><sup style="font-size: 20px">VNĐ</sup></h3>

                    <p>Doanh thu tháng</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= number_format(totalYear()) ?><sup style="font-size: 20px">VNĐ</sup></h3>

                    <p>Doanh thu năm</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3><?= number_format(saleBook()) ?><sup style="font-size: 20px"></sup></h3>

                    <p>Số sách đã bán</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3><?= number_format(saleCourse()) ?><sup style="font-size: 20px"></sup></h3>

                    <p>Số khóa học đã bán</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= number_format(countCooperate()) ?><sup style="font-size: 20px"></sup></h3>

                    <p>Cộng tác viên</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3><?= number_format(countDocument()) ?><sup style="font-size: 20px"></sup></h3>

                    <p>Tài Liệu</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Thống kê thông tin chung
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 col-md-3 text-center">
                            <input type="text" class="knob" value="<?= countStudentChart() ?>" data-width="90" data-height="90" data-min="0" data-max="100" data-fgColor="#3c8dbc">

                            <div class="knob-label">Học viên</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-6 col-md-3 text-center">
                            <input type="text" class="knob" value="<?= countTeacherChart() ?>" data-width="90" data-height="90" data-min="0" data-max="25" data-fgColor="#f56954">

                            <div class="knob-label">Giảng Viên + QTV</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-6 col-md-3 text-center">
                            <input type="text" class="knob" value="<?= countCourseChart() ?>" data-min="0" data-max="150" data-width="90" data-min="0" data-max="100" data-height="90" data-fgColor="#00a65a">

                            <div class="knob-label">Khóa Học</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-6 col-md-3 text-center">
                            <input type="text" class="knob" value="<?= countLessonChart() ?>" data-width="90" data-height="90" data-min="0" data-max="1000" data-fgColor="#00c0ef">

                            <div class="knob-label">Bài học</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-6 text-center">
                            <input type="text" class="knob" value="<?= countNewsChart() ?>" data-width="90" data-height="90" data-min="0" data-max="100" data-fgColor="#932ab6">

                            <div class="knob-label">Tin tức</div>
                        </div>
                        <!-- ./col -->
                        <div class="col-6 text-center">
                            <input type="text" class="knob" value="<?= countCateChart() ?>" data-width="90" data-height="90" data-min="0" data-max="30" data-fgColor="#39CCCC">

                            <div class="knob-label">Danh mục khóa học</div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>