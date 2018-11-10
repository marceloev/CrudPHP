<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="/download.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="/css/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<script type="text/javascript" src="/js/sis-table.js"></script>
		<script type="text/javascript" src="/js/home.js"></script>
		<script type="text/javascript" src="/js/function.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	</head>
	<body onload="loadTableData('#tableProdutos');">
		<div class="row">
			<div id="root" class="col-12">
				<div class="card">
					<div class="card-header">
						<ul class="list-inline form-row py-0">
							<li class="list-inline-item">
								<h3></h3>>Lista de Produtos</h3>
							</li>
							<li class="list-inline-item">
								<button class="float-right btn">Deslogar</button>
							</li>
						</ul>
					</div>
					<div class="card-body div-table">
						<div class="offset-10">
							<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#new-product-form">
							<i class="fas fa-plus"></i>
							Adicionar
							</button>
							<button type="button" class="btn btn-outline-primary">
							<i class="fas fa-list-ul"></i>
							Categorias
							</button>
						</div>
						<hr>
						<table id="tableProdutos" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Descrição</th>
									<th>Marca</th>
									<th>Categoria</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($produto->codigo); ?></td>
									<td><?php echo e($produto->descricao); ?></td>
									<td><?php echo e($produto->marca); ?></td>
									<td><?php echo e($produto->categoria); ?></td>
								</tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="new-product-form" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center" style="width: 100%;">Cadastrar Novo Produto</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<hr>
					<div class="modal-body">
						<div class="form-group">
							<div class="form-row">
								<label class="sis-required col-md-2 col-4 text-center" for="descrprod">Descrição: </label>
								<input type="text" name="descrprod" id="descrprod" class="form-control col-md-10 col-8" maxlength="50">
							</div>
							<div class="form-row">
								<label class="sis-required col-md-2 col-4 text-center">Marca: </label>
								<input type="text" name="marca" id="marca" class="form-control col-md-10 col-8">
							</div>
							<div class="form-row">
								<label class="sis-required col-md-2 col-4 text-center">Categoria: </label>
								<select class="form-control col-md-10 col-8" id="ctgprod" name="ctgprod">
									<option>1</option>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-success" onclick="sendNewProduto();">Salvar</button>
						<button class="btn btn-outline-danger" class="close" data-dismiss="modal">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
