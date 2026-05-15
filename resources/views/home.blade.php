<h1>Bem-vindo ao Home Page {{ $nome }}</h1>

<p>Seus hábitos são</p>

<ul>
    @foreach($habits as $item)
    <li>{{ $item }}</li>
    @endforeach

    @auth
    <p>Você está logado!</p>
    @endauth

    @guest
    <p>Você não está logado!</p>
    @endguest

    <!-- @dd($nome, $habits) dar os valores das variaveis -->