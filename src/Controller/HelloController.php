<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use App\Repository\UsersRepository;

/**
 * テストコントローラー
 */
class HelloController extends Controller
{
    
    public function hello()
    {
        $usersRepository = new UsersRepository();
        // $userList = $usersRepository->select();
        // $userList = $usersRepository->insert();
        // $userList = $usersRepository->update();
        // $userList = $usersRepository->delete(2);
        
        $this->render('/Hello/hello');
    }
}
