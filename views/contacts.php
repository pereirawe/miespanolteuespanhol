<div id="contacts">
  <div id="content-contacts">
    <div class="container py-5" data-aos="zoom-in-up" data-aos-easing="linear">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="pt-5">
            <h2 class="centered">{{ content.contacts.text_1 }}</h2>
            <h4>{{ content.contacts.title }}</h4>
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
        <div class="col-md-2"></div>
      </div>

    </div>
  </div>
</div>