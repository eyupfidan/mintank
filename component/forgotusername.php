<script  src='https://www.google.com/recaptcha/api.js?hl=tr' defer='defer' ></script>

<script type="text/javascript">
		function RequestForgotUsername() {
			$('#fogot-notice-forgot-u').html("");			
			$('#loading-forgot-u').slideDown(function() {	
				var mail = $('#fsemail').val();
				if(mail == '') {
					$('#loading-forgot-u').slideUp(function() {
						$('#fogot-notice-forgot-u').html('Lütfen tüm bilgileri doldurun.').slideDown();
						return;
					});
				}
				else {
					$.ajax({
						type: "POST",
						url: "ajax.php?ForgotUsername=true",
						data:
						{
							fsemail: mail,
							captcha: grecaptcha.getResponse()
						},
						success : function(data){
							$('#fogot-notice-forgot-u').html(data);
							$('#loading-forgot-u').slideUp(function() {
								$('#fogot-notice-forgot-u').slideDown();
							});
						},
						error : function(){
							$('#fogot-notice-forgot-u').html('Hata, lütfen tekrar deneyin');
							$('#loading-forgot-u').slideUp(function() {
								$('#fogot-notice-forgot-u').slideDown();
							});
						}
					});
				}
			});
		}
		</script>	

<div class="nk-modal modal fade" id="modalForgotUsername" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">KULLANICI ADIMI</span> Unuttum</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-12">							
							  <div class="nk-gap"></div>
                            <input type="email"  name="fsemail"  id="fsemail" class="required form-control" placeholder="Email" autocomplete="off">
                             
							  <div class="nk-gap"></div> 
						    <br><div class="g-recaptcha" style="width:10px" data-sitekey="6Lc7m6kZAAAAAGS8dFmrZQJazjDHV8tY6ZYZ6HCc"></div>

                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
						  <div class="col-md-12">					
                         <a onclick="RequestForgotUsername()" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block" style="color:black;">Gönder</a><br>
                        </div>
						<div class="col-md-12">	
							<div id="loading-forgot-u" style="display:none;">Lütfen bekleyiniz...</div>
							<span id="fogot-notice-forgot-u" style="display:none;"></span>				
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Register Modal -->