
<!--
<h2>
    <?php echo Yii::t('D2personModule.crud_static', 'Relations') ?></h2>
-->

<?php
        echo '<h3>';
            echo Yii::t('D2personModule.model','relation.CcucUserCompanies').' ';
            $this->widget(
                'bootstrap.widgets.TbButtonGroup',
                array(
                    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                    'size' => 'mini',
                    'buttons' => array(
                        array(
                            'icon' => 'icon-list-alt',
                            'url' =>  array('//d2person/ccucUserCompany/admin','CcucUserCompany' => array('ccuc_person_id' => $model->{$model->tableSchema->primaryKey}))
                        ),
                        array(
                'icon' => 'icon-plus',
                'url' => array(
                    '//d2person/ccucUserCompany/create',
                    'CcucUserCompany' => array('ccuc_person_id' => $model->{$model->tableSchema->primaryKey})
                )
            ),

                    )
                )
            );
        echo '</h3>' ?>
<ul>

    <?php
    $records = $model->ccucUserCompanies(array('scopes' => ''));
    if (is_array($records)) {
        foreach ($records as $i => $relatedModel) {
            echo '<li>';
            echo CHtml::link(
                '<i class="icon icon-arrow-right"></i> ' . $relatedModel->itemLabel,
                array('/d2person/ccucUserCompany/view', 'ccuc_id' => $relatedModel->ccuc_id)
            );
            echo CHtml::link(
                ' <i class="icon icon-pencil"></i>',
                array('/d2person/ccucUserCompany/update', 'ccuc_id' => $relatedModel->ccuc_id)
            );
            echo '</li>';
        }
    }
    ?>
</ul>

<?php
        echo '<h3>';
            echo Yii::t('D2personModule.model','relation.PpcnPersonContacts').' ';
            $this->widget(
                'bootstrap.widgets.TbButtonGroup',
                array(
                    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                    'size' => 'mini',
                    'buttons' => array(
                        array(
                            'icon' => 'icon-list-alt',
                            'url' =>  array('//d2person/ppcnPersonContact/admin','PpcnPersonContact' => array('ppcn_pprs_id' => $model->{$model->tableSchema->primaryKey}))
                        ),
                        array(
                'icon' => 'icon-plus',
                'url' => array(
                    '//d2person/ppcnPersonContact/create',
                    'PpcnPersonContact' => array('ppcn_pprs_id' => $model->{$model->tableSchema->primaryKey})
                )
            ),

                    )
                )
            );
        echo '</h3>' ?>
<ul>

    <?php
    $records = $model->ppcnPersonContacts(array('scopes' => ''));
    if (is_array($records)) {
        foreach ($records as $i => $relatedModel) {
            echo '<li>';
            echo CHtml::link(
                '<i class="icon icon-arrow-right"></i> ' . $relatedModel->itemLabel,
                array('/d2person/ppcnPersonContact/view', 'ppcn_id' => $relatedModel->ppcn_id)
            );
            echo CHtml::link(
                ' <i class="icon icon-pencil"></i>',
                array('/d2person/ppcnPersonContact/update', 'ppcn_id' => $relatedModel->ppcn_id)
            );
            echo '</li>';
        }
    }
    ?>
</ul>

<?php
        echo '<h3>';
            echo Yii::t('D2personModule.model','relation.PpxdPersonXDocuments').' ';
            $this->widget(
                'bootstrap.widgets.TbButtonGroup',
                array(
                    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                    'size' => 'mini',
                    'buttons' => array(
                        array(
                            'icon' => 'icon-list-alt',
                            'url' =>  array('//d2person/ppxdPersonXDocument/admin','PpxdPersonXDocument' => array('ppxd_pprs_id' => $model->{$model->tableSchema->primaryKey}))
                        ),
                        array(
                'icon' => 'icon-plus',
                'url' => array(
                    '//d2person/ppxdPersonXDocument/create',
                    'PpxdPersonXDocument' => array('ppxd_pprs_id' => $model->{$model->tableSchema->primaryKey})
                )
            ),

                    )
                )
            );
        echo '</h3>' ?>
<ul>

    <?php
    $records = $model->ppxdPersonXDocuments(array('scopes' => ''));
    if (is_array($records)) {
        foreach ($records as $i => $relatedModel) {
            echo '<li>';
            echo CHtml::link(
                '<i class="icon icon-arrow-right"></i> ' . $relatedModel->itemLabel,
                array('/d2person/ppxdPersonXDocument/view', 'ppxd_id' => $relatedModel->ppxd_id)
            );
            echo CHtml::link(
                ' <i class="icon icon-pencil"></i>',
                array('/d2person/ppxdPersonXDocument/update', 'ppxd_id' => $relatedModel->ppxd_id)
            );
            echo '</li>';
        }
    }
    ?>
</ul>

<?php
        echo '<h3>';
            echo Yii::t('D2personModule.model','relation.PpxtPersonXTypes').' ';
            $this->widget(
                'bootstrap.widgets.TbButtonGroup',
                array(
                    'type' => '', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                    'size' => 'mini',
                    'buttons' => array(
                        array(
                            'icon' => 'icon-list-alt',
                            'url' =>  array('//d2person/ppxtPersonXType/admin','PpxtPersonXType' => array('ppxt_pprs_id' => $model->{$model->tableSchema->primaryKey}))
                        ),
                        array(
                'icon' => 'icon-plus',
                'url' => array(
                    '//d2person/ppxtPersonXType/create',
                    'PpxtPersonXType' => array('ppxt_pprs_id' => $model->{$model->tableSchema->primaryKey})
                )
            ),

                    )
                )
            );
        echo '</h3>' ?>
<ul>

    <?php
    $records = $model->ppxtPersonXTypes(array('scopes' => ''));
    if (is_array($records)) {
        foreach ($records as $i => $relatedModel) {
            echo '<li>';
            echo CHtml::link(
                '<i class="icon icon-arrow-right"></i> ' . $relatedModel->itemLabel,
                array('/d2person/ppxtPersonXType/view', 'ppxt_id' => $relatedModel->ppxt_id)
            );
            echo CHtml::link(
                ' <i class="icon icon-pencil"></i>',
                array('/d2person/ppxtPersonXType/update', 'ppxt_id' => $relatedModel->ppxt_id)
            );
            echo '</li>';
        }
    }
    ?>
</ul>
