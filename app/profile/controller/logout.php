<?php

removeSession('loginTeacher');
redirect(_WEB_HOST_ROOT . '?module=member&action=login');
