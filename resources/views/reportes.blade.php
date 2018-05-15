@extends('master.dashboard') 
@section('content')
<div class="main">
          <div class="main__scroll scrollbar-macosx">
            <div class="main__cont">
              <div class="main-heading">
                <div class="main-title">
                  <ol class="breadcrumb">
                    <li class="active">Reportes de producción</li>
                  </ol>
                </div>
                <div class="main-filter">
                  <form class="main-filter__search">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search"><span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                          <div class="fa fa-search"></div>
                        </button></span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="container-fluid half-padding">
                <div class="template template__charts">
                  <div class="row">
                    <div class="col-md-10">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Producción Mensual</h3>
                        </div>
                        <div class="panel-body">
                          <div class="template__morris">
                            <div class="container-fluid half-padding">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="chart">
                                    <div class="chart__tabs">
                                      <ul class="nav nav-tabs" role="tablist">
                                        <li class="active" role="presentation"><a href="#line" aria-controls="line" role="tab" data-toggle="tab">Line</a></li>
                                        <li role="presentation"><a href="#area" aria-controls="area" role="tab" data-toggle="tab">Area</a></li>
                                      </ul>
                                    </div>
                                    <div class="chart__cont">
                                      <div class="tab-pane active" id="line">
                                        <div class="chart__title">Line Chart</div>
                                        <div class="chart__chart" data-chart="morris-line"></div>
                                      </div>
                                      <div class="tab-pane" id="area">
                                        <div class="chart__title">Area Chart</div>
                                        <div class="chart__chart" data-chart="morris-area"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="chart">
                                    <div class="chart__tabs">
                                      <ul class="nav nav-tabs" role="tablist">
                                        <li class="active" role="presentation"><a href="#bar" aria-controls="bar" role="tab" data-toggle="tab">Bar</a></li>
                                        <li role="presentation"><a href="#donut" aria-controls="donut" role="tab" data-toggle="tab">Donut</a></li>
                                      </ul>
                                    </div>
                                    <div class="chart__cont">
                                      <div class="tab-pane active" id="bar">
                                        <div class="chart__title">Bar Chart</div>
                                        <div class="chart__chart" data-chart="morris-bar"></div>
                                      </div>
                                      <div class="tab-pane" id="donut">
                                        <div class="chart__title">Donut Chart</div>
                                        <div class="chart__chart" data-chart="morris-donut"></div>
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
                    <div class="col-md-2">
                      <div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3 class="panel-title">Sparkline</h3>
                        </div>
                        <div class="panel-body">
                          <div class="template__sparkline">
                            <div class="template__sparkline-title">Area chart</div>
                            <div class="template__sparkline-area sparkline"></div>
                          </div>
                          <div class="template__sparkline">
                            <div class="template__sparkline-title">Bar chart</div>
                            <div class="template__sparkline-bar sparkline"></div>
                          </div>
                          <div class="template__sparkline">
                            <div class="template__sparkline-title">Composite chart</div>
                            <div class="template__sparkline-composite sparkline"></div>
                          </div>
                          <div class="template__sparkline">
                            <div class="template__sparkline-title">Mouse speed</div>
                            <div class="template__sparkline-ms sparkline"></div>
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