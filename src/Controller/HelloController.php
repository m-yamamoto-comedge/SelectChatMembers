<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use App\Controller\Condition\UsersCondition;
use App\Repository\UsersRepository;

/**
 * テストコントローラー
 */
class HelloController extends Controller
{
    
    public function hello()
    {
        // $usersRepository = new UsersRepository();
        // $usersCondition = new UsersCondition();
        // $usersCondition->belongsCd = 0;
        // $usersCondition->positionCd = 0;
        // $userList = $usersRepository->select($usersCondition);
        // $userList = $usersRepository->insert();
        // $userList = $usersRepository->update();
        // $userList = $usersRepository->delete(2);
        
        $this->render('/Hello/hello');
    }
}
