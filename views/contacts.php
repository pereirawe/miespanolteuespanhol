<div id="contacts">
  <div id="content-contacts">
    <div class="container py-5" data-aos="zoom-in-up" data-aos-easing="linear">
      <div class="row">
        <div class="col-md-6">
          <h2>FAQ</h2>
          <h4>Perguntas e respostas mais comuns.</h4>


          <h3>Posso reagendar minhas aulas?</h3>
          <p>Se puder, basta reagendar a aula novamente.</p>

          <h3>Quanto custa?</h3>
          <p>Estamos sempre atualizados, por isso sempre temos as melhores promoções da regiao. Proporcionando a oportunidade perfeita de estudar diretamente com nativos, garantindo um aprendizado mais eficaz e com o menor tempo da cidade.</p>

          <h3>Quanto tempo demora?</h3>
          <p>Nosso sistema se adapta à pessoa e todo o seu tempo depende de disciplina e dedicação.</p>

          <div class="centered">
            <h2>Comprove agora mesmo</h2>
            <p>Envie um e-mail ou contante-nos através das redes sociais e nossa equipe de vendas pessoal fornecerá as melhores informações.</p>
          </div>

        </div>
        <div class="col-md-6">
          <div class="">
            <h2 class="">Reserve aula online</h2>
            <h4>Deixe-nos saber em qual programa você está interessado que lhe enviaremos maiores detalhes.</h4>
          </div>
          <form id="contactForm" action="mailer.php" method="POST" class="pb-5">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" required>
              <label for="name"><small>Name and Lastname</small></label>
            </div>

            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" required>
              <label for="email"><small>Email</small></label>
            </div>

            <div class="form-group">
              <input type="number" class="form-control" id="phone" name="phone" required>
              <label for="phone"><small>Phone</small></label>
            </div>

            <div class="form-group">
              <label for="message"><h4>Message</h4></label>
              <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <div class="g-recaptcha" data-sitekey="6LdYuzMaAAAAACp_npRyxcQLVANK2dfKBxp4j1zy" data-callback="enableBtn">
            </div>
            <button id="submitBtn" type="submit" class="btn btn-danger float-right" disabled>Send</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>