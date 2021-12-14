<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;

/**
 * テストコントローラー
 */
class HelloController extends Controller
{
    
    public function hello()
    {
        $this->render('/Hello/hello');
    }
}
