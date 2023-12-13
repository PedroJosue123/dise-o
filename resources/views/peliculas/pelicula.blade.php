@extends('layouts.app')

@section('content')



<head >
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Movflx - Online Movies &amp; TV Shows Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/animate.min.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/magnific-popup.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/owl.carousel.min.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/flaticon.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/odometer.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/aos.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/slick.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/default.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/style.css">
  <link rel="stylesheet" href="https://themebeyond.com/html/movflx/css/responsive.css">
  <style type="text/css">
    @font-face {
      font-family: Roboto;
      src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
    }
  </style>
</head>
<body style="background-color: black;">

        <main>

            <!-- movie-details-area -->
            <section  data-background="https://www.shutterstock.com/image-photo/black-clapperboard-clap-board-movie-600nw-2169459103.jpg"
             style="background-image: url(&quot;https://www.shutterstock.com/image-photo/black-clapperboard-clap-board-movie-600nw-2169459103.jpg&quot;); padding-top: 120px;">
                <div class="container" style="">
                    <div class="row align-items-center position-relative" >
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                                <img  width="320" height="450" src="/pelicula/{{$pelicula->ruta}}" alt="">
                                <a class="popup-video"  type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><img width="100" src="https://cdn-icons-png.flaticon.com/512/11226/11226935.png" alt=""></a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <iframe width="870" height="500" src="https://www.youtube.com/embed/_6XzJPyAJDI" frameborder="0" allowfullscreen></iframe>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                                <h5>Estreno</h5>
                                <h2>{{$pelicula->titulo}}<span></span></h2>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span>{{$pelicula->restriccion}}</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a href="#">{{$pelicula->genero}}</a>
                                            <a href="#">Drama</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> 2021</span>
                                            <span><i class="far fa-clock"></i> {{$pelicula->duracion}} min</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$pelicula->sinopsis}}</p>
                                <div class="movie-details-prime">
                                    <ul>
                                        <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                        <li class="streaming">
                                            <h6>Prime Video</h6>
                                            <span>Streaming Channels</span>
                                        </li>
                                        <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="movie-details-btn">
                            <a href="img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg" style="background-image: url(&quot;img/bg/episode_bg.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">ONLINE STREAMING</span>
                                        <h2 class="title">Watch Full Episode</h2>
                                    </div>
                                    <div class="total-views-count">
                                        <p>2.7 million <i class="far fa-eye"></i></p>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="season">Season 2</span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <span class="season">Season 1</span>
                                                    <span class="video-count">5 Full Episodes</span>
                                                </button>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 1 - The World Is Purple</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 2 - Meaner Than Evil</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 3 - I Killed a Man Today</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 4 - Cowboys and Dreamers</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span>
                                                        </li>
                                                        <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><i class="fas fa-play"></i> Episode 5 - Freight Trains and Monsters</a> <span class="duration"><i class="far fa-clock"></i> 28 Min</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="episode-img">
                                <img src="img/images/episode_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="movie-history-wrap">
                                <h3 class="title">About <span>History</span></h3>
                                <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                                Ipsum available, but the majority have suffered alteration in some injected humour.There are many variations of passages
                                of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
                                words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything errassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of
                                over 200 Latin words, combined with a handful</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- episode-area-end -->

            <!-- tv-series-area -->
            <section class="tv-series-area tv-series-bg" data-background="img/bg/tv_series_bg02.jpg" style="background-image: url(&quot;img/bg/tv_series_bg02.jpg&quot;);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-50">
                                <span class="sub-title">La mejores peliculas</span>
                                <h2 class="title">Otras Peliculas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/pelicula/{{$pelicula->ruta}}"></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">Women's Day</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/pelicula/{{$pelicula->ruta}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Perfect Match</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">4k</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/pelicula/{{$pelicula->ruta}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Dog Woof</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="movie-item mb-50">
                                <div class="movie-poster">
                                    <a href="movie-details.html"><img src="/pelicula/{{$pelicula->ruta}}" alt=""></a>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">The Easy Reach</a></h5>
                                        <span class="date">2021</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">hd</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tv-series-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg" style="background-image: url(&quot;img/bg/newsletter_bg.jpg&quot;);">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required="" placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="index.html">Movie</a></li>
                                            <li><a href="index.html">tv show</a></li>
                                            <li><a href="index.html">pages</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                        <div class="footer-search">
                                            <form action="#">
                                                <input type="text" placeholder="Find Favorite Movie">
                                                <button><i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="quick-link-list">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2021. All Rights Reserved By <a href="index.html">Movflx</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="payment-method-img text-center text-md-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    

