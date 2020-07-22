<form class="login100-form validate-form flex-sb flex-w" action="../Admin/Login" method="POST">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
					</div>
					<p class="message" style="color: red;">
						<?php
							if (isset($data["error"]))
							{
								if ($data["error"])
								{
									echo $data["message"];
								}
							}
						?>
					</p>
					<div class="flex-sb-m w-full p-b-48">
						<div class="container-login100-form-btn">
							<input type="submit" class="login100-form-btn" name="btn_login" value="Login">
						</div>
					</div>
					<div class="container" style="text-align: center;">
						<a href="../Home"><button type="button" class="btn btn-outline-secondary">
							<i class="fa fa-home"></i>Back to homepage
						</button></a>
					</div>
				</form>