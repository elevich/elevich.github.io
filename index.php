<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Eli Levich Portfolio</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<link href="Content/bootstrap.min.css" rel="stylesheet" />
	<script src="Scripts/jquery-1.9.1.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>

	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	<script src="https://kit.fontawesome.com/a34315b2dd.js" crossorigin="anonymous"></script>

</head>
	<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- Header -->
			<header id="header">
				<div class="logo">
					<i class="fas fa-leaf fa-2xl"></i>
				</div>
				<div class="content">
					<div class="inner">
						<h1>Hi, I'm Eli Levich</h1>
						<p>I want to design solutions that make people's lives easier</p>
					</div>
				</div>
				<nav>
					<ul id="menuMain">
						<li><a href="#about">About</a></li>
						<li><a href="#resume">Resume</a></li>
						<li><a href="#projects">Projects</a></li>
						<li><a href="#contact">Contact</a></li>
						<!--<li><a href="#elements">Elements</a></li>-->
					</ul>
				</nav>
			</header>

			<!-- Main -->
			<div id="main">


				<!-- About -->
				<article id="about">
					<h2 class="major">About</h2>
					<span class="image main"><img src="images/Eli-Levich.jpg" alt="Picture of Eli Levich" style="float:left;margin-right:20px;width:250px;height:250px;" /></span>
					<p>Eli Levich is a software developer seeking entry-level opportunities near Olympia, Tacoma, and Seattle, WA. Eli began studying software development in 2020 and will graduate from his associate program in November 2022.</p>
					<p>In 2020, Eli decided to make a career change from his background in customer service. At his previous position as the Continuing Education Specialist for GoodTherapy, he facilitated many online web conferences and provided customer service for subscribers to the company’s website. As Eli communicated with customers and relayed their concerns and suggestions to GoodTherapy’s programming team, he became curious about how programmers devised and implemented solutions for these issues.</p>
					<p>Eli has maintained a cumulative GPA of 3.7 in his associate program while learning many technologies and programming languages. He has gained experience using technologies including IDEs such as Visual Studio, HTML, CSS, DOM, MVC model, .NET framework, PowerShell, and Microsoft Office. Eli has learned to use languages including C#, JavaScript, SQL, and XML. Eli has also completed coursework in software maintenance, mobile application development, business information systems, requirements analysis, cybersecurity concepts, rich internet applications, web application development, and programming business objects.</p>
					<p>Whether it’s an internal system for a business or applications that people use outside of work, nothing is more frustrating than a program that is poorly designed or difficult to use. Eli wants to apply his programming skills to creating and improving software that works so well that the average person doesn’t wonder why it works, it just works. </p>
				</article>

				<!-- Resume -->
				<article id="resume">
					<h2 class="major">Resume</h2>
					<div align="center" style="width:100%; height:600px">
						<embed style="width:80%; height:100%" src="documents/EliLevichResume.pdf" type="application/pdf" />
					</div>
				</article>

				<!-- Projects -->
				<article id="projects">
					<h2 class="major">Projects</h2>
					<div align="center">
						<button class="btn" onclick="document.location='#tDLMain'"><i class="fa-solid fa-list-check fa-xl"></i> To Do List </button>
					</div>
					<!--<div align="center">
					<button class="btn" onclick="document.location='#bugTracker'"><i class="fa-solid fa-bug fa-xl"></i> Bug Tracker </button>
					</div>
					<div align="center">
						<button class="btn"><i class="fa-solid fa-pen-to-square fa-xl"></i> Blog </button>
					</div>-->
				</article>

				<!-- To Do List -->
				<article id="tDLMain" class="toDoListMain">
					<div id="tDLHeader" class="toDoListHeader">
						<h2>My To Do List</h2>
						<input type="text" id="myInput" placeholder="New item...">
						<span onclick="newElement()" class="addBtn">Add</span>
					</div>

					<ul id="tDLItem" class="toDoListItem">
						<li>Go to the gym</li>
						<li>Pay electric bill</li>
						<li>Call Emily</li>
						<li>Buy milk</li>
						<li>Organize kitchen</li>
					</ul>
				</article>


				<!--To Do List JavaScript-->
				<script>
					// Create a "close" button and append it to each list item
					var myNodelist = document.querySelectorAll("#tDLItem li");
					var i;
					for (i = 0; i < myNodelist.length; i++) {
						var span = document.createElement("SPAN");
						var txt = document.createTextNode("\u00D7");
						span.className = "close";
						span.appendChild(txt);
						myNodelist[i].appendChild(span);
					}

					// Click on a close button to hide the current list item
					var close = document.getElementsByClassName("close");
					var i;
					for (i = 0; i < close.length; i++) {
						close[i].onclick = function () {
							var div = this.parentElement;
							div.style.display = "none";
						}
					}

					// Add a "checked" symbol when clicking on a list item
					var list = document.querySelector('#tDLItem');
					list.addEventListener('click', function (ev) {
						if (ev.target.tagName === 'LI') {
							ev.target.classList.toggle('checked');
						}
					}, false);

					// Create a new list item when clicking on the "Add" button
					function newElement() {
						var li = document.createElement("li");
						var inputValue = document.getElementById("myInput").value;
						var t = document.createTextNode(inputValue);
						li.appendChild(t);
						if (inputValue === '') {
							alert("Please add text and try again.");
						} else {
							document.getElementById("tDLItem").appendChild(li);
						}
						document.getElementById("myInput").value = "";

						var span = document.createElement("SPAN");
						var txt = document.createTextNode("\u00D7");
						span.className = "close";
						span.appendChild(txt);
						li.appendChild(span);

						for (i = 0; i < close.length; i++) {
							close[i].onclick = function () {
								var div = this.parentElement;
								div.style.display = "none";
							}
						}
					}
				</script>

				<!--Bug Tracker-->
				<!--<article id="bugTracker">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<h2>Paul's Training Company</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<table id="productTable"
								   class="table table-bordered
				  table-condensed table-striped">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Introduction Date</th>
										<th>URL</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<button type="button"
									id="addButton"
									class="btn btn-primary"
									onclick="addClick();">
								Add Product
							</button>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									Product Information
								</div>
								<div class="panel-body">
								</div>
								<div class="panel-footer">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="productname">Product Name</label>
						<input type="text" id="productname" class="form-control" />
					</div>
					<div class="form-group">
						<label for="introdate">Introduction Date</label>
						<input type="date" id="introdate" class="form-control" />
					</div>
					<div class="form-group">
						<label for="url">URL</label>
						<input type="url" id="url" class="form-control" />
					</div>

					<div class="row">
						<div class="col-xs-12">
							<button type="button"
									id="updateButton"
									class="btn btn-primary"
									onclick="updateClick();">
								Add
							</button>
						</div>
					</div>

				</article>-->
				
				<!--Bug tracker JavaScript-->
				<!--<script>

				</script>-->

				<!-- Contact Form -->
				<article id="contact">
					
					<?php

					session_start();

					$errors = [];
					$inputs = [];

					$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

					if ($request_method === 'GET') {

						// show the message
						if (isset($_SESSION['message'])) {
							$message = $_SESSION['message'];
							unset($_SESSION['message']);
						} elseif (isset($_SESSION['inputs']) && isset($_SESSION['errors'])) {
							$errors = $_SESSION['errors'];
							unset($_SESSION['errors']);
							$inputs = $_SESSION['inputs'];
							unset($_SESSION['inputs']);
						}
						// show the form
						require_once __DIR__ . '/inc/get.php';
					} elseif ($request_method === 'POST') {
						// check the honeypot and validate the field
						require_once __DIR__ . '/inc/post.php';

						if (!$errors) {
							// send an email
							require_once __DIR__ . '/inc/mail.php';
							// set the message
							$_SESSION['message'] =  'Thanks for contacting us! We will be in touch with you shortly.';
						} else {
							$_SESSION['errors'] =   $errors;
							$_SESSION['inputs'] =   $inputs;
						}

						header('Location: index.php', true, 303);
						exit;
					}
					?>
					
					<!--<h2 class="major">Contact</h2>-->
					<!--Icons-->
					<!--<ul class="icons">
						<li><a href="https://www.linkedin.com/in/eli-levich/" class="icon brands fa-linkedin"></a></li>
						<li><a href="https://www.facebook.com/eli.levich/" class="icon brands fa-facebook-f"></a></li>
						<li><a href="https://github.com/elevich" class="icon brands fa-github"></a></li>
					</ul>-->

					<!--  Stack How To Contact Form -->
					<!--<form name="myForm" action="/file.php" onsubmit="return validateForm()" method="post">
						<table class="form-style">
							<tr>
								<td>
									<label>
										Your name <span class="required">*</span>
									</label>
								</td>
								<td>
									<input type="text" name="name" class="long" />
									<span class="error" id="errorname"></span>
								</td>
							</tr>
							<tr>
								<td>
									<label>
										Your email address <span class="required">*</span>
									</label>
								</td>
								<td>
									<input type="email" name="email" class="long" />
									<span class="error" id="erroremail"></span>
								</td>
							</tr>
							<tr>
								<td>
									<label>
										Message <span class="required">*</span>
									</label>
								</td>
								<td>
									<textarea name="message" class="long field-textarea"></textarea>
									<span class="error" id="errormsg"></span>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" value="Send">
									<input type="reset" value="Reset">
								</td>
							</tr>
						</table>
					</form>-->



					<!--HTML5 Template Contact Form-->
					<!--<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="message">Message</label>
								<textarea name="message" id="message" rows="4"></textarea>
							</div>
						</div>
						<div class="actions">
							<input type="submit" value="Send Message" class="primary" />
							<input type="reset" value="Reset" />
						</div>
					</form>-->
				</article>

				<!-- Stack How To Contact Form JavaScript -->
				<!--<script>
					function validateForm() {
						var name = document.forms["myForm"]["name"];
						var email = document.forms["myForm"]["email"];
						var message = document.forms["myForm"]["message"];

						if (name.value == "") {
							document.getElementById('errorname').innerHTML = "Please enter a valid name";
							name.focus();
							return false;
						} else {
							document.getElementById('errorname').innerHTML = "";
						}

						if (email.value == "") {
							document.getElementById('erroremail').innerHTML = "Please enter a valid email address";
							email.focus();
							return false;
						} else {
							document.getElementById('erroremail').innerHTML = "";
						}

						if (email.value.indexOf("@", 0) < 0) {
							document.getElementById('erroremail').innerHTML = "Please enter a valid email address";
							email.focus();
							return false;
						}

						if (email.value.indexOf(".", 0) < 0) {
							document.getElementById('erroremail').innerHTML = "Please enter a valid email address";
							email.focus();
							return false;
						}

						if (message.value == "") {
							document.getElementById('errormsg').innerHTML = "Please enter a valid message";
							message.focus();
							return false;
						} else {
							document.getElementById('errormsg').innerHTML = "";
						}

						return true;
					}
				</script>-->

				<!--Elements
				<article id="elements">
					<h2 class="major">Elements</h2>

					<section>
						<h3 class="major">Text</h3>
						<p>
							This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.
						</p>
						<hr />
						<h2>Heading Level 2</h2>
						<h3>Heading Level 3</h3>
						<h4>Heading Level 4</h4>
						<h5>Heading Level 5</h5>
						<h6>Heading Level 6</h6>
						<hr />
						<h4>Blockquote</h4>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
						<h4>Preformatted</h4>
						<pre><code>i = 0;

								while (!deck.isInOrder()) {
								print 'Iteration ' + i;
								deck.shuffle();
								i++;
								}

								print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
					</section>

					<section>
						<h3 class="major">Lists</h3>

						<h4>Unordered</h4>
						<ul>
							<li>Dolor pulvinar etiam.</li>
							<li>Sagittis adipiscing.</li>
							<li>Felis enim feugiat.</li>
						</ul>

						<h4>Alternate</h4>
						<ul class="alt">
							<li>Dolor pulvinar etiam.</li>
							<li>Sagittis adipiscing.</li>
							<li>Felis enim feugiat.</li>
						</ul>

						<h4>Ordered</h4>
						<ol>
							<li>Dolor pulvinar etiam.</li>
							<li>Etiam vel felis viverra.</li>
							<li>Felis enim feugiat.</li>
							<li>Dolor pulvinar etiam.</li>
							<li>Etiam vel felis lorem.</li>
							<li>Felis enim et feugiat.</li>
						</ol>
						<h4>Icons</h4>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						</ul>

						<h4>Actions</h4>
						<ul class="actions">
							<li><a href="#" class="button primary">Default</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions stacked">
							<li><a href="#" class="button primary">Default</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
					</section>

					<section>
						<h3 class="major">Table</h3>
						<h4>Default</h4>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<h4>Alternate</h4>
						<div class="table-wrapper">
							<table class="alt">
								<thead>
									<tr>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Item One</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Two</td>
										<td>Vis ac commodo adipiscing arcu aliquet.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Three</td>
										<td> Morbi faucibus arcu accumsan lorem.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>Item Four</td>
										<td>Vitae integer tempus condimentum.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>Item Five</td>
										<td>Ante turpis integer aliquet porttitor.</td>
										<td>29.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>

					<section>
						<h3 class="major">Buttons</h3>
						<ul class="actions">
							<li><a href="#" class="button primary">Primary</a></li>
							<li><a href="#" class="button">Default</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button">Default</a></li>
							<li><a href="#" class="button small">Small</a></li>
						</ul>
						<ul class="actions">
							<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
							<li><a href="#" class="button icon solid fa-download">Icon</a></li>
						</ul>
						<ul class="actions">
							<li><span class="button primary disabled">Disabled</span></li>
							<li><span class="button disabled">Disabled</span></li>
						</ul>
					</section>

					<section>
						<h3 class="major">Form</h3>
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<label for="demo-name">Name</label>
									<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
								</div>
								<div class="field half">
									<label for="demo-email">Email</label>
									<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
								</div>
								<div class="field">
									<label for="demo-category">Category</label>
									<select name="demo-category" id="demo-category">
										<option value="">-</option>
										<option value="1">Manufacturing</option>
										<option value="1">Shipping</option>
										<option value="1">Administration</option>
										<option value="1">Human Resources</option>
									</select>
								</div>
								<div class="field half">
									<input type="radio" id="demo-priority-low" name="demo-priority" checked>
									<label for="demo-priority-low">Low</label>
								</div>
								<div class="field half">
									<input type="radio" id="demo-priority-high" name="demo-priority">
									<label for="demo-priority-high">High</label>
								</div>
								<div class="field half">
									<input type="checkbox" id="demo-copy" name="demo-copy">
									<label for="demo-copy">Email me a copy</label>
								</div>
								<div class="field half">
									<input type="checkbox" id="demo-human" name="demo-human" checked>
									<label for="demo-human">Not a robot</label>
								</div>
								<div class="field">
									<label for="demo-message">Message</label>
									<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send Message" class="primary" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</form>
					</section>

					</article>-->

			</div>

			 <!--Footer--> 
			<footer id="footer">
				<p class="copyright">&copy; Eli Levich 2022. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
			</footer>

		</div>

		 <!--BG--> 
			<div id="bg"></div>

		 <!--Scripts--> 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
