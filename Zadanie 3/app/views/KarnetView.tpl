{extends file="indexView.tpl"}

{block name=main}
    				<section class="wrapper style1 special fade-up">
                                    <form action="{$conf->action_root}karnet" method="post" class="searchForm">
					<div class="container">
						<header class="major">
							<h2>ZAMÓW KARNET</h2>
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
                                                                            <tr><td><button type="submit" name="open" class="button primary fit" value="open">KUP TERAZ</button></td></tr>
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
                                                                            <tr><td><button type="submit" name="student" class="button primary fit" value="student">KUP TERAZ</button></td></tr>
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
                                                                            <tr><td><button type="submit" name="senior" class="button primary fit" value="senior">KUP TERAZ</button></td></tr>
                                                                    </tfoot>
                                                                    </table>
								</div>
							</div>
					</div>
                                    </form>
				</section>
{/block}

{block name=content}
{/block}