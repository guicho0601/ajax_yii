<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 25/02/15
 * Time: 18:54
 */

class RegistroController extends Controller{

    public function actionNivel(){
        $model = new Numero();

        if (isset($_POST['ajax']) && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }else if (isset($_POST['Numero']))
        {
            $model->attributes = $_POST['Numero'];
            echo 'Teléfono ingresado: '.$model->numero;
            Yii::app()->end();
        }

        $this->render('nivel',array('model'=>$model));
    }

} 