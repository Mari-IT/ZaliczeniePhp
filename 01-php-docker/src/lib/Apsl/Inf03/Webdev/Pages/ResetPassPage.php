<?php

namespace Apsl\Inf03\Webdev\Pages;

use Apsl\Controller\Page;
use Apsl\Http\Response;

class ResetPassPage extends Page
{
    public function createResponse(): void
    {
        $this->response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');
        $this->response->useTemplate('templates/resetpassword.html.php', [
            'title' => 'Resetting password'
        ]);
    }
}
