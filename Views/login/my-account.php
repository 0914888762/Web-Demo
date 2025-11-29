<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Account Information</h2>
					<ul class="text-left">
						<li class="text-white"><a href="index.php?act=home">Home Page</a></li>
						<li class="text-white"><span> // </span>Account</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>My Account</strong></h3>
					</div>
					<div class="prament-area main-input" id="doitk">
						<ul class="panel-group" id="accordion">
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<label>
										<input type="radio" checked value="forever" name="rememberme" />
										Personal Information
									</label>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="single-log-info">
										<div class="bulling-title">
											<b>
												<?php if (isset($_COOKIE['doimk'])) {
													echo $_COOKIE['doimk'];
												} ?>
											</b>
											<div class="custom-input">
												<form action="?act=taikhoan&xuli=update" method="post">
													<div class="row">
														<div class="col-md-6">
															<input type="text" name="Ho" placeholder="Họ.." required value="<?= $data['Ho'] ?>" />
														</div>
														<div class="col-md-6">
															<input type="text" name="Ten" placeholder="Tên.." required value="<?= $data['Ten'] ?>" />
														</div>
													</div>
													<div class="custom-select">
														<select class="form-control" name="GioiTinh" title="Giới tính">
															<option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?> value="Nam"> Man</option>
															<option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?> value="Nữ"> Woman</option>
															<option <?= ($data['GioiTinh'] == 'Khác') ? 'selected' : '' ?> value="Khác"> Another</option>
														</select>
													</div>
													<input type="email" name="Email" placeholder="Địa chỉ Email.." required value="<?= $data['Email'] ?>" />
													<input type="text" name="SĐT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10" value="<?= $data['SDT'] ?>" />
													<input type="text" name="DiaChi" placeholder="Địa chỉ.." required value="<?= $data['DiaChi'] ?>" />
													<div class="submit-text">
														<button type="submit_tt">Save</button>
													</div>
												</form>
											</div>
										</div>
									</div>
							</li>
							<li class="panel">
								<div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
									<label>
										<input type="radio" value="forever" name="rememberme" />
										Change Password
									</label>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="single-log-info">
										<div class="custom-input">
											<form action="?act=taikhoan&xuli=update" method="post">
												<input type="password" placeholder="Mật khẩu hiện tại .. " name="MatKhau" minlength="6" required />
												<input type="password" placeholder="Mật khẩu mới .. " name="MatKhauMoi" />
												<input type="password" placeholder="Xác nhận lại mật khẩu .." name="MatKhauXN" />
												<div class="submit-text text-left">
													<button type="submit_pw" value="submit form">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- my account content section end -->