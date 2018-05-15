@extends('master.dashboard')

@section('content')

<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li><a href="./">Registrar Tipos de Aves</a></li>
                    
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
                          <div class="form-horizontal">
                           
                            <form class="form-group" method="POST" action="/tipo_ave" enctype="multipart/form-data">
                             {{ csrf_field() }}
                              <div class="form-group">
                               <label class="col-sm-2 control-label">Nombre</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" name="nombre" placeholder="Nombre del tipo de ave" rows="4"></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-2">
                                  <button class="btn btn-default" type="submit">Registrar</button>
                                </div>
                              </div>
                            </form>

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