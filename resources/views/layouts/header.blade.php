<header>
	<div class="row">
		<div class="parallax col-sm-12"></div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-lg">
		<a class="navbar-brand" href="{{ route('index') }}"><img width="40" src="{{ asset('storage/img/logo.svg') }}" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-xd" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-xd">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item fix-navbar">
					<a href="" class="nav-link text-white"><i class="fas fa-adjust"></i>
					</a>
				</li>
				<li class="nav-item fix-navbar">
					<a class="nav-link text-white" href="{{ route('index') }}">Publicaciones <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item fix-navbar">
					<a class="nav-link text-white" href="#">Ranking</a>
				</li>
				<li class="nav-item fix-navbar">
					<a class="nav-link text-white" href="#" data-toggle="modal" data-target="#login">Iniciar sesión</a>
					<!-- Login -->
					<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión 
					        	<i class="fas fa-exclamation-circle" data-toggle="tooltip" data-placement="bottom" title="Para solicitar una cuenta debes hablarlo con un moderador"></i>
					        </h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text"><i class="fas fa-user"></i></span>
									  </div>
									  <input type="text" class="form-control" placeholder="Usuario">
									</div>
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text"><i class="fas fa-key"></i></span>
									  </div>
									  <input type="password" class="form-control" placeholder="Contraseña">
									</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					        <button type="button" class="btn btn-outline-dark">Ingresar</button>
					      </div>
					    </div>
					  </div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white"><button class="btn btn-outline-light" data-toggle="modal" data-target="#registrarme">Registrarme</button></a>
					<!-- Register -->
					<div class="modal fade" id="registrarme" tabindex="-1" role="dialog" aria-labelledby="registrarme" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Registrarme 
					        	<i class="fas fa-exclamation-circle" data-toggle="tooltip" data-placement="bottom" title="Para solicitar una cuenta debes hablarlo con un moderador"></i>
					        </h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
									  </div>
									  <input type="text" class="form-control" placeholder="Código">
									</div>
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text"><i class="fas fa-user"></i></span>
									  </div>
									  <input type="text" class="form-control" placeholder="Usuario">
									</div>
									<div class="row">
										<div class="input-group mb-3 col-md-12 col-lg-6 register-passwords">
										  <div class="input-group-prepend">
										    <span class="input-group-text"><i class="fas fa-key"></i></span>
										  </div>
										  <input type="password" class="form-control" placeholder="Contraseña">
										</div>
										<div class="input-group mb-3 col-md-12 col-lg-6 register-passwords">
										  <div class="input-group-prepend">
										    <span class="input-group-text"><i class="fas fa-key"></i></span>
										  </div>
										  <input type="password" class="form-control" placeholder="Repetir contraseña">
										</div>
									</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					        <button type="button" class="btn btn-outline-dark">Registrarme</button>
					      </div>
					    </div>
					  </div>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	</header>