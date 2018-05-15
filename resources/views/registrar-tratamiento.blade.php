@extends('master.dashboard') @section('content')
<div class="main">
  <div class="main__scroll scrollbar-macosx">
    <div class="main__cont">
      <div class="main-heading">
        <div class="main-title">
          <ol class="breadcrumb">
            <li>
              <a href="./">Registrar Producto</a>
            </li>

          </ol>
        </div>
        <div class="main-filter">
          <form class="main-filter__search">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Buscar...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <div class="fa fa-search"></div>
                </button>
              </span>
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
                    <li class="active" role="presentation">
                      <a href="#grupal" aria-controls="grupal" role="tab" data-toggle="tab">Tratamiento grupal</a>
                    </li>
                    <li role="presentation">
                      <a href="#individual" aria-controls="individual" role="tab" data-toggle="tab">Tratamiento individual</a>
                    </li>
                    <li role="presentation">
                      <a href="#diario" aria-controls="diario" role="tab" data-toggle="tab">Agregar observación diaria</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="grupal" role="tabpanel">

                      <div class="form-horizontal">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">ID tratamiento</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" value="87754" readonly>
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
                          <label class="col-sm-2 control-label">Fecha de registro</label>
                          <div class="col-sm-5">
                            <div class="input-group date">
                              <input class="form-control" type="text" value="16/04/2018" required="">
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
                          <label class="col-sm-2 control-label">Enfermedad</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" id="enfermedad" placeholder="Select">
                              <option>Tipo 1</option>
                              <option>Tipo 2</option>
                              <option>Tipo 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Tipo de tratamiento</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" id="tratamiento" placeholder="Select">
                              <option>Cuarentena</option>
                              <option>Medicamento</option>
                              <option>Dar de baja</option>
                            </select>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-sm-2 control-label">Medicamento</label>
                          <div class="col-sm-10">

                            <select class="col-sm-6 selectize" placeholder="Elige una opción">
                              <option value="">Elige una opción</option>
                              <optgroup label="Oral">
                                <option value="pitons">Tipo 1</option>
                                <option value="cams">Tipo 2</option>
                                <option value="nuts">Tipo 3</option>
                                <option value="bolts">Tipo 4</option>
                                <option value="stoppers">Tipo 5</option>
                                <option value="sling">Tipo 6</option>
                              </optgroup>
                              <optgroup label="Inyección">
                                <option value="skis">Inyección 1</option>
                                <option value="skins">Inyección 2</option>
                                <option value="poles">Inyección 3</option>
                              </optgroup>
                            </select>
                            <input id="edad" class="form-control" type="number">
                            <label for="edad">Ml</label>
                          </div>

                        </div>


                        <div class="form-group">
                          <label class="col-sm-2 control-label">Observación</label>
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
                    <div class="tab-pane" id="individual" role="tabpanel">
                      <div class="form-horizontal">
                      <div class="form-group">
                          <label class="col-sm-2 control-label">ID tratamiento</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" value="87754" readonly>
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
                          <label class="col-sm-2 control-label">Ave</label>
                          <div class="col-sm-10">

                            <select class="selectize" placeholder="Elige una opción">
                              <option value="">Elige una opción</option>
                              <optgroup label="Gallina">
                                <option value="pitons">L5567</option>
                                <option value="cams">L5568</option>
                                <option value="nuts">L5569</option>
                                <option value="bolts">L55610</option>
                                <option value="stoppers">L55611</option>
                                <option value="sling">L55612</option>
                              </optgroup>
                              <optgroup label="Codorniz">
                                <option value="skis">M8713</option>
                                <option value="skins">M8714</option>
                                <option value="poles">M8715</option>
                              </optgroup>
                              <optgroup label="Pollo">
                                <option value="skis">F656</option>
                                <option value="skins">F618</option>
                                <option value="poles">F7162</option>
                              </optgroup>
                            </select>

                          </div>

                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Fecha de registro</label>
                          <div class="col-sm-5">
                            <div class="input-group date">
                              <input class="form-control" type="text" value="16/04/2018" required="">
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
                          <label class="col-sm-2 control-label">Enfermedad</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" id="enfermedad" placeholder="Select">
                              <option>Tipo 1</option>
                              <option>Tipo 2</option>
                              <option>Tipo 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Tipo de tratamiento</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" id="tratamiento" placeholder="Select">
                              <option>Cuarentena</option>
                              <option>Medicamento</option>
                              <option>Dar de baja</option>
                            </select>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-sm-2 control-label">Medicamento</label>
                          <div class="col-sm-10">

                            <select class="col-sm-6 selectize" placeholder="Elige una opción">
                              <option value="">Elige una opción</option>
                              <optgroup label="Oral">
                                <option value="pitons">Tipo 1</option>
                                <option value="cams">Tipo 2</option>
                                <option value="nuts">Tipo 3</option>
                                <option value="bolts">Tipo 4</option>
                                <option value="stoppers">Tipo 5</option>
                                <option value="sling">Tipo 6</option>
                              </optgroup>
                              <optgroup label="Inyección">
                                <option value="skis">Inyección 1</option>
                                <option value="skins">Inyección 2</option>
                                <option value="poles">Inyección 3</option>
                              </optgroup>
                            </select>
                            <input id="edad" class="form-control" type="number">
                            <label for="edad">Ml</label>
                          </div>

                        </div>


                        <div class="form-group">
                          <label class="col-sm-2 control-label">Observación</label>
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

                    <div class="tab-pane" id="diario" role="tabpanel">

                      <div class="form-horizontal">
                      <div class="form-group">
                          <label class="col-sm-2 control-label">ID tratamiento</label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Introduzca el ID del tratamiento" >
                          </div>
                        </div>
                    
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Tipo de tratamiento</label>
                          <div class="col-sm-10">
                            <select class="selectpicker form-control" id="tratamiento" placeholder="Select">
                              <option>Cuarentena</option>
                              <option>Medicamento</option>
                              <option>Dar de baja</option>
                            </select>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-sm-2 control-label">Medicamento</label>
                          <div class="col-sm-10">

                            <select class="col-sm-6 selectize" placeholder="Elige una opción">
                              <option value="">Elige una opción</option>
                              <optgroup label="Oral">
                                <option value="pitons">Tipo 1</option>
                                <option value="cams">Tipo 2</option>
                                <option value="nuts">Tipo 3</option>
                                <option value="bolts">Tipo 4</option>
                                <option value="stoppers">Tipo 5</option>
                                <option value="sling">Tipo 6</option>
                              </optgroup>
                              <optgroup label="Inyección">
                                <option value="skis">Inyección 1</option>
                                <option value="skins">Inyección 2</option>
                                <option value="poles">Inyección 3</option>
                              </optgroup>
                            </select>
                            <input id="edad" class="form-control" type="number">
                            <label for="edad">Ml</label>
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