

    <div style="display:flex;flex-direction: column;width:50%;padding:50px">

        <h2 style='text-align:center;margin-bottom:20px'>Nowa wiadmość ze strony <a href="https://guidos.mmhub.pl">guidos.mmhub.pl</a></h2>

        <div style="margin-bottom:15px">
            <span style="font-size: 16px;font-weight:800">Imię i nazwisko:</span>
            <span style="font-size: 16px">{{ $name }}o</span>
        </div>

        <div style="margin-bottom:15px">
            <span style="font-size: 16px;font-weight:800">Email:</span>
            <span style="font-size: 16px">{{ $email }}</span>
        </div>

        <div style="margin-bottom:15px">
            <span style="font-size: 16px;font-weight:800">Telefon:</span>
            <span style="font-size: 16px"> {{ $phone }}</span>
        </div>

        <div style="margin-bottom:15px">
            <span style="font-size: 16px;font-weight:800">Wiadomość:</span>
            <p style="font-size: 16px"> {{ $content }}</p>
        </div>

        <div style="display:flex;gap:20px">

            <a href="tel:{{ $phone }}" style='background-color: #014a0a;padding:12px 24px;border-radius:12px;color:white'>Zadzwoń</a>
            <a href="mailto:{{ $email }}" style='background-color: #014a0a;padding:12px 24px;border-radius:12px;color:white'>Napisz</a>
            
        </div>


     