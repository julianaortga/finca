@extends('master.dashboard') @section('content')
<div class="main">
    <div class="main__scroll scrollbar-macosx">
        <div class="main__cont">
            <div class="main-heading">
                <div class="main-title">
                    <ol class="breadcrumb">
                        <li>
                            <a href="./">Inicio</a>
                        </li>
                        <li class="active">Registrar Producto</li>
                    </ol>
                </div>
                <div class="main-filter">
                    <form class="main-filter__search">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search...">
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
                        <div class="col-md-12">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Registro de productos de la granja</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-horizontal">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Tipo</label>
                                                <div class="col-sm-10">
                                                    <select class="selectpicker form-control" placeholder="Select">
                                                        <option>Huevos Ponedora</option>
                                                        <option>Huevos Codorniz</option>
                                                        <option>Pollo</option>
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

                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Cantidad</label>
                                                <div class="col-sm-10">
                                                    <input id="edad" class="form-control"  type="number">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Precio</label>
                                                <div class="col-sm-10">
                                                    <label for="edad">$</label>
                                                    <input id="edad" class="form-control" min="1" step="any" type="number">
                                                    
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