<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Registro */

$this->title = 'Update Registro: ' . $model->idRegistro;
$this->params['breadcrumbs'][] = ['label' => 'Registros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRegistro, 'url' => ['view', 'id' => $model->idRegistro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="registro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>