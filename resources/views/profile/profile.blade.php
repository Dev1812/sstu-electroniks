<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
?>


<div id="profile_page">


<div class="gallery_block gallery_block__user_bar">
<div class="gallery_wrap">
<div class="gallery_photo_wrap">
<div class="gallery_photo_big gallery_photo_big__user_bar" style="background-image:url('/image/i.webp');?>"></div>
</div>
<div class="gallery_body gallery_body__user_bar">
<div class="gallery_title">Павел Дуров</div>
<div class="gallery_content">
<div class="gallery_login">@test</div>
<div class="gallery_bio">Павел Дуров Павел Дуровм Павел Дуров</div>
</div>
<div class="gallery_marks"></div>
</div>
</div>
</div>

<div class="clear"></div>

<?php
for($i=0;$i<9;$i++) {
?>

<div class="gallery_block">
<div class="gallery_wrap">
<div class="gallery_photo_wrap">
<div class="gallery_photo_big" style="background-image:url('/image/i.webp');?>"></div>
</div>
<div class="gallery_body">
<div class="gallery_title">Павел Дуров</div>
<div class="gallery_counters">

<a href="/id1">ПВА</a>
	<span>|</span>
	<span>24 dec at 14:40</span>
</div>
<div class="gallery_marks"></div>
</div>
</div>
</div>

<?php

}

?>
</div>
<div class="clear"></div>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>