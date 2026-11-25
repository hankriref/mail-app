<!DOCTYPE html>
<html>
<head>
    <title>Envoi Email</title>
</head>
<body style="font-family: Arial; padding: 50px;">
    <h3>Bonjour {{ Auth::user()->name }} 
        <a href="/logout" style="float:right; font-size:14px;">Déconnexion</a>
    </h3>

    @if(session('success'))
        <p style="color:green; background:#e0ffe0; padding:10px;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('mail.envoyer') }}">
        @csrf
        <label>Sujet</label><br>
        <input type="text" name="sujet" value="test" style="width:100%; padding:8px; margin-bottom:15px;"><br>
        
        <label>Message</label><br>
        <textarea name="message" style="width:100%; height:100px; padding:8px;">bonjour,</textarea><br><br>
        
        <button type="submit" style="background:blue; color:white; padding:10px 25px; border:none; cursor:pointer; font-size:16px;">Envoyer</button>
    </form>
</body>
</html>