<?php
namespace Web\Controller\User;
use Web\Model\User\User;
include '../../Model/User/User.php';
class SignIn
{
    protected $user;
    public function __construct(User $user)
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
        //$username = $user->getData('username');
        //
    }
    public function getUser($data)
    {
        return $this->user->load($data);
    }
}

//$signIn = new SignIn($user);
//$signIn->execute();