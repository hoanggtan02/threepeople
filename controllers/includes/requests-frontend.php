<?php
if (!defined('ECLO'))
    die("Hacking attempt");
$requests = [
    'home' => "controllers/core/front-end/home.php",
    'consultation' => "controllers/core/front-end/consultation.php",
    'contact' => "controllers/core/front-end/contact.php",

    'library' => "controllers/core/front-end/library.php",

    'dashboard' => "controllers/core/front-end/dashboard.php",
    'services-detail' => "controllers/core/front-end/services-detail.php",

    'news' => "controllers/core/front-end/news.php",
    'projects' => "controllers/core/front-end/projects.php",
    'activate' => "controllers/core/front-end/activate.php",


    'courses' => "controllers/core/front-end/course.php",
    'parent-profile' => "controllers/core/front-end/parent-profile.php",
    'point' => "controllers/core/front-end/point.php",

    // 'admin' => "controllers/core/back-end/admin.php",
    // 'main' => "controllers/core/back-end/main.php",
    // 'users' => "controllers/core/back-end/users.php",
];

foreach ($requests as $key => $controller) {
    $setRequest[] = [
        "key" => $key,
        "controllers" => $controller,
    ];
}