<div class="modal fade filtering-modal" tabindex="-1" role="dialog" id="sorteringModal">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-body white-box" style="padding: 30px !important">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
			<h1>Sortering</h1>
			<ul class="sorter-filter">
				<li><a href="#" class="active">Siste</a></li>
				<li><a href="#">Eldste</a></li>
				<li><a href="#">Pris</a></li>
			</ul>
			<a href="" class="btn btn-primary" style="margin: auto; display: block;">Apply sorting</a>
		</div>
	  </div>
	</div>
</div>

<div class="modal fade filtering-modal" tabindex="-1" role="dialog" id="typeJobModal">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-body white-box" style="padding: 30px !important">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="far fa-times"></i></button>
			<h1>Type småjob</h1>

			<div class="filter-form mt-5 mb-4">
				<div class="accordion" id="accordionExample">
					<div class="filter-group">
						<div class="filter-title" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							<i class="fas fa-shipping-fast"></i> Transport <span>3</span>
							</button>
						</h2>
						</div>
						<div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="defaultCheck1" checked>
								<label for="defaultCheck1" class="form-check-label">Frakt</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="defaultCheck2" checked>
								<label for="defaultCheck2" class="form-check-label">Flytting</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="defaultCheck3" checked>
								<label for="defaultCheck3" class="form-check-label">Bortkjøring</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingTwo">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<i class="fas fa-broom"></i> Rengjøring
							</button>
						</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Husvask">
								<label for="Husvask" class="form-check-label">Husvask</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Flyttevask">
								<label for="Flyttevask" class="form-check-label">Flyttevask</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<i class="fas fa-seedling"></i> Hagearbeid
							</button>
						</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Planting">
								<label for="Planting" class="form-check-label">Planting og hagestell</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Graving">
								<label for="Graving" class="form-check-label">Graving og utearbeid</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-car"></i> Bil & Båt
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-hammer"></i> Oppussing  <span>1</span>
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-heart"></i> Personlig
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-graduation-cap"></i> Utdanning
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-laptop-code"></i> Data
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-ruler-combined"></i> Tekstil & søm
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-spa"></i> Velvære
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<i class="fas fa-glass-cheers"></i> Event
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
					<div class="filter-group">
						<div class="filter-title" id="headingThree">
						<h2 class="mb-0">
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<i class="fas fa-balance-scale-right"></i> Økonomi
							</button>
						</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="filter-body form-group">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Maling">
								<label for="Maling" class="form-check-label">Maling</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Snekring">
								<label for="Snekring" class="form-check-label">Snekring</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="Reparasjon">
								<label for="Reparasjon" class="form-check-label">Reparasjon og</label>
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="vedlikehold">
								<label for="vedlikehold" class="form-check-label">vedlikehold</label>
							</div>
						</div>
						</div>
					</div>
				</div>

			</div>

			<a href="" class="btn btn-primary" style="margin: auto; display: block;">Apply <span class="selected">3</span> filters</a>
		</div>
	  </div>
	</div>
</div>


<div class="modal fade filtering-modal" tabindex="-1" role="dialog" id="searchModal">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<form >
			<div class="form-group m-0">
				<label for="name">Search by name</label>
				<div class="input-group mb-2">
					<input type="text" name="name" class="form-control" placeholder="Search" autofocus>
					<div class="input-group-append">
						<div class="input-group-text"><i class="fal fa-search"></i></div>
					</div>
				</div>
			</div>
		</form>
	  </div>
	</div>
</div>