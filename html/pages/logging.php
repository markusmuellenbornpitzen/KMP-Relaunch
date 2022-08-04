<?php
require "../partials/header.php";
 ?>

<!--Single Include Nur für diese Datei, Frontend Action Controler -->
<script type="text/javascript" src="../fecontroler/logaction.js">

</script>

    <title>KMP Treumania GmbH Steuerberatungsgesellschaft</title>
  </head>
  <body>

<!--Code to Come -->
<div class="kmp-logo">


<div class="container">

<img src="../assets/img/kmpheader.jpg">
</div>
</div>

<section id="log-in">

  <div class="container">
    <h2>Login Interner Bereich</h2>
    <div class="error-login">
    <p class="error-login-error"></p>
    </div>
    <div>
      <div class="form-group">
        <label for="benutzername">Benutzername:</label>
        <input type="benutzername" required="true" class="form-control" id="benutzername" placeholder="Benutzernamen eingeben" name="benutzername">
      </div>
      <div class="form-group">
        <label for="pwd">Passwort:</label>
        <input type="password" required="true" class="form-control" id="pwd" placeholder="Passwort eingeben" name="pswd">
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Angemeldet bleiben
        </label>
      </div>
      <button class="btn btn-primary" id="loginaction">Anmelden</button>
    </div>
  </div>


</section>





<?php
require "../partials/footer.php";
 ?>

  </body>
</html>
