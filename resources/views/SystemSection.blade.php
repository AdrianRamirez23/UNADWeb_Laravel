@extends('layouts.master')

@section('content')

  <!--====== COURSES SINGEl PART START ======-->
    
  <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="corses-singel-left mt-30">
                        <div class="title">
                            <h3>Registro y Control Académicos</h3>
                        </div> <!-- title -->
                        <div class="course-terms">
                            <ul>
                                <li>
                                    <div class="teacher-name">
                                        <div class="thum">
                                            <img src="images/course/teacher/t-1.jpg" alt="Teacher">
                                        </div>
                                        <div class="name">
                                            <span>Profesor Asignado</span>
                                            <h6>Nombre de Docente</h6>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-category">
                                        <span>Programa Actual</span>
                                        <h6>Tecnología de Desarrollo de Software </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="review">
                                        <span>Promedio Acumulado</span>
                                       <h6>4.0</h6>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- course terms -->
                        
                        <div class="corses-singel-image pt-50">
                            <img src="images/course/cu-1.jpg" alt="Courses">
                        </div> <!-- corses singel image -->
                        
                        <div class="corses-tab mt-30">
                            <ul class="nav nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Información Básica</a>
                                </li>
                                <li class="nav-item">
                                    <a id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam" aria-selected="false">Notas</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="overview-description">
                                        <div class="singel-description pt-40">
                                            <h6>Información Personal</h6>
                                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                        </div>
                                        <div class="singel-description pt-40">
                                            <h6>Información Académica</h6>
                                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                        </div>
                                    </div> <!-- overview description -->
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                    <div class="curriculam-cont">
                                        <div class="title">
                                            <h6>Información Materias Cursadas y Nota Final</h6>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Matemáticas</span></li>
                                                            <li><span class="head">Aprobado</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 3.8</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Aprueba completamente la materia</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="card">
                                                <div class="card-header" id="headingTow">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseTow" aria-expanded="true" aria-controls="collapseTow">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Introducción a Logica de Programación</span></li>
                                                            <li><span class="head">Aprobado</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 4.0</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>

                                                <div id="collapseTow" class="collapse" aria-labelledby="headingTow" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Aprueba completamente la materia</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Ética</span></li>
                                                            <li><span class="head">Aprobado</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 4.5</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Aprueba completamente la materia</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFore">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Cálculo Diferencial</span></li>
                                                            <li><span class="head">Aprobado</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span>4.2</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Aprueba completamente la materia</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header" id="headingFive">
                                                    <a href="#" data-toggle="collapse" class="collapsed" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <ul>
                                                            <li><i class="fa fa-file-o"></i></li>
                                                            <li><span class="lecture">Lenguajes de Desarrollo</span></li>
                                                            <li><span class="head">Aprobado</span></li>
                                                            <li><span class="time d-none d-md-block"><i class="fa fa-clock-o"></i> <span> 4.3</span></span></li>
                                                        </ul>
                                                    </a>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <p>Aprueba completamente la materia</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div> <!-- curriculam cont -->
                                </div>
                                
                                
                            </div> <!-- tab content -->
                        </div>
                    </div> <!-- corses singel left -->
                    
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="course-features mt-30">
                               <h4>Factor de Deserción</h4>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>Duración  : <span>3 Semestres</span></li>
                                    <li><i class="fa fa-clone"></i>Económico : <span>15%</span></li>
                                    <li><i class="fa fa-beer"></i>Trabajo :  <span>30%</span></li>
                                    <li><i class="fa fa-user-o"></i>Complejidad Temas:  <span>5%</span></li>
                                </ul> 
                            </div> <!-- course features -->
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="You-makelike mt-30">
                                <h4>Administrar </h4> 
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Programas</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>Ir</a></li>        
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Estudiantes</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>Ir</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Docentes</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>Ir</a></li>                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="singel-makelike mt-20">
                                    <div class="image">
                                        <img src="images/your-make/y-1.jpg" alt="Image">
                                    </div>
                                    <div class="cont">
                                        <a href="#"><h4>Centros</h4></a>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i>Ir</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="releted-courses pt-95">
                        <div class="title">
                            <h3>Encuestas de Satisfacción</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-2.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Ir</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(20 Encuestados)</span>
                                        <a href="courses-singel.html"><h4>Lógica De Programación</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Docente Asignado</h6></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                            <div class="col-md-6">
                                <div class="singel-course mt-30">
                                    <div class="thum">
                                        <div class="image">
                                            <img src="images/course/cu-1.jpg" alt="Course">
                                        </div>
                                        <div class="price">
                                            <span>Ir</span>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span>(10 Encuestados)</span>
                                        <a href="courses-singel.html"><h4>Ética - Electiva</h4></a>
                                        <div class="course-teacher">
                                            <div class="thum">
                                                <a href="#"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                            </div>
                                            <div class="name">
                                                <a href="#"><h6>Docente Asignado</h6></a>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div> <!-- singel course -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- releted courses -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

@stop