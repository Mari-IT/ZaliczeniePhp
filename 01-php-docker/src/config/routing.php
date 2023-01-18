<?php

return [
    'routing' => [
        '/' => \Apsl\Inf03\Webdev\Pages\HomePage::class,
        '/contact' => \Apsl\Inf03\Webdev\Pages\ContactPage::class,
        '/resetpassword' => \Apsl\Inf03\Webdev\Pages\ResetPassPage::class,
        '/new-password' => \Apsl\Inf03\Webdev\Pages\SetNewPasswordPage::class,

    ],
    '_404' => \Apsl\Inf03\Webdev\Pages\Error404Page::class
];
