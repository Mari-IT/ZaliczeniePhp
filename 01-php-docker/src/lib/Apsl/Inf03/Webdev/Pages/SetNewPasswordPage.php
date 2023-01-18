<?php

namespace Apsl\Inf03\Webdev\Pages;
require_once 'vendor/autoload.php';

use Apsl\Controller\Page;
use Apsl\Http\Response;
use Apsl\Session\Session;
use Apsl\Http\Request;
use Apsl\Http\Appl;
use Apsl\Inf03\Webdev\Application;

class SetNewPasswordPage extends Page
{
    public function createResponse(): void
    {
        $templateParams = [
            'title' => 'Setting new password',
            'success' => $this->request->getGetValue('success', false),
            'errors' => []
        ];

        $session = new Session();
        $request = new Request();
        $hash = $request->getValue('hash');

        if($hash == $session->getValue('hash')){
            $errors = [];
            if ($this->request->isMethod(Request::METHOD_POST)) {
                $pass = $this->request->getValue('newpass', '');
                $passrepeated = $this->request->getValue('newpassrepeated', '');

                if ($pass !== $passrepeated) 
                    array_push($errors, "The passwords must be identical!");

                if (strlen($pass) < 8) 
                    array_push($errors, "The password must have at least 8 characters");
                
                if(!preg_match('/[A-Z]/', $pass) || !preg_match('/[a-z]/', $pass))
                    array_push($errors, "The password must have both uppercase and lowercase letters");

                if (!preg_match('/[!\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pass))
                    array_push($errors, "The password must have at least one special character");

                if (empty($errors)) {
                    $this->response->redirect("/");
                    return;
                }

                $templateParams['errors'] = $errors;
                $templateParams['newpass'] = $pass;
                $templateParams['newpassrepeated'] = $passrepeated;
            }

            $this->response->useTemplate('templates/setnewpassword.html.php', $templateParams);
        }       
    }
}
