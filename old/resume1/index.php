<?php
$name = "Casey Fritsch";
$postition = "Full Stack Developer"; // "Front End Developer";
$phone = "301-257-7287";
$email = "caseyfritsch@gmail.com";
$skills = array( "JavaScript", "React","Redux","Ruby", "Ruby on Rails", "SQL", "SCSS", "HTML", "CSS", "PHP", "Git","Java");
$social = array("LinkedIn"=>"linkedin.com/in/casey-fritsch", "GitHub"=>"github.com/cfritsch5");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Casey Fritsch | Full Stack Developer | caseyfritsch@gmail.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="full-stack, web development, web-developer, hire-me" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>
<div id="back">
	<div id="topbackg"></div>
	<div id="sidebackg"></div>
</div>
<div id="doc2" class="yui-t7">
	<div id="inner">

		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $name; ?></h1>
					<h2><?php echo $postition ?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3 id="pdflink"><a id="pdf" href="javascript:window.print()">Print PDF</a></h3>
						<h3><a href="https://www.<?php echo $social['LinkedIn'] ?>"><?php echo $social['LinkedIn'] ?></a></h3>
						<h3><a href="mailto:<?php echo $email ?>"><?php echo $email?></a></h3>
						<h3><a href="https://www.<?php echo $social['GitHub'] ?>"><?php echo $social['GitHub']?></a></h3>
						<h3><?php echo $phone ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">
					<div class="side">
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
<!--
						<?php
							for($i = 0 ; $i < count($skills); $i = $i + count($skills)/8){
								?>
								<ul class="talent">
									<?php
									for($j = $i ; $j <  -1 + $i + count($skills)/8; $j++){
										if($j === $i + count($skills)/8 - 1){
											echo "<li class='last'>$skills[$j]</li>";
										} else {
											echo "<li>$skills[$j]</li>";
										}
									}
									?>
								</ul>
								<?php
							}
						?>
						</div> -->
						<ul class="talent">
						<?php
						 	for($i = 0 ; $i < count($skills); $i++){
								echo "<li>$skills[$i]</li>";
							}
						?>
					</ul>
					</div><!--// .yui-gf-->
				</div> <!-- side -->
				<div class="side"> <!-- side -->
					<div class="yui-gf">

						<div class="yui-u first">
							<h2>Projects</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="project">
								<h2>MathPath</h2>
								<h3>Full stack web application built with Ruby on Rails, React, and Redux allowing students to easily learn elementary math concepts</h3>
								<h4 class="weblinks">
									<a href="http://www.mathpath.rocks">Live</a>
									|
									<a href="https://github.com/cfritsch5/MathPath">Git</a>
								</h4>
								<h4 class="printlinks">
									www.mathpath.rocks
									|
									github.com/cfritsch5/MathPath
								</h4>
								<ul>
									<li>Structured the component hierarchy to enable users to reliably navigate the lesson plan progression</li>
									<li>Designed content package that leads students from fundamental concepts to advanced exercises</li>
									<li>Achieved consistent user experience by tracking lesson progress in the Postgres database and saving their work </li>
								</ul>
							</div>

							<div class="project">
								<h2>Shelffaux</h2>
								<h3>Interactive 3D bookshelf allowing users to experience unique book browsing built in HTML, JavaScript, &amp; CSS</h3>
								<h4 class="weblinks">
									<a href="https://github.com/cfritsch5/shelffaux">Live</a>
									|
									<a href="http://www.shelffaux.pro ">Git</a>
								</h4>
								<h4 class="printlinks">
									www.shelffaux.pro
									|
									github.com/cfritsch5/shelffaux
								</h4>
								<ul>
									<li>Designed intuitive UX/UI that reminds users of actually browsing a bookshelf</li>
									<li>Ensured images were always displayed in perspective by dynamically updating the transformation algorithm</li>
									<li>Leveraged mouse event listeners to create responsive animations </li>
									<li>Implemented Bubble Sort to achieve special 3d effects while sorting</li>
								</ul>
							</div>

							<div class="project last">
								<h2>StreakLog (In Progress)</h2>
								<h3>Ruby on Rails, React Native, and Redux - Personal Accountability Logger</h3>
								<h4 class="weblinks">
									<a href="http://www.streaklog.club/">Live</a>
									|
									<a href="https://github.com/cfritsch5/streaklog">Git</a>
								</h4>
								<h4 class="printlinks">
									www.streaklog.club
									|
									github.com/cfritsch5/streaklog
								</h4>
								<ul>
									<li>Dynamically set user timezones by utilizing the browser api to post user dependant information to the back end </li>
									<li>Designed back end for cross platform deployment in React and React Native resulting in flexible and portable user interface </li>
									<li></li>
								</ul>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->

					<div class="yui-gf">

						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>City Year</h2>
								<h3>Americorps Volunteer</h3>
								<h4>2015-2016</h4>
								<p>Mentored at risk students teaching four daily Algebra support
									lessons, and leading environmental beautification projects </p>
							</div>

							<div class="job">
								<h2>Illinois Institute of Technology</h2>
								<h3>Resident Advisor</h3>
								<h4>2012-2015</h4>
								<p>Proposed, planned, and implemented monthly community
									development programming, and safe space programming for 150
									residents and 70 staff members</p>
							</div>

							<div class="job last">
								<h2>Illinois Institute of Technology</h2>
								<h3>Teaching Assistant - Computer Science for Engineers</h3>
								<h4>2014-2014</h4>
								<p>Led weekly group lab sessions of up to 30 students and
									bi-weekly individual and group tutoring sessions on the Matlab
									language and core computer science concepts from variables to
									computational results</p>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<div class="job">
								<h2>Illlinois Institute of Technology</h2>
								<h4>2015</h4>
								<h3>Mechanical Engineering</h3>
							</div>
						</div>
						<div class="yui-u last">
							<div class="job last">
								<h2>App Academy</h2>
								<h4>2017</h4>
								<h3>Full Stack Software Engineering</h3>
								<p>Highly selective program accepts &lt;3% of applicants. 1000 hours of programming experience</p>
							</div>
						</div>
					</div><!--// .yui-gf -->
				</div>  <!-- side -->

				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->
	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>
