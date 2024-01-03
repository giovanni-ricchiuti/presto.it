<div class="container" style="background: rgb(32,28,51);
    background: -moz-linear-gradient(175deg, rgba(32,28,51,1) 19%, rgba(109,55,74,1) 51%, rgba(252,106,116,1) 88%);
    background: -webkit-linear-gradient(175deg, rgba(32,28,51,1) 19%, rgba(109,55,74,1) 51%, rgba(252,106,116,1) 88%);
    background: linear-gradient(175deg, rgba(32,28,51,1) 19%, rgba(109,55,74,1) 51%, rgba(252,106,116,1) 88%);
    border-radius: 5px; max-width: 600px; margin: 20px auto; padding: 60px; box-shadow: 0 0 10px rgba(0, 0, 0, 1);">
    <div class="row">
        <div class="col-md-12">
            <img src="/img/svg/loghi/Presto-it_vers_uso_bg_viola.svg" alt="" width="250" height="auto" style="display: block; margin: 0 auto;">
            <h1 style=" color: #ffffff; font-size: 24px; margin-bottom: 10px;">Un utente ha chiesto di lavorare con noi</h1>
            <h2 style=" color: #ffffff; font-size: 20px; margin-bottom: 10px;">Ecco i suoi dati</h2>
            <p style=" color: #ffffff; margin-bottom: 8px;"><strong>Nome : </strong>{{ $user->name }}</p>
            <p style=" color: #ffffff; margin-bottom: 8px;"><strong>Email : </strong> {{ $user->email }}</p>
            <p style=" color: #ffffff; margin-bottom: 8px;">Se vuoi renderlo revisore clicca sul link sotto</p>
            <div style="text-align: center;">
                <a href="{{ route('make.revisor', compact('user')) }}" style="display: inline-block; padding: 20px !important; font-size: 1rem !important; border-color: #fc6a74; border-radius: 10px; color: #fc6a74; background-color: #ffffff; text-decoration: none;" onmouseover="this.style.backgroundColor='#fc6a74'; this.style.color='#1c1919'" onmouseout="this.style.backgroundColor='#ffffff'; this.style.color='#fc6a74'">RENDI REVISORE</a>
            </div>
        </div>
    </div>
    <div style="color: #ffffff; margin-top: 20px; text-align: center;">
        <p><a style="color: #ffffff; text-decoration: underline;">{{ config('app.name') }}</a></p>
    </div>
</div>
