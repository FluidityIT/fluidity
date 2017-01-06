<?php include('inc/head.php') ?>
<?php include('inc/header.php') ?>

<main class="page-wrapper page-wrapper--index">
	<div class="page-section section--hero" id="index">
		<div class="row">
			<div class="column small-12 column-relative medium-up">
				<h1>experience it.</h1>
			</div>
			<div class="column small-12 small-only">
				<h1>exper-<br />ience<br />it.</h1>
			</div>
			<div class="column small-12 medium-8 medium-offset-4 large-6 column-absolute">
				<div class="text-wrap">
					<p class="text--large">Fluidity is a new brand from Invona delivering managed technology services for small businesses.</p>
					<p class="text--large">Based in Brighton, UK, we're ready to look after your web, IT and social media. Daniel McNaught, founder of Invona Ltd has recently launched Fluidity as a new brand to tackle common challenges that small businesses often face when using technology. He has over 20 years experience supporting IT in businesses and is a keen creative who cares a lot about branding.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="page-section section--services" id="services">
		<div class="row">
			<div class="column medium-6 large-7">
				<div id="branding" class="services--text text--branding show">
					<p>However much you believe in branding, we believe that technology is the engine behind good branding.</p>
					<p>We work with our own team as well as branding partners to make you look good, and show off what makes you you.</p>
					<p>No matter if you're a one-man-band, or a team of 25, we're keen to get to know what makes you tick, and ensure that your image and the technology behind it all line up.</p>
				</div>
				<div id="design" class="services--text text--design hidden">
					<p>Good design is fundamental to how you are perceived, and also gives you confidence in how you come across</p>
					<p>Alongisde branding, we pride ourselves in working with excellent designers to help create and shape your web and digital services.</p>
					<p>We're happy to keep your online presence up-to-date and fresh with tweaks as well as complete redesigns of logos, websites and other projects.</p>
				</div>
				<div id="development" class="services--text text--development hidden">
					<p>Technology should be fun to use and make businesses fly.</p>
					<p>Websites, apps and other more bespoke software can cost a small fortune. We mix it in with our wider portfolio of services where possible and provide more accessible development services, while being careful to watch the quality of our work.</p>
					<p>Web development is a key focus for the Fluidity brand, so get in touch if you're interested in a fresh website design.</p>
				</div>
				<div id="social" class="services--text text--social hidden">
					<p>Social Media is a must for any business wanting to engage with it's customers online</p>
					<p>It can be expensive to outsource your social media. We aim to deliver a basic level of social media and content marketing to keep your brand visibility up.</p>
					<p>You have enough to think about running your business, let us help make social media happen without breaking the bank.</p>
				</div>
				<div id="services" class="services--text text--cloud hidden">
					<p>We make running your business in the cloud efficient and secure so doing business can be a breeze.</p>
					<p>Fluidity can manage and support many cloud services including Office 365, G-Suite (previously Google Apps), DropBox, CrashPlan, Spanning allowing you to get on a benefit from them.</p>
					<p>Cloud services usually end up being far more cost effective than running your own infrastructure.</p>
				</div>
				<div id="support" class="services--text text--support hidden">
					<p>Support for devices running Windows, Macs, iOS or Android as well as servers and networks is all the norm for us.</p>
					<p>We enjoy working closely with our customers (most of the time!) to ensure you can work efficiently. We're also known for talking your language, so you'll be able to understand us!</p>
					<p>Some of our customers are technophobes, and others are technophiles. We work with both.</p>
				</div>
			</div>
			<div class="column medium-6 large-5">
				<div class="nav nav--services">
					<ul>
						<li id="branding" class="current">branding</li>
						<li id="design">design</li>
						<li id="development">development</li>
						<li id="social">social</li>
						<li id="services">cloud services</li>
						<li id="support">it support</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-section section--about" id="about">
		<div class="row">
			<div class="column small-12 medium-4">
				<div class="profile">
					<div class="profile__image">
						<img src="assets/images/daniel.jpg" alt="" />
					</div>
					<h3>daniel</h3>
					<div class="profile__details">
						<h4>Director /<br /> IT Consultant</h4>
						<h4><a href="https://twitter.com/danielmaczero">@danielmaczero</a></h4>
						<h4>Brighton, UK</h4>
					</div>
					<p>I've been working in IT for over 20 years, and had a lot of fun along the way. In the evenings you might find me playing in the odd open-mic in Brighton.</p>
				</div>
			</div>
			<div class="column small-12 medium-4">
				<div class="profile">
					<div class="profile__image">
						<img src="assets/images/benjamin.jpg" alt="" />
					</div>
					<h3>benjamin</h3>
					<div class="profile__details">
						<h4>Head of<br /> Web Services</h4>
						<h4><a href="https://twitter.com/benjaminhollway">@benjaminhollway</a></h4>
						<h4>Brighton, UK</h4>
					</div>
					<p>I think I was born online. At least, with the speed of my coding and how much I love making things look rad, you might think so!</p>
				</div>
			</div>
			<div class="column small-12 medium-4">
				<div class="profile">
					<div class="profile__image">
						<img src="https://irp-cdn.multiscreensite.com/a58fce7e/dms3rep/multi/desktop/yohaan%20on%20white-960x959.jpg" alt="" />
					</div>
					<h3>yohaan</h3>
					<div class="profile__details">
						<h4>executive<br /> assistant</h4>
						<h4><a href="https://fluidity.it">fluidity.it</a></h4>
						<h4>Brighton, UK</h4>
					</div>
					<p>I make Fluidity happen. Without me the picture falls apart. I'm amazing!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="page-section section--contact" id="contact">
		<div class="row">
			<div class="column small-12 large-4 column-absolute">
				<span>&#8599;</span>
				<h2>get in touch</h2>
			</div>
			<div class="column large-7">
				<form class="form form--contact" method="POST" action="send-form.php" name="message-form">
					<div class="input--wrap">
						<label>name *<input class="input input--text" type="text" name="name" placeholder="john doe" required/></label>
					</div>
					<div class="input--wrap">
						<label>email *<input class="input input--email" type="email" name="email" placeholder="john@domain.com" required/></label>
					</div>
					<div class="input--wrap">
						<label>phone <input class="input input--text" type="text" name="number" placeholder="+44 (0)00000 000000"/></label>
					</div>
					<div class="input--wrap">
						<label>message *<textarea class="input input--textarea" name="message" placeholder="your message" required></textarea></label>
					</div>
					<input type="submit" class="btn btn--primary" value="submit">
				</form>
				<p class="form-response">Thank you for your message, we'll be in touch with you shortly.</p>
			</div>
		</div>
	</div>
</main>

<?php include('inc/footer.php') ?>