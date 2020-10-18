
<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="<?php echo base_url('template')?>">
		<meta charset="utf-8" />
		<title><?php echo lang('app.title_page_profile')?> | <?php echo $settings['meta_title']?></title>
		<meta name="description" content="User profile account information example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('template')?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('template')?>/assets/media/logos/favicon.ico" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				<img alt="Logo" src="<?php echo base_url('template')?>/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
					<span></span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
						<?php echo view('customer/includes/aside_primary.php',array('menu'=>'profile'));?>
						
						<?php echo view('customer/includes/aside_secondary.php');?>
					
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Mobile Toggle-->
									<button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
										<span></span>
									</button>
									<!--end::Mobile Toggle-->
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3"><?php echo lang('app.title_page_profile_account_info')?></h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('customer/dashboard')?>" class="text-muted"><?php echo lang('app.menu_app');?></a>
											</li>
											<li class="breadcrumb-item">
												<a href="<?php echo base_url('customer/profile')?>" class="text-muted"><?php echo lang('app.menu_profile');?></a>
											</li>
											
											<li class="breadcrumb-item">
												<a href="#" class="text-muted"><?php echo lang('app.menu_profile_account');?></a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<?php echo view('customer/includes/tool_bar.php');?>
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Profile Account Information-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<?php echo view('customer/includes/profile_aside.php',array('menu_profile'=>'account'));?>
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark"><?php echo lang('app.menu_profile_account');?></h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo lang('app.sub_title_profil_account_info');?></span>
												</div>
												<div class="card-toolbar">
													<button type="button" class="btn btn-success mr-2 save_profile_btn" id=""><?php echo lang('app.btn_save')?></button>
													<a href="<?php echo base_url('customer/profile')?>" class="btn btn-secondary"><?php echo lang('app.btn_cancel')?></a>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											 <?php $attributes = ['class' => '', 'id' => 'profile_form','method'=>'post', 'novalidate'=>"novalidate"];
												echo form_open_multipart( base_url('customer/profile/account'), $attributes);
												$input = [
												'type'  => 'hidden',
												'name'  => 'action',
												'id'    => 'action',
												'value' =>'edit_profil_account',
												
												'class' => 'form-control'
												
												];
										echo form_input($input);
												?>
												<!--begin::Body-->
												
												<div class="card-body">
												<div class="row">
													<div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
												</div>
												<?php if(isset($success)){?>
												<div class="row">
													<div class="alert alert-primary m-t-20" role="alert" id="" ><?php echo $success?></div>
												</div>
												<?php }?>
													
													
													
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-alert"><?php echo lang('app.field_current_password');?></label>
														<div class="col-lg-9 col-xl-6">
														<?php 
															$input = [
																	'type'  => 'password',
																	'name'  => 'current_password',
																	'id'    => 'current_password',
																	'required' =>true,
																	
																	'class' => 'form-control form-control-lg form-control-solid mb-2'
															];

															echo form_input($input);
															?>
															
															<a href="<?php echo base_url('/forgot')?>" class="text-sm font-weight-bold"><?php echo lang('app.sub_title_forgot_password');?></a>
														</div>
													</div>
													
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label"><?php echo lang('app.field_new_password');?></label>
														<div class="col-lg-9 col-xl-6">
															<?php 
															$input = [
																	'type'  => 'password',
																	'name'  => 'password',
																	'id'    => 'password',
																	'required' =>true,
																	
																	'class' => 'form-control form-control-lg form-control-solid'
															];

															echo form_input($input);
															?>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label"><?php echo lang('app.field_confirm_password');?></label>
														<div class="col-lg-9 col-xl-6">
															<?php 
															$input = [
																	'type'  => 'password',
																	'name'  => 'confirm_password',
																	'id'    => 'confirm_password',
																	'required' =>true,
																	
																	'class' => 'form-control form-control-lg form-control-solid'
															];

															echo form_input($input);
															?>
														</div>
													</div>
												</div>
												<!--end::Body-->
												
											</form>
											<!--end::Form-->
											
										</div>
										<!--end::Card-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Profile Account Information-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<!--doc: add "bg-white" class to have footer with solod background color-->
					<?php echo view('customer/includes/footer.php')?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<?php echo view('customer/includes/quick.php')?>
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:<?php echo base_url('template')?>/assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->
		
		
	
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url('template')?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url('template')?>/assets/js/pages/widgets.js"></script>
		<script src="<?php echo base_url('template')?>/assets/js/pages/custom/profile/profile.js"></script>
		<!--end::Page Scripts-->
		<script>
		"use strict";
		$(".save_profile_btn").click(function(){
			
				var fields=$("#profile_form").serializeArray();
				// Simulate Ajax request
					$.ajax({
						  url:"<?php echo base_url('Ajax/validation_profile_account')?>",
						  method:"POST",
						  data:fields
						  
					}).done(function(data){
							var obj=JSON.parse(data);
						if(obj.error==true){
								$("#error_alert").html(obj.validation);
								$("#error_alert").show('slow');
								Swal.fire({
									text: "<?php echo lang('app.error_form')?>",
									icon: "error",
									buttonsStyling: false,
									confirmButtonText: "<?php echo lang('app.error_form_btn')?>",
									customClass: {
										confirmButton: "btn font-weight-bold btn-light"
									}
								}).then(function () {
									KTUtil.scrollTop();
								});
							
							}
							else{
								
								$("#error_alert").hide(0);
								$("#profile_form").submit();
							}
					});
		});
		</script>
	</body>
	<!--end::Body-->
</html>