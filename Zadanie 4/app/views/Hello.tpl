{extends file="indexView.tpl"}

{block name=main}
				<section id="banner">
					<div class="content">
						<header>
							<h2>Siłownia Sharks</h2>
							<p>Najlepsza siłownia na śląsku!</p>
						</header>
						<span class="image"><img src="{$conf->app_url}/img/logo.jpg" alt="" /></span>
					</div>
					<a href="#onas" class="goto-next scrolly">Next</a>
				</section>
			
				<section id="onas" class="spotlight style1 bottom">
					<span class="image fit main"><img src="{$conf->app_url}/img/gym.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>O SIŁOWNII</h2>
										<p>Poznaj naszą siłownie sharks!</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Siłownia zlokalizowana jest przy ul. Sienkiewicza 55 w Katowicach.
                                                                        Obiekt rozpoczął działalność 15 lutego 2022 r. Jego powierzchnia wynosi
                                                                        800 m², i można w nim znależć wiele nowoczesnych maszyn treningowych,
                                                                        gdzie każdy klient znajdzie coś dla siebie, i aktywnie spędzi ten czas.
                                                                        </p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Znakiem charakterystycznym wnętrz jest styl modern a w nim m.in.
                                                                        nowoczesne barwy - niebieska, biała, zółta. Oprócz wyrazistych kolorów
                                                                        nie zabrakło w nim również elementów geometrycznych, wzorzystych tapet i
                                                                        neonów. Warto równiez wspomnieć, iż miejsca parkingowe są zapewnione w
                                                                        cenie karnetu!
                                                                        </p>
								</div>
							</div>
						</div>
					</div>
					<a href="#cennik" class="goto-next scrolly">Next</a>
				</section>
				<section id="cennik" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>CENNIK</h2>
							<p>Zapoznaj się z ofertą naszych karnetów</p>
						</header>
							<div class="row gtr-uniform">
								<div class="col-4 col-12-xsmall">
                                                                    <h3>KARNET OPEN</h3>
                                                                    <table class="table-wrapper">
                                                                        <tbody>
                                                                        <tr><td>Brak opłaty rejestracyjnej</td></tr>
                                                                        <tr><td>Nielimitowane wejścia do siłowni</td></tr>
                                                                        <tr><td>Nielimitowane wejścia na zajęcia fitness</td></tr>
                                                                        <tr><td>Aktywny 24/7h</td></tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr><td><h3>Cena: 149zł</h3></td></tr>
                                                                    </tfoot>
                                                                    </table>
								</div>
								<div class="col-4 col-12-xsmall">
                                                                    <h3>KARNET STUDENT</h3>
                                                                    <table class="table-wrapper">
                                                                        <tbody>
                                                                        <tr><td>Brak opłaty rejestracyjnej</td></tr>
                                                                        <tr><td>Jedno wejście w ciągu dnia do siłowni</td></tr>
                                                                        <tr><td>Jedno wejście w ciągu dnia na zajęcia fitness</td></tr>
                                                                        <tr><td>Aktywny do 16:00 dla uczniów i studentów</td></tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr><td><h3>Cena: 119zł</h3></td></tr>
                                                                    </tfoot>
                                                                    </table>
								</div>
								<div class="col-4 col-12-xsmall">
                                                                    <h3>KARNET SENIOR</h3>
                                                                    <table class="table-wrapper">
                                                                        <tbody>
                                                                        <tr><td>Brak opłaty rejestracyjnej</td></tr>
                                                                        <tr><td>Jedno wejście w ciągu dnia do siłowni</td></tr>
                                                                        <tr><td>Jedno wejście w ciągu dnia na zajęcia fitness</td></tr>
                                                                        <tr><td>Aktywny do 16:00 dla osób 60+</td></tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr><td><h3>Cena: 99zł</h3></td></tr>
                                                                    </tfoot>
                                                                    </table>
								</div>
							</div>

					</div>
				</section>
                                <section id="newsletter" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Zapisz się do newslettera!</h2>
							<p>Zapisz się już dziś, i otrzymuj wiadomości o nowościach i wydarzeniach.</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Twój adres e-mail" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Zapisz się" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section> 
                                <section id="kontakt" class="wrapper style1 special fade-up">
						<header class="major">
							<h2>SKONTAKTUJ SIĘ Z NAMI</h2>
						</header>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2551.2033252255624!2d19.019791215890685!3d50.25078670961227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce4e83856a3f%3A0xf87ee354449ba1b7!2sSienkiewicza%2055%2C%2040-031%20Katowice!5e0!3m2!1sen!2spl!4v1674699069178!5m2!1sen!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <p>Siłownia Sharks Sp. z.o.o, ul. Sienkiewicza 55, 40-031 Katowice</p>
                                    <p>+ 48 123 456 789</p> 
									<p>silownia@sharks.pl</p>
				</section>        
{/block}

{block name=content}
<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Siłownia Sharks. Wszystkie prawa zastrzeżone.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
                                                        </div>
				</footer>
{/block}