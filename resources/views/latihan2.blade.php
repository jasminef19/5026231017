<!DOCTYPE html>
<html>
<head>
    <title>Niall Horan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #94051c;
            font-family: 'Montserrat', sans-serif;
        }       
        .profile-container {
            text-align: center;
            flex-direction: column;
            display: flex;
        }
        .name-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }
        .social-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 12px;
            font-size: 180%;
        }
        .social-container a {
            color: white;
            margin: 0 10px;
        }
        .social-container a i {
            transition: transform 0.3s ease-in-out;
        }
        .social-container a:hover i {
            transform: scale(1.1);
        }
        .card-menu {
            background-color: #7d0016;
            border: none;
            border-radius: 10px;
            margin-bottom: 15px;
            color: white;
            transition: transform 0.2s, box-shadow 0.3s;
            height: 68px;
            width: 580px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 8px #760616;
        }
        .card-menu:hover {
            transform: scale(1.01);
            cursor: pointer;
            box-shadow: 0 8px 16px #760616;
        }
        .card-menu .vertical-ellipsis {
            position: relative;
            margin-right: 10px;
            margin-left: auto;
        }
        .card-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            margin: 10px;
        }
        .card-title {
            font-weight: 500;
            font-size: 16px;
            margin: 0;
            text-align: center;
            flex-grow: 1;
        }
        .dots-icon {
            color: white;
            font-size: 24px;
        }
        .main-card {
            color: white;
            font-weight: bold;
            margin-top: 3%;
        }
        .carousel-container {
            width: 580px;
            margin: 0 auto;
        }
        .carousel-card {
            background-color: #7d0016;
            border: none;
            border-radius: 10px;
            color: white;
            box-shadow: 0 4px 8px #760616;
            padding: 20px;
            overflow: hidden;
            height: 304px;
            width: 100%;
        }
        .merch-image {
            width: 100%;
            height: 160px;
            object-fit: contain;
        }
        .merch-title {
            text-align: center;
            width: 100%;
            margin-top: 2px;
        }
        .merch-title h6 {
            font-size: 12px; 
            line-height: 1.5; 
            margin: 0; 
            font-weight: 600; 
            color: white;
            width: 160px;
            text-align: center;
        }
        .list .card-body {
            padding: 0.3em 0; 
            width: 100%; 
            text-align: center; 
        }
        .card-body{
            padding: 0.5em 0 0.5em 0;
        }
        .list {
            scroll-snap-align: start;
            flex: 0 0 auto;
            width: 160px;
            margin-right: 15px;
        }
        .video-title-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            padding: 15px 20px;
            background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
            z-index: 2;
        }
        .video-title {
            color: white;
            font-size: 16px;
            font-weight: 500;
            margin-top: 110px;
            margin-left: 2px;
        }
        .video-wrapper {
            width: 580px;
            height: 326px;
            margin: 0 auto 5px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            margin-top: 10px;
            transition: 0.2s;
        }
        .video-wrapper:hover {
            transform: scale(1.01);
            cursor: pointer;
        }
        .video-thumbnail {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ded1d0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            padding: 20px;
            cursor: pointer;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            pointer-events: auto;
        }
        .video-wrapper:hover .play-button {
            transform: translate(-50%, -50%) scale(1.1);
        }
        .play-icon {
            margin-left: 3px;
            color: black;
            transition: 0.2s;
        }
        .video-wrapper:hover .play-icon {
            transform: scale(1.1);
        }
        .youtube-icon {
            position: absolute;
            top: 15px;
            right: 12px;
            color: white;
            font-size: 13px;
            opacity: 0.8;
            z-index: 2;
        }  
        .video-wrapper .vertical-ellipsis {
            position: absolute;
            bottom: 12px;
            right: 15px;
            z-index: 3;
        }    
        .vertical-ellipsis {
            font-size: 20px;
            color: white;
            cursor: pointer;
            font-weight: bold;
            pointer-events: auto;
            transition: color 0.05s ease;
            text-decoration: none !important;
            z-index: 10;
        }
        .vertical-ellipsis:hover {
            color: white; 
        }
        .vertical-ellipsis::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background-color: rgba(255, 255, 255, 0.1); 
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.05s ease, height 0.05s ease;
            z-index: -1; 
        }

        .vertical-ellipsis:hover::before {
            width: 25px; 
            height: 25px; 
        }
        .envelope-icon{
            font-size: 26px;
            margin-left: 15px;
        }
        .join-button {
            background-color: #e7c6c7;
            color: black;
            border-radius: 50px;
            font-weight: 550;
            gap: 8px;
            padding: 12px 16px;
            border: none;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            letter-spacing: -0.5px;
            margin-top: 20px;
            transition: background-color 0.2 ease;
            box-shadow: 0 4px 8px #760616;
        }
        .join-button:hover {
            background-color: white;
        }
        .icon-star {
            margin-right: 4px;
            width: 16px; 
            height: 16px;
            margin-bottom: 3px;
        }
        .custom-svg {
            position: relative;
            top: -10px; 
            right: 20px;
        }
        .custom-ellipsis {
            position: relative;
            top: -12px; 
            left: 10px;
            cursor: pointer;
            transition: color 0.05s ease;
            font-size: 20px;  
            font-weight: bold;  
            display: inline-block; 
            width: 25px; 
            height: 25px;
            text-align: center; 
            line-height: 24px;
            z-index: 1;
        } 
        .custom-ellipsis:hover {
            color: white; 
        }
        .custom-ellipsis::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.1s ease, height 0.1s ease;
            z-index: 0; 
            pointer-events: none;
        }
        .custom-ellipsis:hover::before {
            width: 25px; 
            height: 25px; 
        }
        .dot-circle {
            width: 40px;
            height: 40px;
            background-color: #6a141b;
            border-radius: 50%;
            color: white;
            font-size: 14px;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            margin-right: 245px;
        }
        .sticky-dot-menu {
            position: sticky;
            top: 0.8rem;
            display: flex;
            justify-content: flex-end;
            padding: 1rem;
            z-index: 10;
            transition: opacity 0.5s ease, transform 0.5s ease;
            opacity: 1;
            transform: translateY(0);
        }
        .sticky-dot-menu.fading {
            opacity: 0;
            transform: translateY(0);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .sticky-dot-menu.stopped {
            position: static;
            opacity: 0;
            pointer-events: none;
        }
        .carousel-nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: white;
            color: #7d0016;
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            z-index: 5;
            transition: background-color 0.3s ease, opacity 0.3s ease, transform 0.2s ease;
        }
        .carousel-nav-button:hover {
            transform: translateY(-50%) scale(1.1);
        }
        .carousel-nav-button:active, 
        .carousel-nav-button.pressed {
            transform: translateY(-50%) scale(0.95);
        }
        .carousel-prev {
            left: 10px;
            opacity: 0;
        }
        .carousel-next {
            right: 10px;
        }
        .merch-scroll-container {
            display: flex;
            overflow: hidden;
            scroll-behavior: smooth;
        }

    </style>
