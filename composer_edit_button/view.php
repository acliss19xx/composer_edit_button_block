<?php  defined('C5_EXECUTE') or die("Access Denied.");?>
<p>
<?php
$c = Page::getCurrentPage();

if(!$c->isEditMode()) {
	$ct = CollectionType::getByID($c->getCollectionTypeID());

	if(is_object($ct)){
		if($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage() || $cp->canApproveCollection()){ 
			$cp = new Permissions($c);
			if($cp->canViewToolbar()) { ?>
				<div id="composer_edit_button<?php echo $bID?>">
					<a href="<?php echo $this->url('/dashboard/composer/write', 'edit', $c->getCollectionID())?>">コンポーザーで編集</a>
				</div>
<?php	}
		}
	}
} else {
		echo '編集中は表示されません';
	}
?>
</p>
