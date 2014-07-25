<?php
$this->setPageTitle(Yii::t('D2personModule.model', 'Persons'));

?>

<div class="clearfix">
    <div class="btn-toolbar pull-left">
        <div class="btn-group">
        <?php 
        $this->widget('bootstrap.widgets.TbButton', array(
             'label'=>Yii::t('D2personModule.crud_static','Create'),
             'icon'=>'icon-plus',
             'size'=>'large',
             'type'=>'success',
             'url'=>array('create'),
             'visible'=>(Yii::app()->user->checkAccess('D2person.PprsPerson.*') || Yii::app()->user->checkAccess('D2person.PprsPerson.Create'))
        ));  
        ?>
</div>
        <div class="btn-group">
            <h1>
                <i class=""></i>
                <?php echo Yii::t('D2personModule.model', 'Persons');?>            </h1>
        </div>
    </div>
</div>

<?php Yii::beginProfile('PprsPerson.view.grid'); ?>


<?php
$this->widget('TbGridView',
    array(
        'id' => 'pprs-person-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        #'responsiveTable' => true,
        'template' => '{summary}{pager}{items}{pager}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns' => array(
            array(
                //varchar(100)
                'class' => 'editable.EditableColumn',
                'name' => 'pprs_second_name',
                'editable' => array(
                    'url' => $this->createUrl('/d2person/pprsPerson/editableSaver'),
                    //'placement' => 'right',
                )
            ),            
            array(
                //varchar(100)
                'class' => 'editable.EditableColumn',
                'name' => 'pprs_first_name',
                'editable' => array(
                    'url' => $this->createUrl('/d2person/pprsPerson/editableSaver'),
                    //'placement' => 'right',
                )
            ),

            array(
                'class' => 'TbButtonColumn',
                'buttons' => array(
                    'view' => array('visible' => 'Yii::app()->user->checkAccess("D2person.PprsPerson.View")'),
                    'update' => array('visible' => 'FALSE'),
                    'delete' => array('visible' => 'Yii::app()->user->checkAccess("D2person.PprsPerson.Delete")'),
                ),
                'viewButtonUrl' => 'Yii::app()->controller->createUrl("view", array("pprs_id" => $data->pprs_id))',
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("delete", array("pprs_id" => $data->pprs_id))',
                'deleteConfirmation'=>Yii::t('D2personModule.crud_static','Do you want to delete this item?'),                    
                'viewButtonOptions'=>array('data-toggle'=>'tooltip'),   
                'deleteButtonOptions'=>array('data-toggle'=>'tooltip'),   
            ),
        )
    )
);
?>
<?php Yii::endProfile('PprsPerson.view.grid'); ?>