<?php
function ht_add_widget() { ?>
<?php if(wp_is_mobile()) { ?>
<ul class="kontak">
<li class="telp"><?php if(of_get_option('kontak_telp')){ ?><a href="tel:<?php echo of_get_option('kontak_telp'); ?>"><?php echo of_get_option('kontak_telp'); ?></a><?php }?></li>
<li class="hp"><?php if(of_get_option('kontak_hp')){ ?><a href="tel:<?php echo of_get_option('kontak_hp'); ?>"><?php echo of_get_option('kontak_hp'); ?></a><?php }?></li>
<li class="bbm"><?php if(of_get_option('kontak_bbm')){ ?><a href="PIN:<?php echo of_get_option('kontak_bbm'); ?>"><?php echo of_get_option('kontak_bbm'); ?></a><?php }?></li>
<li class="wa"><?php if(of_get_option('kontak_wa')){ ?><a href="tel:<?php echo of_get_option('kontak_wa'); ?>"><?php echo of_get_option('kontak_wa'); ?></a><?php }?></li>
</ul>
<?php if(of_get_option('kontak_url')){ ?><a id="call" href="<?php echo of_get_option('kontak_url'); ?>">Contact Us</a><?php }?>
<?php } ?>
<?php if(!wp_is_mobile()) { ?>
<ul class="kontak">
<li class="telp"><?php if(of_get_option('kontak_telp')){ ?><a onclick="myPhone()" href="#copy:<?php echo of_get_option('kontak_telp'); ?>"><?php echo of_get_option('kontak_telp'); ?></a><?php }?></li>
<li class="hp"><?php if(of_get_option('kontak_hp')){ ?><a onclick="myHp()" href="#copy:<?php echo of_get_option('kontak_hp'); ?>"><?php echo of_get_option('kontak_hp'); ?></a><?php }?></li>
<li class="bbm"><?php if(of_get_option('kontak_bbm')){ ?><a href="#copy:<?php echo of_get_option('kontak_bbm'); ?>"><?php echo of_get_option('kontak_bbm'); ?></a><?php }?></li>
<li class="wa"><?php if(of_get_option('kontak_wa')){ ?><a href="#copy:<?php echo of_get_option('kontak_wa'); ?>"><?php echo of_get_option('kontak_wa'); ?></a><?php }?></li></ul>
<?php if(of_get_option('kontak_url')){ ?><a id="call" href="<?php echo of_get_option('kontak_url'); ?>"><?php if(of_get_option('kontak_mail')){ ?><?php echo of_get_option('kontak_mail'); ?><?php }?></a><?php }?>
<?php } ?>
<script>
function myPhone() {
    alert("Call Now : <?php echo of_get_option('kontak_telp'); ?>");
}
function myHp() {
    alert("Call Now : <?php echo of_get_option('kontak_hp'); ?>");
}
</script>
<style>
ul.kontak{
	padding:1em;
	border:2px dashed #666;
	border-radius:8px;
display: block;
margin: 0px auto;
text-align: left;
}

ul.kontak,ul.kontak li a{
	font-size:1em;
text-decoration: none;
padding-left: 8px;
}

ul.kontak li{
	padding-left:38px;
	list-style:outside none none;
	line-height:33px;
	font-size:1.6em
}

.footer ul.kontak li{
	color:#fff
}

.shop-sidebar ul.kontak li{
	color:#A2A2A2
}
li.telp{
	background:url("http://apartmentmurah.com/wp-content/uploads/2015/07/icon-phone.png") no-repeat scroll left center rgba(0,0,0,0);
line-height: 35px !important;
background-position: 0px 4px;
}

li.hp{
	background:url("http://apartmentmurah.com/wp-content/uploads/2015/07/icon-phone.png") no-repeat scroll left center rgba(0,0,0,0);
line-height: 35px !important;
background-position: 0px -30px;
}

li.wa{
	background:url("http://apartmentmurah.com/wp-content/uploads/2015/07/whatsapp.png") no-repeat scroll left center rgba(0,0,0,0);
line-height: 35px !important;
background-position: 5px;
}
li.bbm{
	background:url("http://apartmentmurah.com/wp-content/uploads/2015/07/pinbb.png") no-repeat scroll left center rgba(0,0,0,0);
line-height: 35px !important;
background-position: 4px;
}
</style>

<?php
}
wp_register_sidebar_widget(
'ht_add_widget',
'Headway Themes Widget',
'ht_add_widget',
array( 'description' => 'Headway Themes Widget' )
);
?>
