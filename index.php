<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lia.css">
    <title>Empress Lia</title>
</head>
<body>
    <!-- Loader overlay -->
    <div id="loader" class="loader" aria-live="polite" aria-busy="true">
        <div class="coin-wrap" role="img" aria-label="Loading Empress Lia">
            <svg class="coin" viewBox="0 0 200 200" width="180" height="180" aria-hidden="true">
                <defs>
                    <radialGradient id="coinRadial" cx="50%" cy="45%" r="60%">
                        <stop offset="0%" stop-color="#fff7c8"/>
                        <stop offset="45%" stop-color="#f1c40f"/>
                        <stop offset="100%" stop-color="#a07000"/>
                    </radialGradient>
                    <linearGradient id="coinEdge" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#ffd56b"/>
                        <stop offset="50%" stop-color="#7a5100"/>
                        <stop offset="100%" stop-color="#ffd56b"/>
                    </linearGradient>
                    <clipPath id="logoClip">
                        <circle cx="100" cy="100" r="72"></circle>
                    </clipPath>
                </defs>
                <!-- face -->
                <circle cx="100" cy="100" r="80" fill="url(#coinRadial)"/>
                <!-- rim -->
                <circle cx="100" cy="100" r="88" fill="none" stroke="url(#coinEdge)" stroke-width="8"/>
                <!-- logo clipped in coin -->
                <g clip-path="url(#logoClip)">
                    <image href="logo1.png" x="28" y="28" width="144" height="144" preserveAspectRatio="xMidYMid slice"/>
                </g>
                <!-- subtle shine ring -->
                <circle cx="100" cy="100" r="70" fill="none" stroke="rgba(255,255,255,.35)" stroke-width="2"/>
            </svg>
        </div>
    </div>

    <main id="page" class="page">
        <div class="parent" id="parent">
            <img src="logo1.png" alt="Empress Lia">
            <h1>Empress Lia LLC</h1>
        </div>
        <div class="subsidiaries" id="subsidiaries">
            <div class="subBox">
                <div class="content">
                    <img src="mapmoo3.png" alt="Map Moo">
                    <div class="description">
                        <h3>Map Moo</h3>
                        <p>Map Moo is a data analytics visualizer.</p>
                    </div>
                </div>
            </div>
            <div class="subBox">
                <div class="content">
                    <img src="FupyIcon.png" alt="Fupy">
                    <div class="description">
                        <h3>Fupy</h3>
                        <p>Fupy is a novelty mobile games platform currently in development.</p>
                    </div>
                </div>
            </div>
            <div class="subBox">
                <div class="content">
                    <img src="learnu.png" alt="Learni">
                    <div class="description">
                        <h3>Vocabi</h3>
                        <p>Vocabi is a tool for rapidly building your vocabulary in any language.</p>
                    </div>
                </div>
            </div>
            <div class="subBox">
                <div class="content">
                    <img src="liahona_logo-01.png" alt="Liahona">
                    <div class="description">
                        <h3>Liahona Properties</h3>
                        <p>Liahona Properties is a residential real estate trust.</p>
                    </div>
                </div>
            </div>
            <div class="subBox">
                <div class="content">
                    <img src="logo-curling-h.png" alt="Curli">
                    <div class="description">
                        <h3>Curli</h3>
                        <p>Curli is a mobile curling simulator.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        window.addEventListener('load', function () {
            var loader = document.getElementById('loader');
            var page = document.getElementById('page');
            if (loader) {
                loader.classList.add('hide');
                setTimeout(function(){ loader.parentNode && loader.parentNode.removeChild(loader); }, 800);
            }
            if (page) page.classList.add('show');
        });
    </script>
</body>
</html>