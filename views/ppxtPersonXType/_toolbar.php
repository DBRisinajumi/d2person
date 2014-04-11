
<div class="btn-toolbar">
    <div class="btn-group">
        <?php
                   switch($this->action->id) {
                       case "create":
                           $this->widget("bootstrap.widgets.TbButton", array(
                               "label"=>Yii::t("crud","Manage"),
                        "icon"=>"icon-list-alt",
                        "url"=>array("admin"),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.View")
                    ));
                    break;
                case "admin":
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Create"),
                        "icon"=>"icon-plus",
                        "url"=>array("create"),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.Create")
                    ));
                    break;
                case "view":
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Manage"),
                        "icon"=>"icon-list-alt",
                        "url"=>array("admin"),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.View")
                    ));
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Update"),
                        "icon"=>"icon-edit",
                        "url"=>array("update","ppxt_id"=>$model->{$model->tableSchema->primaryKey}),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.Update")
                    ));
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Create"),
                        "icon"=>"icon-plus",
                        "url"=>array("create"),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.Create")
                    ));
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Delete"),
                        "type"=>"danger",
                        "icon"=>"icon-remove icon-white",
                        "htmlOptions"=> array(
                            "submit"=>array("delete","ppxt_id"=>$model->{$model->tableSchema->primaryKey}, "returnUrl"=>(Yii::app()->request->getParam("returnUrl"))?Yii::app()->request->getParam("returnUrl"):$this->createUrl("admin")),
                            "confirm"=>Yii::t("crud","Do you want to delete this item?")
                        ),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.Delete")
                    ));
                    break;
                case "update":
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Manage"),
                        "icon"=>"icon-list-alt",
                        "url"=>array("admin"),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.View")
                    ));
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","View"),
                        "icon"=>"icon-eye-open",
                        "url"=>array("view","ppxt_id"=>$model->{$model->tableSchema->primaryKey}),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.View")
                    ));
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t("crud","Delete"),
                        "type"=>"danger",
                        "icon"=>"icon-remove icon-white",
                        "htmlOptions"=> array(
                            "submit"=>array("delete","ppxt_id"=>$model->{$model->tableSchema->primaryKey}, "returnUrl"=>(Yii::app()->request->getParam("returnUrl"))?Yii::app()->request->getParam("returnUrl"):$this->createUrl("admin")),
                            "confirm"=>Yii::t("crud","Do you want to delete this item?")
                        ),
                        "visible"=>Yii::app()->user->checkAccess("D2person.PpxtPersonXType.Delete")
                    ));
                    break;
            }
        ?>    </div>


    <?php if($this->action->id == 'admin'): ?>    <div class="btn-group">
        
        <?php
            $this->widget(
                   "bootstrap.widgets.TbButton",
                   array(
                       "label"=>Yii::t("crud","Search"),
                "icon"=>"icon-search",
                "htmlOptions"=>array("class"=>"search-button")
               )
           );
        ?>
            </div>
    <?php endif; ?>
    <?php if($this->action->id == 'admin' || $this->action->id == 'view'): ?>            <div class="btn-group">
            <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
                   'buttons'=>array(
                           array('label'=>Yii::t('crud','Relations'), 'icon'=>'icon-random', 'items'=>array(array('icon'=>'circle-arrow-left','label'=>'PpxtPtyp', 'url' =>array('/d2person/ptypType/admin')),array('icon'=>'circle-arrow-left','label'=>'PpxtPprs', 'url' =>array('/d2person/pprsPerson/admin')),
            )
          ),
        ),
    ));
?>        </div>

    
    <?php endif; ?></div>

<?php if($this->action->id == 'admin'): ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array('model'=>$model,)); ?>
</div>
<?php endif; ?>