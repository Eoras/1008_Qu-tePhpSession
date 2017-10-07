<?php require 'inc/head.php';
require 'inc/connected.php';

/**
 *  Initialisation de la variable $panier pour simplifier mon affichage
 */
if (!empty($_COOKIE["panier"])) {
    $panier = $_COOKIE["panier"];
}
?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <form action="addToCart.php" method="POST">
              <input type="hidden" name="addToCart" value="46">
              <button type="submit" class="btn btn-primary btn-bottom-right">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </form>
            <h1><?= $_COOKIE["panier"]["pecanNuts"] ?? "0"?></h1>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
            <form action="addToCart.php" method="POST">
                <input type="hidden" name="addToCart" value="36">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <h1><?= $_COOKIE["panier"]["ChocolateChips"] ?? "0"?></h1>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
            <form action="addToCart.php" method="POST">
                <input type="hidden" name="addToCart" value="58">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <h1><?= $_COOKIE["panier"]["ChocolateCookie"] ?? "0"?></h1>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpeg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
            <form action="addToCart.php" method="POST">
                <input type="hidden" name="addToCart" value="32">
                <button type="submit" class="btn btn-primary btn-bottom-right">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                </button>
            </form>
            <h1><?= $_COOKIE["panier"]["MmsCookies"] ?? "0"?></h1>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
