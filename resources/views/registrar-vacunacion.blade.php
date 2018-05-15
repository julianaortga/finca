@extends('master.dashboard')

@section('content')
<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li><a href="./">Inicio</a></li>
                    <li class="active">Registrar Vacunación</li>
                  </ol>
                </div>
                <div class="main-filter">
                  <form class="main-filter__search">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search..."><span class="input-group-btn">
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
                    <div class="col-md-12">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Vacunación Grupal</h3>
                        </div>
                        <div class="panel-body">
                          <div class="form-horizontal">
                          <div class="form-horizontal">
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
                       
                            <  <div class="form-group">
                                <label class="col-sm-2 control-label">Fecha de programación</label>
                                  <div class="col-sm-5">
                                      <div class="input-group date">
                                        <input class="form-control" type="text" value="16/04/2018" required=""  >
                                          <div class="input-group-addon">
                                            <div class="fa fa-calendar"></div>
                                          </div>                                          
                                      </div>                                                                          
                                  </div>
                                  <div class="col-sm-4">
                                <div class="form-group">
                                
                                  <div class="input-group timepicker bootstrap-timepicker">
                                    <input class="form-control" type="text">
                                    <div class="input-group-addon">
                                      <div class="fa fa-clock-o"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                       
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Vacuna</label>
                              <div class="col-sm-10">
                              
                              <select class="col-sm-6 selectize" placeholder="Elige una opción">
                                <option value="">Elige una opción</option>
                                <optgroup label="Concentrado">
                                  <option value="pitons">Tipo 1</option>
                                  <option value="cams">Tipo 2</option>
                                  <option value="nuts">Tipo 3</option>
                                  <option value="bolts">Tipo 4</option>
                                  <option value="stoppers">Tipo 5</option>
                                  <option value="sling">Tipo 6</option>
                                </optgroup>
                                <optgroup label="Vitaminas">
                                  <option value="skis">Vitamina A</option>
                                  <option value="skins">Vitamina B</option>
                                  <option value="poles">Vitamina C</option>
                                </optgroup>
                              </select>
                              <label class="col-sm-2 control-label">Cantidad</label>
                                <input id="cantidad" class="form-control" type="number">
                                <label for="cantidad">ml</label>
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
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection