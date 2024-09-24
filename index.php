<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourServices</title>
    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link icon -->
    <link rel="shortcut icon" href="asscets/image/logo.png" type="image/x-icon">
    <!-- link css -->
    <link rel="stylesheet" href="asscets/css/style.css">
    <!-- add libirary animition -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- header -->
    <header>
        <!-- nav icone -->
        <div class="navbar_icon">
            <i class="fa-solid fa-bars"></i>
        </div>
        <nav class="navbar">
            <ul class="list_links">
                <a href="#home" class="link">الرئيسية</a>
                <a href="#about" class="link">عنا</a>
                <a href="#services" class="link">خدماتنا</a>
                <a href="#comment" class="link">التعليقات</a>
                <a href="pages/shop.php" class="link">متجرنا</a>
                <a href="#" class="link">تواصل معنا</a>
                <!-- close -->
                <div class="close_navbar_icon">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </ul>

        </nav>

        <div class="logo animate__animated animate__zoomInRight">
            <img src="asscets/image/logo.svg" alt="logo">
        </div>
    </header>
    <!-- section home -->
    <section class="home" id="home">
        <div class="content_home">
            <h1 data-aos="fade-left" class="titel_home">اكتشف خدماتنا المتنوعة</h1>
            <p data-aos="fade-left" class="description_home">
                نقدم لك مجموعة من الخدمات المتميزة لإنشاء مواقع إلكترونية وتصميمها بشكل احترافي. دعنا نساعدك في بيع
                منتجاتك عبر الإنترنت بشكل فعال ومؤثر. استمتع بتجربة فريدة من نوعها مع خدماتنا الرقمية. انطلق بمشروعك نحو
                النجاح اليوم!
            </p>
            <a href="#" class="button btn-primary" data-aos="fade-left">اتصل بنا</a>
        </div>
        <div data-aos="zoom-in" class="image">
            <img src="asscets/image/img services.png" alt="services img">
        </div>
        <img data-aos="fade-up-left" class="item1" src="asscets/image/shepe 2.svg" alt="">
    </section>
    <!-- section about  -->
    <section class="about" id="about">
        <div class="content_about">
            <h1 class="titel_about" data-aos="fade-left">كل ما تحتاجه في مكان واحد</h1>
            <p class="description_about my-3" data-aos="fade-left">
                من إنشاء مواقع احترافية إلى تصميم مميز، نقدم لك جميع الأدوات اللازمة لتحقيق النجاح. نحن ملتزمون بتقديم
                منتجات رقمية عالية الجودة. استمتع بتجربة تسوق سلسة من خلال متجرنا الإلكتروني. انضم إلى مجتمعنا وابدأ
                رحلتك
                الرقمية اليوم.
            </p>
            <a href="#" class="button btn-primary" data-aos="fade-left">انضم الآن</a>
        </div>

        <div class="image_about animate__animated animate__fadeInLeft">
            <svg class="animated" id="freepik_stories-about-us-page" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.com/svgjs">
                <style>
                    svg#freepik_stories-about-us-page:not(.animated) .animable {
                        opacity: 0;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--Floor--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) zoomOut;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--Shadows--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideUp;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--Plants--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideDown;
                        animation-delay: 0s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--Page--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft, 1.5s Infinite linear floating;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--character-3--inject-2 {
                        animation: 1s 1 forwards linear zoomIn, 1.5s Infinite linear floating;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--character-2--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) lightSpeedLeft, 1.5s Infinite linear floating;
                        animation-delay: 0s, 1s;
                    }

                    svg#freepik_stories-about-us-page.animated #freepik--character-1--inject-2 {
                        animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) slideLeft, 1.5s Infinite linear floating;
                        animation-delay: 0s, 1s;
                    }

                    @keyframes zoomOut {
                        0% {
                            opacity: 0;
                            transform: scale(1.5);
                        }

                        100% {
                            opacity: 1;
                            transform: scale(1);
                        }
                    }

                    @keyframes slideUp {
                        0% {
                            opacity: 0;
                            transform: translateY(30px);
                        }

                        100% {
                            opacity: 1;
                            transform: inherit;
                        }
                    }

                    @keyframes slideDown {
                        0% {
                            opacity: 0;
                            transform: translateY(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    }

                    @keyframes lightSpeedLeft {
                        from {
                            transform: translate3d(-50%, 0, 0) skewX(20deg);
                            opacity: 0;
                        }

                        60% {
                            transform: skewX(-10deg);
                            opacity: 1;
                        }

                        80% {
                            transform: skewX(2deg);
                        }

                        to {
                            opacity: 1;
                            transform: translate3d(0, 0, 0);
                        }
                    }

                    @keyframes floating {
                        0% {
                            opacity: 1;
                            transform: translateY(0px);
                        }

                        50% {
                            transform: translateY(-10px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateY(0px);
                        }
                    }

                    @keyframes zoomIn {
                        0% {
                            opacity: 0;
                            transform: scale(0.5);
                        }

                        100% {
                            opacity: 1;
                            transform: scale(1);
                        }
                    }

                    @keyframes slideLeft {
                        0% {
                            opacity: 0;
                            transform: translateX(-30px);
                        }

                        100% {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }
                </style>
                <g id="freepik--Floor--inject-2" class="animable" style="transform-origin: 244.99px 349.69px;">
                    <ellipse id="freepik--floor--inject-2" cx="244.99" cy="349.69" rx="225.05" ry="129.93"
                        style="fill: rgb(245, 245, 245); transform-origin: 244.99px 349.69px;" class="animable">
                    </ellipse>
                </g>
                <g id="freepik--Shadows--inject-2" class="animable" style="transform-origin: 277.99px 408.075px;">
                    <ellipse id="freepik--Shadow--inject-2" cx="283.51" cy="397.24" rx="41.38" ry="23.89"
                        style="fill: rgb(224, 224, 224); transform-origin: 283.51px 397.24px;" class="animable">
                    </ellipse>
                    <ellipse id="freepik--shadow--inject-2" cx="391.16" cy="383.09" rx="41.38" ry="23.89"
                        style="fill: rgb(224, 224, 224); transform-origin: 391.16px 383.09px;" class="animable">
                    </ellipse>
                    <ellipse id="freepik--shadow--inject-2" cx="164.82" cy="433.06" rx="41.38" ry="23.89"
                        style="fill: rgb(224, 224, 224); transform-origin: 164.82px 433.06px;" class="animable">
                    </ellipse>
                </g>
                <g id="freepik--Plants--inject-2" class="animable" style="transform-origin: 74.4629px 342.628px;">
                    <g id="freepik--plants--inject-2" class="animable" style="transform-origin: 74.4629px 342.628px;">
                        <path
                            d="M97,354.5s-1.08-25.26-11.67-39.32-23.57-16.08-30-12.12c-4.7,2.88-4.07,11.44,4.06,17s23.8,19.81,26.25,29.1Z"
                            style="fill: rgb(55, 71, 79); transform-origin: 74.6932px 327.886px;" id="el8xt5et9k9pa"
                            class="animable"></path>
                        <path
                            d="M90,350.82a.66.66,0,0,1-.61-.69c1.09-22.92-19-37.21-24.47-39.78a.66.66,0,0,1-.32-.87.67.67,0,0,1,.88-.32c5.61,2.66,26.34,17.39,25.22,41a.66.66,0,0,1-.69.62Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 77.6423px 329.96px;" id="elmt3cskbexye"
                            class="animable"></path>
                        <path
                            d="M92,346.52A6,6,0,0,1,88.09,345c-1.23-1.35-1.13-3.42-1.7-5.16-.93-2.86-3.75-4.8-6.69-5.41a20.31,20.31,0,0,0-8.92.6c-5.9,1.45-11.57-2.18-17.48-1.75a11.78,11.78,0,0,0-6,1.87,6.38,6.38,0,0,0-2.86,5.36A6.84,6.84,0,0,0,46.88,345a20.54,20.54,0,0,0,4.48,2.8l5.19,2.65A9.15,9.15,0,0,1,59,352.05a6.91,6.91,0,0,1,1.81,5.53c-.4,2-2,3.52-2.51,5.48-.63,2.57.94,5.32,3.2,6.71a13.1,13.1,0,0,0,7.68,1.5c2.65-.15,5.27-.68,7.92-.73a9.33,9.33,0,0,1,5.16,1.13,9.57,9.57,0,0,1,3.63,5.27,14,14,0,0,0,1.62,3.86A7.47,7.47,0,0,0,91,383.25a11.94,11.94,0,0,0,8.25,0c2.19-.84,3.26-3.31,4.08-5.45a19,19,0,0,0,1.15-7,44.71,44.71,0,0,0-4.07-17.74c-1.23-2.56-3-5.12-5.72-6A17.25,17.25,0,0,0,92,346.52Z"
                            style="fill: rgb(69, 90, 100); transform-origin: 74.4629px 358.615px;" id="el0jbhd28x6ys8"
                            class="animable"></path>
                        <path
                            d="M97.68,374a.58.58,0,0,1-.55-.39c-6.17-17.69-35.36-33.08-46-34.85a.58.58,0,1,1,.19-1.15c10.88,1.8,40.65,17.53,47,35.61a.58.58,0,0,1-.36.75A.63.63,0,0,1,97.68,374Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 74.497px 355.803px;" id="elexhat5ip487"
                            class="animable"></path>
                        <path
                            d="M71.44,364.3a.58.58,0,0,1-.35-1,29.36,29.36,0,0,1,16.22-5.21h0a.59.59,0,0,1,0,1.17,28.79,28.79,0,0,0-15.53,5A.6.6,0,0,1,71.44,364.3Z"
                            style="fill: rgb(255, 255, 255); transform-origin: 79.3656px 361.199px;" id="el6pbbla6mx2n"
                            class="animable"></path>
                    </g>
                </g>
                <g id="freepik--Page--inject-2" class="animable animator-active"
                    style="transform-origin: 222.828px 208.754px;">
                    <path
                        d="M98,387.68a4.85,4.85,0,0,1-2.12-3.83V175.46a5,5,0,0,1,2.26-3.91L343.3,30a4.23,4.23,0,0,1,6.48,3.74v208.4a5,5,0,0,1-2.26,3.91L102.36,387.6A4.85,4.85,0,0,1,98,387.68Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 222.832px 208.754px;" id="elavea4eu4s85"
                        class="animable"></path>
                    <path
                        d="M101.93,387.79l-.09,0a.79.79,0,0,1-.22.09l-.17,0a1.41,1.41,0,0,1-.31.07.72.72,0,0,1-.21.05l-.34.05a4.38,4.38,0,0,1-2.6-.45,4.81,4.81,0,0,1-2.11-3.82V202.17l4.24,2.45V386.29c0,1,.51,1.62,1.25,1.62a1,1,0,0,0,.3,0h0A.94.94,0,0,0,101.93,387.79Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 98.905px 295.13px;" id="elqtuxe8u3t7h"
                        class="animable"></path>
                    <g id="el7v8lddhrvdm">
                        <path
                            d="M101.93,387.79l-.09,0a.79.79,0,0,1-.22.09l-.17,0a1.41,1.41,0,0,1-.31.07.72.72,0,0,1-.21.05l-.34.05a4.38,4.38,0,0,1-2.6-.45,4.81,4.81,0,0,1-2.11-3.82V202.17l4.24,2.45V386.29c0,1,.51,1.62,1.25,1.62a1,1,0,0,0,.3,0h0A.94.94,0,0,0,101.93,387.79Z"
                            style="fill: rgb(224, 224, 224); opacity: 0.81; transform-origin: 98.905px 295.13px;"
                            class="animable"></path>
                    </g>
                    <polygon points="100.11 204.62 95.87 202.17 95.87 242.52 100.11 244.99 100.11 204.62"
                        style="fill: rgb(23, 162, 255); transform-origin: 97.99px 223.58px;" id="elkqhjs64ujhm"
                        class="animable"></polygon>
                    <g id="elhu540a0jct5">
                        <polygon points="100.11 204.62 95.87 202.17 95.87 242.52 100.11 244.99 100.11 204.62"
                            style="opacity: 0.15; transform-origin: 97.99px 223.58px;" class="animable"></polygon>
                    </g>
                    <path
                        d="M100.76,175.68a4.65,4.65,0,0,0-.65,2.22v26.72l-4.24-2.45V175.46a2.44,2.44,0,0,1,0-.27,5,5,0,0,1,.09-.56,5.77,5.77,0,0,1,.56-1.4Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 98.3131px 188.925px;" id="elmvgljdgy3e8"
                        class="animable"></path>
                    <path
                        d="M349.78,33.75V45.81L170.07,149.56c-1.24.72-2.25.13-2.25-1.3v-4.57c0-1.43-1-2-2.26-1.3L110.83,174a5,5,0,0,0-2.26,3.91v4.56a5,5,0,0,1-2.25,3.91L100.11,190v-12a5,5,0,0,1,2.25-3.91L347.53,32.45C348.77,31.73,349.78,32.31,349.78,33.75Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 224.945px 111.07px;" id="el0x2epeubuljp"
                        class="animable"></path>
                    <path
                        d="M349.79,242.15a5,5,0,0,1-2.26,3.9L102.36,387.6c-1.24.71-2.25.13-2.25-1.31V190l6.21-3.58c1.24-.72,3.26-11.66,4.51-12.38l53.81-31.07c1.25-.72,4.19,7.36,5.43,6.64L349.78,45.81V242.15Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 224.95px 216.856px;" id="el60i0rylw80n"
                        class="animable"></path>
                    <g id="elebqo4p5c85g">
                        <path
                            d="M349.79,242.15a5,5,0,0,1-2.26,3.9L102.36,387.6c-1.24.71-2.25.13-2.25-1.31V190l6.21-3.58c1.24-.72,3.26-11.66,4.51-12.38l53.81-31.07c1.25-.72,4.19,7.36,5.43,6.64L349.78,45.81V242.15Z"
                            style="fill: rgb(255, 255, 255); opacity: 0.9; transform-origin: 224.95px 216.856px;"
                            class="animable"></path>
                    </g>
                    <g id="elifvw6hxfnn">
                        <g style="opacity: 0.4; transform-origin: 224.95px 216.855px;" class="animable">
                            <path
                                d="M348.78,47.54V242.15a4,4,0,0,1-1.76,3L101.86,386.73a1,1,0,0,1-.51.17c-.23,0-.24-.5-.24-.61V190.53l5.71-3.3c.88-.51,1.44-2.26,2.7-6.76a33.57,33.57,0,0,1,1.88-5.66L164.77,144a22.37,22.37,0,0,1,1.72,2.74c1.45,2.54,2.25,3.86,3.41,3.86a1.42,1.42,0,0,0,.67-.17L348.78,47.54m1-1.73L170.07,149.56a.35.35,0,0,1-.17,0c-1.26,0-3.82-6.73-5.09-6.73a.34.34,0,0,0-.17,0L110.83,174c-1.25.72-3.27,11.66-4.51,12.38L100.11,190V386.29c0,1,.51,1.61,1.24,1.61a2.11,2.11,0,0,0,1-.3L347.53,246.05a5,5,0,0,0,2.26-3.9V45.81Z"
                                style="fill: rgb(23, 162, 255); transform-origin: 224.95px 216.855px;" id="elmju2c5laky"
                                class="animable"></path>
                        </g>
                    </g>
                    <polygon points="100.11 204.62 100.11 244.99 349.78 100.86 349.78 60.48 100.11 204.62"
                        style="fill: rgb(23, 162, 255); transform-origin: 224.945px 152.735px;" id="elcvevofw3bcm"
                        class="animable"></polygon>
                    <path
                        d="M349.78,45.81V60.48L100.11,204.62V190l4.63-2.68c1.24-.72,1.66-1.82,2.25-3.91l1.58-5.46c.49-1.9,1-3.19,2.26-3.91l53.81-31.07c1.25-.72,2.23-.8,3.18.77l1.93,3.5c.7,1.23,1.06,1.95,2.3,1.23Z"
                        style="fill: rgb(240, 240, 240); transform-origin: 224.945px 125.215px;" id="el4buckumtx5k"
                        class="animable"></path>
                    <path
                        d="M339.2,41.31c1.57-.9,2.84-.17,2.84,1.64a6.28,6.28,0,0,1-2.84,4.92c-1.56.9-2.83.17-2.83-1.64A6.3,6.3,0,0,1,339.2,41.31Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 339.205px 44.59px;" id="elg642c1jd7ih"
                        class="animable"></path>
                    <path
                        d="M329,47.2c1.56-.9,2.83-.17,2.83,1.64A6.3,6.3,0,0,1,329,53.76c-1.57.9-2.84.17-2.84-1.64A6.28,6.28,0,0,1,329,47.2Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 328.995px 50.48px;" id="elp5jdtpqk3y"
                        class="animable"></path>
                    <path
                        d="M318.77,53.09c1.56-.9,2.84-.17,2.84,1.64a6.31,6.31,0,0,1-2.84,4.92c-1.57.91-2.84.17-2.84-1.64A6.28,6.28,0,0,1,318.77,53.09Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 318.77px 56.3722px;" id="elxlrw75ok32"
                        class="animable"></path>
                    <g id="elzguujju3bt">
                        <path
                            d="M110.45,191l-3.54,2,1.35-2.59a.67.67,0,0,0,0-.64c-.1-.12-.28,0-.4.19l-1.92,3.7h0a.78.78,0,0,0,0,.14l0,0a1.37,1.37,0,0,0,0,.19.79.79,0,0,0,0,.17l0,0a.22.22,0,0,0,0,.08h0l1.92,1.48a.18.18,0,0,0,.19,0,.73.73,0,0,0,.21-.28c.1-.24.09-.51,0-.6l-1.35-1,3.54-2a.75.75,0,0,0,.29-.61C110.74,191,110.61,190.92,110.45,191Z"
                            style="fill: rgb(69, 90, 100); opacity: 0.5; transform-origin: 108.338px 192.735px;"
                            class="animable"></path>
                    </g>
                    <g id="elets7xz2hb38">
                        <path
                            d="M113.41,189.3l3.54-2-1.35-1c-.12-.09-.13-.36,0-.6s.28-.37.4-.28l1.92,1.48h0a.2.2,0,0,1,.06.07s0,0,0,0a.41.41,0,0,1,0,.16.58.58,0,0,1,0,.19s0,0,0,.05a.84.84,0,0,1-.06.14h0L116,191.17a.53.53,0,0,1-.19.22.15.15,0,0,1-.21,0,.64.64,0,0,1,0-.64l1.35-2.6-3.54,2.05c-.16.09-.28,0-.28-.28A.74.74,0,0,1,113.41,189.3Z"
                            style="fill: rgb(69, 90, 100); opacity: 0.5; transform-origin: 115.558px 188.412px;"
                            class="animable"></path>
                    </g>
                    <g id="elm9j2tsruka">
                        <path
                            d="M125,179.1c0-.21-.21-.18-.3.05l-.49,1.19c-.83-.09-1.83.71-2.51,2.15-.87,1.85-.87,4,0,4.89a1.26,1.26,0,0,0,1.6.1,4.36,4.36,0,0,0,1.59-1.93.61.61,0,0,0,0-.62c-.12-.11-.3,0-.41.23-.65,1.38-1.72,2-2.37,1.37s-.66-2.27,0-3.66c.46-1,1.13-1.57,1.72-1.6l-.37.89c-.09.23,0,.45.14.35l1.45-.94a.49.49,0,0,0,.16-.4Z"
                            style="fill: rgb(69, 90, 100); opacity: 0.5; transform-origin: 123.129px 183.339px;"
                            class="animable"></path>
                    </g>
                    <g id="elesjc5c11ng">
                        <path
                            d="M163.09,149.62l1.29-2.74a.84.84,0,0,0,0-.85c-.15-.14-.4,0-.55.32l-1.29,2.73-1.3-1.24c-.15-.15-.4,0-.55.32a.84.84,0,0,0,0,.85l1.29,1.24L160.69,153a.84.84,0,0,0,0,.85.22.22,0,0,0,.28,0,.66.66,0,0,0,.27-.33l1.3-2.74,1.29,1.25a.21.21,0,0,0,.27,0,.73.73,0,0,0,.28-.33.84.84,0,0,0,0-.85Z"
                            style="fill: rgb(69, 90, 100); opacity: 0.5; transform-origin: 162.535px 149.938px;"
                            class="animable"></path>
                    </g>
                    <path
                        d="M129.73,182.46V177.9A5,5,0,0,1,132,174l202.85-117c1.25-.72,2.26-.14,2.26,1.3V62.8a5,5,0,0,1-2.26,3.91L132,183.77C130.74,184.49,129.73,183.9,129.73,182.46Z"
                        style="fill: rgb(255, 255, 255); transform-origin: 233.42px 120.384px;" id="elqp13f9a1biq"
                        class="animable"></path>
                    <path
                        d="M331.76,67a.41.41,0,0,1-.16,0,.53.53,0,0,1-.28-.59l.22-1.89v0l-.92-.66a.49.49,0,0,1-.2-.42.94.94,0,0,1,.34-.72l1.32-1a.3.3,0,0,0,.09-.15l.59-1.94a.76.76,0,0,1,.59-.57.46.46,0,0,1,.43.26h0l.53,1.14,1.2-.46a.44.44,0,0,1,.5.11.74.74,0,0,1,0,.81l-1,1.8a.41.41,0,0,0,0,.16l.23,1.63a.9.9,0,0,1-.26.73.51.51,0,0,1-.44.18l-1.19-.15-1.15,1.54A.58.58,0,0,1,331.76,67ZM331,63.33l.92.66a.56.56,0,0,1,.19.54L332,66.09l1-1.26a.59.59,0,0,1,.51-.25l1.19.15s.05-.16,0-.24l-.23-1.63a.91.91,0,0,1,.11-.52l1-1.8-1.1.42a.43.43,0,0,1-.57-.23l-.49-1v0l-.59,1.94a.86.86,0,0,1-.3.45l-1.32,1A.42.42,0,0,0,331,63.33Z"
                        style="fill: rgb(224, 224, 224); transform-origin: 333.275px 63.0338px;" id="el82na15hu6yy"
                        class="animable"></path>
                    <g id="elwrcs6j3ox29">
                        <g style="opacity: 0.5; transform-origin: 342.92px 57.4311px;" class="animable">
                            <path
                                d="M339.75,56.38a.78.78,0,0,1-.39-1.46l6.34-3.66a.78.78,0,1,1,.79,1.35l-6.35,3.67A.78.78,0,0,1,339.75,56.38Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 342.92px 53.7661px;" id="el1un9e2pl1zh"
                                class="animable"></path>
                            <path
                                d="M339.75,60.05a.79.79,0,0,1-.68-.39.78.78,0,0,1,.29-1.07l6.34-3.67a.79.79,0,0,1,.79,1.36l-6.35,3.66A.79.79,0,0,1,339.75,60.05Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 342.892px 57.4489px;"
                                id="el7quhyor4zx8" class="animable"></path>
                            <path
                                d="M339.75,63.71a.79.79,0,0,1-.68-.39.77.77,0,0,1,.29-1.06l6.34-3.67a.78.78,0,0,1,.79,1.35l-6.35,3.67A.78.78,0,0,1,339.75,63.71Z"
                                style="fill: rgb(69, 90, 100); transform-origin: 342.921px 61.0968px;"
                                id="el8d1j1k5tz9p" class="animable"></path>
                        </g>
                    </g>
                    <polygon points="100.11 189.95 100.11 204.62 95.87 202.17 95.87 187.51 100.11 189.95"
                        style="fill: rgb(224, 224, 224); transform-origin: 97.99px 196.065px;" id="el76uo0qmli3v"
                        class="animable"></polygon><text transform="matrix(0.65, -0.38, 0, 1, 270.84, 135.67)"
                        style="font-size:24.296680450439453px;fill:#455a64;font-family:Rubik-Medium, Rubik;font-weight:500">About
                        us</text>
                    <g id="eln2a9ziijaal">
                        <polygon points="110.94 254.51 179.99 214.64 179.99 327.21 110.74 366.97 110.94 254.51"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 145.365px 290.805px;"
                            class="animable"></polygon>
                    </g>
                    <g id="elzbvmfb4o64">
                        <path
                            d="M195.21,207.93l83.3-48.09c1.68-1,3-.24,3,1.63a6.64,6.64,0,0,1-3,5.16L195.2,215.26c-1.67,1-3,.2-3-1.73v-.35A6.72,6.72,0,0,1,195.21,207.93Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.15; transform-origin: 236.855px 187.545px;"
                            class="animable"></path>
                    </g>
                    <g id="elgllgyes4j0l">
                        <path
                            d="M194.34,222.5l137.84-79.58c1.2-.69,2.17-.2,2.17,1.09a4.64,4.64,0,0,1-2.17,3.6L194.34,227.19c-1.19.69-2.16.2-2.16-1.09A4.65,4.65,0,0,1,194.34,222.5Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 185.055px;"
                            class="animable"></path>
                    </g>
                    <g id="el8a359lavrnk">
                        <path
                            d="M194.34,231.92l137.84-79.58c1.2-.69,2.17-.2,2.17,1.09a4.64,4.64,0,0,1-2.17,3.6L194.34,236.61c-1.19.69-2.16.2-2.16-1.1A4.65,4.65,0,0,1,194.34,231.92Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 194.475px;"
                            class="animable"></path>
                    </g>
                    <g id="elbdjm9890698">
                        <path
                            d="M194.34,241.33l137.84-79.58c1.2-.69,2.17-.2,2.17,1.1a4.64,4.64,0,0,1-2.17,3.59L194.34,246c-1.19.69-2.16.2-2.16-1.1A4.67,4.67,0,0,1,194.34,241.33Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 203.875px;"
                            class="animable"></path>
                    </g>
                    <g id="elu55fjap7wkj">
                        <path
                            d="M194.34,250.75l137.84-79.58c1.2-.69,2.17-.2,2.17,1.09a4.64,4.64,0,0,1-2.17,3.6L194.34,255.44c-1.19.69-2.16.2-2.16-1.09A4.65,4.65,0,0,1,194.34,250.75Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 213.305px;"
                            class="animable"></path>
                    </g>
                    <g id="elxmy2r9nyrz">
                        <path
                            d="M194.34,260.17l96.18-56c1.19-.69,2.16-.2,2.16,1.1a4.65,4.65,0,0,1-2.16,3.59l-96.18,56c-1.19.69-2.16.2-2.16-1.1A4.65,4.65,0,0,1,194.34,260.17Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 242.43px 234.515px;"
                            class="animable"></path>
                    </g>
                    <g id="el14fo5k0deyg">
                        <path
                            d="M194.34,279l137.84-79.58c1.2-.69,2.17-.2,2.17,1.09a4.64,4.64,0,0,1-2.17,3.6L194.34,283.69c-1.19.69-2.16.2-2.16-1.09A4.65,4.65,0,0,1,194.34,279Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 241.555px;"
                            class="animable"></path>
                    </g>
                    <g id="ely2l2yen4mt">
                        <path
                            d="M194.34,288.42l137.84-79.58c1.2-.69,2.17-.2,2.17,1.09a4.64,4.64,0,0,1-2.17,3.6L194.34,293.11c-1.19.69-2.16.2-2.16-1.1A4.65,4.65,0,0,1,194.34,288.42Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 250.975px;"
                            class="animable"></path>
                    </g>
                    <g id="elhex8wiiiv0k">
                        <path
                            d="M194.34,297.83l137.84-79.58c1.2-.69,2.17-.2,2.17,1.1a4.64,4.64,0,0,1-2.17,3.59L194.34,302.53c-1.19.69-2.16.2-2.16-1.1A4.67,4.67,0,0,1,194.34,297.83Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 263.265px 260.39px;"
                            class="animable"></path>
                    </g>
                    <g id="elmci0s2htibs">
                        <path
                            d="M194.34,307.25,245,277.69c1.19-.69,2.16-.2,2.16,1.1a4.65,4.65,0,0,1-2.16,3.59l-50.65,29.56c-1.19.69-2.16.2-2.16-1.09A4.65,4.65,0,0,1,194.34,307.25Z"
                            style="fill: rgb(23, 162, 255); opacity: 0.1; transform-origin: 219.675px 294.815px;"
                            class="animable"></path>
                    </g>
                </g>
                <g id="freepik--character-3--inject-2" class="animable" style="transform-origin: 394.203px 274.95px;">
                    <path
                        d="M378.54,253.2c7.33-23.78,14.46-39.45,7.19-44.3h0c-6.76,1.26-9.79,4.61-11.23,13.53-1.51,9.35-4.65,22.39-6.48,29.91a89,89,0,0,1-6.75,18.17,3.85,3.85,0,0,1-2,1.75c-2.26.89-3.34,2-5.18,3.36-1.45,1-2.51,1.14-2.44,1.57a1.9,1.9,0,0,0,2.26,1.4,13.73,13.73,0,0,0,3.15-1,15.71,15.71,0,0,1-3.94,5.76c-3.55,3-3,5.93,2.69,6.27,2,.12,6.77-1.74,11.16-9.21a74.47,74.47,0,0,0,3.91-8.61C373.94,264.14,377.07,258,378.54,253.2Z"
                        style="fill: rgb(255, 168, 167); transform-origin: 369.831px 249.263px;" id="eluffho3p2lln"
                        class="animable"></path>
                    <path d="M387,208.62s-5.64-.29-9.06,3.48-7.4,26.29-7.4,26.29,3.74,5.14,13.6,3Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 378.77px 225.263px;" id="elsu3gx9h0h8"
                        class="animable"></path>
                    <g id="elko3wsgo40r">
                        <path d="M387,208.62s-5.64-.29-9.06,3.48-7.4,26.29-7.4,26.29,3.74,5.14,13.6,3Z"
                            style="opacity: 0.3; transform-origin: 378.77px 225.263px;" class="animable"></path>
                    </g>
                    <rect x="405.84" y="368.38" width="7.57" height="13.5"
                        style="fill: rgb(255, 168, 167); transform-origin: 409.625px 375.13px;" id="elbr56xjek4va"
                        class="animable"></rect>
                    <polygon points="387.16 367.66 379.59 367.94 379.21 353.65 387.16 353.38 387.16 367.66"
                        style="fill: rgb(255, 168, 167); transform-origin: 383.185px 360.66px;" id="el82omhtbpax"
                        class="animable"></polygon>
                    <path
                        d="M414.48,251.5c0,7.53-1.11,68.13-1.11,68.13.17,2.17,2.12,6.17,1.7,14.49-.57,11.3-1.34,41-1.34,41a9.61,9.61,0,0,1-8.43.18s-7.16-41.15-8.51-52.36c-1.19-9.77-3.2-42.69-3.2-42.69l-4.1,38.27a47,47,0,0,1,.94,12.54c-.36,5.18-2.79,32.17-2.79,32.17a10,10,0,0,1-8.74.69s-4.31-40.64-4.4-45.4c-.1-5.42,2.52-67.11,2.52-67.11Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 394.813px 313.798px;" id="elns8ec08z9h"
                        class="animable"></path>
                    <path
                        d="M405.84,378v-1.13c-.73.33-2.41,7-5.41,9.88-2.39,2.26-5.65,4.88-6.48,7.41s4.54,4.09,6.77,3.68c2.59-.48,7.09-2.38,8.21-4.15s1.66-4.36,2.58-5.65,3-2.73,3.52-4.23c.28-.82,0-2.62-.43-4.14s-.73-2.93-1.19-2.8v.86a5.82,5.82,0,0,1-3.78,1.34C408.52,379.1,405.83,378.87,405.84,378Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 404.503px 387.383px;" id="elnp26dxop0y"
                        class="animable"></path>
                    <path
                        d="M379.51,365.5c-.39,0-.71.59-1.58,1.57a16.62,16.62,0,0,1-4.45,3.34c-2.84,1.48-8.35,3.75-10.85,4.92-1.55.73-1.48,2.69.13,3.81s5.5,1.92,10.17.83c2.54-.59,5.86-3,7.95-2.91s6,.11,7.57-1,.93-3.48.49-5.52c-.48-2.22-1.07-5.69-1.78-5.54v.77c-.91,1.43-5.61,2-7.61,1Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 375.479px 372.742px;" id="el4x98j0c7esw"
                        class="animable"></path>
                    <path d="M393.59,280.26a27.75,27.75,0,0,1-10.54-6.3s2,4,8.08,7.66l-1.29,34.18Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 388.32px 294.88px;" id="ellaarcd0g47"
                        class="animable">
                    </path>
                    <path
                        d="M410.54,210.42s5.92.55,5.5,11.83l-1.31,18,0,27c-5.57,6.31-30.25,5.84-38.7-.51,0,0,.95-31.93,1.52-44.22.41-8.73,2.42-13.13,11-14.09l10.55.46Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 396.046px 240.09px;" id="el8xhn1g9iqib"
                        class="animable"></path>
                    <g id="elnfkqouxmpi">
                        <polygon points="393.71 216.34 392.35 225.82 389.19 225.76 392.76 226.33 393.71 216.34"
                            style="opacity: 0.3; transform-origin: 391.45px 221.335px;" class="animable"></polygon>
                    </g>
                    <path
                        d="M401.61,185a11.52,11.52,0,0,1-11.27,11.75c-6.23,0-11-5.27-11.28-11.74-.49-11.47,5.05-11.75,11.28-11.75A11.52,11.52,0,0,1,401.61,185Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 390.321px 185.005px;" id="el22iug97bs7k"
                        class="animable"></path>
                    <path d="M408,190.81s-1.73,8.46-2.42,9.85a3.66,3.66,0,0,1-2.12,1.78l.12-5.95Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 405.73px 196.625px;" id="elpaktu8znmgf"
                        class="animable"></path>
                    <path d="M405.86,178.69s1.24-.31,2.56,1.75c1.13,1.76,1.39,5.72-.39,10.37l-3.25.39Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 407.048px 184.937px;" id="elm3e3o6ysv5c"
                        class="animable"></path>
                    <path
                        d="M403.8,191.2c.65.41,1.58-.9,2.39-1.78s3.43-2.07,4.75.8-1.16,6.81-3.23,7.49c-3.57,1.17-4.1-1.22-4.1-1.22l-.28,13.4c-4.73,7.33-15.46,7.06-11.6-.35v-4.08a21.79,21.79,0,0,1-4.81.26c-2.62-.43-4.27-2.58-5.07-5.54-1.28-4.75-1.76-8.58-.68-17.93C382.37,172,393.81,171.91,400,176S403.8,191.2,403.8,191.2Z"
                        style="fill: rgb(255, 168, 167); transform-origin: 395.941px 194.36px;" id="el9x1b66j0ilk"
                        class="animable"></path>
                    <path
                        d="M403.39,206.89a17.15,17.15,0,0,1-4.63,5.81,13.08,13.08,0,0,1-5.61,2.38,12.43,12.43,0,0,1,4,4.45c1.19,2.6,9.52-4.57,9.44-9.66,0,0-1.3-5.11-3.1-5.43Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 399.87px 212.26px;" id="elmz59yhr0rv"
                        class="animable">
                    </path>
                    <path
                        d="M393.15,215.08s-2.57-1.27-1.42-5.54v-4.08l-1.13.15a9.93,9.93,0,0,0-2.7,4.69c-.26,1.17-.9,7.09.23,8.26S390.84,215.4,393.15,215.08Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 390.317px 212.11px;" id="eltjd9765b6md"
                        class="animable"></path>
                    <path
                        d="M399.42,180a1.64,1.64,0,0,1,.88.05c1,.44,1.18,3.46,1.35,4.33.57,2.93,1.05,7.9,2.15,7.92.33,0,1.58-2.15,2.39-2.92,1.13-1.07-.33-10.73-.33-10.73a4.71,4.71,0,0,0-1.08-4.89c-2-2.32-5.22-2.84-8.13-3-3.43-.19-6.91.07-10.29-.68a27.28,27.28,0,0,0-3.23-.69.37.37,0,0,0-.29,0c-.11.09-.09.26-.06.4a10.74,10.74,0,0,0,1.06,2.9,26,26,0,0,1-5.92-1.17.57.57,0,0,0-.34,0c-.23.07-.27.37-.25.61.13,2.42,1.28,6.08,3.25,7.5a11.36,11.36,0,0,0,5.86,1.85C391.74,181.68,395,180.56,399.42,180Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 391.972px 180.83px;" id="elk7ral0j9hsk"
                        class="animable"></path>
                    <path d="M405.86,179.2l3.95-2.21a2.14,2.14,0,0,0-3-1A2.51,2.51,0,0,0,405.86,179.2Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 407.714px 177.459px;" id="eljbwh6p80jk"
                        class="animable"></path>
                    <path
                        d="M391.74,205.46s5.85-1.23,7.9-2.36a6.92,6.92,0,0,0,2.83-2.92,9.71,9.71,0,0,1-1.61,3.44c-1.49,2-9.12,3.46-9.12,3.46Z"
                        style="fill: rgb(242, 143, 143); transform-origin: 397.105px 203.63px;" id="eld0yar2hhzv7"
                        class="animable"></path>
                    <path d="M393.15,189.68a1.17,1.17,0,1,0,1.17-1.28A1.21,1.21,0,0,0,393.15,189.68Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 394.316px 189.57px;" id="elxjoryiajn6f"
                        class="animable"></path>
                    <path d="M395,184.62l2.51,1.44A1.6,1.6,0,0,0,397,184,1.37,1.37,0,0,0,395,184.62Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 396.346px 184.922px;" id="elqg0megnmp2"
                        class="animable"></path>
                    <path d="M392.27,198.12l-2.68,1a1.4,1.4,0,0,0,1.82.93A1.58,1.58,0,0,0,392.27,198.12Z"
                        style="fill: rgb(242, 143, 143); transform-origin: 390.968px 199.126px;" id="el522vn1keyb4"
                        class="animable"></path>
                    <path d="M382.38,185.69l2.29-1.84a1.35,1.35,0,0,0-2-.31A1.62,1.62,0,0,0,382.38,185.69Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 383.384px 184.459px;" id="el4bh5rkbjv7c"
                        class="animable"></path>
                    <path
                        d="M383.39,189.33a1.21,1.21,0,0,0,1.17,1.26,1.27,1.27,0,0,0,0-2.54A1.24,1.24,0,0,0,383.39,189.33Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 384.609px 189.32px;" id="ell9znswrbk5"
                        class="animable">
                    </path>
                    <polygon points="389.67 188.35 389.53 195.76 385.32 194.79 389.67 188.35"
                        style="fill: rgb(242, 143, 143); transform-origin: 387.495px 192.055px;" id="elp2av60ag3ug"
                        class="animable"></polygon>
                    <path
                        d="M422.06,195.8c1.69-2.24,5.11,2.73,6.69,6.16s1.61,5.37.31,6.73-3.75.54-6.2-2.71S421.09,197.45,422.06,195.8Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 425.583px 202.279px;" id="el49eu3cns3fo"
                        class="animable"></path>
                    <g id="el4u2cchjqdly">
                        <path
                            d="M422.06,195.8c1.69-2.24,5.11,2.73,6.69,6.16s1.61,5.37.31,6.73-3.75.54-6.2-2.71S421.09,197.45,422.06,195.8Z"
                            style="opacity: 0.5; transform-origin: 425.583px 202.279px;" class="animable"></path>
                    </g>
                    <path
                        d="M434,196.46c-6,14-14.35,21.89-18.1,30.9-4.91-.33-8.74-12.2-5.08-17.27,0,0,14.38-15.57,15.68-21.69,1.16-5.43,2.71-14.39,2.58-19a3.19,3.19,0,0,0-.89-2c-1.51-1.63-1.51-2.93-2.48-4.72-.75-1.4-1.58-1.92-1.34-2.24a1.81,1.81,0,0,1,2.45-.18,9.56,9.56,0,0,1,1.85,1.78,10.26,10.26,0,0,0-.85-5.26c-1.67-3.78-1.26-5.7,3.83-4.36,3.2.85,5.2,3.51,5.68,11.18a75.86,75.86,0,0,1,.06,9.59c-.56,5.91-.91,12.07-1.64,17A25.68,25.68,0,0,1,434,196.46Z"
                        style="fill: rgb(255, 168, 167); transform-origin: 423.44px 189.677px;" id="elwc8hrlwu4ng"
                        class="animable"></path>
                    <path
                        d="M409.32,210.26,422,195.76s-1.51,3.53,1.79,8.68,5.26,4.25,5.26,4.25-7.49,10.93-9.49,14.59-4.09,6.75-4.09,6.75a2.41,2.41,0,0,1-2.37,1.29C411.24,231.32,406.31,223.06,409.32,210.26Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 418.709px 213.546px;" id="ell0cx20m53a"
                        class="animable"></path>
                    <g id="eldshncjhqemk">
                        <path
                            d="M409.32,210.26,422,195.76s-1.51,3.53,1.79,8.68,5.26,4.25,5.26,4.25-7.49,10.93-9.49,14.59-4.09,6.75-4.09,6.75a2.41,2.41,0,0,1-2.37,1.29C411.24,231.32,406.31,223.06,409.32,210.26Z"
                            style="opacity: 0.3; transform-origin: 418.709px 213.546px;" class="animable"></path>
                    </g>
                </g>
                <g id="freepik--character-2--inject-2" class="animable" style="transform-origin: 284.406px 299.828px;">
                    <polygon points="306.42 242.85 312.39 250.8 305.97 258.15 297.7 248.48 306.42 242.85"
                        style="fill: rgb(242, 143, 143); transform-origin: 305.045px 250.5px;" id="elx9ct8bb2vh"
                        class="animable"></polygon>
                    <path
                        d="M286.87,224.77c5.21.24,7.69,1,10.42,4.26S313.66,252,313.66,252s-2.41,6.76-7.69,6.18l-9.59-9.89Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 300.265px 241.493px;" id="eld9icr3m39l7"
                        class="animable"></path>
                    <path
                        d="M261.31,389.89a38.69,38.69,0,0,0-.6,6.28c-.07,3.8-.77,5.16-.86,8.28-.11,3.57.51,4.91,2,6.91s5.25,3.83,6.86.44,1.4-5.61.88-9.12-.6-5.62-.9-8.38c-.28-2.44-.6-4.29-.6-4.29Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 264.903px 401.788px;" id="elq63k3kxkvfp"
                        class="animable"></path>
                    <path
                        d="M272.12,360l-12.55-.23c.19,8.38,1.52,22.32,1.74,30.17,0,1.48,0,11.49.52,14.54.84,4.57,6.26,3.95,6.55,1.22s-.35-14.43-.33-15.64c-.05-5,2.31-18.18,3.55-27.23C271.66,362.34,272.06,360.38,272.12,360Z"
                        style="fill: rgb(255, 189, 167); transform-origin: 265.845px 383.801px;" id="elrlwe8it4ykb"
                        class="animable"></path>
                    <path
                        d="M290.55,383.38s-.64,0-.75.56-.15,1.62-.41,2.66a15,15,0,0,0-.44,5c.21,1.17,2.88,2.91,4.71,3.22s4.4,2.11,5.83,3.46a14,14,0,0,0,8.11,3.18c3,0,5.17-1,6.17-2.64s-.91-1.83-4.39-4.09l-2.71-1.76c-5.51-3.6-7.53-5.53-9.09-9.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 301.468px 392.42px;" id="elwa8v0cvbgwi"
                        class="animable"></path>
                    <path
                        d="M297.62,381.42c-.09-2.6,1.23-21.7,1.23-21.7l-10.79,1.22c2.56,15.22,2.76,20.41,2.47,22.63h0a2.16,2.16,0,0,0-.07.63c0,3,3.35,4.56,6,6.53,1,.78,3.67,3.18,6.77,4.23,2,.69,5.71,1,6.18-.27-3.16-2.42-7.48-5.58-10-8.35C298.17,385,297.71,384,297.62,381.42Z"
                        style="fill: rgb(255, 189, 167); transform-origin: 298.735px 377.64px;" id="el280k73c0eebh"
                        class="animable"></path>
                    <path
                        d="M262.48,273.36c-5.88,12.86.22,58.14.22,58.14-.18,2.09-2.57,6.19-3.45,15.38-1.05,10.84,1.93,39.89,1.93,39.89a7,7,0,0,0,7,.15s7.59-42.68,9-53.46c1.19-9.42,3.47-30.12,3.47-30.12l6.48,30.06a55.84,55.84,0,0,0-2.06,9.3c-.61,6.34,5.57,38.19,5.57,38.19a8.75,8.75,0,0,0,7-.14s2.73-41.14,3.31-48.78c1-12.84-2.45-52.89-4.8-60.49Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 280.077px 329.632px;" id="el5edbobydkhj"
                        class="animable"></path>
                    <g id="ellfisaldql9h">
                        <path
                            d="M262.48,273.36c-5.88,12.86.22,58.14.22,58.14-.18,2.09-2.57,6.19-3.45,15.38-1.05,10.84,1.93,39.89,1.93,39.89a7,7,0,0,0,7,.15s7.59-42.68,9-53.46c1.19-9.42,3.47-30.12,3.47-30.12l6.48,30.06a55.84,55.84,0,0,0-2.06,9.3c-.61,6.34,5.57,38.19,5.57,38.19a8.75,8.75,0,0,0,7-.14s2.73-41.14,3.31-48.78c1-12.84-2.45-52.89-4.8-60.49Z"
                            style="opacity: 0.5; transform-origin: 280.077px 329.632px;" class="animable"></path>
                    </g>
                    <g id="elredvxbjux2">
                        <path
                            d="M280.63,303.34l1.91-11.94s8.08-1.67,11.75-5.12a20.88,20.88,0,0,1-9.56,6.35l-2.15,9.2,3.76,27.83Z"
                            style="opacity: 0.2; transform-origin: 287.46px 307.97px;" class="animable"></path>
                    </g>
                    <path d="M265.5,233.43l8,2.08V218.58h0c-4.42-1.15-8,1.4-8,5.7Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 269.5px 226.907px;" id="elis2iszjsia"
                        class="animable"></path>
                    <g id="el3l9ofhbsdqd">
                        <path d="M265.5,233.43l8,2.08V218.58h0c-4.42-1.15-8,1.4-8,5.7Z"
                            style="opacity: 0.6; transform-origin: 269.5px 226.907px;" class="animable"></path>
                    </g>
                    <path
                        d="M281.34,221l-2.87-.06c-8.76-.21-15.7-7.76-15.51-16.88h0c0-9.94,7.7-18,17.24-18.09h0c9.54-.05,17.32,8,17.37,17.9l0,1C297.33,214,290.08,221.19,281.34,221Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 280.263px 203.487px;" id="elmmqx6r7cc6"
                        class="animable"></path>
                    <g id="elgkykr50xijv">
                        <path
                            d="M281.34,221l-2.87-.06c-8.76-.21-15.7-7.76-15.51-16.88h0c0-9.94,7.7-18,17.24-18.09h0c9.54-.05,17.32,8,17.37,17.9l0,1C297.33,214,290.08,221.19,281.34,221Z"
                            style="opacity: 0.6; transform-origin: 280.263px 203.487px;" class="animable"></path>
                    </g>
                    <path
                        d="M267.93,190.12a2.17,2.17,0,0,0-2.77-1.56l.77,3a2,2,0,0,0-.58-.5,2.13,2.13,0,0,0-3,1l3.9,2.29a2.37,2.37,0,0,0,.26-1.27A2.47,2.47,0,0,0,267.93,190.12Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 265.188px 191.404px;" id="eloktg264m57f"
                        class="animable"></path>
                    <g id="elvdoui4esk9g">
                        <path
                            d="M267.93,190.12a2.17,2.17,0,0,0-2.77-1.56l.77,3a2,2,0,0,0-.58-.5,2.13,2.13,0,0,0-3,1l3.9,2.29a2.37,2.37,0,0,0,.26-1.27A2.47,2.47,0,0,0,267.93,190.12Z"
                            style="opacity: 0.6; transform-origin: 265.188px 191.404px;" class="animable"></path>
                    </g>
                    <path
                        d="M272.66,225.46a73.59,73.59,0,0,0-8,1.54c3.1,7.6-1.76,19.34-1.76,19.34l4.59,14.13c-3.17,6.49-5.78,9.71-6.86,15,2.92,5.7,23.53,11.14,36.95.75,0,0-.43-14.43-2.14-22.84,4.39-8.57,3.68-11.09,2.78-14.08-2.09-6.95-6.31-9.62-11.34-14.52l-3-.32Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 279.763px 253.275px;" id="eluuc7qx82fzn"
                        class="animable"></path>
                    <path
                        d="M268,266.13c2.49-2.55,7.77-3.28,7.77-3.28l-4.85-2.76L265.5,247a30,30,0,0,0,3.27-14.41l-3.12-.75c.38,6.93-2.76,14.51-2.76,14.51l4.59,14.13c-3.17,6.49-5.78,9.71-6.86,15,2,3.9,12.29,7.68,22.89,6.34C269.31,280.86,265.61,268.6,268,266.13Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 272.065px 256.968px;" id="el6mokbm3e9ij"
                        class="animable"></path>
                    <path d="M282.35,281.93l.58-.06A3.45,3.45,0,0,0,282.35,281.93Z"
                        style="fill: rgb(230, 230, 230); transform-origin: 282.64px 281.9px;" id="ellkb5n0tyya"
                        class="animable"></path>
                    <path
                        d="M291.13,194.83c1.72,1.58,3.87,5,3.7,15-.15,8.5-2.78,10.61-4.11,11.22s-3.88.26-6.37-.16l0,3.52s3.28,3.64,3.08,6-4.68,3.31-7.91,1a30.23,30.23,0,0,1-6-6.05l0-10.69s-1.46,1.49-4-.75c-2-1.86-2.76-5-1.17-6.7a3.5,3.5,0,0,1,5.69,1.15A32.48,32.48,0,0,0,285,205.21,10.85,10.85,0,0,0,291.13,194.83Z"
                        style="fill: rgb(255, 189, 167); transform-origin: 281.167px 213.783px;" id="elaaeu8p1rjn9"
                        class="animable"></path>
                    <path d="M284.34,207.92a1,1,0,1,1-1.08-1A1.06,1.06,0,0,1,284.34,207.92Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 283.34px 207.918px;" id="el2m1derxwgvp"
                        class="animable"></path>
                    <path d="M284.73,215l2.67.87a1.37,1.37,0,0,1-1.73,1A1.54,1.54,0,0,1,284.73,215Z"
                        style="fill: rgb(247, 151, 118); transform-origin: 286.035px 215.964px;" id="eldugc1rospoj"
                        class="animable"></path>
                    <path d="M294,204.09l-2.43-.83a1.19,1.19,0,0,1,1.55-.85A1.42,1.42,0,0,1,294,204.09Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 292.807px 203.217px;" id="elj3ki16pesc"
                        class="animable"></path>
                    <path d="M274.05,207.42l0,3.59a1.69,1.69,0,0,0,1.76-1.72A1.86,1.86,0,0,0,274.05,207.42Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 274.93px 209.216px;" id="elad43q4kpirn"
                        class="animable"></path>
                    <g id="elwd6it5mlv4">
                        <path d="M274.05,207.42l0,3.59a1.69,1.69,0,0,0,1.76-1.72A1.86,1.86,0,0,0,274.05,207.42Z"
                            style="opacity: 0.6; transform-origin: 274.93px 209.216px;" class="animable"></path>
                    </g>
                    <path d="M293.12,207.57a1.09,1.09,0,0,1-1,1.17,1.11,1.11,0,1,1,1-1.17Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 292.013px 207.635px;" id="elzcjg6a3mm2"
                        class="animable"></path>
                    <polygon points="287.42 206.12 287.4 213.08 290.64 212.01 287.42 206.12"
                        style="fill: rgb(247, 151, 118); transform-origin: 289.02px 209.6px;" id="elb584chri5hi"
                        class="animable"></polygon>
                    <path d="M284.35,220.93c-2.63-.34-8-1.93-8.89-4.15a5.8,5.8,0,0,0,1.91,2.83c1.62,1.43,7,3,7,3Z"
                        style="fill: rgb(247, 151, 118); transform-origin: 279.915px 219.695px;" id="el7fl6lfbrwqx"
                        class="animable"></path>
                    <path
                        d="M252.35,261s6.42,9.12,7.52,10.31,1.86.79,3.05.26a33.76,33.76,0,0,1,4.46-1.45c2-.49,2.38,1.32.44,2.61-1.4.94-3,1.34-2.34,2.11a14.87,14.87,0,0,0,4.68,2.87c4.74,1.87,4.37,2.81,3.5,4.34-.76,1.34-3,4.22-11.44.82-3.5-1.41-8.42-5.4-10.74-8-3.35-3.71-8.58-10.36-8.58-10.36Z"
                        style="fill: rgb(255, 189, 167); transform-origin: 258.546px 272.734px;" id="el284esz0jxql"
                        class="animable"></path>
                    <path
                        d="M265.89,226.67c-2.32.15-6.69.71-12.17,9.81-4.81,8-12.26,18.81-13.64,22.68-.56,1.57,1.62,4.82,4.43,8.15,3.83-.17,7.32-2.82,9.13-4.94a17.82,17.82,0,0,0-1.76-3.21l11.24-12.82s4.27-3.91,5.16-9C269.24,231.82,268.94,227.48,265.89,226.67Z"
                        style="fill: rgb(69, 90, 100); transform-origin: 254.379px 246.99px;" id="elod1ai79h55"
                        class="animable"></path>
                    <polygon points="328.82 243.93 301.11 251.23 293.48 282.58 319.83 274.93 328.82 243.93"
                        style="fill: rgb(23, 162, 255); transform-origin: 311.15px 263.255px;" id="eluydht921t1i"
                        class="animable"></polygon>
                    <g id="elw5gytptycr">
                        <polygon points="328.82 243.93 301.11 251.23 293.48 282.58 319.83 274.93 328.82 243.93"
                            style="opacity: 0.25; transform-origin: 311.15px 263.255px;" class="animable"></polygon>
                    </g>
                    <g id="ellqvyhumzum">
                        <g style="opacity: 0.1; transform-origin: 318.99px 267.683px;" class="animable">
                            <path d="M316.3,266.13a5.47,5.47,0,0,0,5.18,3.1l.2-.69Z" id="el1jcs06rvloa" class="animable"
                                style="transform-origin: 318.99px 267.683px;"></path>
                        </g>
                    </g>
                    <g id="el9ccft5u6enw">
                        <g style="opacity: 0.1; transform-origin: 314.689px 249.687px;" class="animable">
                            <path
                                d="M320.47,248.91l.23-1.06c.13-.58-1.5-.61-3.63,0l-4.09,1c-2.13.56-4,1.48-4.09,2.06l-.22,1.06Z"
                                id="elt0e0pvvhz3a" class="animable" style="transform-origin: 314.689px 249.687px;">
                            </path>
                        </g>
                    </g>
                    <path
                        d="M322.6,244.94c.08-.37-.58-.47-1.47-.22l-1.62.45s.48-2.29-3.1-1.49a5.64,5.64,0,0,0-4.38,3.4l-1.72.49c-1,.27-1.82.78-1.93,1.14l-.21.66,14.28-3.76Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 315.388px 246.44px;" id="el13b1yrgq363"
                        class="animable"></path>
                    <path
                        d="M320.63,246.06c-1.3.32-1.85.49-2,1.39s-.32,1.78-.32,1.78L312,250.9s.31-1.3.41-1.8-.12-.82-1.13-.55l-.08-.4,9.9-2.53Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 316.15px 248.26px;" id="el6tggdxdtfql"
                        class="animable">
                    </path>
                    <path d="M320.85,249l.23-1.06c.13-.58-1.5-.61-3.63,0l-4.09,1c-2.13.56-4,1.48-4.09,2.06l-.22,1.06Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 315.069px 249.777px;" id="elyglzsdpb61"
                        class="animable"></path>
                    <path
                        d="M325.9,254s-1,3.55-1.27,4.39-3.35,2.37-5.38,2.93-4.27,1.22-3.3,4.07c.88,2.63,4.24,3.23,5.94,3.15s4.05-1.7,5-4.33c1.17-3.36.54-6.94,1-8.9S326.92,252.83,325.9,254Z"
                        style="fill: rgb(255, 189, 167); transform-origin: 321.848px 260.964px;" id="el9xh7fsmwxph"
                        class="animable"></path>
                </g>
                <g id="freepik--character-1--inject-2" class="animable" style="transform-origin: 173.717px 335.122px;">
                    <path
                        d="M220.93,254.83c-3.8-3.83-5.16-2.34-5.64,1.86a18.66,18.66,0,0,1-1.27,5.13,9.49,9.49,0,0,0-.71-2.53,1.85,1.85,0,0,0-2.26-1.11c-.37.15.09,1,0,2.67-.07,2.08-.75,3.23-.26,5.44a3.57,3.57,0,0,1-.37,2.44c-2,3.8-8.59,10.82-13.21,15.88l-17.55-15.85c-6-5.4-7.94-7.83-13.73-7.44a15.66,15.66,0,0,1,4.92,3c2.69,2.27,2.05,15.26,2.05,15.26s19.92,14.28,22,15.64c.3.2.61.38.91.55a4.92,4.92,0,0,0,6-1.15c4.25-4.86,10.45-14.43,14-19.4a60.21,60.21,0,0,0,4.33-7.54C223.7,260.61,223.31,257.23,220.93,254.83Z"
                        style="fill: rgb(145, 79, 78); transform-origin: 194.348px 274.474px;" id="elgd01wzhq0sq"
                        class="animable"></path>
                    <path d="M166.55,261a10,10,0,0,1,8,2c3.42,2.6,18,16,18,16s.4,7.09-7,11.31l-17.87-12.6Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 179.552px 275.574px;" id="elo6umvdn05qr"
                        class="animable"></path>
                    <g id="elrhp337joy87">
                        <path d="M166.55,261a10,10,0,0,1,8,2c3.42,2.6,18,16,18,16s.4,7.09-7,11.31l-17.87-12.6Z"
                            style="opacity: 0.3; transform-origin: 179.552px 275.574px;" class="animable"></path>
                    </g>
                    <rect x="141.73" y="420.96" width="7.57" height="13.5"
                        style="fill: rgb(145, 79, 78); transform-origin: 145.515px 427.71px;" id="elkz3eqlp8gli"
                        class="animable"></rect>
                    <polygon points="167.98 420.24 175.55 420.51 175.93 406.22 167.98 405.95 167.98 420.24"
                        style="fill: rgb(145, 79, 78); transform-origin: 171.955px 413.23px;" id="elgttoksc876"
                        class="animable"></polygon>
                    <path
                        d="M140.66,304.07c0,7.53,1.11,68.14,1.11,68.14-.17,2.16-2.12,6.16-1.7,14.48.57,11.31,1.34,41,1.34,41a9.63,9.63,0,0,0,8.43.17s7.16-41.15,8.52-52.35c1.18-9.78,3.19-42.7,3.19-42.7l4.1,38.28a46.92,46.92,0,0,0-.94,12.53c.36,5.18,2.79,32.17,2.79,32.17a10,10,0,0,0,8.75.7s4.3-40.65,4.39-45.4c.1-5.42-2.52-67.12-2.52-67.12Z"
                        style="fill: rgb(55, 71, 79); transform-origin: 160.327px 366.359px;" id="elkdxdowfq6r"
                        class="animable"></path>
                    <path
                        d="M149.3,430.56v-1.12c.73.33,2.41,7,5.41,9.87,2.39,2.27,5.65,4.89,6.48,7.42s-4.54,4.08-6.77,3.67c-2.59-.48-7.09-2.38-8.21-4.14s-1.66-4.37-2.58-5.66-3-2.73-3.52-4.23a10,10,0,0,1,.43-4.14c.35-1.39.73-2.92,1.19-2.79v.86a5.88,5.88,0,0,0,3.79,1.33C146.62,431.67,149.31,431.44,149.3,430.56Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 150.665px 439.949px;" id="elzdatn4cjiz"
                        class="animable"></path>
                    <path
                        d="M175.63,418.08c.39,0,.71.59,1.58,1.57a16.6,16.6,0,0,0,4.45,3.33c2.84,1.48,8.35,3.76,10.85,4.93,1.56.73,1.48,2.69-.13,3.8s-5.5,1.92-10.17.84c-2.54-.6-5.86-3-8-2.91s-6,.1-7.57-1-.93-3.49-.49-5.52c.48-2.23,1.08-5.7,1.78-5.55v.77c.91,1.44,5.61,2,7.61,1Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 179.638px 425.312px;" id="elobfwm3v59q"
                        class="animable"></path>
                    <path d="M161.55,332.83a27.75,27.75,0,0,0,10.54-6.3s-2,4-8.08,7.66l1.29,34.19Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 166.82px 347.455px;" id="ellmnqr08ufnr"
                        class="animable"></path>
                    <path
                        d="M144.6,263s-5.92.54-5.5,11.83l1.31,18-.12,27c5.56,6.31,30.25,5.85,38.7-.51,0,0-.87-31.93-1.44-44.22-.41-8.73-2.42-13.13-11-14.09l-10.56.46Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 159.034px 292.672px;" id="elnvpuea35sqf"
                        class="animable"></path>
                    <g id="elhoc5tamcdu9">
                        <polygon points="161.43 268.92 162.79 278.4 165.96 278.34 162.38 278.9 161.43 268.92"
                            style="opacity: 0.3; transform-origin: 163.695px 273.91px;" class="animable"></polygon>
                    </g>
                    <path
                        d="M125.81,301.76c3.07-24.7,10.14-37,18.75-38.42l-.61,15.8a139.5,139.5,0,0,0-8.2,26.15c-1.13,6.08-2.44,16.65-2.1,21.84a3.88,3.88,0,0,0,1.1,2.43c1.7,1.73,2.21,3.23,3.35,5.18.9,1.53,1.82,2.07,1.58,2.44a1.91,1.91,0,0,1-2.64.34,14.35,14.35,0,0,1-2.46-2.21,15.64,15.64,0,0,0,1.24,6.87c2,4.16,1.68,6.35-3.9,5.12-3.5-.76-6-4.45-7-13.06a75.41,75.41,0,0,1-.17-9.66C125.13,316.35,125.2,306.7,125.81,301.76Z"
                        style="fill: rgb(145, 79, 78); transform-origin: 134.614px 305.49px;" id="el4ucifvk8ung"
                        class="animable"></path>
                    <path
                        d="M145.05,262.93c-4.47,0-8.55.77-11.8,7-3.11,6-5.5,18.69-6.71,22.84,0,0,6.53,3.86,12.54,3.76l4.23-14.68S146.17,275,145.05,262.93Z"
                        style="fill: rgb(23, 162, 255); transform-origin: 135.925px 279.731px;" id="elt7xn5l0fb0g"
                        class="animable"></path>
                    <g id="elq45g40kmgs">
                        <path
                            d="M145.05,262.93c-4.47,0-8.55.77-11.8,7-3.11,6-5.5,18.69-6.71,22.84,0,0,6.53,3.86,12.54,3.76l4.23-14.68S146.17,275,145.05,262.93Z"
                            style="opacity: 0.3; transform-origin: 135.925px 279.731px;" class="animable"></path>
                    </g>
                    <path d="M154.28,237.51a11.28,11.28,0,1,0,11.27-11.74A11.52,11.52,0,0,0,154.28,237.51Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 165.554px 237.05px;" id="el794lr3hbevy"
                        class="animable"></path>
                    <path d="M147.11,243.38s1.73,8.46,2.42,9.85a3.7,3.7,0,0,0,2.13,1.79l-.13-6Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 149.385px 249.2px;" id="elo95iqqxj5u"
                        class="animable">
                    </path>
                    <path d="M149.28,231.26S148,231,146.72,233c-1.13,1.76-1.38,5.72.39,10.37l3.25.39Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 148.093px 237.504px;" id="elht1vmbrgmol"
                        class="animable"></path>
                    <path
                        d="M151.34,243.77c-.65.41-1.58-.9-2.39-1.77s-3.43-2.08-4.74.8,1.15,6.81,3.22,7.48c3.57,1.17,4.1-1.22,4.1-1.22l.28,13.41c4.73,7.32,15.46,7.06,11.6-.36V258a21.79,21.79,0,0,0,4.81.26c2.62-.42,4.27-2.58,5.07-5.54,1.28-4.75,1.76-8.58.68-17.92-1.19-10.24-12.62-10.35-18.8-6.3S151.34,243.77,151.34,243.77Z"
                        style="fill: rgb(145, 79, 78); transform-origin: 159.205px 246.916px;" id="el95ob0e97gwi"
                        class="animable"></path>
                    <path
                        d="M151.75,259.46a17.15,17.15,0,0,0,4.63,5.81,13.23,13.23,0,0,0,5.61,2.39,12.46,12.46,0,0,0-4,4.44c-1.18,2.61-9.52-4.56-9.44-9.65,0,0,1.31-5.11,3.1-5.44Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 155.27px 264.832px;" id="elu9lq33f76bs"
                        class="animable"></path>
                    <path
                        d="M162,267.66s2.57-1.28,1.42-5.55V258l1.13.15a9.93,9.93,0,0,1,2.7,4.69c.26,1.17.9,7.09-.23,8.26S164.3,268,162,267.66Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 164.833px 264.651px;" id="elm8kvfpq6jg"
                        class="animable"></path>
                    <path
                        d="M151.34,244.92c-.33,0-1.58-2.15-2.39-2.92-1.13-1.07.33-10.74.33-10.74a4.74,4.74,0,0,1,1.08-4.89c1.55-1.77,4.13-2,8.53-2.68a46.05,46.05,0,0,0,5.22-.95,30.66,30.66,0,0,0,5.22-2.54,2.62,2.62,0,0,1,1.76-.4,1.71,1.71,0,0,1,1.13,1.28,5.25,5.25,0,0,1,0,1.77,2.87,2.87,0,0,1,4.05.14,4.14,4.14,0,0,1,.64,4.28,7.66,7.66,0,0,1-3,3.37c-5.53,3.74-12.06,2.7-18.26,2a1.55,1.55,0,0,0-.88.06c-1,.44-1.18,3.45-1.35,4.32C152.92,239.92,152.44,244.9,151.34,244.92Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 162.88px 232.349px;" id="elef9sveceaf"
                        class="animable">
                    </path>
                    <path d="M149.28,231.77l-3.94-2.21a2.13,2.13,0,0,1,3-1A2.51,2.51,0,0,1,149.28,231.77Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 147.432px 230.027px;" id="eldtx6y4cfxm4"
                        class="animable"></path>
                    <path
                        d="M163.4,258s-5.85-1.23-7.9-2.36a6.86,6.86,0,0,1-2.83-2.92,9.71,9.71,0,0,0,1.61,3.44c1.49,2,9.12,3.47,9.12,3.47Z"
                        style="fill: rgb(120, 55, 54); transform-origin: 158.035px 256.175px;" id="elpfom0nvm3td"
                        class="animable"></path>
                    <path d="M161.28,241.9a1.22,1.22,0,0,1-1.17,1.27,1.24,1.24,0,0,1-1.17-1.28,1.17,1.17,0,1,1,2.34,0Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 160.11px 241.945px;" id="elf2y870829ee"
                        class="animable"></path>
                    <path d="M159.27,236.82l-2.51,1.44a1.6,1.6,0,0,1,.58-2.08A1.38,1.38,0,0,1,159.27,236.82Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 157.929px 237.133px;" id="elvtigvkn0qj"
                        class="animable"></path>
                    <path d="M162.87,250.69l2.68,1.05a1.39,1.39,0,0,1-1.82.92A1.58,1.58,0,0,1,162.87,250.69Z"
                        style="fill: rgb(120, 55, 54); transform-origin: 164.166px 251.718px;" id="el59ip5rtbzr5"
                        class="animable"></path>
                    <path d="M173,238.22l-2.64-1.28a1.35,1.35,0,0,1,1.87-.75A1.62,1.62,0,0,1,173,238.22Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 171.735px 237.135px;" id="elhmjsa96vaul"
                        class="animable"></path>
                    <path
                        d="M171.27,241.9a1.18,1.18,0,1,1-2.35,0,1.21,1.21,0,0,1,1.17-1.26A1.23,1.23,0,0,1,171.27,241.9Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 170.095px 241.914px;" id="el9qi5d4f4p1"
                        class="animable"></path>
                    <polygon points="164.62 240.99 164.75 248.4 168.96 247.44 164.62 240.99"
                        style="fill: rgb(120, 55, 54); transform-origin: 166.79px 244.695px;" id="el23xi165idfg"
                        class="animable"></polygon>
                    <path
                        d="M159.47,238.84a2.93,2.93,0,0,0,0,5.86H160a2.93,2.93,0,0,0,0-5.86ZM156,241.77a3.5,3.5,0,0,1,3.46-3.53H160a3.53,3.53,0,0,1,0,7h-.53A3.49,3.49,0,0,1,156,241.77Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 159.535px 241.74px;" id="eltfazjcp01ug"
                        class="animable"></path>
                    <path
                        d="M170,238.84a2.93,2.93,0,0,0,0,5.86h.53a2.93,2.93,0,0,0,0-5.86Zm-3.46,2.93a3.5,3.5,0,0,1,3.46-3.53h.53a3.53,3.53,0,0,1,0,7H170A3.49,3.49,0,0,1,166.56,241.77Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 170.07px 241.74px;" id="elo2lxu7bs7jb"
                        class="animable">
                    </path>
                    <path
                        d="M163.42,241.07a2.29,2.29,0,0,1,1.83-.95,1.85,1.85,0,0,1,1.59.62l.47-.36a2.36,2.36,0,0,0-2.09-.85,2.82,2.82,0,0,0-2.3,1.23Z"
                        style="fill: rgb(38, 50, 56); transform-origin: 165.115px 240.293px;" id="el9jk4fnuou5n"
                        class="animable"></path>
                    <rect x="150.36" y="241.04" width="5.96" height="0.59"
                        style="fill: rgb(38, 50, 56); transform-origin: 153.34px 241.335px;" id="elexm3qx5q60l"
                        class="animable"></rect>
                </g>
                <defs>
                    <filter id="active" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                    </filter>
                    <filter id="hover" height="200%">
                        <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                        <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                        <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                        <feMerge>
                            <feMergeNode in="OUTLINE"></feMergeNode>
                            <feMergeNode in="SourceGraphic"></feMergeNode>
                        </feMerge>
                        <feColorMatrix type="matrix"
                            values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                        </feColorMatrix>
                    </filter>
                </defs>
            </svg>
        </div>
        <img data-aos="fade-up-left" class="item2" src="asscets/image/shape-5.svg" alt="">
    </section>
    <!-- section services -->
    <div class="services" id="services">
        <div class="titer_services">
            <div class="shape shape_left"></div>
            <div class="titel_div">
                <h2 class="titel_services">خدماتنا</h2>
                <span>الرئيسية</span>
            </div>
            <div class="shape shape_right"></div>
        </div>
        <div class="cards">
            <div class="card" data-aos="zoom-in-up">
                <div class="head_card">
                    <div class="domin">
                        مصمم جرافيك
                    </div>
                    <div class="name">
                        انوار بوريش
                    </div>
                </div>
                <div class="profile">
                    <img src="profiles/profile_2.png" alt="" class="profile_img">
                </div>
                <p class="description_profile">نا انوار اقدم خدمة انشاء مواقع
                    وتصميم ايضا</p>
                <a href="#" class="btn">لنعمل معا </a>
                <img src="asscets/image/blob.svg" alt="" class="blob">
                <img src="asscets/image/blob.svg" alt="" class="blob1">
                <img src="asscets/image/blob-haikei.svg" alt="" class="blob_solid">
            </div>
            <div class="card" data-aos="zoom-in-up">
                <div class="head_card">
                    <div class="domin">
                        مصمم جرافيك
                    </div>
                    <div class="name">
                        انوار بوريش
                    </div>
                </div>
                <div class="profile">
                    <img src="profiles/perfil_1.png" alt="" class="profile_img">
                </div>
                <p class="description_profile">نا انوار اقدم خدمة انشاء مواقع
                    وتصميم ايضا</p>
                <a href="#" class="btn">لنعمل معا </a>
                <img src="asscets/image/blob.svg" alt="" class="blob">
                <img src="asscets/image/blob.svg" alt="" class="blob1">
                <img src="asscets/image/blob-haikei.svg" alt="" class="blob_solid">
            </div>
            <div class="card" data-aos="zoom-in-up">
                <div class="head_card">
                    <div class="domin">
                        مصمم جرافيك
                    </div>
                    <div class="name">
                        انوار بوريش
                    </div>
                </div>
                <div class="profile">
                    <img src="profiles/perfil_1.png" alt="" class="profile_img">
                </div>
                <p class="description_profile">نا انوار اقدم خدمة انشاء مواقع
                    وتصميم ايضا</p>
                <a href="#" class="btn">لنعمل معا </a>
                <img src="asscets/image/blob.svg" alt="" class="blob">
                <img src="asscets/image/blob.svg" alt="" class="blob1">
                <img src="asscets/image/blob-haikei.svg" alt="" class="blob_solid">
            </div>
        </div>
        <!-- other services -->
        <div class="other_services">
            <div class="titer_services mt-3">
                <div class="shape shape_left"></div>
                <div class="titel_div">
                    <h2 class="titel_services ">اخرى</h2>
                </div>
                <div class="shape shape_right"></div>
            </div>
            <div class="cards_other_services">
                <div class="card_other_service" data-aos="zoom-in-up">
                    <div class="header_card_other">
                        <div class="cover">
                            <img src="asscets/image/domine img/project-img-5.jpg" alt="" class="cover_img">
                        </div>
                        <div class="profile_other_service">
                            <img src="asscets/image/profiles/profile_2.png" alt="">
                        </div>
                    </div>
                    <img src="asscets/image/shape-5.svg" alt="" class="shape_other_2">
                    <img src="asscets/image/blob.svg" alt="" class="shape_other">
                    <div class="card_body_other">
                        <h2>انوار بوريش</h2>
                        <p class="description_card_other_service">
                            انا حرفي في نجارة الالمينيوم و
                            جعل المنازل افخم وعصرية جداا
                        </p>
                        <a href="#" class="btn">لنعمل معا</a>
                    </div>
                    
                </div>
                <img src="asscets/image/shape-5.svg" alt="" class="shape_cards">
                <img src="asscets/image/shape-5.svg" alt="" class="shape_cards_1">
                <div class="card_other_service" data-aos="zoom-in-up"">
                    <div class="header_card_other">
                        <div class="cover">
                            <img src="asscets/image/domine img/project-img-4.jpg" alt="" class="cover_img">
                        </div>
                        <div class="profile_other_service">
                            <img src="asscets/image/profiles/profile_2.png" alt="">
                        </div>
                    </div>
                    <img src="asscets/image/shape-5.svg" alt="" class="shape_other_2">
                    <img src="asscets/image/blob.svg" alt="" class="shape_other">
                    <div class="card_body_other">
                        <h2> يونس ليكوس</h2>
                        <p class="description_card_other_service">
                            انا حرفي في نجارة الالمينيوم و
                            جعل المنازل افخم وعصرية جداا
                        </p>
                        <a href="#" class="btn">لنعمل معا</a>
                    </div>
                    
                </div>
                <div class="card_other_service" data-aos="zoom-in-up"">
                    <div class="header_card_other">
                        <div class="cover">
                            <img src="asscets/image/domine img/project-img-6.jpg" alt="" class="cover_img">
                        </div>
                        <div class="profile_other_service">
                            <img src="asscets/image/profiles/profile_2.png" alt="">
                        </div>
                    </div>
                    <img src="asscets/image/shape-5.svg" alt="" class="shape_other_2">
                    <img src="asscets/image/blob.svg" alt="" class="shape_other">
                    <div class="card_body_other">
                        <h2> امين كومال</h2>
                        <p class="description_card_other_service">
                            انا حرفي في نجارة الالمينيوم و
                            جعل المنازل افخم وعصرية جداا
                        </p>
                        <a href="#" class="btn">لنعمل معا</a>
                    </div>
                    
                </div>
            </div>
        </div> 
        <a href="#" class="btn big_btn"> المزيد</a>
    </div>
    <!-- section comment -->
    <div class="comments" id="comment">
        <div class="titel_comment">
            <h1>مراجعات المستخدمين</h1>
            <p class="description_comment">
                نحن نعرض فقط أفضل المواقع الإلكترونية والأرشيفات وصفحات الهبوط التي تم بناؤها بالكامل بشغف وبساطة وإبداع
            </p>
        </div>
        <div class="comment_cards">
            <div class="comment" data-aos="zoom-in-up">
                <div class="logo_img">
                    <img src="asscets/image/comments_img/elitemdf_logo.png" alt="" class="img_comment">
                </div>
                <p class="comment_content">
                    تجربة تسوق ممتازة، المنتجات عالية الجودة.
                </p>
                <div class="rating">
                    <div class="stars">
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="name_company">
                        ELITEMDF
                    </div>
                </div>
            </div>
            <div class="comment" data-aos="zoom-in-up">
                <div class="logo_img">
                    <img src="asscets/image/comments_img/elitemdf_logo.png" alt="" class="img_comment">
                </div>
                <p class="comment_content">
                    تجربة تسوق ممتازة، المنتجات عالية الجودة.
                </p>
                <div class="rating">
                    <div class="stars">
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="name_company">
                        ELITEMDF
                    </div>
                </div>
            </div>
            <div class="comment" data-aos="zoom-in-up">
                <div class="logo_img">
                    <img src="asscets/image/comments_img/elitemdf_logo.png" alt="" class="img_comment">
                </div>
                <p class="comment_content">
                    تجربة تسوق ممتازة، المنتجات عالية الجودة.
                </p>
                <div class="rating">
                    <div class="stars">
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="name_company">
                        ELITEMDF
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ecommerce section -->
     <section class="ecommerce" id="ecommerce">
        <div class="titer_services mt-3">
            <div class="shape shape_left"></div>
            <div class="titel_div">
                <h2 class="titel_services ">متجرنا</h2>
            </div>
            <div class="shape shape_right"></div>
        </div>
        <div class="cards_ecommerce">
        <?php

include('config.php');
$ruslte = mysqli_query($con, "SELECT * FROM prod");
while ($row = mysqli_fetch_array($ruslte)) {
    echo "

 <a href='pages/shop.php' class='link_card'>
                <div class='card_ecommerce' data-category='$row[category]'>
                    <div class='img_prudact'>
                        <img src='pages/$row[img]' alt=''>
                    </div>
                    <span class='new'>جديد</span>
                    <div class='body_card_ecommerce'>
                        <h3 class='name_prudact'>$row[name]</h3>
                        <div class='content_prudact'>
                            <span class='prix'>$row[price] MAD</span>
                            <span class='khasem'>$row[khasem]خصم</span>
                        </div>
                    </div>
                </div>
            </a>

";
}



?>
        </div>
        <a href="pages/shop.php" class="btn big_btn"> المزيد</a>
     </section>


    <!-- link js -->
    <script src="asscets/js/main.js"></script>
    <!-- link js libirary animi in scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>