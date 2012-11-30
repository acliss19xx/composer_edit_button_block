<?php  defined('C5_EXECUTE') or die("Access Denied.");

class ComposerEditButtonBlockController extends BlockController {
	
	protected $btName = 'コンポーザー編集ボタン';
	protected $btDescription = 'コンポーザーで作成して公開されたあとのページで編集にコンポーザーを使用するためのブロック';
	protected $btTable = 'btComposerEditButton';
	
	protected $btInterfaceWidth = "200";
	protected $btInterfaceHeight = "100";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	








}
