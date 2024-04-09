<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
?>
<style type="text/css">
.reg_page .form_block{margin:54px auto;}
</style>


<style type="text/css">
.gallery_block__change_photo{width: 100%}
.gallery_photo_big__change_photo{width: 100%}
</style>

<div class="reg_page">
<div class="form_block">
<div class="form_title">Смена фото</div>
<div class="form_body">
	
<div class="nav">
<div class="nav_wrap">
  <a href="/setting/change_info" class="nav_item">Инфо</a>
  <a href="/setting/change_photo" class="nav_item nav_item__active">Фото</a>
</div>
</div>

<div class="gallery_block gallery_block__change_photo">
<div class="gallery_wrap">
<div class="gallery_photo_wrap">
<div class="gallery_photo_big gallery_photo_big__change_photo" style="background-image:url('/image/i.webp');?>"></div>
</div>
<div class="gallery_body gallery_body__user_bar">
<div class="gallery_content">
</div>
</div>
</div>
</div>
	
<div class="form_line">
<div class="form_line__wrapper">
</div>
<div class="form_line__input_wrap">
  <input type="file" class="file" placeholder="Ваше имя">
</div>
</div>
	<style type="text/css">
		

input[type="file"] {
  display: none;
}
.custom-file-upload {
  border: 1px solid #808080;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  width: auto;
}
	</style>
<label for="file-upload" class="custom-file-upload">
        Загрузить фото</i>
    </label>
<input id="file-upload" type="file" />
<div class="form_line">
<div class="form_line__input_wrap">
  <input type="submit" class="button_gray" value="Сохранить">
</div>
</div>

	
</div>
</div>
</div>
<div class="clear"></div>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>