	<div id="login">
		<div id="upbox"><img src='<?php echo base_url('/assets/images/logo.png'); ?>' style='width: 300px; height: auto; margin: 0px auto;' alt='Informatika UNDIP' title='Ilmu Komputer/Informatika UNDIP'/></div>
		<div id='login_box'>
			<div class="left">
				<h1>Selamat Datang</h1>
				<p>Anda berada dalam kawasan login website,<br>masukkan username dan password dengan benar.<br><a href="<?php echo base_url('/'); ?>">&laquo; Home</a></p>
			</div>
			<div class="right">
			<form method='POST' action='<?php echo base_url('/admin/auth/authenticate'); ?><?php if (isset($redir_url)) echo "?next=".urlencode($redir_url); ?>'>
				<label for='f_user'>Username</label><input class='txt_input' type=text name='f_user' id='f_user' placeholder='username'>
				<label for='f_pass'>Password</label><input class='txt_input' type=password name='f_password' id='f_pass' placeholder='password'>
				<input class='button_admin btn_login' type=submit value="Login">
				<input type='hidden' name='form_submit' value='LOGIN_FORM' />
			</form>
			</div>
			<div class='divclear'></div>
		</div>
<?php
	if (!empty($errors)) {
		$info_ = '<div class="site_box_alert" style="margin: 10px;">';
        foreach ($errors as $key => $values) {
            $info_ .= '	<div>'.$values."</div>\n";
        }
        $info_ .= '</div>';
		echo $info_;
	}
?>
		<div class='divclear'></div>
	</div>