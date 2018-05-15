@extends('master.dashboard')

@section('content')
<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li><a href="./">Inicio</a></li>
                    <li class="active">Registrar Galpón</li>
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
                          <h3 class="panel-title">Registro del galpón</h3>
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
                              <label class="col-sm-2 control-label">Tipo de ave</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Gallina Ponedora</option>
                                  <option>Codorniz</option>
                                  <option>Pollo de engorde</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Cantidad Max que se puede alojar</label>
                                <div class="col-sm-10">
                                  <input class="form-control" type="number">
                                </div>
                              
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Inventario del galpón</label>
                              <div class="col-sm-10">
                                <select multiple class="selectpicker form-control" placeholder="Select">
                                  <option>Campana</option>
                                  <option>Comedores</option>
                                  <option>Bebedores</option>
                                  <option>Criadora de gas</option>
                                  <option>Criadora de petroleo</option>
                                  <option>Criadora de carbon</option>
                                  <option>Termometros</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Estado</label>
                              <div class="col-sm-10">
                                <select class="selectpicker form-control" placeholder="Select">
                                  <option>Ocupado</option>
                                  <option>Libre</option>
                                  <option>Deshabilitado</option>
                                  <option>Limpieza</option>
                                </select>
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