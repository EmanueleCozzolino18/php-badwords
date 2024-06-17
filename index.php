<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <section>
            <h1>PHP BADWORDS</h1>
            <form action="bwords.php" method="GET">
                <div class="censura">
                    <input type="text" name="word" id="parolacensurata" placeholder="Parola da censurare">
                    </div>
                    <div class="testo">
                        <label for="testo">Testo</label>
                    </div>
                        <textarea name="text" id="testoCheck" rows="4"></textarea>
                    <button type="submit">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>