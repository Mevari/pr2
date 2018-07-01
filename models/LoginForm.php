<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
//        return [
//            ['username', 'trim'], // обрезает пробелы и превращает в null если нечего не остается
//            ['username', 'required'], // 'username' обязательно для заполнения
//            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'], // 'username' в модели \app\models\User(то есть в таблице user(вспоминаем ActivityRecords) должна быть уникальна)
//            ['username', 'string', 'min' => 2, 'max' => 255], // 'username' это string переменная со значение от 2 до 255 символов
//            ['email', 'trim'],
//            ['email', 'required'],
//            ['email', 'email'],
//            ['email', 'string', 'max' => 255],
//            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
//            ['password', 'required'],
//            ['password', 'string', 'min' => 6],
//        ];


        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            ['username', 'trim'],
            ['username', 'string', 'min' => 2, 'max' => 255], // 'username' это string переменная со значение от 2 до 255 символов
            ['password', 'string', 'min' => 6],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];


    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if (Yii::$app->request->post('login-button') == 'login') {
            if ($this->validate()) {

                if($this->rememberMe) {
                    $u = $this->getUser();
                    $u->generateAuthKey();
                    $u->save();
                }
                return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            }
            return false;
        } elseif
        (Yii::$app->request->post('register-button')=='register') {

            $user = new User(); // Используем AcriveRecord User
            $user->username = $this->username; // Определяем свойства объекта
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->created_at = time();
            $user->updated_at = time();
            return $user->save() ? $user : null;
        }
    }


    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function attributeLabels() // Используется для локализации
    {
        return [
            'username' => 'Логин',
            'email' => 'Электронная почта',
            'password' => 'Пароль',
        ];
    }

}
