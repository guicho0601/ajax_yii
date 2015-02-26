<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 25/02/15
 * Time: 18:52
 */

class Numero extends CFormModel{
    public $numero;

    public function rules()
    {
        return array(
            array('numero', 'required'),
            array('numero', 'numerical'),
            array('numero', 'length', 'max'=>8, 'min'=>8),
        );
    }

    public function attributeLabels()
    {
        return array(
            'rememberMe'=>'Número de celular',
        );
    }
} 