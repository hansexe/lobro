@extends ('Layout.login.bone')

@section('login-content')

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title">¿No tienes una cuenta?</h2>
        <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_unregistered-signup" id="signup-button">Solicita una cuenta</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">¿Tienes una cuenta?</h2>
        <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p>
        <button class="user_registered-login" id="login-button">Inicia Sesion</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">

      <!-- titulo by hans -->
        <h2 class="forms_title">Inicio de Sesion</h2>
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Usuario" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Contraseña" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Olvidaste tu contraseña?</button>
            <input type="submit" value="Iniciar" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Full Name" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Sign up" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection