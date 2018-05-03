<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property UserOld|null $user This property is read-only.
 *
 */
class LoginForm extends Model
{
    public $usuario;
    public $senha;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // usuario and senha are both required
            [['usuario', 'senha'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // senha is validated by validatePassword()
            ['senha', 'validatePassword'],
        ];
    }

    /**
     * Validates the senha.
     * This method serves as the inline validation for senha.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validaSenha($this->senha)) {
                $this->addError($attribute, 'Incorrect usuario or senha.');
            }
        }
    }

    /**
     * Logs in a user using the provided usuario and senha.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * Finds user by [[usuario]]
     *
     * @return UserOld|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Usuario::buscarPorUsuario($this->usuario);
        }

        return $this->_user;
    }
}