</head>
  

<body>
    <div class="container">
        <div class="container">
            <!-- Share Linktree -->
            <div class="sticky-dot-menu d-flex justify-content-end">
                <i class="fa-solid fa-ellipsis dot-circle"></i>
            </div>

            <!-- Profile Section -->
            <div id="profile-section" class="profile-container text-white d-flex flex-column align-items-center text-center mt-0">
                <img src="ppniall.webp" class="rounded-circle img-fluid" style="width: 96px;" alt="profile picture">
                <div class="name-container d-flex align-items-center">
                    <h5 class="mt-3 mr-1 font-weight-bold">Niall Horan</h5>
                    <img class="mt-2" src="verified.svg" alt="verified badge">
                </div>
                <h6 style="line-height: 1.5;">New album ‘The Show’ out now Get<br>tickets to The Show Live On Tour 2024</h6>
            </div>

            <!-- Social Media Links -->
            <div class="social-container d-flex flex-wrap justify-content-center">
                <a href="https://www.instagram.com/niallhoran" target="_blank" data-toggle="tooltip" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@niallhoran" target="_blank" data-toggle="tooltip" title="Tiktok">
                    <i class="fab fa-tiktok"></i>    
                </a>
                <a href="https://x.com/NiallOfficial" target="_blank" data-toggle="tooltip" title="X">
                    <i class="fa-brands fa-x-twitter"></i>    
                </a>
                <a href="https://www.youtube.com/channel/UCQcTX6rX7JhUpHg_T3STtoQ" target="_blank" data-toggle="tooltip" title="YouTube">
                    <i class="fab fa-youtube"></i>    
                </a>
                <a href="https://music.apple.com/us/artist/niall-horan/471260298" target="_blank" data-toggle="tooltip" title="Apple Music">
                    <i class="fas fa-music"></i>    
                </a>
                <a href="https://open.spotify.com/artist/1Hsdzj7Dlq2I7tHP7501T4" target="_blank" data-toggle="tooltip" title="Spotify">
                    <i class="fa-brands fa-spotify"></i>  
                </a>
            </div>
        </div>
          
        <!-- Menu Cards -->
        <div class="position-relative">
            <div class="card card-menu mt-4">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <img src="tourdate.webp" class="card-img" alt="Concert">
                    <h5 class="card-title text-center position-absolute w-100">Check Out Tour Dates</h5>
                    <div class="vertical-ellipsis mr-3 ml-auto">&#8942;</div>
                </div>
                <a href="https://www.bandsintown.com/a/1132190-niall-horan" target="_blank" data-toggle="tooltip"
                   class="stretched-link"></a>
            </div>

            <div class="card card-menu">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <img src="theshow.webp" class="card-img" alt="Concert">
                    <h5 class="card-title text-center position-absolute w-100">Listen "The Show"</h5>
                    <div class="vertical-ellipsis mr-3 ml-auto">&#8942;</div>
                </div>
                <a href="https://open.spotify.com/album/7CwQcswdSnPsSwQtskEmT4?si=dWFifInbRh2CG-rEooAaoQ&nd=1&dlsi=34035e6b0bda4699" 
                   target="_blank" data-toggle="tooltip" class="stretched-link"></a>
            </div>
        </div>

        <!-- Official Merch Title -->
        <div class="mt-4">
            <h6 class="main-card mx-auto text-center">Official Merch</h6>
        </div>

        <!-- Merch Carousel -->
        <div class="carousel-container mt-3 h-100">
            <div class="card carousel-card position-relative">
                
                <button class="carousel-nav-button carousel-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="carousel-nav-button carousel-next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

                <div class="row w-100 align-items-center m-2">
                    <div class="col-2 text-left">  
                        <div style="padding: 0; display: inline-block; border-radius: 10px;">
                            <svg class="custom-svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M 6.73 9.27 H 1 V 15 h 5.73 V 9.27 Z M 15 1 H 9.27 v 5.73 H 15 V 1 Z M 1 3.86 a 2.86 2.86 0 1 0 5.73 0 a 2.86 2.86 0 0 0 -5.73 0 Z M 9.27 12.14 a 2.86 2.86 0 1 0 5.73 0 a 2.86 2.86 0 0 0 -5.73 0 Z"
                                    fill="none" stroke="white"
                                    stroke-width="1"/>
                            </svg>
                          </div>                          
                    </div>
                    <div class="col-8 text-center"></div>
                    <div class="col-2 text-right" style="position: relative;">
                        <div class="custom-ellipsis">&#8942;</div>
                    </div>
                </div>

                <div class="merch-scroll-container overflow-auto" style="scrollbar-width: none;">
                    <a class="list ml-2" href="https://shop.niallhoran.com/collections/music/products/the-show-the-encore-hardcover-2lp-photo-book" style="text-decoration: none;">
                        <img src="merch1.webp" class="merch-image">
                        <div class="card-body merch-title">
                            <h6 class="m-0">The Show: The Encore -</h6>
                            <h6>Hardcover 2LP Photo...</h6>
                        </div>
                    </a>
                    <a class="list" href="https://shop.niallhoran.com/collections/music/products/the-show-the-encore-gatefold-2lp-vinyl" style="text-decoration: none;">
                        <img src="merch2.webp" class="merch-image">
                        <div class="card-body merch-title">
                            <h6 class="m-0">The Show: The Encore -</h6>
                            <h6>Gatefold 2LP Vinyl</h6>
                        </div>
                    </a>
                    <a class="list" href="https://shop.niallhoran.com/products/the-show-collectors-edition-window-box-set" style="text-decoration: none;">
                        <img src="merch3.webp" class="merch-image">
                        <div class="card-body merch-title">
                            <h6 class="m-0">The Show - Collector's</h6>
                            <h6>Edition Window Box Set</h6>
                        </div>
                    </a>
                    <a class="list" href="https://shop.niallhoran.com/products/the-show-diamond-crewneck-cd-box-set" style="text-decoration: none;">
                        <img src="merch4.webp" class="merch-image">
                        <div class="card-body merch-title">
                            <h6 class="m-0">The Show - Diamond</h6>
                            <h6>Crewneck + CD Box Set</h6>
                        </div>
                    </a>
                    <a class="list" href="https://shop.niallhoran.com/products/the-show-vinyl" style="text-decoration: none;">
                        <img src="merch5.webp" class="merch-image">
                        <div class="card-body merch-title">
                            <h6 class="m-0">The Show - Vinyl</h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Videos -->
        <div class="mt-4">
            <h6 class="main-card mx-auto text-center">Videos</h6>

            <div class="d-flex flex-column">
                <div class="video-wrapper" data-video="https://www.youtube.com/embed/muCl7tXmpc8">
                    <img src="videos1.webp" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="play-button">
                        <i class="fa-solid fa-play play-icon"></i>
                    </div>                    
                    <div class="youtube-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="vertical-ellipsis">&#8942;</div>
                    <div class="video-title-container">
                        <h6 class="video-title">Watch The Show</h6>
                    </div>
                </div>

                <div class="video-wrapper">
                    <img src="videos2.webp" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="play-button">
                        <i class="fa-solid fa-play play-icon"></i>
                    </div>
                    <div class="youtube-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="vertical-ellipsis">&#8942;</div>
                    <div class="video-title-container">
                        <h6 class="video-title">Watch Heaven</h6>
                    </div>
                </div>

                <div class="video-wrapper">
                    <img src="videos3.webp" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="vertical-ellipsis">&#8942;</div>
                    <div class="video-title-container">
                        <h6 class="video-title">Watch The Show (Live | Vevo Extended Play)</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- card paling bawah -->
        <div class="mt-5">
            <h6 class="main-card mx-auto text-center">Keep In Touch</h6>
            <div class="card card-menu mt-3 position-relative">
                <div class="position-relative d-flex align-items-center justify-content-center w-100" style="margin-top: 20px;">
                    <i class="fa-regular fa-envelope envelope-icon"></i>
                    <h5 class="card-title text-center position-absolute w-100">Sign Up For Updates</h5>
                    <div class="vertical-ellipsis mr-3 ml-auto">&#8942;</div>
                </div>
            </div>
        </div>

         <!-- join linktree -->
        <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 90px;">
            <button type="button" class="join-button">
                <svg class="icon-star" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 13.5108 5.85343 L 17.5158 1.73642 L 19.8404 4.11701 L 15.6393 8.12199 H 21.5488 V 11.4268 H 15.6113 L 19.8404 15.5345 L 17.5158 17.8684 L 11.7744 12.099 L 6.03299 17.8684 L 3.70842 15.5438 L 7.93745 11.4361 H 2 V 8.12199 H 7.90944 L 3.70842 4.11701 L 6.03299 1.73642 L 10.038 5.85343 V 0 H 13.5108 V 5.85343 Z M 10.038 16.16 H 13.5108 V 24.0019 H 10.038 V 16.16 Z" fill="black"/>
                </svg>
                Join niallhoran on Linktree
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stickyDotMenu = document.querySelector('.sticky-dot-menu');
            const profileSection = document.getElementById('profile-section');
            
            window.addEventListener('scroll', function() {
                const profileBottom = profileSection.getBoundingClientRect().bottom;
                const transitionZone = 50;
                
                if (profileBottom < -transitionZone) {
                    stickyDotMenu.classList.add('stopped');
                    stickyDotMenu.classList.add('fading');
                } else if (profileBottom < transitionZone) {
                    stickyDotMenu.classList.remove('stopped');
                    stickyDotMenu.classList.add('fading');
                } else {
                    stickyDotMenu.classList.remove('stopped');
                    stickyDotMenu.classList.remove('fading');
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const stickyDotMenu = document.querySelector('.sticky-dot-menu');
            const profileSection = document.getElementById('profile-section');
            
            window.addEventListener('scroll', function() {
                const profileBottom = profileSection.getBoundingClientRect().bottom;
                const transitionZone = 50;
                
                if (profileBottom < -transitionZone) {
                    stickyDotMenu.classList.add('stopped');
                    stickyDotMenu.classList.add('fading');
                } else if (profileBottom < transitionZone) {
                    stickyDotMenu.classList.remove('stopped');
                    stickyDotMenu.classList.add('fading');
                } else {
                    stickyDotMenu.classList.remove('stopped');
                    stickyDotMenu.classList.remove('fading');
                }
            });
            
            const merchContainer = document.querySelector('.merch-scroll-container');
            const merchItems = document.querySelectorAll('.list');
            const prevButton = document.querySelector('.carousel-prev');
            const nextButton = document.querySelector('.carousel-next');
            
            const itemWidth = merchItems[0].offsetWidth + 15; 
            
            const maxScrollLeft = merchContainer.scrollWidth - merchContainer.clientWidth;

            function slidePrev() {
                merchContainer.scrollBy({
                    left: -itemWidth,
                    behavior: 'smooth'
                });
            }
            
            function slideNext() {
                merchContainer.scrollBy({
                    left: itemWidth,
                    behavior: 'smooth'
                });
            }
            
            function updateButtonVisibility() {
                prevButton.style.opacity = merchContainer.scrollLeft <= 10 ? '0' : '1';
                prevButton.style.pointerEvents = merchContainer.scrollLeft <= 10 ? 'none' : 'auto';
                
                nextButton.style.opacity = merchContainer.scrollLeft >= maxScrollLeft - 10 ? '0' : '1';
                nextButton.style.pointerEvents = merchContainer.scrollLeft >= maxScrollLeft - 10 ? 'none' : 'auto';
            }

            prevButton.addEventListener('click', slidePrev);
            nextButton.addEventListener('click', slideNext);
            
            merchContainer.addEventListener('scroll', updateButtonVisibility);
            
            updateButtonVisibility();
            
            window.addEventListener('resize', function() {
                maxScrollLeft = merchContainer.scrollWidth - merchContainer.clientWidth;
                updateButtonVisibility();
            });
        });
    </script>
</body>
</html>
