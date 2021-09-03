<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>
<body>
<!-- cancelliamo la view welcome.blade.php e creiamo una nostra homepage. -->

    <h1>Primi Passi - Contact</h1>
    <header>
        <ul>
            <li><a href="{{ route('homepage')}}">home</a></li>
            <li><a href="{{ route('spec')}}">about</a></li>
            <li><a href="{{ route('contatti')}}">contatti</a></li>
        </ul>

    </header>

    <p>
    <h3>contatti: </h3>
    
        @foreach($nomi as $nome)
            
            <h5>{{ $nome }}</h5>
                            
                                                    
        @endforeach

    
        
    </p>
    
</body>
</html>

<style>
    *{
        margin: 0;
        padding:0;
        box-sizing: border-box;
    }

    header{
        height: 200px;
        background-color: lightblue;
    }  
    
    ul{
        height: 200px;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    li{
        font-size: 30px;
        background-color: white;
        padding: 10px;
        border: 1px solid black;
        list-style: none;
    }

    span{
        font-size: 30px;
    }

    h3{
        font-size: 30px; 
    }

    h5{
        font-size: 20px;
    }
        
</style>