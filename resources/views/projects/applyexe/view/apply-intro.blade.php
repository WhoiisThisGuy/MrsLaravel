<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite('resources/css/projects/applyexe/applyexe.css')

    <title>Apply.exe</title>
</head>

<body>
    <section class="Typewriter">
        <p>GlaDOS v1.07 (c) 1982 AppertureScience,Inc.<br>
            Note:  By executing the following application, you are not merely executing lines of code on heated up silicon,
            but you are expressing your undeniable and eternal consent to participate in Aperture Science's most ambitious testing program.
            Once you executed the application exe, the cancellation of the registration process by your side
            may result in midnight abductions while you are asleep and force the process finishment.
            This is not a threat; it is policy.
            To start the application type: apply.exe
        </p>
    </section>
    <div id="systemMessage">
        <p>ERROR</p>
    </div>
    <div id="terminal">
        <span id="text"></span><span id="cursor">█</span>
    </div>

    @vite(['resources/js/projects/applyexe/applyexe.js'])
</body>

</html>