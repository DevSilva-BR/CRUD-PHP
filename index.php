<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Home - Sistema Escola</title>
	<link href="style.css" rel="stylesheet" />
</head>

<body>
	<div class="menu-container">
		<ul class="menu clearfix">
			<li><a href="#">Aluno</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="aluno/cadastro.php">CADASTRO</a></li>
					<li><a href="aluno/ver.php">VISUALIZAR</a></li>
					
				</ul><!-- submenu -->
			</li>

			<li><a href="#">Turma Aluno</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="turmaAluno/cadastroTaluno.php">CADASTRO</a></li>
					<li><a href="turmaAluno/verTaluno.php">VISUALIZAR</a></li>
					<li>
						<p>ALTERAR</p>
						<form method="POST" action="turmaAluno/alterarTaluno.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Alterar" />
						</form>
					</li>
					<li>
						<p>EXCLUIR</p>
						<form method="POST" action="turmaAluno/deletarTaluno.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Excluir" />
						</form>
					</li>
				</ul><!-- submenu -->

			<li><a href="#">Turmas</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="turma/cadastroTurma.php">CADASTRO</a></li>
					<li><a href="turma/verTurma.php">VISUALIZAR</a></li>
					<li>
						<p>ALTERAR</p>
						<form method="POST" action="turma/alterarTurma.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Alterar" />
						</form>
					</li>
					<li>
						<p>EXCLUIR</p>
						<form method="POST" action="turma/deletarTurma.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Excluir" />
						</form>
					</li>
				</ul><!-- submenu -->

			<li><a href="#">Turma Professor</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="turmaProfessor/cadastroTprof.php">CADASTRO</a></li>
					<li><a href="turmaProfessor/verTprof.php">VISUALIZAR</a></li>
					<li>
						<p>ALTERAR</p>
						<form method="POST" action="turmaProfessor/alterarTprof.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Alterar" />
						</form>
					</li>
					<li>
						<p>EXCLUIR</p>
						<form method="POST" action="turmaProfessor/deletarTprof.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Excluir" />
						</form>
					</li>
				</ul><!-- submenu -->


			<li><a href="#">Professor</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="professor/cadastroProf.php">CADASTRO</a></li>
					<li><a href="professor/verProf.php">VISUALIZAR</a></li>
					<li>
						<p>ALTERAR</p>
						<form method="POST" action="professor/alterarProf.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Alterar" />
						</form>
					</li>
					<li>
						<p>EXCLUIR</p>
						<form method="POST" action="professor/deletarProf.php">
							<label>Código:<input type="text" name="codigo" /></label><br />
							<input type="submit" value="Excluir" />
						</form>
					</li>
				</ul><!-- submenu -->
			</li>

			<li><a href="#">Funcionário</a>
				<!-- Nível 1 -->
				<!-- submenu -->
				<ul class="sub-menu clearfix">
					<li><a href="funcionario/cadastroFun.php">CADASTRO</a></li>
					<li><a href="funcionario/verFun.php">VISUALIZAR</a></li>
					
				</ul><!-- submenu -->


			</li>
		</ul>
	</div>
	<h1>Bem vindo ao projeto CRUD!!!</h1>
	<h1>Por Favor escolha a opção desejada no menu acima!</h1>
</body>

</html>