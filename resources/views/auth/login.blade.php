@extends("template")

@section("content")
<section class="log">
  <h3>Se connecter</h3>
  <p>Vous connecter à votre compte</p>
  <form action="{{route("login")}}" method="post">
    @csrf
    <input type="email" name="email" required placeholder="Adresse mail" /><br />
    <input type="password" name="password" required placeholder="Mot de passe" /><br />
    Se souvenir de moi<input type="checkbox" name="remember"/><br />
    <input type="submit"/><br />
  </form>
</section>

@endsection