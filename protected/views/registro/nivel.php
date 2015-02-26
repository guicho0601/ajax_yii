<?php
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnChange'=>false,
        'validateOnSubmit'=>true,
        'afterValidate'=>'js:enviar'
    ),
    'htmlOptions'=>array(
        //'onsubmit'=>"enviar();",
    ),
));
?>

<div class="row">
<?php echo $form->labelEx($model,'numero'); ?>
<?php echo $form->textField($model,'numero'); ?>
<?php echo $form->error($model, 'numero'); ?>
</div>

<?php echo CHtml::submitButton('Verificar', array('id' => 'login')); ?>

<?php
$this->endWidget();
?>

<div id="respuesta">

</div>

<script type="text/javascript">
    function enviar(form,data,hasError){
        if(!hasError){
            str = $("#form").serialize();

            $.ajax({
                type: "POST",
                url: "<?php echo Yii::app()->createAbsoluteUrl('registro/nivel'); ?>",
                data: str,
                beforeSend : function() {
                    $("#login").attr("disabled",true);
                },
                success:function(data){
                    document.getElementById('respuesta').innerHTML = data;
                    $("#login").attr("disabled",false);
                },
                error: function(data) { // if error occured
                    document.getElementById('respuesta').innerHTML = "Error occured.please try again" + data;
                    $("#login").attr("disabled",false);
                }
            });
        }
        return false;
    }
</script>
