 <?php
    if (empty(isLoginTeacher())) {
        setFlashData('msg', 'Bạn không có quyền truy cập');
        setFlashData('msg_type', 'danger');
        redirect(_WEB_HOST_ROOT);
    } else {
        $loginInfo = isLoginTeacher();
    }

    $permissionData = permissionData();

    // check book permission
    $checkBookLists = checkPermission($permissionData, 'book', 'Xem');
    $checkBookAdd = checkPermission($permissionData, 'book', 'Thêm');

    // check book_category permission
    $checkBookCateLists = checkPermission($permissionData, 'book_category', 'Xem');
    $checkBookCateAdd = checkPermission($permissionData, 'book_category', 'Thêm');

    // check contact permission
    $checkContactLists = checkPermission($permissionData, 'contact', 'Xem');

    // check document permission
    $checkDocumentLists = checkPermission($permissionData, 'document', 'Xem');
    $checkDocumentAdd = checkPermission($permissionData, 'document', 'Thêm');
    $checkDocumentEdit = checkPermission($permissionData, 'document', 'Sửa');

    // check exam permission
    $checkExamLists = checkPermission($permissionData, 'exam', 'Xem');
    $checkExamAdd = checkPermission($permissionData, 'exam', 'Thêm');

    // check exam_category permission
    $checkExamCateLists = checkPermission($permissionData, 'exam_category', 'Xem');

    // check group permission (Phân quyền)
    $checkGroup = checkPermission($permissionData, 'groups', 'Xem');

    // check lesson permission
    $checkLessonLists = checkPermission($permissionData, 'lesson', 'Xem');
    $checkLessonAdd = checkPermission($permissionData, 'lesson', 'Thêm');

    // Check module permission
    $checkModuleLists = checkPermission($permissionData, 'module', 'Xem');
    $checkModuleAdd = checkPermission($permissionData, 'module', 'Thêm');

    // check news permission 
    $checkNewsLists = checkPermission($permissionData, 'news', 'Xem');
    $checkNewsAdd = checkPermission($permissionData, 'news', 'Thêm');

    // check news_category permission
    $checkNewsCateList = checkPermission($permissionData, 'news_category', 'Xem');
    $checkNewsCateAdd = checkPermission($permissionData, 'news_category', 'Thêm');

    // check student permission
    $checkStudentLists = checkPermission($permissionData, 'student', 'Xem');
    $checkStudentAdd = checkPermission($permissionData, 'student', 'Thêm');

    // check subject permission
    $checkSubjectLists = checkPermission($permissionData, 'subject', 'Xem');
    $checkSubjectAdd = checkPermission($permissionData, 'subject', 'Thêm');

    // check subject_category permission
    $checkSubCateLists = checkPermission($permissionData, 'subject_category', 'Xem');
    $checkSubCateAdd = checkPermission($permissionData, 'subject_category', 'Thêm');

    // check teacher permission
    $checkTeacherLists = checkPermission($permissionData, 'teacher', 'Xem');
    $checkTeacherAdd = checkPermission($permissionData, 'teacher', 'Thêm');

    // check test permission
    $checkTestLists = checkPermission($permissionData, 'test', 'Xem');
    $checkTestAdd = checkPermission($permissionData, 'test', 'Thêm');
    $checkTestEdit = checkPermission($permissionData, 'test', 'Sửa');
    $checkTestDelete = checkPermission($permissionData, 'test', 'Xóa');

    // count check
    $countLesson = getCheckCount();
    $countContact = checkContact();
    $countBill = checkBill();
    ?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>" class="brand-link">
         <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SONLINE</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/user2-160x160.jpg"
                     class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="?module=profile&action=profile" class="d-block"><?php echo $loginInfo['fullname'] ?>
                     (<?php echo $loginInfo['name'] ?>)</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <!-- 
                Tổng quan - begin
                 -->
                 <li class="nav-item">
                     <a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>"
                         class="nav-link <?php echo (activeMenuSidebar('')) || empty($_GET['module']) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-tachometer-alt"></i>
                         <p>
                             Tổng quan
                         </p>
                     </a>
                 </li>

                 <!-- 
                    Tổng quan - end
                 -->

                 <!-- 
                statistic - begin
                 -->
                 <li class="nav-item">
                     <a href="?module=statistic&action=lists"
                         class="nav-link <?php echo (activeMenuSidebar('statistic')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-chart-pie"></i>
                         <p>
                             Thống kê website
                         </p>
                     </a>
                 </li>

                 <!-- 
                    statistic - end
                 -->

                 <?php if ($checkSubCateLists) : ?>
                 <!-- 
                    subject_category - begin 
                -->
                 <li
                     class="nav-item has-treeview <?php echo (activeMenuSidebar('subject_category')) ? 'menu-open' : false ?>">
                     <a href="#"
                         class="nav-link <?php echo (activeMenuSidebar('subject_category')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-bars"></i>
                         <p>
                             Danh mục khóa học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=subject_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkSubCateAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=subject_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    subject_category -end 
                -->
                 <?php endif ?>

                 <?php if ($checkSubjectLists) : ?>
                 <!-- 
                    subject - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('subject')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('subject')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-file"></i>
                         <p>
                             Quản lý khóa học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=subject&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkSubjectAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=subject&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    subject -end 
                -->
                 <?php endif ?>

                 <?php if ($checkModuleLists) : ?>
                 <!-- 
                    module - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('module')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('module')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-bookmark"></i>
                         <p>
                             Quản lý chương học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=module&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkModuleAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=module&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    module -end 
                -->
                 <?php endif ?>

                 <?php if ($checkLessonLists) : ?>
                 <!-- 
                    lesson - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('lesson')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('lesson')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-laptop-code"></i>
                         <p>
                             Quản lý bài học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=lesson&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkLessonAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=lesson&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    lesson -end 
                -->
                 <?php endif; ?>

                 <?php
                    if ($checkBookCateLists) :
                    ?>
                 <!-- 
                    book_category - begin 
                -->
                 <li
                     class="nav-item has-treeview <?php echo (activeMenuSidebar('book_category')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('book_category')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-book-open"></i>
                         <p>
                             Danh mục sách
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=book_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkBookCateAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=book_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    book_category -end 
                -->
                 <?php endif ?>

                 <?php if ($checkBookLists) : ?>
                 <!-- 
                    book - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('book')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('book')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-book"></i>
                         <p>
                             Quản lý sách
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=book&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <?php if ($checkBookAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=book&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    book -end 
                -->
                 <?php endif ?>

                 <?php if ($checkTeacherLists) : ?>
                 <!-- 
                    teacher - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('teacher')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('teacher')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-chalkboard-teacher"></i>
                         <p>
                             Giảng viên dạy học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=teacher&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                         <?php if ($checkTeacherAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=teacher&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    teacher -end 
                -->
                 <?php endif ?>

                 <?php if ($checkStudentLists) : ?>
                 <!-- 
                    student - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('student')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('student')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-users"></i>
                         <p>
                             Quản lý học viên
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=student&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                         <?php if ($checkStudentAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=student&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    student -end 
                -->
                 <?php endif ?>

                 <?php if ($checkNewsCateList) : ?>
                 <!-- 
                    news_category - begin 
                -->
                 <li
                     class="nav-item has-treeview <?php echo (activeMenuSidebar('news_category')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('news_category')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-newspaper"></i>
                         <p>
                             Danh mục tin tức
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=news_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                         <?php if ($checkNewsCateAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=news_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    news_category -end 
                -->
                 <?php endif ?>

                 <?php if ($checkNewsLists) : ?>
                 <!-- 
                    news - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('news')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('news')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-neos"></i>
                         <p>
                             Quản lý tin tức
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=news&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                         <?php if ($checkNewsAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=news&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    news -end 
                -->
                 <?php endif; ?>

                 <?php if ($checkGroup) : ?>
                 <!-- 
                    groups - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('groups')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('groups')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-layer-group"></i>
                         <p>
                             Quản lý nhóm
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=groups&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="?module=groups&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    groups -end 
                -->

                 <?php endif ?>

                 <?php if ($checkTeacherLists) : ?>
                 <!-- 
                    check duyệt - begin 
                -->
                 <li
                     class="nav-item has-treeview <?php echo (activeMenuSidebar('check_course')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('check_course')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-drafting-compass"></i>
                         <p>
                             Duyệt bài giảng
                             <span
                                 class="badge badge-danger"><?php echo !empty($countLesson) ? $countLesson : 0 ?></span>
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=check_course&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                     </ul>
                 </li>
                 <!-- 
                    check duyệt -end 
                -->
                 <?php endif ?>

                 <?php if ($checkContactLists) : ?>
                 <!-- 
                    contact - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('contact')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('contact')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-facebook-messenger"></i>
                         <p>
                             Quản lý liên hệ
                             <span
                                 class="badge badge-danger"><?php echo !empty($countContact) ? $countContact : 0 ?></span>
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=contact&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <!-- 
                    contact -end 
                -->
                 <?php endif ?>

                 <?php if ($checkBookLists) : ?>
                 <!-- 
                    bill - begin 
                -->
                 <li class="nav-item">
                     <a href="?module=bill&action=lists"
                         class="nav-link <?php echo (activeMenuSidebar('bill')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-tachometer-alt"></i>
                         <p>
                             Quản lý hóa đơn
                             <span class="badge badge-danger"><?php echo !empty($countBill) ? $countBill : 0 ?></span>
                         </p>
                     </a>
                 </li>
                 <!-- 
                    bill -end 
                -->
                 <?php endif ?>

                 <?php if ($checkExamLists) : ?>
                 <!-- 
                    exam - begin 
                -->
                 <li
                     class="nav-item has-treeview <?php echo (activeMenuSidebar('exam_category') || activeMenuSidebar('exam')) ? 'menu-open' : false ?>">
                     <a href="#"
                         class="nav-link <?php echo (activeMenuSidebar('exam_category') || activeMenuSidebar('exam')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-scroll"></i>
                         <p>
                             Quản lý đề thi
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <?php if ($checkExamCateLists) : ?>
                         <li class="nav-item">
                             <a href="?module=exam_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách danh mục</p>
                             </a>
                         </li>
                         <?php endif ?>

                         <li class="nav-item">
                             <a href="?module=exam&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách đề thi</p>
                             </a>
                         </li>

                         <?php if ($checkExamAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=exam&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm đề thi mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    exam -end 
                -->
                 <?php endif ?>

                 <?php if ($checkTestLists) : ?>
                 <!-- 
                    test - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('test')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('test')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-file-alt"></i>
                         <p>
                             Quản lý thi online
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <?php if ($checkTestAdd && $checkTestEdit && $checkTestLists) : ?>
                         <li class="nav-item">
                             <a href="?module=test&action=category" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách danh mục</p>
                             </a>
                         </li>
                         <?php endif ?>

                         <li class="nav-item">
                             <a href="?module=test&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách đề thi</p>
                             </a>
                         </li>

                         <?php if ($checkTestAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=test&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm đề thi mới</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    test -end 
                -->
                 <?php endif ?>

                 <?php if ($checkDocumentLists) : ?>
                 <!-- 
                    document - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('document')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('document')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-dochub"></i>
                         <p>
                             Quản lý tài liệu
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <?php if ($checkDocumentLists && $checkDocumentAdd && $checkDocumentEdit) : ?>
                         <li class="nav-item">
                             <a href="?module=document&action=category" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách danh mục</p>
                             </a>
                         </li>
                         <?php endif ?>
                         <li class="nav-item">
                             <a href="?module=document&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách tài liệu</p>
                             </a>
                         </li>

                         <?php if ($checkDocumentAdd) : ?>
                         <li class="nav-item">
                             <a href="?module=document&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới tài liệu</p>
                             </a>
                         </li>
                         <?php endif ?>
                     </ul>
                 </li>

                 <!-- 
                    document -end 
                -->
                 <?php endif ?>

                 <?php if ($checkGroup) : ?>
                 <!-- 
                    staff - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('staff')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('staff')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-brain"></i>
                         <p>
                             Quản trị viên
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=staff&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>cộng tác viên</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="?module=staff&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Cộng tác viên</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    staff -end 
                -->
                 <?php endif ?>

                 <?php if ($checkGroup) : ?>
                 <!-- 
                    options - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('options')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('options')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-cog"></i>
                         <p></p>
                         Thiết lập
                         <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=options&action=general" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thiết lập chung</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="?module=options&action=header" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thiết lập header</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="?module=options&action=introduce" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thiết lập giới thiệu</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="?module=options&action=footer" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thiết lập Footer</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    options -end 
                -->
                 <?php endif ?>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <div class="content-wrapper">