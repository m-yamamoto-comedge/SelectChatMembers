<?php
declare(strict_types=1);

namespace App\Repository;

use Cake\Datasource\ConnectionManager;
use DateTime;

/**
 * ユーザー情報取得リポジトリ
 */
class UsersRepository
{
    /**
     * 取得
     */
    public function select()
    {
        $connection = ConnectionManager::get('default');
        $results = $connection
        ->execute(
            'SELECT * FROM user'
        );
        return $results;
    }

    /**
     * 登録
     * $user ユーザー情報
     */
    public function insert() {
        // TODO userクラスを引数に追加する
        $currentDate = new DateTime('now');
        $insertDate = $currentDate->format('Y-m-d H:i:s');

        $connection = ConnectionManager::get('default');
        $connection->insert('users', [
            'user_id' => 2,
            'user_name' => 'テスト太郎',
            'belongs_cd' => 0,
            'position_cd' => 0,
            'create_date' => $insertDate,
            'update_date' => $insertDate,
            'del_flg' => 0,
        ]);
    }
    
    /**
     * 更新
     * $user ユーザー情報
     */
    public function update() {
        // TODO userクラスを引数に追加する
        $currentDate = new DateTime('now');
        $updateDate = $currentDate->format('Y-m-d H:i:s');

        $connection = ConnectionManager::get('default');
        $connection->update('users', [
            'user_name' => 'テスト太郎a',
            'belongs_cd' => 1,
            'position_cd' => 1,
            'update_date' => $updateDate,
            'del_flg' => 1,
        ], ['user_id' => 2]);
    }
    
    /**
     * 削除
     * $userId ユーザーID
     */
    public function delete($userId) {
        $connection = ConnectionManager::get('default');
        $connection->delete('users', ['user_id' => $userId]);
    }
}


