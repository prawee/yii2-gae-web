<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 14/2/2018 AD 15:56
 */
namespace i8\models;

use Yii;
use yii\db\Query;
use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;
    public $authorization;
    public function rules()
    {
        return [
          [['email', 'password'], 'required']
        ];
    }

    public function login()
    {
        $this->authorization = (new Query())
            ->from('auth')
            ->where(['email' => $this->email])
            ->one();
    }

    public function validatePassword()
    {
        $auth = Auth::find()
            ->where(['email' => $this->email])
            ->one();

        if (isset($auth) and $this->password !== '') {
            $user = User::find()
                ->where(['id' => $auth->user, 'profile' => [3,31]])
                ->one();
            if (isset($user)) {
                if ($auth->validatePassword($this->password)) {
                    return Yii::$app->user->login($auth);
                }
            }
        }
        return false;
    }
}