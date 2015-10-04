<section id="contact"><div class="container">
  <h1>Contact Us</h1>

  <div id="contactInfo" class="col-md-12">
    <div class="row">
      <div class="col-md-6">
        <i class="fa fa-map-marker fa-2x"></i>
        <div><div id="misa-address">
          <p>304 Manuel V. Pangilinan Center for Student Leadership<br>
          Ateneo de Manila University, Katipunan Avenue<br>
          Loyola Heights, Quezon City 1108</p>
        </div></div>
      </div>
      <div class="col-md-6">
        <i class="fa fa-envelope-o fa-2x"></i>
        <div><div id="misa-email">
          <p>imconference@misa.org.ph</p>
        </div></div>
      </div>
    </div>
  </div>

  <form id="contactForm" class="col-md-8 col-md-offset-2" action="scripts/contact.php" method="post">
    <div class="row">
      <div class="col-md-6 form-group">
        <label class="sr-only" for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
      </div>
      <div class="col-md-6 form-group">
        <label class="sr-only" for="name">Email Address</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 form-group">
        <label class="sr-only" for="message">Message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required></textarea>
      </div>
    </div>
    <div class="row">
      <button class="btn btn-lg btn-primary" type="submit">Send Message</button>
    </div>
  </form>
</div></section>
