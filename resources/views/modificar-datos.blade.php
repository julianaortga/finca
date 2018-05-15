@extends('master.dashboard')

@section('content')
<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li><a href="./">Modificar Datos de Ave</a></li>
                    
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
                <div class="datalist page page_products products float-right">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <div class="products-preview datalist-preview">
                        <div class="products-preview__cont">
                        <div class="products-preview__name" title="Name">L8576</div>
                          <div class="products-preview__data">
                            
                            <div class="products-preview__info">
                              <div class="products-preview__type">Linea</div>                              
                              <select class="selectpicker form-control" placeholder="Select">
                                <option>Pesada</option>
                                <option>Semipesada</option>
                                <option>Liviana</option>
                              </select>
                              
                            </div>
                          </div>
                          <div class="products-preview__props">
                            <div class="products-preview__prop" title="salary"><i class="fa fa-book"></i><span class="products-preview__salary">Lote</span></div>
                            <select class="selectpicker form-control" placeholder="Select">
                              <option>Lote 1</option>
                              <option>Lote 2</option>
                              <option>Lote 3</option>
                            </select>
                            <div class="products-preview__prop"><i class="fa fa-money"></i><span class="products-preview__date">Galpón</span></div>
                            <select class="selectpicker form-control" placeholder="Select">
                                  <option>Galpón 1</option>
                                  <option>Galpón 2</option>
                                  <option>Galpón 3</option>
                                </select>
                                <div class="products-preview__prop"><i class="fa fa-money"></i><span class="products-preview__date">Fecha de registro</span></div>
                                <input class="form-control" type="text" value="16/04/2018" required=""  >
                                        <div class="input-group-addon">
                                          <div class="fa fa-calendar"></div>
                                        </div>
                                        <div class="products-preview__prop"><i class="fa fa-money"></i><span class="products-preview__date">Edad</span></div>
                                        <div class="products-preview__prop"><i class="fa fa-money"></i><span class="products-preview__date">Galpón</span></div>
                            <div class="products-preview__prop"><i class="fa fa-navicon"></i><span class="products-preview__status">Observación</span></div>
                            <textarea class="form-control" value="Huevo de gallina ponedora Triple A" rows="7"></textarea>
                          </div>
                          
                          <button class="btn btn-default" type="submit">Guardar</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                      <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">Aves</h3>
                        </div>
                        <div class="panel-body">
                          <p>Tiene 0 aves registradas.</p>
                          <form class="datalist-filter">
                            <div class="input-group datalist-filter__search">
                              <input class="form-control" type="text" placeholder="Encontrar ave"><span class="input-group-btn">
                                <button class="btn btn-default" type="button" role="button" data-toggle="collapse" data-target="#datalist-filter__detail" aria-controls="users__filter-detail" aria-expanded="false">
                                  <div class="fa fa-filter"></div>
                                </button></span>
                            </div>
                            <div class="collapse" id="datalist-filter__detail">
                              <div class="container-fluid datalist-filter__detail">
                                <div class="row">
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-daterange">
                                    <div class="form-group">
                                    <label for="datalist-filter__actives">Fecha de ingreso</label>
                                      <div class="input-group">
                                      
                                        <div class="input-group-addon"><i class="fa fa-calendar-minus-o"></i></div>
                                        
                                        <input class="form-control datalist-filter__from" type="text" value="">
                                        
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      
                                      <label class="col-sm-5 control-label">Linea</label>
                                      <div class="col-sm-12">
                                        <select class="selectpicker form-control" placeholder="Select">
                                          <option>Pesada</option>
                                          <option>Semipesada</option>
                                          <option>Liviana</option>
                                        </select>
                                      </div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                          <div class="datalist__result">
                            <ul class="nav nav-tabs" role="tablist">
                              <li class="active" role="presentation"><a href="#gallina" aria-controls="gallina" role="tab" data-toggle="tab">Gallinas ponedoras&nbsp;</a></li>
                              <li role="presentation"><a href="#codorniz" aria-controls="codorniz" role="tab" data-toggle="tab">Codorniz&nbsp;</a></li>
                              <li role="presentation"><a href="#pollo" aria-controls="pollo" role="tab" data-toggle="tab">Pollos de engorde&nbsp;</a></li>
                              
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane" id="new" role="tabpanel">
                                <form class="form products-new">
                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-cube"></i></div>
                                                <input class="form-control" type="text" placeholder="Title">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-folder"></i></div>
                                                <select class="selectpicker" placeholder="Type">
                                                  <option value="gallina">Gallina</option>
                                                  <option value="codorniz">Codorniz</option>
                                                  <option value="pollo">Pollo</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                                <input class="form-control" type="text" placeholder="Price">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-heartbeat"></i></div>
                                                <select class="selectpicker" placeholder="Status">
                                                  <option value="customer">Active</option>
                                                  <option value="manager">Confirmed</option>
                                                  <option value="admin">Blocked</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <textarea class="form-control" rows="3" placeholder="Note"></textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="fileupload">
                                          <label>
                                            <div class="fa fa-image"></div>
                                            <input type="file">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-success">Save</button>
                                </form>
                              </div>
                              <div class="tab-pane active" id="gallina" role="tabpanel">
                                <div class="scrollable scrollbar-macosx">
                                  <div class="container-fluid">
                                    <table class="datalist__table table datatable display table-hover" width="100%" data-products="brand">
                                      <thead>
                                        <tr>
                                          <th class="products__id">#ID</th>
                                          <th class="products__pic">Linea</th>
                                          <th class="products__status">Galpón</th>
                                          <th class="products__date">Fecha</th>
                                          <th class="products__salary">Edad</th>
                                          <th class="products__type">Peso</th>                                          
                                          <th class="products__title">Observación</th>                                          
                                          
                                        </tr>
                                        
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>L8876</td>
                                          <td>Semipesada</td>
                                          <td>L1</td>
                                          <td>2011/04/25</td>
                                          <td>250 días</td>
                                          <td>50 gr</td>
                                          <td>No se presentaron ningún tipo de problemas en el registro</td>
                                      </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane" id="codorniz" role="tabpanel">
                                <div class="scrollable scrollbar-macosx">
                                  <div class="container-fluid">
                                    <table class="datalist__table table datatable display table-hover" width="100%" data-products="digital">
                                      <thead>
                                        <tr>
                                          <th class="products__id">#ID</th>
                                          <th class="products__pic">Linea</th>
                                          <th class="products__status">Galpón</th>
                                          <th class="products__date">Fecha</th>
                                          <th class="products__salary">Edad</th>
                                          <th class="products__type">Peso</th>                                          
                                          <th class="products__title">Observación</th>
                                        </tr>
                                      </thead>
                                    </table>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane" id="pollo" role="tabpanel">
                                <div class="scrollable scrollbar-macosx">
                                  <div class="container-fluid">
                                    <table class="datalist__table table datatable display table-hover" width="100%" data-products="affilate">
                                      <thead>
                                        <tr>
                                        <th class="products__id">#ID</th>
                                          <th class="products__pic">Linea</th>
                                          <th class="products__status">Galpón</th>
                                          <th class="products__date">Fecha</th>
                                          <th class="products__salary">Edad</th>
                                          <th class="products__type">Peso</th>                                          
                                          <th class="products__title">Observación</th>
                                        </tr>
                                      </thead>
                                    </table>
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
            </div>
          </div>
        </div>
@endsection