<?php 
include_once "header.php";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dersler</li>
			</ol>
        </div><!--/.row-->
        <div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">Dersler</h3>
			</div>
		</div><!--/.row-->
    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Ders Tablosu</div>


                                <div class="col-md-4">
                                    <form>
                                         <div class="form-group">
                                                <label>Kategori Seç</label>
                                                <select class="form-control">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                </select><br>
                                                <button type="submit" class="btn btn-primary">Listele</button>
                                          </div>
                                         
                                    </form>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Listele</button>
                                </div>
                            </div>
                        <div class="panel-body">
                            <table data-toggle="table" data-url="tables/data2.json" >
                                <thead>
                                <tr>
                                    <th data-field="id" data-align="right">Ders ID</th>
                                    <th data-field="name">Ders Başlığı</th>
                                    <th data-field="price">Kategori</th>
                                    <th data-field="duzenle-btn">Düzenle</th>
                                    <th data-field="sil-btn">Sil</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
    </div>
</div>
<?php include "footer.php" ?>