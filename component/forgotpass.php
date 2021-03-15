<script  src='https://www.google.com/recaptcha/api.js?hl=tr' defer='defer' ></script>

<script type="text/javascript">
		function RequestForgotPassword() {
			$('#fogot-notice-forgot').html("");			
			$('#loading-forgot').slideDown(function() {	
				var user = $('#fusername').val();
				var mail = $('#femail').val();
				if(user == '' || mail == '') {
					$('#loading-forgot').slideUp(function() {
						$('#fogot-notice-forgot').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "ajax.php?ForgotPassword=true",
						data:
						{
							fuser: user,
							femail: mail,
							captcha: grecaptcha.getResponse()
						},
						success : function(data){
							$('#fogot-notice-forgot').html(data);
							$('#loading-forgot').slideUp(function() {
								$('#fogot-notice-forgot').slideDown();
							});
						},
						error : function(){
							$('#fogot-notice-forgot').html('Hata, lütfen tekrar deneyin');
							$('#loading-forgot').slideUp(function() {
								$('#fogot-notice-forgot').slideDown();
							});
						}
					});
				}
			});
		}
		</script>	

<div class="nk-modal modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">ŞİFREMİ</span> Unuttum</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">							
							  <div class="nk-gap"></div>
                            <input type="email"  name="femail"  id="femail" class="required form-control" placeholder="Email" autocomplete="off">
                             
							  <div class="nk-gap"></div> 
                            <input type="text" name="fusername" id="fusername" class=" required form-control" placeholder="Kullanıcı Adı" autocomplete="off">
						    <br><div class="g-recaptcha" style="width:10px" data-sitekey="6Lc7m6kZAAAAAGS8dFmrZQJazjDHV8tY6ZYZ6HCc"></div>

                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
						  <div class="col-md-12">					
                         <a onclick="RequestForgotPassword()" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" style="color:black;">Gönder</a><br>
                        </div>
						<div class="col-md-12">	
							<div id="loading-forgot" style="display:none;">Lütfen bekleyiniz...</div>
							<span id="fogot-notice-forgot" style="display:none;"></span>				
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Register Modal -->