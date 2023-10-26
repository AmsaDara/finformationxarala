@extends('admin.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
      <!-- Main content -->
<div class="content-wrapper">
    <div class="container-full">
      <section class="content">
          <div class="row">
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Cours Complets</p>
                              <h3 class="text-white mb-0 font-weight-500">25 <i class="fa fa-caret-up"></i></h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">webinaire en ligne</p>
                              <h3 class="text-white mb-0 font-weight-500">12 <i class="fa fa-caret-up"></i> </h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-info-light rounded w-60 h-60">
                              <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Avis des enseignants</p>
                              <h3 class="text-white mb-0 font-weight-500">18 <i class="fa fa-caret-down"></i> </h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-danger-light rounded w-60 h-60">
                              <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Progression Des Cours</p>
                              <h3 class="text-white mb-0 font-weight-500">15 <i class="fa fa-caret-up"></i> </h3>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              Cours Populaire
                              <small class="subtitle">Plus de 40+ nouveaux cours</small>
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">Titre</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Auteur</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">Nombre lessons</span></th>
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-1.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Cinema 4d</a>
                                                      <span class="text-fade d-block">lorempslorempsloremps lorempsloremps</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Elhadji Samba Sy
                                              </span>
                                          </td>
                                          <td>
                                              
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  33
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-primary-light badge-lg">Approuvé</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-2.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">UX/UI Design</a>
                                                      <span class="text-fade d-block"> simply dummy text of the printing and typesetting</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Monsieur Kane
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  14
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-3.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Website Design</a>
                                                      <span class="text-fade d-block"> simply dummy text of the printing and typesetting</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                 Pape Ndiaye Sarr
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  14
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-primary-light badge-lg">Approuvé</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                      <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      <div class="bg-img h-50 w-50" style="background-image: url(../images/gallery/creative/img-4.jpg)"></div>
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">logo design</a>
                                                      <span class="text-fade d-block">Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  Monsieur Bojan
                                              </span>
                                          </td>
                                          <td>
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  14
                                              </span>
                                          </td>
                                          <td>
                                              <span class="badge badge-warning-light badge-lg">In Progress</span>
                                          </td>
                                          <td class="text-right">
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                              <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                     
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </section>
    </div>
</div>
@endsection