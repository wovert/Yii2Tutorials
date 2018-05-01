<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use \common\models\Poststatus;
use \common\models\Adminuser;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    <?php
        // $sql = 'select id,name from poststatus';
        // $psObj = Yii::$app->db->createCommand($sql)->queryAll();
        // $allStatus = ArrayHelper::map($psObj, 'id','name');

        // $allStatus = (new \yii\db\Query())
        //     ->select(['name','id'])
        //     ->from('poststatus')
        //     ->indexBy('id')
        //     ->column();
    ?>

    <?= $form->field($model, 'status')
        ->dropDownList(Poststatus::find()
                        ->select(['name','id'])
                        ->orderBy('position')
                        ->indexBy('id')
                        ->column(),
            ['prompt' => '请选择状态']) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'author_id')
        ->dropDownList(Adminuser::find()
                        ->select(['nickname','id'])
                        ->column(),
            ['prompt' => '请选择作者']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
