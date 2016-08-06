<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Buku Tamu Halal Bihalal Padang Gantiang 2016</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/headers/header-default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/custom.css">
	
</head>

<body>
	<div class="wrapper">
		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row">
				<!-- Begin Content -->
				<div class="col-md-12">
					<!-- Checkout-Form -->
				<?php
                    if( isset($flashdata) ) {
                ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Registrasi</strong><?php echo $flashdata; ?>
                    </div>
                <?php } ?>
                    <br />
                <?php if(isset($error) ) { echo $error; } ?>
					<?php echo form_open_multipart('register/api_reg', array('id' => 'sky-form', 'class' => 'sky-form') ) ?>
					<!--form action="#" id="sky-form" class="sky-form"-->
						<header style="text-align:center;"><br /><b>Buku Tamu Halal Bihalal Padang Gantiang 2016</br></header>

						<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-male"></i>
										<input type="text" name="nama_suami" placeholder="Nama Suami">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-female"></i>
										<input type="text" name="nama_istri" placeholder="Nama Istri">
									</label>
								</section>
							</div>
						</fieldset>

						<fieldset>
							<div class="row">
								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak1" placeholder="Nama Anak 1">
									</label>
								</section>

								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak2" placeholder="Nama Anak 2">
									</label>
								</section>

								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak3" placeholder="Nama Anak 3">
									</label>
								</section>
							</div>

							<div class="row">
								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak4" placeholder="Nama Anak 4">
									</label>
								</section>

								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak5" placeholder="Nama Anak 5">
									</label>
								</section>
								
								<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-child"></i>
										<input type="text" name="anak6" placeholder="Nama Anak 6">
									</label>
								</section>
							</div>
						</fieldset>
						
						<fieldset>
							<section>
								<label class="textarea">
									<textarea rows="3" name="alamat" placeholder="Alamat"></textarea>
								</label>
							</section>
							
							<div class="row">
								<section class="col col-5">
									<label class="input">
										<i class="icon-prepend fa fa-exclamation-circle"></i>
										<input type="text" name="kota" placeholder="Kota">
									</label>
								</section>

								<section class="col col-7">
									<label class="input">
										<i class="icon-append fa fa-phone"></i>
										<input type="text" name="no_telp" placeholder="No Telp">
									</label>
								</section>
							</div>
						</fieldset>

						<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-male"></i>
										<input type="text" name="bapak_suami" placeholder="Nama Bapak dari Suami">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-female"></i>
										<input type="text" name="ibu_suami" placeholder="Nama Ibu dari Suami">
									</label>
								</section>
							</div>
							
							<div class="row">
								<section class="col col-6">
									<label class="input">
										<i class="icon-prepend fa fa-male"></i>
										<input type="text" name="bapak_istri" placeholder="Nama Ibu dari Istri">
									</label>
								</section>
								<section class="col col-6">
									<label class="input">
										<i class="icon-append fa fa-female"></i>
										<input type="text" name="ibu_istri" placeholder="Nama Ibu dari Istri">
									</label>
								</section>
							</div>
						</fieldset>
						
						<fieldset>
							<div class="row">
								<section class="col col-6">
									<label class="label" style="font-size:125%"><b>Jorong Suami</b></label>
									<div class="inline-group">
										<label class="radio"><input type="radio" name="jorong_suami" value="Koto Alam" checked><i class="rounded-x"></i>Koto Alam</label>
										<label class="radio"><input type="radio" name="jorong_suami" value="Koto Gadang"><i class="rounded-x"></i>Koto Gadang</label>
										<label class="radio"><input type="radio" name="jorong_suami" value="Koto Gadang Hilir"><i class="rounded-x"></i>Koto Gadang Hilir</label>
										<label class="radio"><input type="radio" name="jorong_suami" value="Rajo Dani"><i class="rounded-x"></i>Rajo Dani</label>
										<label class="radio"><input type="radio" name="jorong_suami" value="other_this" id="jorong_suami_other_this"><i class="rounded-x"></i></label>
										<label class="input col col-7" style="margin-left: -8%;">
											<input type="text" name="jorong_suami_other" placeholder="Lainnya" onclick="document.getElementById('jorong_suami_other_this').checked = true">
										</label>
									</div>
								</section>
								
								<section class="col col-6">
									<label class="label" style="font-size:125%"><b>Jorong Istri</b></label>
									<div class="inline-group">
										<label class="radio"><input type="radio" name="jorong_istri" value="Koto Alam" checked><i class="rounded-x"></i>Koto Alam</label>
										<label class="radio"><input type="radio" name="jorong_istri" value="Koto Gadang"><i class="rounded-x"></i>Koto Gadang</label>
										<label class="radio"><input type="radio" name="jorong_istri" value="Koto Gadang Hilir"><i class="rounded-x"></i>Koto Gadang Hilir</label>
										<label class="radio"><input type="radio" name="jorong_istri" value="Rajo Dani"><i class="rounded-x"></i>Rajo Dani</label>
										<label class="radio"><input type="radio" name="jorong_istri" value="other_this" id="jorong_istri_other_this"><i class="rounded-x"></i></label>
										<label class="input col col-7" style="margin-left: -8%;">
											<input type="text" name="jorong_istri_other" placeholder="Lainnya" onclick="document.getElementById('jorong_istri_other_this').checked = true">
										</label>
									</div>
								</section>
							</div>

							<div class="row">
								<section class="col col-6">
									<label class="label" style="font-size:125%"><b>Suku Suami</b></label>
									<div class="inline-group">
										<label class="radio"><input type="radio" name="suku_suami" value="Chaniago" checked><i class="rounded-x"></i>Chaniago</label>
										<label class="radio"><input type="radio" name="suku_suami" value="Sembilan"><i class="rounded-x"></i>Sembilan</label>
										<label class="radio"><input type="radio" name="suku_suami" value="Kutianyir"><i class="rounded-x"></i>Kutianyir</label>
										<label class="radio"><input type="radio" name="suku_suami" value="Tujuh"><i class="rounded-x"></i>Tujuh</label>
										<label class="radio"><input type="radio" name="suku_suami" value="Rajo Dani"><i class="rounded-x"></i>Rajo Dani</label>
										<label class="radio"><input type="radio" name="suku_suami" value="other_this" id="suku_suami_other_this"><i class="rounded-x"></i></label>
										<label class="input col col-7" style="margin-left: -8%;">
											<input type="text" name="suku_suami_other" placeholder="Lainnya" onclick="document.getElementById('suku_suami_other_this').checked = true">
										</label>
									</div>
								</section>
								
								<section class="col col-6">
									<label class="label" style="font-size:125%"><b>Suku Istri</b></label>
									<div class="inline-group">
										<label class="radio"><input type="radio" name="suku_istri" value="Chaniago" checked><i class="rounded-x"></i>Chaniago</label>
										<label class="radio"><input type="radio" name="suku_istri" value="Sembilan"><i class="rounded-x"></i>Sembilan</label>
										<label class="radio"><input type="radio" name="suku_istri" value="Kutianyir"><i class="rounded-x"></i>Kutianyir</label>
										<label class="radio"><input type="radio" name="suku_istri" value="Tujuh"><i class="rounded-x"></i>Tujuh</label>
										<label class="radio"><input type="radio" name="suku_istri" value="Rajo Dani"><i class="rounded-x"></i>Rajo Dani</label>
										<label class="radio"><input type="radio" name="suku_istri" value="other_this" id="suku_istri_other_this"><i class="rounded-x"></i></label>
										<label class="input col col-7" style="margin-left: -8%;">
											<input type="text" name="suku_istri_other" placeholder="Lainnya" onclick="document.getElementById('suku_istri_other_this').checked = true">
										</label>
									</div>
								</section>
							</div>
						</fieldset>

						<fieldset>
							<section>
								<label for="file" class="input input-file">
									<div class="button"><input type="file" name="userfile" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" placeholder="Upload Photo" readonly>
								</label>
							</section>
						</fieldset>
						
						<footer>
							
							<br/>
							<section>
								<input type="submit" class="btn-u col-11" value="simpan" name="submiten" style="margin:0 auto; float:none; display:block; font-size:160%"/>
							</section>
							<br/>
							
						</footer>
					</form>
					<!-- End Checkout-Form --> 
					<div class="margin-bottom-40"></div>
				</div>
				<!-- End Content -->
			</div>
		</div><!--/container-->
		<!--=== End Content Part ===-->
	</div><!--/End Wrapepr-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/plugins/smoothScroll.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/forms/order.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/forms/review.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/forms/checkout.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			OrderForm.initOrderForm();
			ReviewForm.initReviewForm();
			CheckoutForm.initCheckoutForm();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>/assets/plugins/respond.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/html5shiv.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/placeholder-IE-fixes.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->

<!--[if lt IE 10]>
	<script src="<?php echo base_url();?>/assets/plugins/sky-forms/version-2.0.1/js/jquery.placeholder.min.js"></script>
	<![endif]-->

</body>
</html>
