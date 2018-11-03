<script type="application/javascript">
jQuery('input[type=file]').change(function(){
 var filename = jQuery(this).val().split('\\').pop();
 var idname = jQuery(this).attr('id');
 console.log(jQuery(this));
 console.log(filename);
 console.log(idname);
 jQuery('span.'+idname).next().find('span').html(filename);
});
</script>
<div class='news-list-detail'>
  <div class='related-event text-center'>
    <h2>Mi perfil</h2>
    <span class="underline center"></span>
    <p class="lead">Edita tus datos personales.</p>
    <div class='row'>
      <div class='form'>
        <form action="">
          <div class='form-group'>
            <label for="userrut" class='profile-label'>RUT:</label>
            <input type="text" name="userrut" id="userrut" value='@simponforever' disabled>
          </div>
          <div class='form-group'>
            <label for="name" class='profile-label'>Nombre:</label>
            <input type="text" name="name" id="name" placeholder=''>
          </div>
          <div class='form-group'>
            <label for="lastName" class='profile-label'>Apellidos:</label>
            <input type="text" name="lastName" id="lastName" placeholder=''>
          </div>
          <div class='form-group'>
            <label for="location" class='profile-label'>Ubicacion:</label>
            <input type="text" name="location" id="location" placeholder=''>
          </div>
          <div class='form-group'>
            <label for="about" class='profile-label'>Interes:</label>
            <textarea name="about" id="about" cols="50" rows="5"></textarea>
          </div>
          <div class='form-group row-two'>
            <div class='form-field'>
              <label for="imagen-profile-user" class='profile-label imagen-user'><i class='fa fa-upload'></i> Selecciona imagen</label>
              <input type="file" name='imagen-profile-user' id='imagen-profile-user'>
              <div id='show-image-user' class='show-image row'>
                <div class=''>
                  <img src="views/images/myaccount/xxThebadgirlx.1920.39902.jpg" alt="">
                </div>
              </div>
            </div>
            <div class='form-field'>
              <label for="imagen-profile" class='profile-label imagen-background'><i class='fa fa-upload'></i> Selecciona imagen fondo</label>
              <input type="file" name='imagen-profile' id='imagen-profile'>
              <div id='show-image-profile' class='show-image row'>
                <div class=''>
                  <img src="views/images/myaccount/xxThebadgirlx.1920.39902.jpg" alt="">
                </div>
              </div>
            </div>            
          </div>
        </form>
      </div>
    </div>
  </div>
</div>