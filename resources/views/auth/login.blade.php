@extends("template")

@section("content")

<style>
  body {
    background: linear-gradient(0deg, rgba(178,127,212,0.65) 0%, rgba(35,181,165,0.65) 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
</style>

<section class="log">

  <form action="{{route("login")}}" method="post">

    <h3>Se connecter</h3>
    <p>Vous connecter à votre compte</p>
    
    @csrf
    
    <span class="input-item">
      <i class='bx bx-user-circle'></i>
    </span>
    <input type="email" class="form-input" id="txt-input" name="email" required placeholder="Adresse mail"/><br/>
    
    <span class="input-item">
      <i class='bx bxs-key' ></i>
     </span>
    <input type="password" class="form-input" name="password" required placeholder="Mot de passe"/>
    <span>
      <i class='bx bx-low-vision' aria-hidden="true"  type="button" id="eye"></i>
   </span><br/>
    
    Se souvenir de moi<input type="checkbox" name="remember"/><br/>
    
    <input type="submit" class="log-in"/><br/>

  </form>

</section>

@endsection