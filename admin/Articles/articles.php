<section class="content">
      <!-- Small boxes (Stat box) -->
    <div class="row">
		<div class="col-md-6">
		    <div class="box box-warning">
		        <div class="box-header with-border">
		          	<h3 class="box-title">Dodawanie artykułów</h3>
		        </div>
		        <!-- /.box-header -->
		        <div class="box-body">
		          	<form role="form" method="POST" action="?controller=artykuly&action=article_store">
		                <!-- text input -->
		                <div class="form-group">
		                  <label>Tytuł</label>
		                  <input type="text" class="form-control" placeholder="Podaj tytuł artykułu" name="subject">
		                </div>
		                <!-- data input -->

		                <!-- textarea -->
		                <div class="form-group">
		                  <label>Opis</label>
		                  <textarea class="form-control" rows="3" placeholder="Podaj treść artykułu" name="content"></textarea>
		                </div>
				    	<div class="box-footer">

		            		<button type="reset" class="btn btn-warning btn-md">Wyczyść</button>

		            		<button type="submit" class="btn btn-success btn-md pull-right">Dodaj artykuł</button>

		            	</div>
		        	</form>
		        </div>
		    </div>
		</div>

	<div class="col-md-6">
	    <div class="box">
        	<div class="box-header">
	            <h3 class="box-title">Aktualności</h3>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
	              	<table class="table">
	                	<tr>
			                <th style="width: 10px">#id</th>
			                <th>Temat</th>
			                <th>Treść</th>
			                <th style="width: 40px">Edycja</th>
	                	</tr>
	                	<?php foreach($db->get() as $tab) : ?>
	                	<tr>
		                  	<td><?php echo $tab['id']; ?></td>
		                  	<td><?php echo $tab['title']; ?></td>
		                  	<td><?php echo $tab['content']; ?></td>
		                 	<td>
		                 	<button type="" class="btn btn-warning btn-xs" style="width: 45px">Edytuj</button>
		                 	<a href="?controller=artykuly&action=article_delete&id=<?php echo $tab['id']; ?>" class="btn btn-danger btn-xs" style="width: 45px">Usuń</a>
		                 	</td>
	                	</tr>
	                	<?php endforeach; ?>
	               	</table>
	            </div>
	        </div>
		</div>
	</div>
</div>


</section>