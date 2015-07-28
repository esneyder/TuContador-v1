<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<!--Incio-->
<div class="right_col" id='formSliderMain' role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Slides Principal
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Personalizar Slider <small>Ingresa o Edita los Items del Slider Principal</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form class="form-horizontal form-label-left" novalidate>

                                        <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                        </p>
                                        <span class="section">Insertar Slider</span>

                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="titulo">Titulo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="titulo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Analisis Economico" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="subtitulo">Subtitulo <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="subtitulo" name="subtitulo" placeholder="Riesgos Financieros" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
										<div class="item form-group">
											<label class="control-label col-md-3 col-sm-3 col-xs-12" for="imagen">Seleccione Imagen <span class="required">*</span>
                                            </label>
											<input type="file"  style="padding:10px 7px 7px 10px " id="ejemplo_archivo_1">
										</div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Informacion">Información Adicional <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" 
                                                data-parsley-maxlength="100" data-parsley-minlength-message="Maximo 100 caracteres" placeholder="Maximo 100 caracteres" 
                                                data-parsley-validation-threshold="10" data-parsley-id="1846">
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ubicacion">Ubicación del Texto<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control">
                                                    <option value="a">Superior Izquierda</option>
                                                    <option value="b">Superior Derecha</option>
                                                    <option value="c">Inferior Izquierda</option>
                                                    <option value="d">Inferior Derecha</option>       
                                                </select>
                                            </div>
                                        </div>            
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button id="send" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
	<!--Fin-->
</body>
</html>
                
                