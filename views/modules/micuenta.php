<section class="page-banner services-banner">
  <div class="container">
    <div class="banner-header">
        <img class='profile-imagen' src="views/images/myaccount/profile.jpeg" alt="imagen">
        <h4 class='userName'>Homero Simpson</h4 class='userName'>
        <span class="underline center"></span>
        <p class="lead">@simponforever</p>
    </div>
    <div class="breadcrumb">
        <ul>
            <li><a href="home">Inicio</a></li>
            <li><a href="#">Acerca de mi</a></li>
            <li><a href="#">Siguiendo</a></li>
            <li><a href="#">Conversaciones</a></li>
        </ul>
    </div>
  </div>
</section>

<!-- Begin: Book detail -->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
    <div class="booksmedia-detail-main">
        <div class='container'>
          <!-- Begin: Book detail header -->
          <div class='row'>
            <section class='search-filters'><div class='container'></div></section>
          </div>
          <div class='row'>
            <div class='col-md-9 col-md-push-3'>
            <?php //include 'myaccount/readinglist.php' ?>
            <?php include 'myaccount/misdatos.php' ?>
            <?php include 'myaccount/following.php' ?>
            </div>
            <div class='col-md-3 col-md-pull-9'>
            <?php include 'myaccount/nav-left-widget.php' ?>
            </div>
          </div>
        </div>
    </main>
  </div>
</div>