<?php

namespace Web\controller\user;
use Web\model\user;
include 'Web\model\user\user.php';
class signin
{
    protected $user;
    public function __construct(user $user)
    {
        $this->user = $user;
    }
    public function execute()
    {
        $data = $_POST;
        $this->signIn($data);
        return 1;
    }
    public function signIn($postData)
    {
        $user = $this->getUser($postData);
        $username = $user->getData('username');

    }
    public function getUser($data)
    {
        return $this->user->load($data);
    }
}

$signIn = new SignIn($user);
$signIn->execute();