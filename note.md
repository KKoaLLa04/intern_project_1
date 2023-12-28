<!-- giao diện xay dựng khóa học -->
<!-- Người dùng -->

- đổ giao diện khóa học
- giao diện trang chủ
- xem được thông tin sách
- giỏ hàng
- khóa học, danh mục khóa học, chi tiết khóa học...
- upload đề thi online
- giải bài tập & soạn bài tập (tài liệu đính kèm)
- học viên xuất sắc (top)
- tin tức, danh mục tin tức
- liên hệ

<!-- Quản lý -->

- quản lý khóa học (\*)
- quản lý quản lý chuyên mục khóa học (\*)
- quản lý bài giảng (\*)
- quản lý sách bán + sáng tặng (\*)
- quản lý thi online
- quản lý tài liệu (document)
- quản lý sinh viên xuất sắc (top)
- quản lý tin tức, danh mục tin tức
- quản lý contact
- quản lý giỏ hàng
- quản lý người dùng
- quản lý học viên
- options
- giảng viên
- thống kê, báo cáo
- phân quyền người quản trị

1. table course_category{ => quan ly danh muc khoa hoc
   id int [primary key, increment]
   name varchar(100) [not null]
   description minitext
   user_id int
   duplicate tinyint
   create_at timestamp
   update_at timestamp
   }

2. table course{ => quan ly khoa hoc
   id int [primary key, increment]
   title varchar(100) [not null]
   course_id int
   thumbnail varchar(100) [not null]
   price varchar(100)
   teacher_id int
   create_at timestamp
   update_at timestamp
   }

3. table module { => quan ly cac chuong hoc
   id int [primary key, increment]
   title varchar(100)
   course_id int
   create_at timestamp
   update_at timestamp
   }

4. table lesson{ => quan ly bai hoc
   id int [primary key, increment]
   title varchar(100)
   video_url varchar(100)
   lecture_id int
   document text
   create_at timestamp
   update_at timestamp
   }

5. table book_category{ => quan ly danh muc sach
   id int [primary key, increment]
   title varchar(100)
   create_at timestamp
   update_at timestamp
   }

6. table book{ => quan ly sach
   id int [primary key, increment]
   name varchar(100)
   image varchar(100)
   price float
   author varchar(100)
   status tinyint
   description tinytext
   content text
   create_at timestamp
   update_at timestamp
   }

7. exam_category{
   id int
   title varchar(200)
   create_at
   update_at
   }

8. table exam_online{
   id int
   price float
   start date
   thumbnail
   status tinyint
   thumbnail varchar(200)
   slug varchar(100)
   create_at
   update_at
   }

9. table teacher{
   id int
   fullname varchar(100)
   exp => int
   phone varchar(20)
   email varchar(100)
   create_at timestamp
   update_at timestamp
   }

10. table contact{
    id int
    fullname varchar(100)
    email varchar(100)
    phone varchar(13)
    content text
    status tinyint
    create_at timestamp
    update_at timestamp
    }

11. table news_category{
    id int
    title varchar(100)
    create_at timestamp
    update_at timestamp
    }

12. table news{
    id int
    title varchar(100)
    content text
    thumbnail varchar(100)
    create_at timestamp
    update_at timestamp
    }

13. table student(){
    id int
    fullname varchar(100)
    email varchar(100)
    phone varchar(13)
    password(100)
    status tinyint
    role tinyint
    forgot varchar(100)
    token varchar(100)
    create_at timestamp
    update_at timestamp
    }

14. table exam_category{
    id int
    name varchar(100)
    create_at timestamp
    update_at timestamp
    }

15. table exam{
    id int
    title varchar(100)
    description tinytext
    content text
    exam_id int
    create_at timestamp
    update_at timestamp
    }

16. table test_category{
    id int primary key
    name varchar(100)
    create_at timestamp
    update_at timestamp
    }

17. table test{
    id int primary key
    title varchar(100)
    question varchar(100)
    choice varchar(100)
    answer varchar(100)
    test_id int
    create_at timestamp
    update_at timestamp
    }

18. table result{
    id int primary key
    student_id int
    test_id
    score int
    create_at timestamp
    update_at timestamp
    }

x = 0
0 => 4 => 8
1 => 5 => 9
2 => 6 => 10
3 => 7 => 11

19. table code_course{
    id int primary key
    price int
    course_id int
    student_id int
    code varchar(100)
    create_at timestamp
    update_at timestamp
    }
