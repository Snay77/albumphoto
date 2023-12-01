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
    <form action="{{route("register")}}" method="post">
        <h3>Inscription</h3>

        @csrf
        
        <div class="inp">
            <span class="input-item">
                <i class='bx bx-user-circle'></i>
            </span>
            <input type="text" class="form-input" name="name" required placeholder="Nom d'utilisateur" /><br />
        </div>

        <div class="inp">
            <span class="input-item">
                <i class='bx bx-envelope'></i>
            </span>
            <input type="email" class="form-input" name="email" required placeholder="Adresse mail" /><br />
        </div>

        <div class="inp">
            <span class="input-item">
                <i class='bx bxs-key' ></i>
            </span>
            <input type="password" class="form-input" name="password" required placeholder="Mot de passe" /><br />
        </div>
        
        <div class="inp">
            <span class="input-item">
                <i class='bx bxs-key' ></i>
            </span>
            <input type="password" class="form-input" name="password_confirmation" required placeholder="Mot de passe" /><br />
        </div>
        
        <input type="submit" class="log-in" /><br />
    </form>
    Déjà un compte  ? <a href="{{route("login")}}">Connectez vous</a>    
</section>

@endsection