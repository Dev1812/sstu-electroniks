<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
?>
<style type="text/css">
.reg_page .form_block{margin:54px auto;text-align: center;}
.setting_line{padding:14px 0 0px}
</style>
<div class="reg_page">
<div class="form_block">
<div class="form_title">Восстановление пароля</div>
<div class="form_body">
	

<div class="setting_line"><a href="/setting/change_info">Информация</a></div>
<div class="setting_line"><a href="/setting/change_photo">Фото</a></div>
	
	
</div>
</div>
</div>
<div class="clear"></div>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>