<script>
		function returnCommentSymbol(language = "javascript") {
			const languageObject = {
				bat: "@REM",
				c: "//",
				csharp: "//",
				cpp: "//",
				closure: ";;",
				coffeescript: "#",
				dockercompose: "#",
				css: "/*DELIMITER*/",
				"cuda-cpp": "//",
				dart: "//",
				diff: "#",
				dockerfile: "#",
				fsharp: "//",
				"git-commit": "//",
				"git-rebase": "#",
				go: "//",
				groovy: "//",
				handlebars: "",
				hlsl: "//",
				html: "<!--DELIMITER-->",
				ignore: "#",
				ini: ";",
				java: "//",
				javascript: "//",
				javascriptreact: "//",
				json: "//",
				jsonc: "//",
				julia: "#",
				latex: "%",
				less: "//",
				lua: "--",
				makefile: "#",
				markdown: "<!--DELIMITER-->",
				"objective-c": "//",
				"objective-cpp": "//",
				perl: "#",
				perl6: "#",
				php: "<!--DELIMITER-->",
				powershell: "#",
				properties: ";",
				jade: "//-",
				python: "#",
				r: "#",
				razor: "<!--DELIMITER-->",
				restructuredtext: "..",
				ruby: "#",
				rust: "//",
				scss: "//",
				shaderlab: "//",
				shellscript: "#",
				sql: "--",
				svg: "<!--DELIMITER-->",
				swift: "//",
				tex: "%",
				typescript: "//",
				typescriptreact: "//",
				vb: "'",
				xml: "<!--DELIMITER-->",
				xsl: "<!--DELIMITER-->",
				yaml: "#"
			}
			if(!languageObject[language]){
				return languageObject["python"].split("DELIMITER")
			}
			return languageObject[language].split("DELIMITER")
		}
		var savedChPos = 0
		var returnedSuggestion = ''
		let editor, doc, cursor, line, pos
		pos = {line: 0, ch: 0}
		var suggestionsStatus = false
		var docLang = "python"
		var suggestionDisplayed = false
		var isReturningSuggestion = false
		document.addEventListener("keydown", (event) => {
		setTimeout(()=>{
			editor = event.target.closest('.CodeMirror');
			if (editor){
				const codeEditor = editor.CodeMirror
				if(!editor.classList.contains("added-tab-function")){
					editor.classList.add("added-tab-function")
					codeEditor.removeKeyMap("Tab")
					codeEditor.setOption("extraKeys", {Tab: (cm)=>{

						if(returnedSuggestion){
							acceptTab(returnedSuggestion)
						}
						else{
							cm.execCommand("defaultTab")
						}
					}})
				}
				doc = editor.CodeMirror.getDoc()
				cursor = doc.getCursor()
				line = doc.getLine(cursor.line)
				pos = {line: cursor.line, ch: line.length}

				if(cursor.ch > 0){
					savedChPos = cursor.ch
				}

				const fileLang = doc.getMode().name
				docLang = fileLang
				const commentSymbol = returnCommentSymbol(fileLang)
				if (event.key == "?"){
					var lastLine = line
					lastLine = lastLine.slice(0, savedChPos - 1)

					if(lastLine.trim().startsWith(commentSymbol[0])){
						if(fileLang !== "null"){
							lastLine += " "+ fileLang
						}
						
						lastLine = lastLine.split(commentSymbol[0])[1]
						window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
						isReturningSuggestion = true
						displayGrey("\nBlackbox loading...")
					}
				}else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
					var query = doc.getRange({ line: Math.max(0,cursor.line-50), ch: 0 }, { line: cursor.line, ch: line.length })
					window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang, cursorPos: pos } } )
					displayGrey("Blackbox loading...")
				}else if(event.key === "ArrowRight" && returnedSuggestion){
					acceptTab(returnedSuggestion)
				}else if(event.key === "Enter" && isReturningSuggestion){
					displayGrey("\nBlackbox loading...")
				}else if(event.key === "Escape"){
					displayGrey("")
				}
			}
		}, 0)
		})

		function acceptTab(text){
		if (suggestionDisplayed){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		}
		function acceptSuggestion(text){
			displayGrey("")
			doc.replaceRange(text, pos)
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		}
		function displayGrey(text){
			if(!text){
				document.querySelector(".blackbox-suggestion").remove()
				return
			}
			var el = document.querySelector(".blackbox-suggestion")
			if(!el){
				el = document.createElement('span')
				el.classList.add("blackbox-suggestion")
				el.style = 'color:grey'
				el.innerText = text
			}
			else{
				el.innerText = text
			}
			
			var lineIndex = pos.line;
			editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
		}
		function updateSuggestionStatus(s){
			suggestionDisplayed = s
			window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
		}
		window.addEventListener('message', (event)=>{
		if (event.source !== window ) return
		if (event.data.source == 'return'){
			isReturningSuggestion = false
			const formattedCode = formatCode(event.data.payload.data)
			returnedSuggestion = formattedCode
			displayGrey(formattedCode)
			updateSuggestionStatus(true)
		}
		if(event.data.source == 'suggestReturn'){
			const prePos = event.data.payload.cursorPos
			if(pos.line == prePos.line && pos.ch == prePos.ch){
				returnedSuggestion = event.data.payload.data
				displayGrey(event.data.payload.data)
				updateSuggestionStatus(true)
			}
			else{
				displayGrey()
			}
		}
		if(event.data.source == 'codeSearchReturn'){
			isReturningSuggestion = false
			displayGrey()
		}
		if(event.data.source == 'suggestionsStatus'){
			suggestionsStatus = event.data.payload.enabled
		}
		if(event.data.source == 'acceptSuggestion'){
			
			acceptSuggestion(event.data.suggestion)
		}
		})
		document.addEventListener("keyup", function(){
			returnedSuggestion = ""
			updateSuggestionStatus(false)
		})
		function formatCode(data) {
			if (Array.isArray(data)) {
				var finalCode = ""
				var pairs = []
		
				const commentSymbol = returnCommentSymbol(docLang)
				data.forEach((codeArr, idx) => {
					const code = codeArr[0]
					var desc = codeArr[1]
					const descArr = desc.split("\n")
					var finalDesc = ""
					descArr.forEach((descLine, idx) => {
						const whiteSpace = descLine.search(/\S/)
						if (commentSymbol.length < 2 || idx === 0) {
							finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
						}
						if (commentSymbol.length > 1 && idx === descArr.length - 1) {
							finalDesc = finalDesc + commentSymbol[1] + "\n"
						}
					})
		
					finalCode += finalDesc + "\n\n" + code
					pairs.push(finalCode)
				})
				return "\n"+pairs.join("\n")
			}
		
			return "\n"+data
		}
		
		function insert(str, index, value) {
			return str.substr(0, index) + value + str.substr(index)
		}
	</script></body>
@endsection