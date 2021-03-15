<script  src='https://www.google.com/recaptcha/api.js?hl=tr' defer ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript">
		function RequestRegister() {
			$('#fogot-notice').html("");			
			$('#loading').slideDown(function() {	
				var user = $('#cusername').val();
				var mail = $('#cemail').val();
				var password = $('#cpassword').val();
				var telephone =$('#ctelephone').val();
				var sex = $('#csex option:selected').val();
				if(user == '' || mail == '' || password == '') {
					$('#loading').slideUp(function() {
						$('#fogot-notice').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "ajax.php?Register=true",
						data:
						{
							u: user,
							e: mail,
							p: password,
							t: telephone,
							s: sex,		
							captcha: grecaptcha.getResponse()
						},
						success : function(data){
							$('#fogot-notice').html(data);
							$('#loading').slideUp(function() {
								$('#fogot-notice').slideDown();
							});
						},
						error : function(){
							$('#fogot-notice').html('Hata, lütfen tekrar deneyin');
							$('#loading').slideUp(function() {
								$('#fogot-notice').slideDown();
							});
						}
					});
				}
			});
		}
		</script>	

<!-- START: Register Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Kayıt</span> Ol</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">							
							  <div class="nk-gap"></div>
                            <input type="email"  name="cemail"  id="cemail" class="required form-control" placeholder="Email" autocomplete="off">
                             
							  <div class="nk-gap"></div> 
                            <input type="text" name="cusername" id="cusername" class=" required form-control" placeholder="Kullanıcı Adı" autocomplete="off">
                            <div class="nk-gap"></div>
                            <input type="password" name="cpassword" id="cpassword"  class="required form-control" placeholder="Şifre" autocomplete="off">
							<div class="nk-gap"></div> 
							<select name="csex" id="csex" class="form-control">
                            <option value="1">♂ Erkek</option>
                            <option value="0">♀ Kadın</option>
                            </select>
							<div class="nk-gap"></div> 							
                            <input type="tel"  name="ctelephone"  id="ctelephone" class="form-control" placeholder="Telefon" autocomplete="off">
					    <span style="font-size:11px; color:#0cc3f1 ;">*Telefon zorunlu değildir</span>
							
						<br><div class="g-recaptcha" style="width:10px" data-sitekey="6Lc7m6kZAAAAAGS8dFmrZQJazjDHV8tY6ZYZ6HCc"></div>

                        </div>
  <div class="col-md-6">

                            
							<br><span style="font-size:12px;">Hesap oluşturduğunuzda otomatik olarak <a target="_blank" href="https://mintank.com/uagree/">Kullanıcı Sözleşmemizi</a> kabul etmiş olursun.</span>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">					
                                       <a href="#" onclick="RequestRegister()" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Kayıt Ol</a><br>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Şifremi Unuttum</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Hesabın var mı? Giriş Yap</a></small>
                            </div>
                        </div>
						<div class="col-md-12">	
							<div id="loading" style="display:none;">Lütfen bekleyiniz...</div>
							<span id="fogot-notice" style="display:none;"></span>				
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Register Modal -->