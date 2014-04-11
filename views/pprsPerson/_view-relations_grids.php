
<!--
<h2>
    <?php echo Yii::t('crud', 'Relations') ?></h2>
-->


<?php Yii::beginProfile('ppcn_pprs_id.view.grid'); ?>
<h3>
    <?php 
    echo Yii::t('model', 'Ppcn Person Contact') . ' '; 
    $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'buttonType' => 'ajaxButton', 
            'type' => 'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size' => 'mini',
            'icon' => 'icon-plus',
            'url' => array(
                '//d2person/ppcnPersonContact/ajaxCreate',
                'field' => 'ppcn_pprs_id',
                'value' => $modelMain->primaryKey,
            ),
            'ajaxOptions' => array(
                'success' => 'function(html) { 
                    $.fn.yiiGridView.update(\'ppcn-person-contact-grid\');
                    }',
               ),
            'htmlOptions' => array(
                'title' => Yii::t('crud', 'Add new record'),
            ),                 
        )
    );        
    ?>
</h3> 
 
<?php 
$model = new PpcnPersonContact();
$model->ppcn_pprs_id = $modelMain->primaryKey;

// render grid view

$this->widget('TbGridView',
    array(
        'id' => 'ppcn-person-contact-grid',
        'dataProvider' => $model->search(),
        #'responsiveTable' => true,
        'template' => '{items}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns' => array(
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppcn_pcnt_type',
                'editable' => array(
                    'type' => 'select',
                    'url' => $this->createUrl('//d2person/ppcnPersonContact/editableSaver'),
                    'source' => CHtml::listData(PcntContactType::model()->findAll(array('limit' => 1000)), 'pcnt_id', 'itemLabel'),                        
                    //'placement' => 'right',
                )
            ),
            array(
                //varchar(500)
                'class' => 'editable.EditableColumn',
                'name' => 'ppcn_value',
                'editable' => array(
                    'url' => $this->createUrl('//d2person/ppcnPersonContact/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppcn_notes',
                'editable' => array(
                    'type' => 'textarea',
                    'url' => $this->createUrl('//d2person/ppcnPersonContact/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'TbEditableColumn',
                'name' => 'ppcn_modified',
                'editable' => array(
                    'url' => $this->createUrl('//d2person/ppcnPersonContact/editableSaver'),
                    //'placement' => 'right',
                )
            ),

            array(
                'class' => 'TbButtonColumn',
                'buttons' => array(
                    'view' => array('visible' => 'FALSE'),
                    'update' => array('visible' => 'FALSE'),
                    'delete' => array('visible' => 'Yii::app()->user->checkAccess("D2person.PprsPerson.DeleteppcnPersonContacts")'),
                ),
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("/d2person/ppcnPersonContact/delete", array("ppcn_id" => $data->ppcn_id))',
            ),
        )
    )
);
?>

<?php Yii::endProfile('PpcnPersonContact.view.grid'); ?>

<?php Yii::beginProfile('ppxd_pprs_id.view.grid'); ?>
<h3>
    <?php 
    echo Yii::t('model', 'Ppxd Person Xdocument') . ' '; 
    $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'buttonType' => 'ajaxButton', 
            'type' => 'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size' => 'mini',
            'icon' => 'icon-plus',
            'url' => array(
                '//d2person/ppxdPersonXDocument/ajaxCreate',
                'field' => 'ppxd_pprs_id',
                'value' => $modelMain->primaryKey,
            ),
            'ajaxOptions' => array(
                'success' => 'function(html) { 
                    $.fn.yiiGridView.update(\'ppxd-person-xdocument-grid\');
                    }',
               ),
            'htmlOptions' => array(
                'title' => Yii::t('crud', 'Add new record'),
            ),                 
        )
    );        
    ?>
</h3> 
 
<?php 
$model = new PpxdPersonXDocument();
$model->ppxd_pprs_id = $modelMain->primaryKey;

// render grid view

$this->widget('TbGridView',
    array(
        'id' => 'ppxd-person-xdocument-grid',
        'dataProvider' => $model->search(),
        #'responsiveTable' => true,
        'template' => '{items}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns' => array(
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_pdcm_id',
                'editable' => array(
                    'type' => 'select',
                    'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                    'source' => CHtml::listData(PdcmDocumentType::model()->findAll(array('limit' => 1000)), 'pdcm_id', 'itemLabel'),                        
                    //'placement' => 'right',
                )
            ),
            array(
                //varchar(100)
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_number',
                'editable' => array(
                    'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_issue_date',
                'editable' => array(
                    'type' => 'date',
                    'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_expire_date',
                'editable' => array(
                    'type' => 'date',
                    'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxd_notes',
                'editable' => array(
                    'type' => 'textarea',
                    'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                    //'placement' => 'right',
                )
            ),
            array(
                    'class' => 'editable.EditableColumn',
                    'name' => 'ppxd_status',
                    'editable' => array(
                        'type' => 'select',
                        'url' => $this->createUrl('//d2person/ppxdPersonXDocument/editableSaver'),
                        'source' => $model->getEnumFieldLabels('ppxd_status'),
                        //'placement' => 'right',
                    ),
                   'filter' => $model->getEnumFieldLabels('ppxd_status'),
                ),

            array(
                'class' => 'TbButtonColumn',
                'buttons' => array(
                    'view' => array('visible' => 'FALSE'),
                    'update' => array('visible' => 'FALSE'),
                    'delete' => array('visible' => 'Yii::app()->user->checkAccess("D2person.PprsPerson.DeleteppxdPersonXDocuments")'),
                ),
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("/d2person/ppxdPersonXDocument/delete", array("ppxd_id" => $data->ppxd_id))',
            ),
        )
    )
);
?>

<?php Yii::endProfile('PpxdPersonXDocument.view.grid'); ?>

<?php Yii::beginProfile('ppxt_pprs_id.view.grid'); ?>
<h3>
    <?php 
    echo Yii::t('model', 'Ppxt Person Xtype') . ' '; 
    $this->widget(
        'bootstrap.widgets.TbButton',
        array(
            'buttonType' => 'ajaxButton', 
            'type' => 'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
            'size' => 'mini',
            'icon' => 'icon-plus',
            'url' => array(
                '//d2person/ppxtPersonXType/ajaxCreate',
                'field' => 'ppxt_pprs_id',
                'value' => $modelMain->primaryKey,
            ),
            'ajaxOptions' => array(
                'success' => 'function(html) { 
                    $.fn.yiiGridView.update(\'ppxt-person-xtype-grid\');
                    }',
               ),
            'htmlOptions' => array(
                'title' => Yii::t('crud', 'Add new record'),
            ),                 
        )
    );        
    ?>
</h3> 
 
<?php 
$model = new PpxtPersonXType();
$model->ppxt_pprs_id = $modelMain->primaryKey;

// render grid view

$this->widget('TbGridView',
    array(
        'id' => 'ppxt-person-xtype-grid',
        'dataProvider' => $model->search(),
        #'responsiveTable' => true,
        'template' => '{items}',
        'pager' => array(
            'class' => 'TbPager',
            'displayFirstAndLast' => true,
        ),
        'columns' => array(
            array(
                'class' => 'editable.EditableColumn',
                'name' => 'ppxt_ptyp_id',
                'editable' => array(
                    'type' => 'select',
                    'url' => $this->createUrl('//d2person/ppxtPersonXType/editableSaver'),
                    'source' => CHtml::listData(PtypType::model()->findAll(array('limit' => 1000)), 'ptyp_id', 'itemLabel'),                        
                    //'placement' => 'right',
                )
            ),

            array(
                'class' => 'TbButtonColumn',
                'buttons' => array(
                    'view' => array('visible' => 'FALSE'),
                    'update' => array('visible' => 'FALSE'),
                    'delete' => array('visible' => 'Yii::app()->user->checkAccess("D2person.PprsPerson.DeleteppxtPersonXTypes")'),
                ),
                'deleteButtonUrl' => 'Yii::app()->controller->createUrl("/d2person/ppxtPersonXType/delete", array("ppxt_id" => $data->ppxt_id))',
            ),
        )
    )
);
?>

<?php Yii::endProfile('PpxtPersonXType.view.grid'); ?>