<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	@include('includes.common')
    <!-- Document Title
    ============================================= -->
    <title>{{ $page_title }}</title>
    <style type="text/css">
    #content {
    	background: url(/img/login_bg.jpg) repeat left top;
    }
    .login-cont {
    	position: relative;
    	width: 900px;
    	margin: 0px auto;
    	min-height: 1000px;
    }
    .floaters {
    	position: absolute;
    	height: 650px;
    }
    .floaters.left {
    	left: 0px;
    	margin-left: -300px
    }
    .floaters.right {
    	right: 0px;
    	margin-right: -300px
    }
    .logo-login {
    	margin: 20px 0px;
    }
    .video-form {
    	float: left;
    	width: 40%;
    	padding: 2px 10px;
    	margin: 0px;
    }
    .right-benefits {
    	float: left;
    	width: 60%;
    	margin: 0px;
    }
    .login-form-cont {
    	width: 900px;
    	overflow: hidden;
    	margin: 0px auto
    }
    .right-benefits h2 {
    	background: #23ca00;
    	text-align: center;
    	text-shadow: 0 1px 1px #121212;
    	color: #fff;
    	font-weight: 600;
    	margin: 0px;
    	font-size: 40px;
    }
    .benefits {
    	overflow: hidden;
    	background: #fff;
    	text-align: center;
    }
    .benefits-list {
    	 list-style-image: url('/img/list.png');
    	 width: 70%;
    	 margin: 10px auto;
    }
    .benefits-list li {
    	font-size: 23px;
    	font-weight: 600;
    	text-align: left;
    }
    .checkbox label {
    	color: #fff;
    }
    .btn:hover {
    	color: #ccc;
    }
    .join {
    	width: 85%;
    	display: block;
    	margin: 10px auto;
    	padding: 10px;
    	border: 1px solid #000;
    	color: #fff;
    	text-shadow: 0 1px 1px #121212;
    	font-size: 40px;
		background: #7b7c7b; /* Old browsers */
		background: -moz-linear-gradient(top,  #7b7c7b 0%, #3b3b3b 50%, #1a1a1a 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #7b7c7b 0%,#3b3b3b 50%,#1a1a1a 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #7b7c7b 0%,#3b3b3b 50%,#1a1a1a 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7b7c7b', endColorstr='#1a1a1a',GradientType=0 ); /* IE6-9 */
    }
    .login {
    	width: 100%;
    	display: block;
    	margin: 10px auto;
    	padding: 10px;
    	border: 1px solid #000;
    	color: #fff;
    	text-shadow: 0 1px 1px #121212;
    	font-size: 30px;
		background: #01630c; /* Old browsers */
		background: -moz-linear-gradient(top,  #01630c 0%, #1aab05 65%, #2bda00 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(top,  #01630c 0%,#1aab05 65%,#2bda00 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to bottom,  #01630c 0%,#1aab05 65%,#2bda00 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#01630c', endColorstr='#2bda00',GradientType=0 ); /* IE6-9 */
    }
    .video-form p a {
    	color: #149907;
    	font-size: 12px;
    }
    @media (max-width: 928px) {
    	.login-form-cont,
    	.login-cont,
    	.video-form,
    	.right-benefits {
    		width: 100%;
    		padding-left: 15px;
    		padding-right: 15px;
    		margin: 0px auto;
    		height: auto;
    	}
    	.right-benefits {
    		padding: 0px;
    	}
    	.right-benefits h2 {
    		font-size: 22px;
    	}
    	.benefits-list li {
		    font-size: 15px;
		}
		.join {
			font-size: 20px;
		}
    }
    </style>
</head>

<body class="stretched no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

    	<section id="content">
    		<div class="login-cont">
    			<img class="floaters left" src="{{ asset('/img/model-left-login.png') }}">
    			<img class="floaters right"  src="{{ asset('/img/model-right-login.png') }}">
    			<div class="text-center logo-login">
    				<img src="{{ asset('img/lh-logo.png') }}" class="img-responsive center-block">
    			</div>
    			<div class="row login-form">
    				<div class="login-form-cont">
    					<div class='video-form'>
    						<form>
    							<p>User Information</p>
    							<div class="form-group">
    								<input type="text" name="user" class="form-control" placeholder="Username">
    								<input type="password" name="password" class="form-control" placeholder="Password">
    								<input type="text" name="code" class="form-control" placeholder="Enter Code Below">
    								<img src="{{ asset('/img/captcha.png') }}" class="img-responsive center-block">
    								<p class="captcha-action">
    									<a href="javascript:;" class="pull-left">Try Another</a>
    									<a href="javascript:;" class="pull-right">Help</a>
    								</p>
    							</div>

    							<div class="checkbox">
    								<label>
    									<input type="checkbox"> Remember me
    								</label>
    							</div>
    							<button type="submit" class="btn login">Log In</button>
    						</form>
    					</div>
    					<div class="right-benefits">
    						<h2>NOT A MEMBER YET?</h2>
    						<div class="benefits">
	    						<ul class="benefits-list">
	    							<li>Daily New HD Scene Updates </li>
	    							<li>Huge HD video library</li>
	    							<li>Huge HQ photo library</li>
	    							<li>1000’s of Top Pornstars</li>
	    							<li>Unlimited Streaming and Downloads</li>
	    						</ul>
	    						<a href="{{ url('join') }}" class="btn join">JOIN NOW!</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>

    </div><!-- #wrapper end -->

</body>
</html>
