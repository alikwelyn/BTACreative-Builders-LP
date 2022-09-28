    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 align-self-center" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="200" data-aos-duration="1000">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="490" height="290" id="gmap_canvas" src="https://maps.google.com/maps?q=Rua%20Ribeiro%20de%20Barros,%20128%20Vila%20Anglo%20Brasileira%20S%C3%A3o%20Paulo%20%E2%80%93%20SP%20-%2005027-020&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
          </div>
          <div class="col-md-4 align-self-center" data-aos="fade-right" data-aos-once="false" data-aos-easing="ease-in-out" data-aos-offset="100" data-aos-delay="200" data-aos-duration="1000">
            <p>
              <strong>Endereço</strong><br>
              Rua Ribeiro de Barros, 128<br>
              Vila Anglo Brasileira<br>
              São Paulo – SP - 05027-020<br><br>
              
              Telefone: <a class="phone-link" href="tel:+1138723999">(11) 3872-3999</a><br>
              <span class="site-link">builders.com.br</span>
            </p>
            <ul class="styled-icons icon-theme-colored list-inline">
              <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 logo">
            <img src="assets/imgs/logo.svg" width="200" alt="Builders Educação Bilíngue">
          </div>
          <div class="col-md-12 d-flex align-items-end">
            <p class="copyright">© 2021 Builders Educação Bilíngue. Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-slim.min.js"><\/script>');</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      AOS.init();
      $(document).ready(function() {
        setTimeout(function(){
            $("body").addClass("loaded");
            $('.builders-preloader').fadeOut();
        }, 2000);

        $('#celular').mask('(00) 0000-00009');
        $('#celular').blur(function(event) {
          if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
            $('#celular').mask('(00) 00000-0009');
          } else {
            $('#celular').mask('(00) 0000-00009');
          }
        });
      });

      function sendContact() {
        var valid;	
        valid = validateContact();
        if(valid) {
          jQuery.ajax({
            url: "send_email.php",
            data:'nome='+$("#nome").val()+'&email='+$("#email").val()+'&celular='+$("#celular").val()+'&ano='+$("#ano option:selected").text()+'&mensagem='+$("#mensagem").val(),
            type: "POST",
          success:function(data){
            $("#mail-status").html(data);
          },
          error:function (){

          }
		      });
        }
      }

function validateContact() {
	var valid = true;	
	$(".formValidation").css('background-color','');
	$(".info").html('');
	
	if(!$("#nome").val()) {
		$("#nome-info").html("(campo obrigatório)");
		$("#nome").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#email").val()) {
		$("#email-info").html("(campo obrigatório)");
		$("#email").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-info").html("(email inválido)");
		$("#email").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#celular").val()) {
		$("#celular-info").html("(campo obrigatório)");
		$("#celular").css('background-color','#FFFFDF');
		valid = false;
	}
  if($("#celular").val() && $("#celular").val().length < 15 || $("#celular").val().length > 15) {
		$("#celular-info").html("(celular inválido)");
		$("#celular").css('background-color','#FFFFDF');
		valid = false;
	}
  if(!$("#ano").val()) {
		$("#ano-info").html("(campo obrigatório)");
		$("#ano").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#mensagem").val()) {
		$("#mensagem-info").html("(campo obrigatório)");
		$("#mensagem").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
    </script>
  </body>
</html>