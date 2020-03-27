<?php
use yii\helpers\Html;
use app\assets\IntrojsAsset;
IntrojsAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Registro de Makers';
?>
<div class="site-index">

  <?= $this->render('_carousel_modelos') ?>
  
    <div class="jumbotron">
        <h1>Registro de Makers</h1>

        <p class="lead">El objetivo de esta aplicación es afrontar la demanda de insumos impresos en impresoras 3d para combatir el COVID-19, de forma colaborariva, juntando fuerzas de grupos y redes de makers.</p>

 
        <p><?= Html::a('Ver Mapa', ['registro/mapa'],
                     ['class' => 'btn btn-success']) ?>
          <?= Html::a('Ver Resumen', ['registro/resumen'],
                    ['class' => 'btn btn-success']) ?></p>

        <p>
          <?php
          if ($puede['ver_reservas']){
              echo Html::a('Reservas', ['reserva/index'],
                          ['class' => 'btn btn-default',
                           'data-hints' =>
                               'Vea las reservas realizadas, solicite productos que ya fueron creados.']);
              echo " ";
          }
          if ($puede['ver_productos']){
              echo Html::a('Productos', ['producto/index'],
                          ['class' => 'btn btn-default']);
          }
          ?>
        </p>
            

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Registro de Makers</h2>

                <p> La fuente de datos de makers se obtiene de un registro realizado por el Gobierno de la Provincia de Neuquén y Centro PyME-ADENEU en el siguiente </p>
                <p><a class="btn btn-default" href="https://forms.gle/hEqG9YNnMjGduYEv6 ">Formulario de Registro &raquo;</a></p>
                <p>Y la red de makers de San Martín de Los Andes </p>
                <p><a class="btn btn-default" href="https://web.facebook.com/impresoresneuquen/">Facebook del Grupo &raquo;</a></p>
        

            </div>
            <div class="col-lg-4">
                <h2>Geoespaciales</h2>

                  
                <p> La fuente de datos de localidades y georreferenciamiento se obtiene de </p>
                <p><a class="btn btn-default" href="https://datos.gob.ar/">Datos Nacionales &raquo;</a></p>
                


            </div>
            <div class="col-lg-4">
                <h2>Imágenes</h2>

                <p> Las imágenes se obtienen de</p>
                <p><a class="btn btn-default" href="https://www.openstreetmap.org/">OpenStreetMap &raquo;</a>

                
            </div>
        </div>

     
    </div>
</div>
