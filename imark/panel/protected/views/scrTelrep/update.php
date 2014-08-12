<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/vendor/jquery-1.8.1.min.js"><\/script>')</script>

<?php
/* @var $this ScrTelrepController */
/* @var $model ScrTelrep */

$this->breadcrumbs=array(
	'Scr Telreps'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScrTelrep', 'url'=>array('index')),
	//array('label'=>'Create ScrTelrep', 'url'=>array('create')),
	array('label'=>'View ScrTelrep', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScrTelrep', 'url'=>array('admin'), 'visible'=>Users::isAdmin()),
);
?>

<h1>Update ScrTelrep <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<script>
    var params= {
        service: [],
        id: '',
        jquery: false
    }
    var putparams= function() {
        $('#ScrTelrep_params').val(JSON.stringify(params));
    }
    jQuery(function ($) {
        $(document).ready(function () {
            params= JSON.parse($('#ScrTelrep_params').val());
            $('#service_id').val(params.id);
            $('#jq_include').prop('checked', params.jquery);
            for (i=0; i<params.service.length; i++) {
                if (params.service[i] && params.service[i].length) {
                    $('input[name="service[]"]').eq(i).prop('checked', true);
                    $('input[name="service_text[]"]').eq(i).val(params.service[i]);
                }
            }

            $('input[name="service[]"]').change(function(){
                $('input[name="service[]"]').each(function(itid){
                    if ($(this).prop('checked')) {
                        //itid= $('input[name="service[]"]').index($(this));
                        txtval= $('input[name="service_text[]"]').eq(itid).val();
                        params.service[itid]= txtval;
                    }
                });
                putparams();
            });
            $('input[name="service_text[]"]').change(function(){
                itid= $('input[name="service_text[]"]').index($(this));
                params.service[itid]= $(this).val();
                $('input[name="service[]"]').eq(itid).prop('checked', true);
                putparams();
            });

            $('#service_id').change(function(){
                params.id= $(this).val();
                putparams();
            });
            $('#jq_include').change(function(){
                params.jquery= $(this).prop('checked');
                putparams();
            });

        });
    });
</script>