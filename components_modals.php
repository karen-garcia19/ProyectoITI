<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/main/jquery.min.js"></script>
	<script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
	
	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/components_modals.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.php" class="d-inline-block">
				<img src="global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
										<span class="d-block text-muted font-size-sm">Lead web developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Will Brason</a>
										<span class="d-block text-muted font-size-sm">Marketing manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
										<span class="d-block text-muted font-size-sm">Project manager</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
										<span class="d-block text-muted font-size-sm">Business developer</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">UX expert</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">James Alexander</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>

										<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>

									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Margo Baker</span>
												<span class="text-muted float-right font-size-sm">12:16</span>
											</a>
										</div>

										<span class="text-muted">That was something he was unable to do because...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Jeremy Victorino</span>
												<span class="text-muted float-right font-size-sm">22:48</span>
											</a>
										</div>

										<span class="text-muted">But that would be extremely strained and suspicious...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Beatrix Diaz</span>
												<span class="text-muted float-right font-size-sm">Tue</span>
											</a>
										</div>

										<span class="text-muted">What a strenuous career it is that I've chosen...</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Richard Vango</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>Karen</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Karen Garcia</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> Ciudad Mante, Tam.
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="icon-home4"></i>
								<span>
									Tablero
									<span class="d-block font-weight-normal opacity-50"></span>
								</span>
							</a>
							<!--
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>
								<li class="nav-item"><a href="layout_2/LTR/default/full/index.html" class="nav-link">Layout 2</a></li>
								<li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Layout 3</a></li>
								<li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Layout 4</a></li>
								<li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Layout 5</a></li>
								<li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link disabled">Layout 6 <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="index.html" class="nav-link active">Default</a></li>
								<li class="nav-item"><a href="../../../LTR/material/full/index.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="../../../LTR/dark/full/index.html" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="../../../LTR/clean/full/index.html" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="../seed/layout_nav_horizontal.html" class="nav-link">Horizontal navigation</a></li>
								<li class="nav-item"><a href="../seed/sidebar_none.html" class="nav-link">No sidebar</a></li>
								<li class="nav-item"><a href="../seed/sidebar_main.html" class="nav-link">1 sidebar</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">2 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_secondary.html" class="nav-link">Secondary sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">3 sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_right_hidden.html" class="nav-link">Right sidebar hidden</a></li>
										<li class="nav-item"><a href="../seed/sidebar_right_visible.html" class="nav-link">Right sidebar visible</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="../seed/sidebar_content_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="../seed/sidebar_content_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li>/-->
						<!-- /main -->

						<!-- Forms -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Componentes</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>Empleados</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form components">
								<li class="nav-item"><a href="form_inputs.php" class="nav-link">Listado</a></li>
								<li class="nav-item"><a href="form_checkboxes_radios.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="form_select2.php" class="nav-link">Editar</a></li>
								<!--<li class="nav-item"><a href="form_multiselect.html" class="nav-link">Bootstrap multiselect</a></li>
								<li class="nav-item"><a href="form_input_groups.html" class="nav-link">Input groups</a></li>
								<li class="nav-item"><a href="form_controls_extended.html" class="nav-link">Extended controls</a></li>
								<li class="nav-item"><a href="form_floating_labels.html" class="nav-link">Floating labels</a></li>
								<li class="nav-item"><a href="form_tag_inputs.html" class="nav-link">Tag inputs</a></li>
								<li class="nav-item"><a href="form_dual_listboxes.html" class="nav-link">Dual Listboxes</a></li>
								<li class="nav-item"><a href="form_validation.html" class="nav-link">Validation</a></li>
								<li class="nav-item"><a href="form_wizard.html" class="nav-link">Form wizard</a></li>
								<li class="nav-item"><a href="form_actions.html" class="nav-link">Form actions</a></li>
								<li class="nav-item"><a href="form_inputs_grid.html" class="nav-link">Inputs grid</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home4"></i> <span>Departamentos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="JSON forms">
								<li class="nav-item"><a href="alpaca_basic.php" class="nav-link">Listado</a></li>
								<li class="nav-item"><a href="alpaca_advanced.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="alpaca_controls.php" class="nav-link">Editar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-home2"></i> <span>Empresas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Text editors">
								<li class="nav-item"><a href="editor_summernote.php" class="nav-link">Listado</a></li>
								<li class="nav-item"><a href="editor_ckeditor.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="editor_trumbowyg.php" class="nav-link">Editar</a></li>
								<!--<li class="nav-item"><a href="editor_code.html" class="nav-link">Code editor</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-list-unordered"></i> <span>Vacaciones</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Pickers">
								<li class="nav-item"><a href="picker_date.php" class="nav-link">Listado</a></li>
								<li class="nav-item"><a href="picker_color.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="picker_location.php" class="nav-link">Editar</a></li>
							</ul>
						</li>
						<!--<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Form layouts">
								<li class="nav-item"><a href="form_layout_vertical.html" class="nav-link">Vertical form</a></li>
								<li class="nav-item"><a href="form_layout_vertical_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="form_layout_horizontal.html" class="nav-link">Horizontal form</a></li>
								<li class="nav-item"><a href="form_layout_horizontal_styled.html" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /forms -->

						<!-- Components -->

						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Componentes 2</div> <i class="icon-menu" title="Components"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid"></i> <span>Pagos de transporte</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic components">
								<li class="nav-item"><a href="components_modals.php" class="nav-link">Formulario de pagos</a></li>
								<!--<li class="nav-item"><a href="components_dropdowns.html" class="nav-link">Dropdown menus</a></li>
								<li class="nav-item"><a href="components_tabs.html" class="nav-link">Tabs component</a></li>
								<li class="nav-item"><a href="components_pills.html" class="nav-link">Pills component</a></li>
								<li class="nav-item"><a href="components_collapsible.html" class="nav-link">Collapsible</a></li>
								<li class="nav-item"><a href="components_navs.html" class="nav-link">Navs</a></li>
								<li class="nav-item"><a href="components_buttons.html" class="nav-link">Buttons</a></li>
								<li class="nav-item"><a href="components_popups.html" class="nav-link">Tooltips and popovers</a></li>
								<li class="nav-item"><a href="components_alerts.html" class="nav-link">Alerts</a></li>
								<li class="nav-item"><a href="components_pagination.html" class="nav-link">Pagination</a></li>
								<li class="nav-item"><a href="components_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="components_progress.html" class="nav-link">Progress</a></li>
								<li class="nav-item"><a href="components_breadcrumbs.html" class="nav-link">Breadcrumbs</a></li>
								<li class="nav-item"><a href="components_media.html" class="nav-link">Media objects</a></li>
								<li class="nav-item"><a href="components_scrollspy.html" class="nav-link">Scrollspy</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user-plus"></i> <span>Listado</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Content styling">
								<!--<li class="nav-item"><a href="content_page_header.html" class="nav-link">Page header</a></li>
								<li class="nav-item"><a href="content_page_footer.html" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item-divider"></li>/-->
								<li class="nav-item"><a href="content_cards.php" class="nav-link">Listado</a></li>
								<li class="nav-item"><a href="content_cards_content.php" class="nav-link">Agregar</a></li>
								<li class="nav-item"><a href="content_cards_layouts.php" class="nav-link">Editar</a></li>
								<!--<li class="nav-item"><a href="content_cards_header.html" class="nav-link">Card header elements</a></li>
								<li class="nav-item"><a href="content_cards_footer.html" class="nav-link">Card footer elements</a></li>
								<li class="nav-item"><a href="content_cards_draggable.html" class="nav-link">Draggable cards</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="content_text_styling.html" class="nav-link">Text styling</a></li>
								<li class="nav-item"><a href="content_typography.html" class="nav-link">Typography</a></li>
								<li class="nav-item"><a href="content_helpers.html" class="nav-link">Helper classes</a></li>
								<li class="nav-item"><a href="content_helpers_flex.html" class="nav-link">Flex utilities</a></li>
								<li class="nav-item"><a href="content_syntax_highlighter.html" class="nav-link">Syntax highlighter</a></li>
								<li class="nav-item"><a href="content_grid.html" class="nav-link">Grid system</a></li>/-->
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Tutorias</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extra components">
								<li class="nav-item"><a href="extra_pnotify.php" class="nav-link">Listado de tutorias</a></li>
								<li class="nav-item"><a href="extra_jgrowl_noty.php" class="nav-link">Agregar tutorias</a></li>
								<li class="nav-item"><a href="extra_sweetalert.php" class="nav-link">Editar tutorias</a></li>
								<li class="nav-item-divider"></li>
								<!--<li class="nav-item"><a href="extra_sliders_noui.html" class="nav-link">NoUI sliders</a></li>
								<li class="nav-item"><a href="extra_sliders_ion.html" class="nav-link">Ion range sliders</a></li>
								<li class="nav-item"><a href="extra_trees.html" class="nav-link">Dynamic tree views</a></li>
								<li class="nav-item"><a href="extra_context_menu.html" class="nav-link">Context menu</a></li>
								<li class="nav-item"><a href="extra_fab.html" class="nav-link">Floating action buttons</a></li>
								<li class="nav-item"><a href="extra_session_timeout.html" class="nav-link">Session timeout</a></li>
								<li class="nav-item"><a href="extra_idle_timeout.html" class="nav-link">Idle timeout</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Color system">
								<li class="nav-item"><a href="colors_primary.html" class="nav-link">Primary palette</a></li>
								<li class="nav-item"><a href="colors_danger.html" class="nav-link">Danger palette</a></li>
								<li class="nav-item"><a href="colors_success.html" class="nav-link">Success palette</a></li>
								<li class="nav-item"><a href="colors_warning.html" class="nav-link">Warning palette</a></li>
								<li class="nav-item"><a href="colors_info.html" class="nav-link">Info palette</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="colors_pink.html" class="nav-link">Pink palette</a></li>
								<li class="nav-item"><a href="colors_violet.html" class="nav-link">Violet palette</a></li>
								<li class="nav-item"><a href="colors_purple.html" class="nav-link">Purple palette</a></li>
								<li class="nav-item"><a href="colors_indigo.html" class="nav-link">Indigo palette</a></li>
								<li class="nav-item"><a href="colors_blue.html" class="nav-link">Blue palette</a></li>
								<li class="nav-item"><a href="colors_teal.html" class="nav-link">Teal palette</a></li>
								<li class="nav-item"><a href="colors_green.html" class="nav-link">Green palette</a></li>
								<li class="nav-item"><a href="colors_orange.html" class="nav-link">Orange palette</a></li>
								<li class="nav-item"><a href="colors_brown.html" class="nav-link">Brown palette</a></li>
								<li class="nav-item"><a href="colors_grey.html" class="nav-link">Grey palette</a></li>
								<li class="nav-item"><a href="colors_slate.html" class="nav-link">Slate palette</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Animations">
								<li class="nav-item"><a href="animations_css3.html" class="nav-link">CSS3 animations</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Velocity animations</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="animations_velocity_basic.html" class="nav-link">Basic usage</a></li>
										<li class="nav-item"><a href="animations_velocity_ui.html" class="nav-link">UI pack effects</a></li>
										<li class="nav-item"><a href="animations_velocity_examples.html" class="nav-link">Advanced examples</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Icons">
								<li class="nav-item"><a href="icons_icomoon.html" class="nav-link">Icomoon</a></li>
								<li class="nav-item"><a href="icons_material.html" class="nav-link">Material</a></li>
								<li class="nav-item"><a href="icons_fontawesome.html" class="nav-link">Font awesome</a></li>
							</ul>
						</li>/-->
						<!-- /components -->

						<!-- Layout -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Page layouts">
								<li class="nav-item"><a href="layout_fixed_navbar.html" class="nav-link">Fixed navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_custom.html" class="nav-link">Fixed sidebar - custom scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_sidebar_native.html" class="nav-link">Fixed sidebar - native scroll</a></li>
								<li class="nav-item"><a href="layout_fixed_hideable_navbar.html" class="nav-link">Hideable navbar</a></li>
								<li class="nav-item"><a href="layout_fixed_footer.html" class="nav-link">Fixed footer</a></li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="layout_boxed_default.html" class="nav-link">Boxed with default sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_mini.html" class="nav-link">Boxed with mini sidebar</a></li>
								<li class="nav-item"><a href="layout_boxed_full.html" class="nav-link">Boxed full width</a></li>
								<li class="nav-item"><a href="layout_boxed_content.html" class="nav-link">Boxed content</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Sidebars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Main sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_default_collapse.html" class="nav-link">Default collapsible</a></li>
										<li class="nav-item"><a href="sidebar_default_hide.html" class="nav-link">Default hideable</a></li>
										<li class="nav-item"><a href="sidebar_default_hidden.html" class="nav-link">Default hidden</a></li>
										<li class="nav-item"><a href="sidebar_mini_collapse.html" class="nav-link">Mini collapsible</a></li>
										<li class="nav-item"><a href="sidebar_mini_hide.html" class="nav-link">Mini hideable</a></li>
										<li class="nav-item"><a href="sidebar_mini_hidden.html" class="nav-link">Mini hidden</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_default_color_light.html" class="nav-link">Light color</a></li>
										<li class="nav-item"><a href="sidebar_default_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Secondary sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_secondary_after.html" class="nav-link">After default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_before.html" class="nav-link">Before default</a></li>
										<li class="nav-item"><a href="sidebar_secondary_hidden.html" class="nav-link">Hidden by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_secondary_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_secondary_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Right sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_right_default_collapse.html" class="nav-link">Show - collapse main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_hide.html" class="nav-link">Show - hide main</a></li>
										<li class="nav-item"><a href="sidebar_right_default_toggle.html" class="nav-link">Show - fix default width</a></li>
										<li class="nav-item"><a href="sidebar_right_mini_toggle.html" class="nav-link">Show - fix mini width</a></li>
										<li class="nav-item"><a href="sidebar_right_secondary_hide.html" class="nav-link">Show - hide secondary</a></li>
										<li class="nav-item"><a href="sidebar_right_visible.html" class="nav-link">Visible by default</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_right_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_right_color_custom.html" class="nav-link">Custom color</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content sidebar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="sidebar_content_left.html" class="nav-link">Left position</a></li>
										<li class="nav-item"><a href="sidebar_content_left_stretch.html" class="nav-link">Left stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_left_hidden.html" class="nav-link">Left hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_right.html" class="nav-link">Right position</a></li>
										<li class="nav-item"><a href="sidebar_content_right_stretch.html" class="nav-link">Right stretched</a></li>
										<li class="nav-item"><a href="sidebar_content_right_hidden.html" class="nav-link">Right hidden</a></li>
										<li class="nav-item"><a href="sidebar_content_sections.html" class="nav-link">Sectioned sidebar</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="sidebar_content_color_dark.html" class="nav-link">Dark color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_custom.html" class="nav-link">Custom color</a></li>
										<li class="nav-item"><a href="sidebar_content_color_sections_custom.html" class="nav-link">Custom sections color</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="sidebar_components.html" class="nav-link">Sidebar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Navbars">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Single navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_single_top_static.html" class="nav-link">Single top static</a></li>
										<li class="nav-item"><a href="navbar_single_top_fixed.html" class="nav-link">Single top fixed</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_static.html" class="nav-link">Single bottom static</a></li>
										<li class="nav-item"><a href="navbar_single_bottom_fixed.html" class="nav-link">Single bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_single_header_before.html" class="nav-link">Before page header</a></li>
										<li class="nav-item"><a href="navbar_single_header_after.html" class="nav-link">After page header</a></li>
										<li class="nav-item"><a href="navbar_single_content_after.html" class="nav-link">After page content</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Multiple navbars</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_multiple_top_static.html" class="nav-link">Multiple top static</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_fixed.html" class="nav-link">Multiple top fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_static.html" class="nav-link">Multiple bottom static</a></li>
										<li class="nav-item"><a href="navbar_multiple_bottom_fixed.html" class="nav-link">Multiple bottom fixed</a></li>
										<li class="nav-item"><a href="navbar_multiple_top_bottom.html" class="nav-link">Multiple - top and bottom</a></li>
										<li class="nav-item"><a href="navbar_multiple_secondary_sticky.html" class="nav-link">Multiple - secondary sticky</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Content navbar</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="navbar_component_single.html" class="nav-link">Single navbar</a></li>
										<li class="nav-item"><a href="navbar_component_multiple.html" class="nav-link">Multiple navbars</a></li>
									</ul>
								</li>
								<li class="nav-item-divider"></li>
								<li class="nav-item"><a href="navbar_colors.html" class="nav-link">Color options</a></li>
								<li class="nav-item"><a href="navbar_sizes.html" class="nav-link">Sizing options</a></li>
								<li class="nav-item"><a href="navbar_hideable.html" class="nav-link">Hide on scroll</a></li>
								<li class="nav-item"><a href="navbar_components.html" class="nav-link">Navbar components</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
								<li class="nav-item"><a href="navigation_vertical_collapsible.html" class="nav-link">Collapsible menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_accordion.html" class="nav-link">Accordion menu</a></li>
								<li class="nav-item"><a href="navigation_vertical_bordered.html" class="nav-link">Bordered navigation</a></li>
								<li class="nav-item"><a href="navigation_vertical_right_icons.html" class="nav-link">Right icons</a></li>
								<li class="nav-item"><a href="navigation_vertical_badges.html" class="nav-link">Badges</a></li>
								<li class="nav-item"><a href="navigation_vertical_disabled.html" class="nav-link">Disabled items</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
								<li class="nav-item"><a href="navigation_horizontal_click.html" class="nav-link">Submenu on click</a></li>
								<li class="nav-item"><a href="navigation_horizontal_hover.html" class="nav-link">Submenu on hover</a></li>
								<li class="nav-item"><a href="navigation_horizontal_elements.html" class="nav-link">With custom elements</a></li>
								<li class="nav-item"><a href="navigation_horizontal_tabs.html" class="nav-link">Tabbed navigation</a></li>
								<li class="nav-item"><a href="navigation_horizontal_disabled.html" class="nav-link">Disabled navigation links</a></li>
								<li class="nav-item"><a href="navigation_horizontal_mega.html" class="nav-link">Horizontal mega menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Menu levels">
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
												<li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
											</ul>
										</li>
										<li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
							</ul>
						</li>/-->
						<!-- /layout -->

						<!-- Data visualization -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="ECharts library">
								<li class="nav-item"><a href="echarts_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="echarts_areas.html" class="nav-link">Area charts</a></li>
								<li class="nav-item"><a href="echarts_columns_waterfalls.html" class="nav-link">Columns and waterfalls</a></li>
								<li class="nav-item"><a href="echarts_bars_tornados.html" class="nav-link">Bars and tornados</a></li>
								<li class="nav-item"><a href="echarts_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="echarts_pies_donuts.html" class="nav-link">Pies and donuts</a></li>
								<li class="nav-item"><a href="echarts_funnels_calendars.html" class="nav-link">Funnels and calendars</a></li>
								<li class="nav-item"><a href="echarts_candlesticks_others.html" class="nav-link">Candlesticks and others</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="D3 library">
								<li class="nav-item"><a href="d3_lines_basic.html" class="nav-link">Simple lines</a></li>
								<li class="nav-item"><a href="d3_lines_advanced.html" class="nav-link">Advanced lines</a></li>
								<li class="nav-item"><a href="d3_bars_basic.html" class="nav-link">Simple bars</a></li>
								<li class="nav-item"><a href="d3_bars_advanced.html" class="nav-link">Advanced bars</a></li>
								<li class="nav-item"><a href="d3_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="d3_circle_diagrams.html" class="nav-link">Circle diagrams</a></li>
								<li class="nav-item"><a href="d3_tree.html" class="nav-link">Tree layout</a></li>
								<li class="nav-item"><a href="d3_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Dimple library">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Line charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_lines_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_lines_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Bar charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_bars_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_bars_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Area charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_area_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_area_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Step charts</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="dimple_step_horizontal.html" class="nav-link">Horizontal orientation</a></li>
										<li class="nav-item"><a href="dimple_step_vertical.html" class="nav-link">Vertical orientation</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="dimple_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="dimple_rings.html" class="nav-link">Ring charts</a></li>
								<li class="nav-item"><a href="dimple_scatter.html" class="nav-link">Scatter charts</a></li>
								<li class="nav-item"><a href="dimple_bubble.html" class="nav-link">Bubble charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="C3 library">
								<li class="nav-item"><a href="c3_lines_areas.html" class="nav-link">Lines and areas</a></li>
								<li class="nav-item"><a href="c3_bars_pies.html" class="nav-link">Bars and pies</a></li>
								<li class="nav-item"><a href="c3_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="c3_axis.html" class="nav-link">Chart axis</a></li>
								<li class="nav-item"><a href="c3_grid.html" class="nav-link">Grid options</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Google charts">
								<li class="nav-item"><a href="google_lines.html" class="nav-link">Line charts</a></li>
								<li class="nav-item"><a href="google_bars.html" class="nav-link">Bar charts</a></li>
								<li class="nav-item"><a href="google_pies.html" class="nav-link">Pie charts</a></li>
								<li class="nav-item"><a href="google_scatter_bubble.html" class="nav-link">Bubble &amp; scatter charts</a></li>
								<li class="nav-item"><a href="google_other.html" class="nav-link">Other charts</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Maps integration">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Google maps</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="maps_google_basic.html" class="nav-link">Basics</a></li>
										<li class="nav-item"><a href="maps_google_controls.html" class="nav-link">Controls</a></li>
										<li class="nav-item"><a href="maps_google_markers.html" class="nav-link">Markers</a></li>
										<li class="nav-item"><a href="maps_google_drawings.html" class="nav-link">Map drawings</a></li>
										<li class="nav-item"><a href="maps_google_layers.html" class="nav-link ">Layers</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="maps_vector.html" class="nav-link">Vector maps</a></li>
								<li class="nav-item"><a href="maps_echarts.html" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /data visualization -->

						<!-- Extensions -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Extensions">
								<li class="nav-item"><a href="extension_image_cropper.html" class="nav-link">Image cropper</a></li>
								<li class="nav-item"><a href="extension_blockui.html" class="nav-link">Block UI</a></li>
								<li class="nav-item"><a href="extension_dnd.html" class="nav-link">Drag and drop</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
								<li class="nav-item"><a href="jqueryui_interactions.html" class="nav-link">Interactions</a></li>
								<li class="nav-item"><a href="jqueryui_forms.html" class="nav-link">Forms</a></li>
								<li class="nav-item"><a href="jqueryui_components.html" class="nav-link">Components</a></li>
								<li class="nav-item"><a href="jqueryui_sliders.html" class="nav-link">Sliders</a></li>
								<li class="nav-item"><a href="jqueryui_navigation.html" class="nav-link">Navigation</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="File uploaders">
								<li class="nav-item"><a href="uploader_plupload.html" class="nav-link">Plupload</a></li>
								<li class="nav-item"><a href="uploader_bootstrap.html" class="nav-link">Bootstrap file uploader</a></li>
								<li class="nav-item"><a href="uploader_dropzone.html" class="nav-link">Dropzone</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Event calendars">
								<li class="nav-item"><a href="fullcalendar_views.html" class="nav-link">Basic views</a></li>
								<li class="nav-item"><a href="fullcalendar_styling.html" class="nav-link">Event styling</a></li>
								<li class="nav-item"><a href="fullcalendar_formats.html" class="nav-link">Language and time</a></li>
								<li class="nav-item"><a href="fullcalendar_advanced.html" class="nav-link">Advanced usage</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Internationalization">
								<li class="nav-item"><a href="internationalization_switch_direct.html" class="nav-link">Direct translation</a></li>
								<li class="nav-item"><a href="internationalization_switch_query.html" class="nav-link">Querystring parameter</a></li>
								<li class="nav-item"><a href="internationalization_fallback.html" class="nav-link">Language fallback</a></li>
								<li class="nav-item"><a href="internationalization_callbacks.html" class="nav-link">Callbacks</a></li>
							</ul>
						</li>/-->
						<!-- /extensions -->

						<!-- Tables -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Basic tables">
								<li class="nav-item"><a href="table_basic.html" class="nav-link">Basic examples</a></li>
								<li class="nav-item"><a href="table_sizing.html" class="nav-link">Table sizing</a></li>
								<li class="nav-item"><a href="table_borders.html" class="nav-link">Table borders</a></li>
								<li class="nav-item"><a href="table_styling.html" class="nav-link">Table styling</a></li>
								<li class="nav-item"><a href="table_elements.html" class="nav-link">Table elements</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables">
								<li class="nav-item"><a href="datatable_basic.html" class="nav-link">Basic initialization</a></li>
								<li class="nav-item"><a href="datatable_styling.html" class="nav-link">Basic styling</a></li>
								<li class="nav-item"><a href="datatable_advanced.html" class="nav-link">Advanced examples</a></li>
								<li class="nav-item"><a href="datatable_sorting.html" class="nav-link">Sorting options</a></li>
								<li class="nav-item"><a href="datatable_api.html" class="nav-link">Using API</a></li>
								<li class="nav-item"><a href="datatable_data_sources.html" class="nav-link">Data sources</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
								<li class="nav-item"><a href="datatable_extension_reorder.html" class="nav-link">Columns reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_row_reorder.html" class="nav-link">Row reorder</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_columns.html" class="nav-link">Fixed columns</a></li>
								<li class="nav-item"><a href="datatable_extension_fixed_header.html" class="nav-link">Fixed header</a></li>
								<li class="nav-item"><a href="datatable_extension_autofill.html" class="nav-link">Auto fill</a></li>
								<li class="nav-item"><a href="datatable_extension_key_table.html" class="nav-link">Key table</a></li>
								<li class="nav-item"><a href="datatable_extension_scroller.html" class="nav-link">Scroller</a></li>
								<li class="nav-item"><a href="datatable_extension_select.html" class="nav-link">Select</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Buttons</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="datatable_extension_buttons_init.html" class="nav-link">Initialization</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_flash.html" class="nav-link">Flash buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_print.html" class="nav-link">Print buttons</a></li>
										<li class="nav-item"><a href="datatable_extension_buttons_html5.html" class="nav-link">HTML5 buttons</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="datatable_extension_colvis.html" class="nav-link">Columns visibility</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Handsontable">
								<li class="nav-item"><a href="handsontable_basic.html" class="nav-link">Basic configuration</a></li>
								<li class="nav-item"><a href="handsontable_advanced.html" class="nav-link">Advanced setup</a></li>
								<li class="nav-item"><a href="handsontable_cols.html" class="nav-link">Column features</a></li>
								<li class="nav-item"><a href="handsontable_cells.html" class="nav-link">Cell features</a></li>
								<li class="nav-item"><a href="handsontable_types.html" class="nav-link">Basic cell types</a></li>
								<li class="nav-item"><a href="handsontable_custom_checks.html" class="nav-link">Custom &amp; checkboxes</a></li>
								<li class="nav-item"><a href="handsontable_ac_password.html" class="nav-link">Autocomplete &amp; password</a></li>
								<li class="nav-item"><a href="handsontable_search.html" class="nav-link">Search</a></li>
								<li class="nav-item"><a href="handsontable_context.html" class="nav-link">Context menu</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
								<li class="nav-item"><a href="table_responsive.html" class="nav-link">Responsive basic tables</a></li>
								<li class="nav-item"><a href="datatable_responsive.html" class="nav-link">Responsive data tables</a></li>
							</ul>
						</li>/-->
						<!-- /tables -->

						<!-- Page kits -->
						<!--
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="General pages">
								<li class="nav-item"><a href="general_feed.html" class="nav-link">Feed</a></li>
								<li class="nav-item"><a href="general_embeds.html" class="nav-link">Embeds</a></li>
								<li class="nav-item"><a href="general_faq.html" class="nav-link">FAQ page</a></li>
								<li class="nav-item"><a href="general_knowledgebase.html" class="nav-link">Knowledgebase</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Blog</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="blog_classic_v.html" class="nav-link">Classic vertical</a></li>
										<li class="nav-item"><a href="blog_classic_h.html" class="nav-link">Classic horizontal</a></li>
										<li class="nav-item"><a href="blog_grid.html" class="nav-link">Grid</a></li>
										<li class="nav-item"><a href="blog_single.html" class="nav-link">Single post</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="blog_sidebar_left.html" class="nav-link">Left sidebar</a></li>
										<li class="nav-item"><a href="blog_sidebar_right.html" class="nav-link">Right sidebar</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Timelines</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="timelines_left.html" class="nav-link">Left timeline</a></li>
										<li class="nav-item"><a href="timelines_right.html" class="nav-link">Right timeline</a></li>
										<li class="nav-item"><a href="timelines_center.html" class="nav-link">Centered timeline</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Gallery</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="gallery_grid.html" class="nav-link">Media grid</a></li>
										<li class="nav-item"><a href="gallery_titles.html" class="nav-link">Media with titles</a></li>
										<li class="nav-item"><a href="gallery_description.html" class="nav-link">Media with description</a></li>
										<li class="nav-item"><a href="gallery_library.html" class="nav-link">Media library</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Service pages">
								<li class="nav-item"><a href="service_sitemap.html" class="nav-link">Sitemap</a></li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Invoicing</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="invoice_template.html" class="nav-link">Invoice template</a></li>
										<li class="nav-item"><a href="invoice_grid.html" class="nav-link">Invoice grid</a></li>
										<li class="nav-item"><a href="invoice_archive.html" class="nav-link">Invoice archive</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Authentication</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="login_simple.html" class="nav-link">Simple login</a></li>
										<li class="nav-item"><a href="login_advanced.html" class="nav-link">More login info</a></li>
										<li class="nav-item"><a href="login_registration.html" class="nav-link">Simple registration</a></li>
										<li class="nav-item"><a href="login_registration_advanced.html" class="nav-link">More registration info</a></li>
										<li class="nav-item"><a href="login_unlock.html" class="nav-link">Unlock user</a></li>
										<li class="nav-item"><a href="login_password_recover.html" class="nav-link">Reset password</a></li>
										<li class="nav-item"><a href="login_hide_navbar.html" class="nav-link">Hide navbar</a></li>
										<li class="nav-item"><a href="login_transparent.html" class="nav-link">Transparent box</a></li>
										<li class="nav-item"><a href="login_background.html" class="nav-link">Background option</a></li>
										<li class="nav-item"><a href="login_validation.html" class="nav-link">With validation</a></li>
										<li class="nav-item"><a href="login_tabbed.html" class="nav-link">Tabbed form</a></li>
										<li class="nav-item"><a href="login_modals.html" class="nav-link">Inside modals</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Error pages</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="error_403.html" class="nav-link">Error 403</a></li>
										<li class="nav-item"><a href="error_404.html" class="nav-link">Error 404</a></li>
										<li class="nav-item"><a href="error_405.html" class="nav-link">Error 405</a></li>
										<li class="nav-item"><a href="error_500.html" class="nav-link">Error 500</a></li>
										<li class="nav-item"><a href="error_503.html" class="nav-link">Error 503</a></li>
										<li class="nav-item"><a href="error_offline.html" class="nav-link">Offline page</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="User pages">
								<li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
								<li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
								<li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a></li>
								<li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Application pages">
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Task manager</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="task_manager_grid.html" class="nav-link">Task grid</a></li>
										<li class="nav-item"><a href="task_manager_list.html" class="nav-link">Task list</a></li>
										<li class="nav-item"><a href="task_manager_detailed.html" class="nav-link">Task detailed</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Inbox</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="mail_list.html" class="nav-link">Mail list</a></li>
										<li class="nav-item"><a href="mail_list_detached.html" class="nav-link">Mail list (detached)</a></li>
										<li class="nav-item"><a href="mail_read.html" class="nav-link">Read mail</a></li>
										<li class="nav-item"><a href="mail_write.html" class="nav-link">Write mail</a></li>
										<li class="nav-item-divider"></li>
										<li class="nav-item"><a href="chat_layouts.html" class="nav-link">Chat layouts</a></li>
										<li class="nav-item"><a href="chat_options.html" class="nav-link">Chat options</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="search_basic.html" class="nav-link">Basic search results</a></li>
										<li class="nav-item"><a href="search_users.html" class="nav-link">User search results</a></li>
										<li class="nav-item"><a href="search_images.html" class="nav-link">Image search results</a></li>
										<li class="nav-item"><a href="search_videos.html" class="nav-link">Video search results</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Job search</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="job_list_cards.html" class="nav-link">Cards view</a></li>
										<li class="nav-item"><a href="job_list_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="job_detailed.html" class="nav-link">Job detailed</a></li>
										<li class="nav-item"><a href="job_apply.html" class="nav-link">Apply</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Learning</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="learning_list.html" class="nav-link">List view</a></li>
										<li class="nav-item"><a href="learning_grid.html" class="nav-link">Grid view</a></li>
										<li class="nav-item"><a href="learning_detailed.html" class="nav-link">Detailed course</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Ecommerce set</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="ecommerce_product_list.html" class="nav-link">Product list</a></li>
										<li class="nav-item"><a href="ecommerce_product_grid.html" class="nav-link">Product grid</a></li>
										<li class="nav-item"><a href="ecommerce_orders_history.html" class="nav-link">Orders history</a></li>
										<li class="nav-item"><a href="ecommerce_customers.html" class="nav-link">Customers</a></li>
										<li class="nav-item"><a href="ecommerce_pricing.html" class="nav-link">Pricing tables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Widgets">
								<li class="nav-item"><a href="widgets_content.html" class="nav-link">Content widgets</a></li>
								<li class="nav-item"><a href="widgets_stats.html" class="nav-link">Statistics widgets</a></li>
								<li class="nav-item"><a href="widgets_menu.html" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
								<li class="nav-item"><a href="widgets_form.html" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
							</ul>
						</li>/-->
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Pagos de Transporte</span> - Universidad Politecnica de Victoria</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Bienvenido</a>
							<a href="components_modals.php" class="breadcrumb-item">Pagos de transporte</a>
							<span class="breadcrumb-item active">Formulario de pagos</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Form inputs -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Formulario de pagos de transporte</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4"></p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Agregar Información de pago de transporte (formulario)</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Matricula</label>
									<div class="col-lg-10">
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Nombre</label>
									<div class="col-lg-10">
										<input type="password" class="form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Carrera</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Fecha de pago</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="" autocomplete="off">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Ruta</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="" autocomplete="off">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Horario</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="" autocomplete="off">
									</div>
								</div>

								<!--<div class="form-group row">
									<label class="col-form-label col-lg-2">Descripcion del departamento</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder="" autocomplete="off">
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-lg-2">Valor máximo</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Etiqueta</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="clickable-label" placeholder="">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Texto estático</label>
									<div class="col-lg-10">
										<div class="form-control-plaintext"></div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Textarea</label>
									<div class="col-lg-10">
										<textarea rows="3" cols="3" class="form-control" placeholder=""></textarea>
									</div>
								</div>
							</fieldset>/-->
							<!--

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic selects</legend>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Single select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control">
			                                <option value="opt1">Default select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Styled select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control form-control-uniform" data-fouc>
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Custom BS select</label>
		                        	<div class="col-lg-10">
			                            <select class="custom-select">
			                                <option value="opt1">Styled select box</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple select</label>
									<div class="col-lg-10">
			                            <select multiple="multiple" class="form-control">
			                                <option selected>Amsterdam</option>      
			                                <option selected>Atlanta</option>
			                                <option>Baltimore</option>
			                                <option>Boston</option>
			                                <option>Buenos Aires</option>
			                                <option>Calgary</option>
			                                <option selected>Chicago</option>
			                                <option>Denver</option>
			                                <option>Dubai</option>
			                                <option>Frankfurt</option>
			                                <option>Hong Kong</option>
			                                <option>Honolulu</option>
			                                <option>Houston</option>
			                                <option>Kuala Lumpur</option>
			                                <option>London</option>
			                                <option>Los Angeles</option>
			                                <option>Melbourne</option>
			                                <option>Mexico City</option>
			                                <option>Miami</option>
			                                <option>Minneapolis</option>
			                            </select>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic file inputs</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default file input</label>
									<div class="col-lg-10">
										<input type="file" class="form-control h-auto">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled file input</label>
									<div class="col-lg-10">
										<input type="file" class="form-control-uniform" data-fouc>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom BS file input</label>
									<div class="col-lg-10">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Form helpers</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Text form helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted">Left aligned helper</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted text-center">Centered helper</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="form-text text-muted text-right">Right aligned helper</span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Full width badge helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-primary form-text text-left">Left aligned badge</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-danger form-text">Centered badge</span>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<span class="badge d-block badge-info form-text text-right">Right aligned badge</span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Block badge helpers</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text">
													<span class="badge badge-primary">Left aligned badge</span>
												</div>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text text-center">
													<span class="badge badge-danger">Centered badge</span>
												</div>
											</div>

											<div class="col-md-4">
												<input type="text" class="form-control">
												<div class="d-block form-text text-right">
													<span class="badge badge-info text-right">Right aligned badge</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inline text helper</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
											<div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
												<span class="text-muted">Inline text helper</span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inline badge helper</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-lg-6">
												<input type="text" class="form-control">
											</div>
											<div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
												<span class="badge bg-teal">Inline badge helper</span>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Input icons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Input with icons</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
													<div class="form-control-feedback form-control-feedback-lg">
														<i class="icon-make-group"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control" placeholder="Left icon, input default">
													<div class="form-control-feedback">
														<i class="icon-droplets"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
													<div class="form-control-feedback form-control-feedback-sm">
														<i class="icon-pin-alt"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
													<div class="form-control-feedback form-control-feedback-lg">
														<i class="icon-make-group"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control" placeholder="Right icon, input default">
													<div class="form-control-feedback">
														<i class="icon-droplets"></i>
													</div>
												</div>

												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
													<div class="form-control-feedback form-control-feedback-sm">
														<i class="icon-pin-alt"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Input with spinners</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-left">
													<input type="text" class="form-control" placeholder="Left spinner">
													<div class="form-control-feedback">
														<i class="icon-spinner2 spinner"></i>
													</div>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-group-feedback form-group-feedback-right">
													<input type="text" class="form-control" placeholder="Right spinner">
													<div class="form-control-feedback">
														<i class="icon-spinner2 spinner"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-success" placeholder="Valid state">
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state with icon</label>
									<div class="col-lg-10">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="text" class="form-control border-success" placeholder="Valid state">
											<div class="form-control-feedback text-success">
												<i class="icon-checkmark-circle"></i>
											</div>
										</div>
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-danger" placeholder="Invalid state">
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state with icon</label>
									<div class="col-lg-10">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="text" class="form-control border-danger" placeholder="Invalid state">
											<div class="form-control-feedback text-danger">
												<i class="icon-cancel-circle2"></i>
											</div>
										</div>
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Text options</legend>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Light text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-light" placeholder="Input with light text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Semibold text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-semibold" placeholder="Input with semibold text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Bold text</label>
									<div class="col-md-10">
										<input type="text" class="form-control font-weight-bold" placeholder="Input with bold text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Capitalized text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Centered text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-center" placeholder="Input with centered text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Right aligned text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-right" placeholder="Input with right aligned text">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Uppercase text</label>
									<div class="col-md-10">
										<input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
										<span class="form-text text-muted">Other text options work as well</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Field options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tooltip on focus</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" data-popup="tooltip" data-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Tooltip on hover</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" data-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Rounded input</label>
									<div class="col-md-10">
										<input type="text" class="form-control rounded-round" placeholder="Rounded input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Roundless input</label>
									<div class="col-md-10">
										<input type="text" class="form-control rounded-0" placeholder="Roundless input">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Fixed input sizing</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-3">
												<input type="text" class="form-control" placeholder=".col-3">
											</div>

											<div class="col-4">
												<input type="text" class="form-control" placeholder=".col-4">
											</div>

											<div class="col-5">
												<input type="text" class="form-control" placeholder=".col-5">
											</div>
										</div>
										<span class="form-text text-muted">Available in 12 columns sizes since it's based on 12 columns grid</span>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

								<div class="form-group row">
									<label class="col-form-label col-form-label-lg col-lg-2">Large size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control form-control-lg" placeholder=".col-form-label-lg .form-control-lg">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" placeholder=".col-form-label .form-control">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-form-label-sm col-lg-2">Small size</label>
									<div class="col-lg-10">
										<input type="text" class="form-control form-control-sm" placeholder=".col-form-label-sm .form-control-sm">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Inputs only</label>
									<div class="col-lg-10">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input class="form-control form-control-lg" type="text" placeholder="Large input height">
												</div>

												<div class="form-group">
													<input class="form-control" type="text" placeholder="Default input height">
												</div>

												<div class="form-group">
													<input class="form-control form-control-sm" type="text" placeholder="Small input height">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<select class="form-control form-control-lg">
					                                    <option value="opt1">Large select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>

												<div class="form-group">
													<select class="form-control">
					                                    <option value="opt1">Default select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>

												<div class="form-group">
													<select class="form-control form-control-sm">
					                                    <option value="opt1">Small select height</option>
					                                    <option value="opt2">Option 2</option>
					                                    <option value="opt3">Option 3</option>
					                                    <option value="opt4">Option 4</option>
					                                    <option value="opt5">Option 5</option>
					                                    <option value="opt6">Option 6</option>
					                                    <option value="opt7">Option 7</option>
					                                    <option value="opt8">Option 8</option>
					                                </select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Text color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control text-violet" value="Custom text color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Border color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control border-teal border-1" placeholder="Custom border color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Background color</label>
									<div class="col-lg-10">
										<input type="text" class="form-control bg-slate-600 border-slate-600 border-1" placeholder="Custom background color">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Select color</label>
									<div class="col-lg-10">
										<select class="form-control bg-indigo-400 border-indigo-400">
		                                    <option value="opt1">Custom select color</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</div>
								</div>

		                        <div class="form-group row">
		                        	<label class="col-form-label col-lg-2">Styled select</label>
		                        	<div class="col-lg-10">
			                            <select class="form-control form-control-uniform-custom">
			                                <option value="opt1">Custom styled select color</option>
			                                <option value="opt2">Option 2</option>
			                                <option value="opt3">Option 3</option>
			                                <option value="opt4">Option 4</option>
			                                <option value="opt5">Option 5</option>
			                                <option value="opt6">Option 6</option>
			                                <option value="opt7">Option 7</option>
			                                <option value="opt8">Option 8</option>
			                            </select>
		                            </div>
		                        </div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">File input color</label>
									<div class="col-lg-10">
										<input type="file" class="form-control-uniform-custom">
									</div>
								</div>
							</fieldset>/-->

							<!--<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Datos extras (Formulario)</legend>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Fecha y Hora</label>
									<div class="col-md-10">
										<input class="form-control" type="datetime-local" name="datetime-local">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Fecha y Hora"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Fecha</label>
									<div class="col-md-10">
										<input class="form-control" type="date" name="date">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Fecha"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Mes</label>
									<div class="col-md-10">
										<input class="form-control" type="month" name="month">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Mes"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Tiempo</label>
									<div class="col-md-10">
										<input class="form-control" type="time" name="time">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Tiempo"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Semana</label>
									<div class="col-md-10">
										<input class="form-control" type="week" name="week">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Semana"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Número</label>
									<div class="col-md-10">
										<input class="form-control" type="number" name="number">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Número"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Correo Electronico</label>
									<div class="col-md-10">
										<input class="form-control" type="email" name="email">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Correo Electronico"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">URL</label>
									<div class="col-md-10">
										<input class="form-control" type="url" name="url">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="URL"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Buscar</label>
									<div class="col-md-10">
										<input class="form-control" type="search" name="search">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Buscar"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Telefono</label>
									<div class="col-md-10">
										<input class="form-control" type="tel" name="tel">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Telefono"</code></span>
									</div>
								</div>/-->

								<!--<div class="form-group row">
									<label class="col-form-label col-md-2">Color</label>
									<div class="col-md-10">
										<input class="form-control" type="color" name="color">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Color"</code></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-md-2">Distancia</label>
									<div class="col-md-10">
										<input class="form-control" type="range" name="range" min="0" max="10">
										<span class="form-text text-muted">Utilizando <code>Tipo de entrada="Distancia"</code></span>
									</div>
								</div>
							</fieldset>/-->

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Enviar <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /form inputs -->

				<!-- Basic modals -->
				<!--
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Modal dialogs</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Modal dialog is a small window that communicates information to the user and prompt them for a response. Dialog boxes are classified as <code>"modal"</code> or <code>"modeless"</code>, depending on whether or not they block interaction with the page that initiated the dialog. Table below contains basic modal dialog examples. Click <code>Launch</code> button to run modal examples.
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th colspan="3" class="table-active">Basic modals</th>
								</tr>
								<tr>
									<td style="width: 20%;">Default modal dialog</td>
									<td style="width: 20%;"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Basic modal dialog with <code>header</code>, <code>body</code> and <code>footer</code> areas. Default examples displays: header - contains a title and a close button; footer - contains buttons and body contains static or dynamic content</td>
								</tr>
								<tr>
									<td>Modal with icons</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_iconified">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal with icons added to the specified elements: heading title, footer control buttons and text inside modal body</td>
								</tr>
								<tr>
									<td>Disable backdrop</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_backdrop">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Disabled backdrop. Disable backdrop element using <code>data-backdrop="false"</code> or alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click</td>
								</tr>
								<tr>
									<td>Disable keyboard interaction</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_keyboard">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Disabled keyboard interaction. If <code>keyboard</code> option is set to <code>true</code> (default), the modal can be closed when escape key is pressed</td>
								</tr>
								<tr>
									<td>Disable animation</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_animation">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Disabled animation. For modals that simply appear rather than fade in to view, remove the <code>.fade</code> class from your modal markup</td>
								</tr>
								<tr>
									<td>Scrollable modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_scrollable">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Scrollable modal that allows scroll the modal body by adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code></td>
								</tr>
								<tr>
									<td>borrar</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_remote">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Default Bootstrap's remote source option replacement using jquery <code>.load()</code>. As suggested by Bootstrap dev team</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Modal sizing</th>
								</tr>
								<tr>
									<td>Mini size modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_mini">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal in mini size. Mini modal width is <code>300px</code>. To use, add <code>modal-xs</code> class to <code>.modal-dialog</code> container</td>
								</tr>
								<tr>
									<td>Small size modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_small">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal in small size. Small modal width is <code>400px</code>. To use, add <code>modal-sm</code> class to <code>.modal-dialog</code> container</td>
								</tr>
								<tr>
									<td>Default size modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal in default size. Default modal width is <code>600px</code>. Since this is a default size, modal markup doesn't require any additional sizing classes</td>
								</tr>
								<tr>
									<td>Large size modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_large">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal in large size. Large modal width is <code>900px</code>. To use, add <code>modal-lg</code> class to <code>.modal-dialog</code> container</td>
								</tr>
								<tr>
									<td>Full size modal</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_full">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal in full width size. This modal has <code>94%</code> width of the window. To use, add <code>modal-full</code> class to <code>.modal-dialog</code> container</td>
								</tr>
								<tr class="table-border-double">
									<th colspan="3" class="table-active">Optional modal colors</th>
								</tr>
								<tr>
									<td>Default modal theme</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_default">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Default color theme. All areas of this modal dialog have <code>white</code> background color. Doesn't require any additional contextual classes</td>
								</tr>
								<tr>
									<td>Primary modal header</td>
									<td><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal_theme_primary">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Primary modal. To use, add <code>.bg-primary</code> class to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Danger modal header</td>
									<td><button type="button" class="btn bg-danger" data-toggle="modal" data-target="#modal_theme_danger">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Danger modal. To use, add <code>.bg-danger</code> class to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Success modal header</td>
									<td><button type="button" class="btn bg-success" data-toggle="modal" data-target="#modal_theme_success">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Success modal. To use, add <code>.bg-success</code> class to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Warning modal header</td>
									<td><button type="button" class="btn bg-warning" data-toggle="modal" data-target="#modal_theme_warning">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Warning modal. To use, add <code>.bg-warning</code> class to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Info modal header</td>
									<td><button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_theme_info">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Info modal. To use, add <code>.bg-info</code> class to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Custom modal header color</td>
									<td><button type="button" class="btn bg-brown" data-toggle="modal" data-target="#modal_theme_custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal with <code>custom</code> color added to the modal header. To use, add any <a href="colors_primary.html">color class</a> from the color system to the <code>.modal-header</code> container</td>
								</tr>
								<tr>
									<td>Custom modal background color</td>
									<td><button type="button" class="btn bg-teal-300" data-toggle="modal" data-target="#modal_theme_bg_custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal dialog with <code>solid</code> custom background color. To use, add any <a href="colors_primary.html">color class</a> from the color system to the <code>.modal-content</code> container. Additionaly, you can also add a custom background color to the modal header</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Form components</th>
								</tr>
								<tr>
									<td>Vertical form</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_vertical">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal with default vertical form layout and responsive grid. Forms must be placed outside of <code>.modal-body</code> container to prevent extra horizontal padding</td>
								</tr>
								<tr>
									<td>Horizontal form</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_horizontal">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal with horizontal form layout. It does also support responsive grid, but in this case it will look best in wider modals</td>
								</tr>
								<tr>
									<td>Inline form</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_form_inline">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal with with a simple <code>inline</code> form layout</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Heading options</th>
								</tr>
								<tr>
									<td>Modal with H1 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h1">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H1</code> size. In all heading sizes, vertical position of a <code>close</code> button will be automatically adjusted to the middle of the modal header</td>
								</tr>
								<tr>
									<td>Modal with H2 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h2">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H2</code> size</td>
								</tr>
								<tr>
									<td>Modal with H3 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h3">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H3</code> size</td>
								</tr>
								<tr>
									<td>Modal with H4 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h4">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H4</code> size</td>
								</tr>
								<tr>
									<td>Modal with H5 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h5">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H5</code> size</td>
								</tr>
								<tr>
									<td>Modal with H6 heading</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_h6">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title in <code>H6</code> size</td>
								</tr>
								<tr>
									<td>Modal with basic title</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_title_basic">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title could be either a standard heading or any other component, but make sure you have included <code>.modal-title</code> class to it</td>
								</tr>
								<tr>
									<td>Modal with subtitle</td>
									<td><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modal_subtitle">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal title <code>subtitle</code>. This can be either inline or block. To display a subtitle in one line with the title, remove <code>.d-block</code> class from it</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Modal events</th>
								</tr>
								<tr>
									<td>onShow event</td>
									<td><button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_onshow">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>This event fires immediately when the <code>show</code> instance method is called. If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
								</tr>
								<tr>
									<td>onShown event</td>
									<td><button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_onshown">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>This event is fired when the modal has been made visible to the user (will wait for CSS transitions to complete). If caused by a click, the clicked element is available as the <code>relatedTarget</code> property of the event</td>
								</tr>
								<tr>
									<td>onHide event</td>
									<td><button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_onhide">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>This event is fired immediately when the <code>hide</code> instance method has been called</td>
								</tr>
								<tr>
									<td>onHidden event</td>
									<td><button type="button" class="btn bg-teal" data-toggle="modal" data-target="#modal_onhidden">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>This event is fired when the modal has finished being hidden from the user (will wait for CSS transitions to complete)</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Programmatic dialog boxes</th>
								</tr>
								<tr>
									<td>Alert dialog</td>
									<td><button type="button" class="btn bg-primary" id="alert">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of an <code>alert</code> dialog replacement with default Bootstrap modals</td>
								</tr>
								<tr>
									<td>Confirm dialog</td>
									<td><button type="button" class="btn bg-primary" id="confirm">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>confirmation</code> dialog replacement with default Bootstrap modals including callback</td>
								</tr>
								<tr>
									<td>Prompt dialog</td>
									<td><button type="button" class="btn bg-primary" id="prompt">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>prompt</code> dialog replacement with default Bootstrap modals including callback</td>
								</tr>
								<tr>
									<td>Prompt with default value</td>
									<td><button type="button" class="btn bg-primary" id="prompt_value">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>prompt</code> dialog replacement with default value</td>
								</tr>
								<tr>
									<td>Custom bootbox dialog</td>
									<td><button type="button" class="btn bg-primary" id="bootbox_custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a custom bootbox dialog with multiple buttons and callbacks</td>
								</tr>
								<tr>
									<td>Dialog with form</td>
									<td><button type="button" class="btn bg-primary" id="bootbox_form">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a custom bootbox dialog with simple form and callbacks</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>/-->
				<!-- /basic modals -->


	            <!-- Basic modal -->
	            <!--
				<div id="modal_default" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Basic modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /basic modal -->


	            <!-- Iconified modal -->
	            <!--
				<div id="modal_iconified" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"><i class="icon-menu7 mr-2"></i> &nbsp;Modal with icons</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="alert alert-info alert-dismissible alert-styled-left border-top-0 border-bottom-0 border-right-0">
					                <span class="font-weight-semibold">Here we go!</span> Example of an alert inside modal.
					                <button type="button" class="close" data-dismiss="alert">×</button>
					            </div>

								<h6 class="font-weight-semibold"><i class="icon-law mr-2"></i> Sample heading with icon</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

								<hr>

								<p><i class="icon-mention mr-2"></i> Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
							</div>

							<div class="modal-footer">
								<button class="btn btn-link" data-dismiss="modal"><i class="icon-cross2 font-size-base mr-1"></i> Close</button>
								<button class="btn bg-primary"><i class="icon-checkmark3 font-size-base mr-1"></i> Save</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /iconified modal -->


	            <!-- Disabled backdrop -->
	            <!--
				<div id="modal_backdrop" class="modal fade" data-backdrop="false" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Disable backdrop</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /disabled backdrop -->


	            <!-- Disabled keyboard interaction -->
	            <!--
				<div id="modal_keyboard" class="modal fade" data-keyboard="false" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Disable keyboard interaction</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /disabled keyboard interaction -->


	            <!-- Disabled animation -->
	            <!--
				<div id="modal_animation" class="modal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Disable animation</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /disabled animation -->


	            <!-- Scrollable modal -->
	            <!--
				<div id="modal_scrollable" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-dialog-scrollable">
						<div class="modal-content">
							<div class="modal-header pb-3">
								<h5 class="modal-title">Scrollable modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body py-0">
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
							</div>

							<div class="modal-footer pt-3">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /scrollable modal -->


	            <!-- Remote source -->
	            <!--
				<div id="modal_remote" class="modal" tabindex="-1">
					<div class="modal-dialog modal-full">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Remote source</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body"></div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /remote source -->



	            <!-- Mini modal -->
	            <!--
				<div id="modal_mini" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-xs">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Mini modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /mini modal -->


	            <!-- Small modal -->
	            <!--
				<div id="modal_small" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Small modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /small modal -->


	            <!-- Large modal -->
	            <!--
				<div id="modal_large" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Large modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /large modal -->


	            <!-- Full width modal -->
	            <!--
				<div id="modal_full" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-full">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Full width modal</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /full width modal -->



	            <!-- Primary modal -->
	            <!--
				<div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary">
								<h6 class="modal-title">Primary header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /primary modal -->


	            <!-- Danger modal -->
	            <!--
				<div id="modal_theme_danger" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-danger">
								<h6 class="modal-title">Danger header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-danger">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /default modal -->


	            <!-- Success modal -->
	            <!--
				<div id="modal_theme_success" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-success">
								<h6 class="modal-title">Success header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-success">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /success modal -->


	            <!-- Warning modal -->
	            <!--
				<div id="modal_theme_warning" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-warning">
								<h6 class="modal-title">Warning header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-warning">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /warning modal -->


	            <!-- Info modal -->
	            <!--
				<div id="modal_theme_info" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-info">
								<h6 class="modal-title">Info header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-info">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /info modal -->


	            <!-- Custom header color -->
	            <!--
				<div id="modal_theme_custom" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-brown">
								<h6 class="modal-title">Custom header color</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-brown">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /custom header color -->


	            <!-- Custom background color -->
	            <!--
				<div id="modal_theme_bg_custom" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content bg-teal-300">
							<div class="modal-header">
								<h5 class="modal-title">Custom background color</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-teal-600">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /custom background color -->



	            <!-- Vertical form modal -->
	            <!--
				<div id="modal_form_vertical" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Vertical form</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#">
								<div class="modal-body">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>First name</label>
												<input type="text" placeholder="Eugene" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>Last name</label>
												<input type="text" placeholder="Kopyov" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Address line 1</label>
												<input type="text" placeholder="Ring street 12" class="form-control">
											</div>

											<div class="col-sm-6">
												<label>Address line 2</label>
												<input type="text" placeholder="building D, flat #67" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-4">
												<label>City</label>
												<input type="text" placeholder="Munich" class="form-control">
											</div>

											<div class="col-sm-4">
												<label>State/Province</label>
												<input type="text" placeholder="Bayern" class="form-control">
											</div>

											<div class="col-sm-4">
												<label>ZIP code</label>
												<input type="text" placeholder="1031" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label>Email</label>
												<input type="text" placeholder="eugene@kopyov.com" class="form-control">
												<span class="form-text text-muted">name@domain.com</span>
											</div>

											<div class="col-sm-6">
												<label>Phone #</label>
												<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
												<span class="form-text text-muted">+99-99-9999-9999</span>
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">Submit form</button>
								</div>
							</form>
						</div>
					</div>
				</div>/-->
				<!-- /vertical form modal -->


	            <!-- Horizontal form modal -->
	            <!--
				<div id="modal_form_horizontal" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Horizontal form</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#" class="form-horizontal">
								<div class="modal-body">
									<div class="form-group row">
										<label class="col-form-label col-sm-3">First name</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Eugene" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Last name</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Kopyov" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Email</label>
										<div class="col-sm-9">
											<input type="text" placeholder="eugene@kopyov.com" class="form-control">
											<span class="form-text text-muted">name@domain.com</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Phone #</label>
										<div class="col-sm-9">
											<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
											<span class="form-text text-muted">+99-99-9999-9999</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">Address line 1</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Ring street 12, building D, flat #67" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">City</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Munich" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">State/Province</label>
										<div class="col-sm-9">
											<input type="text" placeholder="Bayern" class="form-control">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-sm-3">ZIP code</label>
										<div class="col-sm-9">
											<input type="text" placeholder="1031" class="form-control">
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									<button type="submit" class="btn bg-primary">Submit form</button>
								</div>
							</form>
						</div>
					</div>
				</div>/-->
				<!-- /horizontal form modal -->


	            <!-- Inline form modal -->
	            <!--
				<div id="modal_form_inline" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Inline form</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<form action="#" class="modal-body form-inline justify-content-center">
								<label>Username:</label>
								<input type="text" placeholder="Your username" class="form-control mb-2 mr-sm-2 ml-sm-2 mb-sm-0">

								<label class="ml-sm-2">Password:</label>
								<input type="password" placeholder="Your password" class="form-control mb-2 mr-sm-2 ml-sm-2 mb-sm-0">

								<button type="submit" class="btn bg-primary ml-sm-2 mb-sm-0">Sign me in <i class="icon-plus22"></i></button>
							</form>
						</div>
					</div>
				</div>/-->
				<!-- /inline form modal -->



	            <!-- Modal with h1 -->
	            <!--
				<div id="modal_h1" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title">H1 heading title</h1>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h1 -->


	            <!-- Modal with h2 -->
	            <!--
				<div id="modal_h2" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h2 class="modal-title">H2 heading title</h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h2 -->


	            <!-- Modal with h3 -->
	            <!--
				<div id="modal_h3" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">H3 heading title</h3>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h3 -->


	            <!-- Modal with h4 -->
	            <!--
				<div id="modal_h4" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">H4 heading title</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h4 -->


	            <!-- Modal with h5 -->
	            <!--
				<div id="modal_h5" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">H5 heading title</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h5 -->


	            <!-- Modal with h6 -->
	            <!--
				<div id="modal_h6" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">H6 heading title</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with h6 -->


	            <!-- Modal with basic title -->
	            <!--
				<div id="modal_title_basic" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<span class="font-weight-semibold modal-title">Basic heading title</span>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with basic title -->


	            <!-- Modal with subtitle -->
	            <!--
				<div id="modal_subtitle" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">This is a modal title <small class="d-block text-muted">And this is a subtitle</small></h5>
								
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /modal with subtitle -->



	            <!-- onShow callback modal -->
	            <!--
				<div id="modal_onshow" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">onShow event demo</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								onShow event has been fired.
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cool</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /onShow callback modal -->


	            <!-- onShown callback modal -->
	            <!--
				<div id="modal_onshown" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">onShown event demo</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								onShown event has been fired.
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cool</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /onShown callback modal -->


	            <!-- onHide callback modal -->
	            <!--
				<div id="modal_onhide" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">onHide event demo</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								onHide event has been fired.
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cool</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /onHide callback modal -->


	            <!-- onHidden callback modal -->
	            <!--
				<div id="modal_onhidden" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">onHidden event demo</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								onHidden event has been fired.
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-light" data-dismiss="modal">Cool</button>
							</div>
						</div>
					</div>
				</div>/-->
				<!-- /onHidden callback modal -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<!--
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>/-->
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
