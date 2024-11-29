<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite('resources/css/app.css')

    <title>Kristof Simon</title>
</head>

<body>
    <div x-data="{ showIntro: true }" x-init="setTimeout(() => showIntro = false, 5000)">
        <div x-show="showIntro" id="intro">
            Welcome, welcome.
        </div>
    </div>
    <div id="Page" x-data :class="$store.darkMode.on ? 'bg-serious-black text-gray-400' : 'bg-dark-7'">
        <div class="snowflakes" aria-hidden="true">
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
            <div class="snowflake">
                <div class="inner">❅</div>
            </div>
        </div>
        <div x-data="{ active: 'doorway' }" class="full-screen-frame">
            <header>

                <h1 class="frame-theme">Kristóf Simon</h1>
                <p id="doorway" x-show="active === 'doorway'" x-transition.duration.2000ms>
                    <i>, born in Hungary 1994. Have a look around for you may be interested in my skillset.</i>
                </p>
                <div id="summon" x-show="active === 'summon'" x-transition.duration.2000ms>

                    <button class="tooltip" @click="$clipboard('simon.kristoff@gmail.com')">
                        ✉️simon.kristoff@gmail.com
                        <span class="tooltiptext">Copy</span>
                    </button>
                    <br>
                    <button class="tooltip" @click="$clipboard('36307004619')">
                        ♪+36307004619
                        <span class="tooltiptext">Copy</span>
                    </button>
                    <br>
                    <button class="tooltip" @click="$clipboard('near6265')">
                        📟Discord: near6265
                        <span class="tooltiptext">Copy</span>
                    </button>
                </div>
                <div id="journey" x-show="active === 'journey'" x-transition.duration.2000ms>
                    <p><mark> 2024 Sep - Nov</mark> Prizific <b>/PHP/SOFTWARE DEVELOPER</b></p><br>
                    <p><b>C++ Software Engineer <mark>EVOSOFT Hungary kft. / SIEMENS HEALTHINEERS GMBH</mark></b> 2021
                        MAY – 2024 APRIL</p><br>
                    <p><b>THESIS WORK 2020</b> <mark>AI. Pathfinding algorithms in video games</mark>/C++/Qt/</p><br>
                    <p>Junior software engineer <mark><b>ASTRON INFORMATICS LTD. 2019 JULY – 2020 FEB</b></mark> /ANSI
                        C/SQL/</p><br>
                    <p>Junior software developer <b>PentaTrade Ltd. 2017 SEPT – 2019 JUN</b> /Javascript/Java/</p><br>
                </div>


                <p class="frame-subtheme">Software Engineer</p>

                <div>
                    <nav>
                        <ul>
                            <li @click="active = 'doorway'">Doorway</li>
                            <li @click="active = 'summon'">Summon Me</li>
                            <li @click="active = 'journey'">My Journey</li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
        <button id="button-darko-mode" role="button" @click="$store.darkMode.toggle()">Darko mode</button>

        <footer class="absolute bottom-0 right-0" :class="$store.darkMode.on && 'text-gray-400'">
            <p>©Me</p>
        </footer>
    </div>

    @vite(['resources/js/app.js'])
</body>

</html>