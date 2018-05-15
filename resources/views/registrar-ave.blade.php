@extends('master.dashboard')

@section('content')
<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li><a href="./">Registrar Aves</a></li>
                    
                  </ol>
                </div>
                <div class="main-filter">
                  <form class="main-filter__search">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Buscar..."><span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                          <div class="fa fa-search"></div>
                        </button></span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="container-fluid half-padding">
                <div class="template template__controls">
                  <div class="row">
                    <div class="nuevo col-md-10">
                      
                      <div class="panel panel-danger">
                     
                        <div class="panel-body">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="active" role="presentation"><a href="#gallina" aria-controls="gallina" role="tab" data-toggle="tab">Gallinas ponedoras</a></li>
                            <li role="presentation"><a href="#codorniz" aria-controls="codorniz" role="tab" data-toggle="tab">Codorniz</a></li>
                            <li role="presentation"><a href="#pollo" aria-controls="pollo" role="tab" data-toggle="tab">Pollos de engorde</a></li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="gallina" role="tabpanel">
                              
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Linea G</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Pesada</option>
                                  <option>Semipesada</option>
                                  <option>Liviana</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                          <label class="col-sm-2 control-label">Lote</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" placeholder="Select">
                              <option>Lote 1</option>
                              <option>Lote 2</option>
                              <option>Lote 3</option>
                            </select>
                          </div>
                        </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Galpón</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Galpón 1</option>
                                  <option>Galpón 2</option>
                                  <option>Galpón 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de entrada a la granja</label>
                                  <div class="col-sm-10">
                                    <div class="input-group date">
                                      <input class="form-control" type="text" value="16/04/2018" required=""  >
                                        <div class="input-group-addon">
                                          <div class="fa fa-calendar"></div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Edad</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Dias</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Peso</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Gramos</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Observaciones</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Escriba las observaciones necesarias... " rows="7"></textarea>
                              </div>
                            </div>
                            
                          
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                <button class="btn btn-default" type="submit">Registrar</button>
                              </div>
                            </div>
                          </div>
                            </div>
                          <div class="tab-pane" id="codorniz" role="tabpanel">
                          <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Linea C</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Pesada</option>
                                  <option>Semipesada</option>
                                  <option>Liviana</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                          <label class="col-sm-2 control-label">Lote</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" placeholder="Select">
                              <option>Lote 1</option>
                              <option>Lote 2</option>
                              <option>Lote 3</option>
                            </select>
                          </div>
                        </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Galpón</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Galpón 1</option>
                                  <option>Galpón 2</option>
                                  <option>Galpón 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de entrada a la granja</label>
                                  <div class="col-sm-10">
                                    <div class="input-group date">
                                      <input class="form-control" type="text" value="16/04/2018" required=""  >
                                        <div class="input-group-addon">
                                          <div class="fa fa-calendar"></div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Edad</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Dias</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Peso</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Gramos</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Observaciones</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Escriba las observaciones necesarias... " rows="7"></textarea>
                              </div>
                            </div>
                            
                          
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                <button class="btn btn-default" type="submit">Registrar</button>
                              </div>
                            </div>
                          </div>
                            </div>
                          
                            <div class="tab-pane" id="pollo" role="tabpanel">
                              
                            <div class="form-horizontal">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Linea</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Pesada</option>
                                  <option>Semipesada</option>
                                  <option>Liviana</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                          <label class="col-sm-2 control-label">Lote</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" placeholder="Select">
                              <option>Lote 1</option>
                              <option>Lote 2</option>
                              <option>Lote 3</option>
                            </select>
                          </div>
                        </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Galpón</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Galpón 1</option>
                                  <option>Galpón 2</option>
                                  <option>Galpón 3</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de entrada a la granja</label>
                                  <div class="col-sm-10">
                                    <div class="input-group date">
                                      <input class="form-control" type="text" value="16/04/2018" required=""  >
                                        <div class="input-group-addon">
                                          <div class="fa fa-calendar"></div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Sexo</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Macho</option>
                                  <option>Hembra</option>
                                  
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Edad</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Dias</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Peso</label>
                              <div class="col-sm-10">
                                <input id="edad" class="form-control" type="number">
                                <label for="edad">Gramos</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Observaciones</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" placeholder="Escriba las observaciones necesarias... " rows="7"></textarea>
                              </div>
                            </div>
                            
                          
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                <button class="btn btn-default" type="submit">Registrar</button>
                              </div>
                            </div>
                          </div>
                            </div>
                        <div class="panel-body">
                          
                        </div>
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection