<div id="order">
  <div id="content-order">
    <div class="container py-5" data-aos="zoom-in-up" data-aos-easing="linear">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

          <form id="orderForm" action="orderService.php" method="POST" class="pt-4">
            <div class="form-row">
              <h2 class="col-md-12">Order information<hr></h2>
              <div class="form-group col-md-12 py-2">
                <label for="packorder">Which Collagen Elixir Pak would you like order?</label>
                <select class="form-control" id="packorder" name="packorder">
                  <option>4 pak = 1 a day + a booster box (10 additional servings): $160</option>
                  <option>6 pak = 2 a day or 1 a day for 2 people + free shipping and an extra 10% off: $185 </option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12 py-2">
                <label for="kindcostumer">What kind of costumer are you?</label>
                <select class="form-control" id="kindcostumer" name="kindcostumer">
                  <option>I'm a new costumer</option>
                  <option>I'm a current customer</option>
                </select>
              </div>

              <h2 class="col-md-12">Client information<hr></h2>

              <div class="form-group col-md-6 py-2">
                <label for="nome">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
              </div>

              <div class="form-group col-md-6 py-2">
                <label for="phone">Phone number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
              </div>

              <div class="form-group col-md-6 py-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <h2 class="col-md-12">Shipping information<hr></h2>
              
              <div class="form-group col-md-12 py-2">
                <label for="address1">Address</label>
                <input type="address1" placeholder='Address 1' class="form-control" id="address1" name="address1" required>
                <input type="address2" placeholder='Address 2' class="form-control" id="address2" name="address2" required>
              </div>
              
              <div class="form-group col-md-6 py-2">
                <label for="city">City</label>
                <input type="city" class="form-control" id="city" name="city" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="state">State</label>
                <input type="state" class="form-control" id="state" name="state" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="zip">Zip/Postal Code</label>
                <input type="zip" class="form-control" id="zip" name="zip" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="country">Country</label>
                <input type="country" class="form-control" id="country" name="country" required>
              </div>

              <h2 class="col-md-12">Payment information<hr></h2>
              <div class="form-group col-md-6 py-2">
                <label for="cardholder">Card holder</label>
                <input type="cardholder" class="form-control" id="cardholder" name="cardholder" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="cardnumber">Card number</label>
                <input type="cardnumber" class="form-control" id="cardnumber" name="cardnumber" required>
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="cvv">CVV</label>
                <input type="password"
                  class="form-control"
                  id="cvv"
                  maxlength="3"
                  name="cvv"
                  required
                >
              </div>
              <div class="form-group col-md-6 py-2">
                <label for="expdate">Expiration Date</label>
                <input type="date" class="form-control" id="expdate" name="expdate" required>
              </div>
              <div class="form-group col-md-12 py-2">
                <label for="billingaddress">Billing Address</label>
                <input type="billingaddress" class="form-control" id="billingaddress" name="billingaddress" required>
              </div>

              
              <h2 class="col-md-12">Preferences information<hr></h2>
              
              <div class="form-group col-md-12 py-2">
                <label for="referrer">Who referred you to us?</label>
                <input type="referrer" class="form-control" id="referrer" name="referrer" required>
              </div>

              <div class="form-group col-md-12 py-2">
                <label for="earnmore">Would you like to know about earning by referring the product?</label>
                <select class="form-control" id="earnmore" name="earnmore">
                  <option>For sure!</option>
                  <option>Maybe</option>
                  <option>Thanks, but no!</option>
                </select>
              </div>

              <div class="form-group col-md-12 py-2">
                <label for="becontacted">How do you like to be contacted?</label>
                <select class="form-control" id="becontacted" name="becontacted">
                  <option>Whatsapp</option>
                  <option>Text</option>
                  <option>Email</option>
                  <option>Phone Call</option>
                  <option>Telegram</option>
                </select>
              </div>

              <div class="form-group col-md-12 py-2">
                <label for="mensagem">Do you have any question or suggestion?</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
              </div>
            
              <script src="https://www.google.com/recaptcha/api.js"></script>
              <div class="centered"><div class="g-recaptcha" data-sitekey="6LdYuzMaAAAAACp_npRyxcQLVANK2dfKBxp4j1zy" data-callback="enableBtn"></div></div>
              
              <div class="form-group col-md-12 centered">
                <button id="submitBtn" type="submit" class="btn btn-primary btn-lg" disabled>ORDER NOW!</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2"></div>
      </div>

    </div>
  </div>
</div>