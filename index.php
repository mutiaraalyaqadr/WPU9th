<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPU Day</title>
    <link rel="icon" type="image/png" href="gambar/lt.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/phosphor-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            overflow-x: hidden;
            background: linear-gradient(to top, #f4f1de 0%, #5dceff 100%);
            min-height: 100vh;
        }

        .parallax {
            position: relative;
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .parallax img {
            position: absolute;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        }

        .parallax #pin {
            top: 0;
            left: 0;
        }

        .parallax #p2 {
            top: 0;
            right: 0;
        }

        .parallax #p1 {
            top: 0;
            left: 0;
        }

        .parallax #bal {
            bottom: 0;
            width: 100%;
            height: calc(100% - 100px);
        }

        .parallax #shad {
            width: 100%;
        }

        #text {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2.5rem;
            text-align: center;
            color: #1E4D8D;
        }

        .sec {
            position: relative;
            padding: 100px 1rem;
            width: 100%;
        }

        .sec h2 {
            font-size: 1.2rem;
            color: #332F29;
            margin-top: 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }


        .open-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 9px;
            color: #fff;
            font-weight: bold;
            z-index: 2;
        }


        .box {
            position: relative;
            top: 15%;
        }

        .box-body {
            position: relative;
            width: 200px;
            /* Adjusted width */
            height: 113px;
            /* Adjusted height */
            background-color: #1e7ecc;
            border-bottom-left-radius: 5%;
            border-bottom-right-radius: 5%;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.3);
            background: linear-gradient(#2c4376, #17205b);
        }

        .box-body .img {
            opacity: 0;
            transform: translateY(0%) scale(1);
            /* Properti scale untuk memperbesar gambar */
            transition: all 0.5s;
            margin: 0 auto;
            display: block;
        }

        .box-body:hover {
            cursor: pointer;
            -webkit-animation: box-body 1s forwards ease-in-out;
            animation: box-body 1s forwards ease-in-out;
        }

        .box-body:hover .img {
            opacity: 1;
            z-index: 0;
            transform: translateY(-150px) scale(3);
            /* Sesuaikan faktor scaling yang diinginkan */
        }

        .box-body:hover .box-lid {
            -webkit-animation: box-lid 0.2s forwards ease-in-out;
            animation: box-lid 0.2s forwards ease-in-out;
        }

        .box-body:hover .box-bowtie::before {
            -webkit-animation: box-bowtie-left 1.1s forwards ease-in-out;
            animation: box-bowtie-left 1.1s forwards ease-in-out;
        }

        .box-body:hover .box-bowtie::after {
            -webkit-animation: box-bowtie-right 1.1s forwards ease-in-out;
            animation: box-bowtie-right 1.1s forwards ease-in-out;
        }

        .box-body::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            bottom: 50%;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            background: linear-gradient(#ffffff, #ffefa0);
        }

        .box-lid {
            position: absolute;
            z-index: 1;
            left: 50%;
            transform: translateX(-50%);
            bottom: 90%;
            width: 200px;
            /* Adjusted width */
            height: 40px;
            background-color: #17205b;
            border-radius: 5%;
            box-shadow: 0 8px 4px -4px rgba(0, 0, 0, 0.3);
        }

        .box-lid::after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            background: linear-gradient(#332F29, #ffefa0);
        }

        .box-bowtie {
            z-index: 1;
            height: 100%;
        }

        .box-bowtie::before,
        .box-bowtie::after {
            content: "";
            width: 83.3333333333px;
            height: 83.3333333333px;
            border: 16.6666666667px solid #332F29;
            border-radius: 50% 50% 0 50%;
            position: absolute;
            bottom: 99%;
            z-index: -1;
        }

        .box-bowtie::before {
            left: 50%;
            transform: translateX(-100%) skew(10deg, 10deg);
        }

        .box-bowtie::after {
            left: 50%;
            transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
        }

        #confetti {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
        }

        .image-container {
            overflow-x: hidden;
            max-width: 1000px;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            height: 100vh;
            margin: 10px auto 0;
        }


        .image-wrapper {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: calc((100% - (1.5rem * (var(--per-view) - 1))) / var(--per-view));
            grid-gap: 1.5rem;
            position: relative;
            left: 0;
            transition: .3s;
        }

        .image-wrapper>* {
            aspect-ratio: 4 / 3;
        }

        .image-wrapper img {
            width: 100%;
            height: 85%;
            object-fit: cover;
            display: block;
            border-radius: .5rem;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        }

        .birthdayCard {
            position: relative;
            width: 250px;
            height: 350px;
            cursor: pointer;
            transform-style: preserve-3d;
            margin: auto;
            top: -120px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s, transform 1s;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6);
        }

        .birthdayCard.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .birthdayCard:hover .cardFront {
            transform: rotateY(-160deg);
        }

        .birthdayCard:hover .front-text {
            display: none;
        }

        .cardFront {
            position: relative;
            background-color: #15304e;
            width: 250px;
            height: 350px;
            overflow: hidden;
            transform-origin: left;
            box-shadow: inset 100px 20px 100px rgba(0, 0, 0, .13), 30px 0 50px rgba(0, 0, 0, 0.1);
            transition: 0.1s;
        }

        .happy {
            top: 160px;
            position: relative;
            text-align: center;
            color: #efefef;
        }

        .happy h3 {
            top: 20px;
            position: relative;
            text-align: center;
            color: #efefef;
        }

        .happy img {
            width: 90%;
            height: auto;
            margin-top: -140px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .cardInside {
            position: absolute;
            background-color: #15304e;
            width: 250px;
            height: 350px;
            z-index: -1;
            left: 0;
            top: 0;
            box-shadow: inset 100px 20px 100px rgba(0, 0, 0, 0.6);
        }

        .inside-text {
            position: relative;
            top: -160px;
            transform: scale(0.7);
        }

        .wishes {
            position: relative;
            top: 0;
            margin: 25px;
        }

        p {
            font-size: 0.6rem;
            color: #efefef;
        }

        .name {
            margin-left: 150px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #1E4D8D;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 100px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        }

        #myBtn:hover {
            background-color: #1e7ecc;
        }

        @keyframes box-lid {

            0%,
            42% {
                transform: translate3d(-50%, 0%, 0) rotate(0deg);
            }

            60% {
                transform: translate3d(-85%, -100%, 0) rotate(-25deg);
                /* Adjusted value */
            }

            90%,
            100% {
                transform: translate3d(-120%, 70%, 0) rotate(-70deg);
                /* Adjusted value */
            }
        }

        @keyframes box-body {
            0% {
                transform: translate3d(0%, 0%, 0) rotate(0deg);
            }

            25% {
                transform: translate3d(0%, 25%, 0) rotate(20deg);
            }

            50% {
                transform: translate3d(0%, -15%, 0) rotate(0deg);
            }

            70% {
                transform: translate3d(0%, 0%, 0) rotate(0deg);
            }
        }

        @keyframes box-bowtie-right {

            0%,
            50%,
            75% {
                transform: translateX(0%) rotate(90deg) skew(10deg, 10deg);
            }

            90%,
            100% {
                transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
                box-shadow: 0px 4px 8px -4px rgba(0, 0, 0, 0.3);
            }
        }

        @keyframes box-bowtie-left {
            0% {
                transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
            }

            50%,
            75% {
                transform: translate(-50%, -15%) rotate(45deg) skew(10deg, 10deg);
            }

            90%,
            100% {
                transform: translateX(-100%) rotate(0deg) skew(10deg, 10deg);
            }
        }

        @media screen and (min-width: 1024px) {
            .sec {
                padding: 100px 100px;
            }
        }
    </style>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="ph ph-arrow-up"></i>
    </button>
    <section class="parallax">
        <h3 id="text">Selamat Ulang Tahun WPU !</h3>
        <img src="gambar/pinata.png" id="pin">
        <img src="gambar/paper1.png" id="p1">
        <img src="gambar/paper2.png" id="p2">
        <img src="gambar/balon.png" id="bal">
        <img src="gambar/shadowpl.png" id="shad">
    </section>
    <section class="sec">
        <h2>
            <center>Wah apatuh isinya, buka yuk!</center>
        </h2>
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="box">
                <div class="box-body">
                    <div class="open-text">Arahkan cursor disini</div>
                    <img class="img" src="gambar/9.png">
                    <div class="box-lid">
                        <div class="box-bowtie"></div>
                    </div>
                </div>
            </div>
        </div>
        <h2>
            <center>Terimakasih atas jasa-jasanya Pak Dhika</center>
        </h2>
        <br>
        <div class="image-container">
            <div class="image-wrapper">
                <div>
                    <img src="gambar/1.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/2.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/3.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/4.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/5.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/6.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/7.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/8.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/9p.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/10.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/11.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/12.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/13.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/14.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/15.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/5.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/16.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/17.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/18.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/19.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/20.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/21.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/22.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/23.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/24.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/25.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/26.jpeg" alt="">
                </div>
                <div>
                    <img src="gambar/27.jpeg" alt="">
                </div>
            </div>
        </div>
        <div class="birthdayCard">
            <div class="cardFront">
                <div class="front-text">
                    <div class="happy">
                        <img src="gambar/wpufixx.png" alt="wpu logo">
                        <h3>Buka ^_^</h3>
                    </div>
                </div>
            </div>
            <div class="cardInside">
                <div class="wishes">
                    <p>To: Pak Dhika,</p>
                    <p>Selamat ulang tahun buat Web Programming Unpas yg ke-9. Ga terasa pasti sudah 9 tahun saja
                        berjalan,
                        aku baru ngikutin WPU ini pas kuliah semester 2 pas itu tahun 2022, yaa baru 2 tahun
                        sih. Tapi aku seneng banget bisa nemuin channel YouTube Pak Dhika ini, semua penjelasannya mudah
                        dipahami. WPU juga membuatku terinspirasi untuk melanjutkan mimpiku menjadi Front-End Developer,
                        tadinya aku sudah sedikit pasrah karena jurusan kuliah yang aku jalani sekarang diluar bidang
                        IT, yaitu bidang Pendidikan. Tapi aku gamau langsung nyerah, aku mau berusaha dulu, sekali lagi
                        aku sangat berterima-kasih atas kehadiran WPU ini. Semoga terus maju dan banyak menginspirasi
                        banyak orang lagi.
                    </p>
                    <p class="name">Mutiara</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/ScrollTrigger.min.js"></script>

    <script>
        gsap.from("#pin", {
            scrollTrigger: {
                scrub: true
            },
            x: 100,
            y: 0,
        })
        gsap.from("#p2", {
            scrollTrigger: {
                scrub: true
            },
            x: 400,
            y: 30,
        })
        gsap.from("#p1", {
            scrollTrigger: {
                scrub: true
            },
            x: -400,
            y: 80,
        })
        gsap.from("#bal", {
            scrollTrigger: {
                scrub: true,
                end: '+=400'
            },
            y: 200,
        })
        gsap.from("#shad", {
            scrollTrigger: {
                scrub: true
            },
            y: 0,
        })
        gsap.from("#text", {
            scrollTrigger: {
                scrub: true
            },
            y: 50,
        })
    </script>

    <script>
        var retina = window.devicePixelRatio,

            // Math shorthands
            PI = Math.PI,
            sqrt = Math.sqrt,
            round = Math.round,
            random = Math.random,
            cos = Math.cos,
            sin = Math.sin,

            // Local WindowAnimationTiming interface
            rAF = window.requestAnimationFrame,
            cAF = window.cancelAnimationFrame || window.cancelRequestAnimationFrame,
            _now = Date.now || function() {
                return new Date().getTime();
            };

        // Local WindowAnimationTiming interface polyfill
        (function(w) {
            /**
             * Fallback implementation.
             */
            var prev = _now();

            function fallback(fn) {
                var curr = _now();
                var ms = Math.max(0, 16 - (curr - prev));
                var req = setTimeout(fn, ms);
                prev = curr;
                return req;
            }

            /**
             * Cancel.
             */
            var cancel = w.cancelAnimationFrame ||
                w.webkitCancelAnimationFrame ||
                w.clearTimeout;

            rAF = w.requestAnimationFrame ||
                w.webkitRequestAnimationFrame ||
                fallback;

            cAF = function(id) {
                cancel.call(w, id);
            };
        }(window));

        document.addEventListener("DOMContentLoaded", function() {
            var speed = 50,
                duration = (1.0 / speed),
                confettiRibbonCount = 11,
                ribbonPaperCount = 30,
                ribbonPaperDist = 8.0,
                ribbonPaperThick = 8.0,
                confettiPaperCount = 95,
                DEG_TO_RAD = PI / 180,
                RAD_TO_DEG = 180 / PI,
                colors = [
                    ["#df0049", "#660671"],
                    ["#00e857", "#005291"],
                    ["#2bebbc", "#05798a"],
                    ["#ffd200", "#b06c00"]
                ];

            function Vector2(_x, _y) {
                this.x = _x, this.y = _y;
                this.Length = function() {
                    return sqrt(this.SqrLength());
                }
                this.SqrLength = function() {
                    return this.x * this.x + this.y * this.y;
                }
                this.Add = function(_vec) {
                    this.x += _vec.x;
                    this.y += _vec.y;
                }
                this.Sub = function(_vec) {
                    this.x -= _vec.x;
                    this.y -= _vec.y;
                }
                this.Div = function(_f) {
                    this.x /= _f;
                    this.y /= _f;
                }
                this.Mul = function(_f) {
                    this.x *= _f;
                    this.y *= _f;
                }
                this.Normalize = function() {
                    var sqrLen = this.SqrLength();
                    if (sqrLen != 0) {
                        var factor = 1.0 / sqrt(sqrLen);
                        this.x *= factor;
                        this.y *= factor;
                    }
                }
                this.Normalized = function() {
                    var sqrLen = this.SqrLength();
                    if (sqrLen != 0) {
                        var factor = 1.0 / sqrt(sqrLen);
                        return new Vector2(this.x * factor, this.y * factor);
                    }
                    return new Vector2(0, 0);
                }
            }
            Vector2.Lerp = function(_vec0, _vec1, _t) {
                return new Vector2((_vec1.x - _vec0.x) * _t + _vec0.x, (_vec1.y - _vec0.y) * _t + _vec0.y);
            }
            Vector2.Distance = function(_vec0, _vec1) {
                return sqrt(Vector2.SqrDistance(_vec0, _vec1));
            }
            Vector2.SqrDistance = function(_vec0, _vec1) {
                var x = _vec0.x - _vec1.x;
                var y = _vec0.y - _vec1.y;
                return (x * x + y * y + z * z);
            }
            Vector2.Scale = function(_vec0, _vec1) {
                return new Vector2(_vec0.x * _vec1.x, _vec0.y * _vec1.y);
            }
            Vector2.Min = function(_vec0, _vec1) {
                return new Vector2(Math.min(_vec0.x, _vec1.x), Math.min(_vec0.y, _vec1.y));
            }
            Vector2.Max = function(_vec0, _vec1) {
                return new Vector2(Math.max(_vec0.x, _vec1.x), Math.max(_vec0.y, _vec1.y));
            }
            Vector2.ClampMagnitude = function(_vec0, _len) {
                var vecNorm = _vec0.Normalized;
                return new Vector2(vecNorm.x * _len, vecNorm.y * _len);
            }
            Vector2.Sub = function(_vec0, _vec1) {
                return new Vector2(_vec0.x - _vec1.x, _vec0.y - _vec1.y, _vec0.z - _vec1.z);
            }

            function EulerMass(_x, _y, _mass, _drag) {
                this.position = new Vector2(_x, _y);
                this.mass = _mass;
                this.drag = _drag;
                this.force = new Vector2(0, 0);
                this.velocity = new Vector2(0, 0);
                this.AddForce = function(_f) {
                    this.force.Add(_f);
                }
                this.Integrate = function(_dt) {
                    var acc = this.CurrentForce(this.position);
                    acc.Div(this.mass);
                    var posDelta = new Vector2(this.velocity.x, this.velocity.y);
                    posDelta.Mul(_dt);
                    this.position.Add(posDelta);
                    acc.Mul(_dt);
                    this.velocity.Add(acc);
                    this.force = new Vector2(0, 0);
                }
                this.CurrentForce = function(_pos, _vel) {
                    var totalForce = new Vector2(this.force.x, this.force.y);
                    var speed = this.velocity.Length();
                    var dragVel = new Vector2(this.velocity.x, this.velocity.y);
                    dragVel.Mul(this.drag * this.mass * speed);
                    totalForce.Sub(dragVel);
                    return totalForce;
                }
            }

            function ConfettiPaper(_x, _y) {
                this.pos = new Vector2(_x, _y);
                this.rotationSpeed = (random() * 600 + 800);
                this.angle = DEG_TO_RAD * random() * 360;
                this.rotation = DEG_TO_RAD * random() * 360;
                this.cosA = 1.0;
                this.size = 5.0;
                this.oscillationSpeed = (random() * 1.5 + 0.5);
                this.xSpeed = 40.0;
                this.ySpeed = (random() * 60 + 50.0);
                this.corners = new Array();
                this.time = random();
                var ci = round(random() * (colors.length - 1));
                this.frontColor = colors[ci][0];
                this.backColor = colors[ci][1];
                for (var i = 0; i < 4; i++) {
                    var dx = cos(this.angle + DEG_TO_RAD * (i * 90 + 45));
                    var dy = sin(this.angle + DEG_TO_RAD * (i * 90 + 45));
                    this.corners[i] = new Vector2(dx, dy);
                }
                this.Update = function(_dt) {
                    this.time += _dt;
                    this.rotation += this.rotationSpeed * _dt;
                    this.cosA = cos(DEG_TO_RAD * this.rotation);
                    this.pos.x += cos(this.time * this.oscillationSpeed) * this.xSpeed * _dt
                    this.pos.y += this.ySpeed * _dt;
                    if (this.pos.y > ConfettiPaper.bounds.y) {
                        this.pos.x = random() * ConfettiPaper.bounds.x;
                        this.pos.y = 0;
                    }
                }
                this.Draw = function(_g) {
                    if (this.cosA > 0) {
                        _g.fillStyle = this.frontColor;
                    } else {
                        _g.fillStyle = this.backColor;
                    }
                    _g.beginPath();
                    _g.moveTo((this.pos.x + this.corners[0].x * this.size) * retina, (this.pos.y + this.corners[
                        0].y * this.size * this.cosA) * retina);
                    for (var i = 1; i < 4; i++) {
                        _g.lineTo((this.pos.x + this.corners[i].x * this.size) * retina, (this.pos.y + this
                            .corners[i].y * this.size * this.cosA) * retina);
                    }
                    _g.closePath();
                    _g.fill();
                }
            }
            ConfettiPaper.bounds = new Vector2(0, 0);

            function ConfettiRibbon(_x, _y, _count, _dist, _thickness, _angle, _mass, _drag) {
                this.particleDist = _dist;
                this.particleCount = _count;
                this.particleMass = _mass;
                this.particleDrag = _drag;
                this.particles = new Array();
                var ci = round(random() * (colors.length - 1));
                this.frontColor = colors[ci][0];
                this.backColor = colors[ci][1];
                this.xOff = (cos(DEG_TO_RAD * _angle) * _thickness);
                this.yOff = (sin(DEG_TO_RAD * _angle) * _thickness);
                this.position = new Vector2(_x, _y);
                this.prevPosition = new Vector2(_x, _y);
                this.velocityInherit = (random() * 2 + 4);
                this.time = random() * 100;
                this.oscillationSpeed = (random() * 2 + 2);
                this.oscillationDistance = (random() * 40 + 40);
                this.ySpeed = (random() * 40 + 80);
                for (var i = 0; i < this.particleCount; i++) {
                    this.particles[i] = new EulerMass(_x, _y - i * this.particleDist, this.particleMass, this
                        .particleDrag);
                }
                this.Update = function(_dt) {
                    var i = 0;
                    this.time += _dt * this.oscillationSpeed;
                    this.position.y += this.ySpeed * _dt;
                    this.position.x += cos(this.time) * this.oscillationDistance * _dt;
                    this.particles[0].position = this.position;
                    var dX = this.prevPosition.x - this.position.x;
                    var dY = this.prevPosition.y - this.position.y;
                    var delta = sqrt(dX * dX + dY * dY);
                    this.prevPosition = new Vector2(this.position.x, this.position.y);
                    for (i = 1; i < this.particleCount; i++) {
                        var dirP = Vector2.Sub(this.particles[i - 1].position, this.particles[i].position);
                        dirP.Normalize();
                        dirP.Mul((delta / _dt) * this.velocityInherit);
                        this.particles[i].AddForce(dirP);
                    }
                    for (i = 1; i < this.particleCount; i++) {
                        this.particles[i].Integrate(_dt);
                    }
                    for (i = 1; i < this.particleCount; i++) {
                        var rp2 = new Vector2(this.particles[i].position.x, this.particles[i].position.y);
                        rp2.Sub(this.particles[i - 1].position);
                        rp2.Normalize();
                        rp2.Mul(this.particleDist);
                        rp2.Add(this.particles[i - 1].position);
                        this.particles[i].position = rp2;
                    }
                    if (this.position.y > ConfettiRibbon.bounds.y + this.particleDist * this.particleCount) {
                        this.Reset();
                    }
                }
                this.Reset = function() {
                    this.position.y = -random() * ConfettiRibbon.bounds.y;
                    this.position.x = random() * ConfettiRibbon.bounds.x;
                    this.prevPosition = new Vector2(this.position.x, this.position.y);
                    this.velocityInherit = random() * 2 + 4;
                    this.time = random() * 100;
                    this.oscillationSpeed = random() * 2.0 + 1.5;
                    this.oscillationDistance = (random() * 40 + 40);
                    this.ySpeed = random() * 40 + 80;
                    var ci = round(random() * (colors.length - 1));
                    this.frontColor = colors[ci][0];
                    this.backColor = colors[ci][1];
                    this.particles = new Array();
                    for (var i = 0; i < this.particleCount; i++) {
                        this.particles[i] = new EulerMass(this.position.x, this.position.y - i * this
                            .particleDist, this.particleMass, this.particleDrag);
                    }
                };
                this.Draw = function(_g) {
                    for (var i = 0; i < this.particleCount - 1; i++) {
                        var p0 = new Vector2(this.particles[i].position.x + this.xOff, this.particles[i]
                            .position.y + this.yOff);
                        var p1 = new Vector2(this.particles[i + 1].position.x + this.xOff, this.particles[i + 1]
                            .position.y + this.yOff);
                        if (this.Side(this.particles[i].position.x, this.particles[i].position.y, this
                                .particles[i + 1].position.x, this.particles[i + 1].position.y, p1.x, p1.y) <
                            0) {
                            _g.fillStyle = this.frontColor;
                            _g.strokeStyle = this.frontColor;
                        } else {
                            _g.fillStyle = this.backColor;
                            _g.strokeStyle = this.backColor;
                        }
                        if (i == 0) {
                            _g.beginPath();
                            _g.moveTo(this.particles[i].position.x * retina, this.particles[i].position.y *
                                retina);
                            _g.lineTo(this.particles[i + 1].position.x * retina, this.particles[i + 1].position
                                .y * retina);
                            _g.lineTo(((this.particles[i + 1].position.x + p1.x) * 0.5) * retina, ((this
                                .particles[i + 1].position.y + p1.y) * 0.5) * retina);
                            _g.closePath();
                            _g.stroke();
                            _g.fill();
                            _g.beginPath();
                            _g.moveTo(p1.x * retina, p1.y * retina);
                            _g.lineTo(p0.x * retina, p0.y * retina);
                            _g.lineTo(((this.particles[i + 1].position.x + p1.x) * 0.5) * retina, ((this
                                .particles[i + 1].position.y + p1.y) * 0.5) * retina);
                            _g.closePath();
                            _g.stroke();
                            _g.fill();
                        } else if (i == this.particleCount - 2) {
                            _g.beginPath();
                            _g.moveTo(this.particles[i].position.x * retina, this.particles[i].position.y *
                                retina);
                            _g.lineTo(this.particles[i + 1].position.x * retina, this.particles[i + 1].position
                                .y * retina);
                            _g.lineTo(((this.particles[i].position.x + p0.x) * 0.5) * retina, ((this.particles[
                                i].position.y + p0.y) * 0.5) * retina);
                            _g.closePath();
                            _g.stroke();
                            _g.fill();
                            _g.beginPath();
                            _g.moveTo(p1.x * retina, p1.y * retina);
                            _g.lineTo(p0.x * retina, p0.y * retina);
                            _g.lineTo(((this.particles[i].position.x + p0.x) * 0.5) * retina, ((this.particles[
                                i].position.y + p0.y) * 0.5) * retina);
                            _g.closePath();
                            _g.stroke();
                            _g.fill();
                        } else {
                            _g.beginPath();
                            _g.moveTo(this.particles[i].position.x * retina, this.particles[i].position.y *
                                retina);
                            _g.lineTo(this.particles[i + 1].position.x * retina, this.particles[i + 1].position
                                .y * retina);
                            _g.lineTo(p1.x * retina, p1.y * retina);
                            _g.lineTo(p0.x * retina, p0.y * retina);
                            _g.closePath();
                            _g.stroke();
                            _g.fill();
                        }
                    }
                }
                this.Side = function(x1, y1, x2, y2, x3, y3) {
                    return ((x1 - x2) * (y3 - y2) - (y1 - y2) * (x3 - x2));
                }
            }
            ConfettiRibbon.bounds = new Vector2(0, 0);
            confetti = {};
            confetti.Context = function(id) {
                var i = 0;
                var canvas = document.getElementById(id);
                var canvasParent = canvas.parentNode;
                var canvasWidth = canvasParent.offsetWidth;
                var canvasHeight = canvasParent.offsetHeight;
                canvas.width = canvasWidth * retina;
                canvas.height = canvasHeight * retina;
                var context = canvas.getContext('2d');
                var interval = null;
                var confettiRibbons = new Array();
                ConfettiRibbon.bounds = new Vector2(canvasWidth, canvasHeight);
                for (i = 0; i < confettiRibbonCount; i++) {
                    confettiRibbons[i] = new ConfettiRibbon(random() * canvasWidth, -random() * canvasHeight *
                        2, ribbonPaperCount, ribbonPaperDist, ribbonPaperThick, 45, 1, 0.05);
                }
                var confettiPapers = new Array();
                ConfettiPaper.bounds = new Vector2(canvasWidth, canvasHeight);
                for (i = 0; i < confettiPaperCount; i++) {
                    confettiPapers[i] = new ConfettiPaper(random() * canvasWidth, random() * canvasHeight);
                }
                this.resize = function() {
                    canvasWidth = canvasParent.offsetWidth;
                    canvasHeight = canvasParent.offsetHeight;
                    canvas.width = canvasWidth * retina;
                    canvas.height = canvasHeight * retina;
                    ConfettiPaper.bounds = new Vector2(canvasWidth, canvasHeight);
                    ConfettiRibbon.bounds = new Vector2(canvasWidth, canvasHeight);
                }
                this.start = function() {
                    this.stop()
                    var context = this;
                    this.update();
                }
                this.stop = function() {
                    cAF(this.interval);
                }
                this.update = function() {
                    var i = 0;
                    context.clearRect(0, 0, canvas.width, canvas.height);
                    for (i = 0; i < confettiPaperCount; i++) {
                        confettiPapers[i].Update(duration);
                        confettiPapers[i].Draw(context);
                    }
                    for (i = 0; i < confettiRibbonCount; i++) {
                        confettiRibbons[i].Update(duration);
                        confettiRibbons[i].Draw(context);
                    }
                    this.interval = rAF(function() {
                        confetti.update();
                    });
                }
            };
            var confetti = new confetti.Context('confetti');
            confetti.start();
            window.addEventListener('resize', function(event) {
                confetti.resize();
            });
        });
    </script>

    <script>
        const imageWrapper = document.querySelector('.image-wrapper')
        const imageItems = document.querySelectorAll('.image-wrapper > *')
        const imageLength = imageItems.length
        const perView = 3
        let totalScroll = 0
        const delay = 1000

        imageWrapper.style.setProperty('--per-view', perView)
        for (let i = 0; i < perView; i++) {
            imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
        }

        let autoScroll = setInterval(scrolling, delay)

        function scrolling() {
            totalScroll++
            if (totalScroll == imageLength + 1) {
                clearInterval(autoScroll)
                totalScroll = 1
                imageWrapper.style.transition = '0s'
                imageWrapper.style.left = '0'
                autoScroll = setInterval(scrolling, delay)
            }
            const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 24
            imageWrapper.style.left = `-${totalScroll * widthEl}px`
            imageWrapper.style.transition = '.3s'
        }
    </script>

    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document smoothly
        function topFunction() {
            const scrollOptions = {
                top: 0,
                behavior: 'smooth' // This makes the scrolling smooth
            };

            // For modern browsers
            if ('scrollBehavior' in document.documentElement.style) {
                window.scrollTo(scrollOptions);
            } else {
                // For older browsers that do not support smooth scrolling
                window.scrollTo(scrollOptions.top, scrollOptions.top);
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var birthdayCard = document.querySelector('.birthdayCard');
            var options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2 // Ubah threshold sesuai kebutuhan Anda
            };

            var observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    } else {
                        entry.target.classList.remove('visible');
                    }
                });
            }, options);

            // Memantau elemen birthdayCard
            observer.observe(birthdayCard);
        });
    </script>

</body>

</html>