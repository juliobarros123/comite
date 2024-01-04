<!doctype html>
<html lang="pt-br">
@include('layouts._includes.admin.head')

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
                <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <form class="form-inline mr-auto searchform text-muted">
                <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                    placeholder="Type something..." aria-label="Search">
            </form>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal"
                        data-target=".modal-shortcut">
                        <span class="fe fe-grid fe-16"></span>
                    </a>
                </li>
                <li class="nav-item nav-notif">
                    <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                        <span class="fe fe-bell fe-16"></span>
                        <span class="dot dot-md bg-success"></span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar avatar-sm mt-2">
                            <img src="{{ asset(Auth::User()->profile_photo_path) }}" alt="..."
                                class="avatar-img rounded-circle">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" href="#" data-toggle="modal"
                            data-target="#profile">Perfil</a>

                        {{-- <a class="dropdown-item" href="/">Loja</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        {{-- <a class="dropdown-item" href="#">Activities</a> --}}
                    </div>

                </li>
            </ul>
        </nav>
        <div class="modal fade text-left" id="profile" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('Editar Utilizador') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card shadow mb-4">
                            {{-- <div class="card-header">
                            <strong class="card-title">Actualizar Operador</strong>
                            </div> --}}
                            <form
                                action="{{ route('admin.utilizadores.update', ['id' => Auth::User()->id]) }}
                    "
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">


                                    <div class="col-md-12">

                                        {{-- <h2 class="h3 mb-4 page-title">Settings</h2> --}}
                                        <div class="my-4">
                                            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tabprofile" data-toggle="tab"
                                                        href="#homeprofile" role="tab" aria-controls="home"
                                                        aria-selected="true">Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tabprofile" data-toggle="tab"
                                                        href="#profileprofile" role="tab" aria-controls="profile"
                                                        aria-selected="false">Passe</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="homeprofile"
                                                    role="tabpanel" aria-labelledby="home-tabprofile">

                                                    <div class="row mt-5 align-items-center">
                                                        <div class="col-md-3 text-center mb-5">
                                                            <div class="avatar avatar-xl">
                                                                <img src="{{ asset(Auth::User()->profile_photo_path) }}"alt="..."
                                                                    class="avatar-img rounded-circle"
                                                                    style="    width: 110px;
                                  height: 113px;">
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="row align-items-center">
                                                                <div class="col-md-7">
                                                                    <h4 class="mb-1">{{ Auth::User()->name }}</h4>
                                                                    <p class="small mb-3"><span
                                                                            class="badge badge-dark">{{ Auth::User()->tipoUtilizador }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">

                                                                <div class="col">
                                                                    <p class="small mb-0 text-muted">
                                                                        {{ Auth::User()->email }}</p>
                                                                    <p class="small mb-0 text-muted">
                                                                        {{ Auth::User()->genero }} </p>
                                                                    <p class="small mb-0 text-muted">
                                                                        {{ Auth::User()->bi }}</p>

                                                                    <p class="small mb-0 text-muted">(244)
                                                                        {{ Auth::User()->telefone }}</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr class="my-4">
                                                    <div class="form-row">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="profile_photo_path">Fotografia</label>
                                                                    <input type="file" id="profile_photo_path"
                                                                        name="profile_photo_path" class="form-control"
                                                                        value="{{ old('profile_photo_path') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="name">Nome</label>
                                                                    <input type="text" id="name"
                                                                        placeholder="Digita o nome" name="name"
                                                                        class="form-control"
                                                                        value="{{ Auth::User()->name }}" required>
                                                                </div>
                                                            </div> <!-- /.col -->


                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="bi">NIF</label>
                                                                    <input minlength="14" maxlength="14"
                                                                        id="bi"
                                                                        placeholder="Digita o NIF"name="bi" required
                                                                        class="form-control"
                                                                        value="{{ Auth::User()->bi }}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="telefone">Telefone</label>
                                                                    <input type="number" min="900000000"
                                                                        max="999999999" required id="telefone"
                                                                        name="telefone"
                                                                        placeholder="Digita o Telefone"
                                                                        class="form-control"
                                                                        value="{{ Auth::User()->telefone }}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="email">E-mail</label>
                                                                    <input id="email" required
                                                                        placeholder="Digita o E-mail" name="email"
                                                                        class="form-control"
                                                                        value="{{ Auth::User()->email }}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="genero">Gênero</label>
                                                                    <select name="genero"
                                                                        class="form-control select2" id="genero"
                                                                        required>

                                                                        <option value="{{ Auth::User()->genero }}">
                                                                            {{ Auth::User()->genero }}</option>


                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Feminino">Feminino</option>

                                                                    </select>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group mb-3">
                                                                    <label for="tipoUtilizador">Nível de Acesso</label>
                                                                    <select name="tipoUtilizador"
                                                                        class="form-control select2"
                                                                        id="tipoUtilizador" required>

                                                                        <option
                                                                            value="{{ Auth::User()->tipoUtilizador }}">
                                                                            {{ Auth::User()->tipoUtilizador }}</option>

                                                                        <option value="Administrador">Administrador
                                                                        </option>


                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <p class="mb-2">Requisitos de senha</p>
                                                                <p class="small text-muted mb-2"> Para criar uma nova
                                                                    senha, você deve atender a todos os seguintes
                                                                    requisitos: </p>
                                                                <ul class="small text-muted pl-4 mb-0">
                                                                    <li> Mínimo 8 caracteres </li>
                                                                    <li>Pelo menos um caractere especial</li>
                                                                    <li>Pelo menos um numero</li>
                                                                    <li>Não pode ser igual à senha anterior</li>
                                                                    <li>Ao fazer a ediçâo, deve colocar a passe</li>
                                                                </ul>
                                                            </div>


                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="profileprofile" role="tabpanel"
                                                    aria-labelledby="profile-tabprofile">

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="passe">Passe</label>
                                                                <input id="passe" placeholder="Digita a passe"
                                                                    name="password" class="form-control"
                                                                    type="password" required>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="passeConfirm">Confirmar Passe</label>
                                                                <input id="passeConfirm" placeholder="Digita a passe"
                                                                    name="passeConfirm" class="form-control"
                                                                    type="password" required>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                    </div>


                                    <button type="submit" class="btn btn-primary w-md">Actualizar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- ModalUpdate --}}



        @include('layouts._includes.admin.menu')
        <main role="main" class="main-content">
            @yield('conteudo')
        </main>
        @include('layouts.alert.index')
    </div> <!-- .wrapper -->
    <script src="{{ asset('painel/js/jquery.min.js') }}"></script>
    <script src="{{ asset('painel/js/popper.min.js') }}"></script>
    <script src="{{ asset('painel/js/moment.min.js') }}"></script>
    <script src="{{ asset('painel/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('painel/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('painel/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('painel/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('painel/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('painel/js/config.js') }}"></script>
    <script src="{{ asset('painel/js/d3.min.js') }}"></script>
    <script src="{{ asset('painel/js/topojson.min.js') }}"></script>
    <script src="{{ asset('painel/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('painel/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('painel/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('painel/js/Chart.min.js') }}"></script>
    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('painel/js/gauge.min.js') }}"></script>
    <script src="{{ asset('painel/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('painel/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('painel/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('painel/js/apps.js') }}"></script>
    <!--Select2-->
    <script src="{{ asset('painel/js/select2.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (session('feedback'))
        {{-- @dump(session('feedback')); --}}

        @if (isset(session('feedback')['type']))
            <script>
                Swal.fire(
                    '{{ session('feedback')['sms'] }}',
                    '',
                    '{{ session('feedback')['type'] }}'
                )
            </script>
        @endif
    @endif
    <script src="{{ asset('painel/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('painel/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
      var table =   $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
            }
        });
    </script>
    <script src="js/apps.js"></script>
    <script>
        // Adicione um evento de clique ao botão
        document.getElementById('toggleButton').addEventListener('click', function() {
            // Obtém a referência à div

            var divParaEsconder = document.getElementById('divParaEsconder');
            console.log("ola");
            // Alterna a propriedade hidden
            if (divParaEsconder.hasAttribute('hidden')) {

                divParaEsconder.removeAttribute('hidden');
            } else {
                // console.log("no");
                divParaEsconder.setAttribute('hidden', 'true');
            }
        });
    </script>
    <script>
        $('.select2').select2({
            theme: 'bootstrap4',
        });
        $('.select2-multi').select2({
            multiple: true,
            theme: 'bootstrap4',
        });
        $('.drgpicker').daterangepicker({
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale: {
                format: 'MM/DD/YYYY'
            }
        });
        $('.time-input').timepicker({
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
        /** date range picker */
        if ($('.datetimes').length) {
            $('.datetimes').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'M/DD hh:mm A'
                }
            });
        }
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            }
        }, cb);
        cb(start, end);
        $('.input-placeholder').mask("00/00/0000", {
            placeholder: "__/__/____"
        });
        $('.input-zip').mask('00000-000', {
            placeholder: "____-___"
        });
        $('.input-money').mask("#.##0,00", {
            reverse: true
        });
        $('.input-phoneus').mask('(000) 000-0000');
        $('.input-mixed').mask('AAA 000-S0S');
        $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
                'Z': {
                    pattern: /[0-9]/,
                    optional: true
                }
            },
            placeholder: "___.___.___.___"
        });
        // editor
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{
                    'font': []
                }],
                [{
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{
                        'header': 1
                    },
                    {
                        'header': 2
                    }
                ],
                [{
                        'list': 'ordered'
                    },
                    {
                        'list': 'bullet'
                    }
                ],
                [{
                        'script': 'sub'
                    },
                    {
                        'script': 'super'
                    }
                ],
                [{
                        'indent': '-1'
                    },
                    {
                        'indent': '+1'
                    }
                ], // outdent/indent
                [{
                    'direction': 'rtl'
                }], // text direction
                [{
                        'color': []
                    },
                    {
                        'background': []
                    }
                ], // dropdown with defaults from theme
                [{
                    'align': []
                }],
                ['clean'] // remove formatting button
            ];
            var quill = new Quill(editor, {
                modules: {
                    toolbar: toolbarOptions
                },
                theme: 'snow'
            });
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script>
        "use strict";
        $("#modeSwitcher").on("click", function(e) {
                e.preventDefault(), modeSwitch(), location.reload()
            }), $(".collapseSidebar").on("click", function(e) {
                $(".vertical").hasClass("narrow") ? $(".vertical").toggleClass("open") : ($(".vertical").toggleClass(
                        "collapsed"), $(".vertical").hasClass("hover") && $(".vertical").removeClass("hover")), e
                    .preventDefault()
            }), $(".sidebar-left").hover(function() {
                $(".vertical").hasClass("collapsed") && $(".vertical").addClass("hover"), $(".narrow").hasClass(
                    "open") || $(".vertical").addClass("hover")
            }, function() {
                $(".vertical").hasClass("collapsed") && $(".vertical").removeClass("hover"), $(".narrow").hasClass(
                    "open") || $(".vertical").removeClass("hover")
            }), $(".toggle-sidebar").on("click", function() {
                $(".navbar-slide").toggleClass("show")
            }),
            function(a) {
                a(".dropdown-menu a.dropdown-toggle").on("click", function(e) {
                    return a(this).next().hasClass("show") || a(this).parents(".dropdown-menu").first().find(
                        ".show").removeClass("show"), a(this).next(".dropdown-menu").toggleClass("show"), a(
                        this).parents("li.nav-item.dropdown.show").on("hidden.bs.dropdown", function(e) {
                        a(".dropdown-submenu .show").removeClass("show")
                    }), !1
                })
            }(jQuery), $(".navbar .dropdown").on("hidden.bs.dropdown", function() {
                $(this).find("li.dropdown").removeClass("show open"), $(this).find("ul.dropdown-menu").removeClass(
                    "show open")
            }), $(".file-panel .card").on("click", function() {
                $(this).hasClass("selected") ? ($(this).removeClass("selected"), $(this).find("bg-light").removeClass(
                    "shadow-lg"), $(".file-container").removeClass("collapsed")) : ($(this).addClass("selected"), $(
                    this).addClass("shadow-lg"), $(".file-panel .card").not(this).removeClass("selected"), $(
                    ".file-container").addClass("collapsed"))
            }), $(".close-info").on("click", function() {
                $(".file-container").hasClass("collapsed") && ($(".file-container").removeClass("collapsed"), $(
                    ".file-panel").find(".selected").removeClass("selected"))
            }), $(function() {
                $(".info-content").stickOnScroll({
                    topOffset: 0,
                    setWidthOnStick: !0
                })
            });
        var basic_wizard = $("#example-basic");
        basic_wizard.length && basic_wizard.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: !0
        });
        var vertical_wizard = $("#example-vertical");
        vertical_wizard.length && vertical_wizard.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });
        var form = $("#example-form");
        form.length && (form.validate({
            errorPlacement: function(e, a) {
                a.before(e)
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        }), form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(e, a, o) {
                return form.validate().settings.ignore = ":disabled,:hidden", form.valid()
            },
            onFinishing: function(e, a) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function(e, a) {
                alert("Submitted!")
            }
        }));
        var labels_data;
        var url = '/admin/ajax/licencas_operadores';
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            async: true,
            data: '',
            success: function(response) {

                var ChartOptions = {
                    maintainAspectRatio: !1,
                    responsive: !0,
                    legend: {
                        display: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: !1
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: !1,
                                color: colors.borderColor,
                                zeroLineColor: colors.borderColor
                            }
                        }]
                    }
                };
                var ChartData = {
                    labels: response.labels_titulos_lo,
                    datasets: [{
                        label: "Visitors",
                        barThickness: 10,
                        backgroundColor: base.primaryColor,
                        borderColor: base.primaryColor,
                        pointRadius: !1,
                        pointColor: "#3b8bba",
                        pointStrokeColor: "rgba(60,141,188,1)",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(60,141,188,1)",
                        data: response.data_titulos_lo,
                        fill: "",
                        lineTension: .1
                    }]
                };


                var lineChartData = {
                        labels: response.labels_op,
                        datasets: [{
                            label: "Visitors",
                            barThickness: 10,
                            borderColor: base.primaryColor,
                            pointRadius: !1,
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: response.datas_op,
                            fill: "",
                            lineTension: .2
                        }]
                    },
                    pieChartData = {
                        labels: response.labels_te,
                        datasets: [{
                            data: response.datas_te,
                            backgroundColor: chartColors,
                            borderColor: colors.borderColor
                        }]
                    },
                    areaChartData = {
                        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Visitors",
                            barThickness: 10,
                            backgroundColor: base.primaryColor,
                            borderColor: base.primaryColor,
                            pointRadius: !1,
                            pointColor: "#3b8bba",
                            pointStrokeColor: "rgba(60,141,188,1)",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(60,141,188,1)",
                            data: [19, 64, 37, 76, 68, 88, 54, 46, 58],
                            lineTension: .1
                        }, {
                            label: "Orders",
                            barThickness: 10,
                            backgroundColor: "rgba(210, 214, 222, 1)",
                            borderColor: "rgba(255, 255, 255, 1)",
                            pointRadius: !1,
                            pointColor: "rgba(210, 214, 222, 1)",
                            pointStrokeColor: "#c1c7d1",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [42, 43, 55, 40, 36, 68, 22, 66, 49],
                            lineTension: .1
                        }]
                    },
                    barChartjs = document.getElementById("barChartjs");
                barChartjs && new Chart(barChartjs, {
                    type: "bar",
                    data: ChartData,
                    options: ChartOptions
                });
                var lineChartjs = document.getElementById("lineChartjs");
                lineChartjs && new Chart(lineChartjs, {
                    type: "line",
                    data: lineChartData,
                    options: ChartOptions
                });
                var pieChartjs = document.getElementById("pieChartjs");
                pieChartjs && new Chart(pieChartjs, {
                    type: "pie",
                    data: pieChartData,
                    options: {
                        maintainAspectRatio: !1,
                        responsive: !0
                    }
                });
                var areaChartjs = document.getElementById("areaChartjs");
                areaChartjs && new Chart(areaChartjs, {
                    type: "line",
                    data: areaChartData,
                    options: ChartOptions
                }), $(".sparkline").length && ($(".inlinebar").sparkline([3, 2, 7, 5, 4, 6, 8], {
                    type: "bar",
                    width: "100%",
                    height: "32",
                    barColor: base.primaryColor,
                    barWidth: 4,
                    barSpacing: 2
                }), $(".inlineline").sparkline([2, 0, 5, 7, 4, 6, 8], {
                    type: "line",
                    width: "100%",
                    height: "32",
                    defaultPixelsPerValue: 5,
                    lineColor: base.primaryColor,
                    fillColor: "transparent",
                    minSpotColor: !1,
                    spotColor: !1,
                    highlightSpotColor: "",
                    maxSpotColor: !1,
                    lineWidth: 2
                }), $(".inlinepie").sparkline([5, 7, 4, 6, 8], {
                    type: "pie",
                    height: "32",
                    width: "32",
                    sliceColors: chartColors
                }));
                var gauge1, svgg1 = document.getElementById("gauge1");
                svgg1 && (gauge1 = Gauge(svgg1, {
                    max: 100,
                    dialStartAngle: -90,
                    dialEndAngle: -90.001,
                    value: 100,
                    showValue: !1,
                    label: function(e) {
                        return Math.round(100 * e) / 100
                    },
                    color: function(e) {
                        return e < 20 ? base.primaryColor : e < 40 ? base.successColor : e <
                            60 ? base
                            .warningColor : base.dangerColor
                    }
                }), function e() {
                    gauge1.setValue(90), gauge1.setValueAnimated(30, 1), window.setTimeout(e, 6e3)
                }());
                var gauge2, svgg2 = document.getElementById("gauge2");
                svgg2 && (gauge2 = Gauge(svgg2, {
                    max: 100,
                    value: 46,
                    dialStartAngle: -0,
                    dialEndAngle: -90.001
                }), function e() {
                    gauge2.setValue(40), gauge2.setValueAnimated(30, 1), window.setTimeout(e, 6e3)
                }());
                var gauge3, svgg3 = document.getElementById("gauge3");
                svgg3 && (gauge3 = Gauge(svgg3, {
                    max: 100,
                    dialStartAngle: -90,
                    dialEndAngle: -90.001,
                    value: 80,
                    showValue: !1,
                    label: function(e) {
                        return Math.round(100 * e) / 100
                    }
                }));
                var gauge4, svgg4 = document.getElementById("gauge4");
                svgg4 && (gauge4 = Gauge(document.getElementById("gauge4"), {
                    max: 500,
                    dialStartAngle: 90,
                    dialEndAngle: 0,
                    value: 50
                }));


            }
        });
        console.log(labels_data);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <script>
  $(document).ready(function() {
    // Inicialize a tabela DataTable
    // var table = $('#dataTable-1').DataTable({
    //     // Configurações da sua tabela DataTable
    // });

    // Adicione um botão de exportação
    // $('#dataTable-1_wrapper').prepend('<h2>SERVIÇO FIXO - FEIXES HERTZIANOS</h2>');
    // $('#dataTable-1_wrapper').prepend('<h3>UIT-R F.387 (FAIXADA DOS 11 GHz)  B = 28MHz</h3>');
    // $('#dataTable-1_wrapper').append('<button id="export-button">Exportar para Excel</button>');

    // Lidar com o evento de clique do botão de exportação
    $('#export-button').on('click', function() {
        // Obtenha os dados da tabela DataTable
        var data = table.rows().data().toArray();

        // Mapeie os dados para incluir apenas as colunas desejadas
        var filteredData = data.map(function(row) {
            return [
                row[1], // Canal
                row[2], // fn (MHz)
                row[3], // f'n (MHz)
                row[4], // A
                row[5], // B
                row[6], // Entidade
                row[7]  // Observação
            ];
        });

        // Adicione o título das colunas com estilo amarelo
        var header = [
            'Canal',
            'fn (MHz)',
            'f´n (MHz)',
            'A',
            'B',
            'Entidade',
            'Observação'
        ];

        // Adicione os títulos acima da tabela
        var title1 = ['SERVIÇO FIXO - FEIXES HERTZIANOS'];
        var title2 = ['UIT-R F.387 (FAIXADA DOS 11 GHz)  B = 28MHz'];
        
        // Converta os dados para um formato que js-xlsx entenda e adicione o fundo amarelo
        var dataArray = [title1, title2, header].concat(filteredData);

        // Crie um objeto de workbook usando js-xlsx
        var ws = XLSX.utils.aoa_to_sheet(dataArray);
        
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

        // Salve o arquivo Excel
        XLSX.writeFile(wb, 'Plano de frequencias IIII.xlsx');
    });
});


    </script>
  <script>
    $(document).ready(function() {
      // Inicialize a tabela DataTable
      // var table = $('#dataTable-1').DataTable({
      //     // Configurações da sua tabela DataTable
      // });
  
      // Adicione um botão de exportação
      // $('#dataTable-1_wrapper').prepend('<h2>SERVIÇO FIXO - FEIXES HERTZIANOS</h2>');
      // $('#dataTable-1_wrapper').prepend('<h3>UIT-R F.387 (FAIXADA DOS 11 GHz)  B = 28MHz</h3>');
      // $('#dataTable-1_wrapper').append('<button id="export-button">Exportar para Excel</button>');
  
      // Lidar com o evento de clique do botão de exportação
      $('#export-button-frequencia-mov').on('click', function() {
          // Obtenha os dados da tabela DataTable
          var data = table.rows().data().toArray();
  
          // Mapeie os dados para incluir apenas as colunas desejadas
          var filteredData = data.map(function(row) {
              return [
                  row[1], // n
                  row[2], // ML(estação móvel)
                  row[3], // FB(estação fixa)
                  row[4], // ENTIDADE/Localização (coordenadas outra coluna ) onde o equipamento stá instalado
                  row[5], // TONS DE PROT.
                  row[6]  // NOTAS
              ];
          });
  
          // Adicione o título das colunas com estilo amarelo
          var header = [
              'n',
              'ML(estação móvel)',
              'FB(estação fixa) ',
              'ENTIDADE/Localização (coordenadas outra coluna ) onde o equipamento stá instalado',
              'TONS DE PROT.',
              'NOTAS'
          ];
  
          // Adicione os títulos acima da tabela
          var title1 = ['SMT02 - SERV MOV TERRESTRE / 454-469.375 MHz / 431 CANAIS (12.5 KHz)'];
          var title2 = ['R01-LUANDA'];
          
          // Converta os dados para um formato que js-xlsx entenda e adicione o fundo amarelo
          var dataArray = [title1, title2, header].concat(filteredData);
  
          // Crie um objeto de workbook usando js-xlsx
          var ws = XLSX.utils.aoa_to_sheet(dataArray);
          
          var wb = XLSX.utils.book_new();
          XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
  
          // Salve o arquivo Excel
          XLSX.writeFile(wb, 'PLANO DE FREQUÊNCIAS-SMT02 - SERV MOV TERRESTRE.xlsx');
      });
  });
  
  
      </script>
</body>
