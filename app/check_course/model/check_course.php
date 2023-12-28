<?php

function getLesson()
{
    $sql = "SELECT lesson.*,module.title as module_title, course.title as course_title, fullname, email FROM lesson INNER JOIN module ON module.id=lesson.module_id INNER JOIN course ON course.id=module.course_id INNER JOIN teacher ON teacher.id=lesson.teacher_id WHERE lesson.status=0 ";
    $data = getRaw($sql);
    return $data;
}
