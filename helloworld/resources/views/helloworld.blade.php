<!DOCTYPE html>
<html>
    <header>

    </header>
    <body>
        <div style="display: flex; align-items: center; justify-content: center; height: 100vh;">

            @if ($name)
                <h1> Hello, {{ $name }}! </h1>
            @else
                <h1>Hello world!</h1>
            @endif
        </div>
    </body>
</html>
