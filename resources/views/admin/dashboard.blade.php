<x-admin-layout> <!--Usando o componente Laravel Blade em vez da diretiva @ext
   end-->
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">AdmINLTE 3 Simplified</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">AdmINLTE 3 Simplified</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Modal com formulario valida em tempo Real</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Tudo feito do jeito Livewire</h6>

                                <p class="card-text">A medida que vai degitando o laviwire trabalhar na back fazendo request sempre
                                </p>
                                <a href="{{route('admin.users') }}" class="btn btn-primary">Vai Agora</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Widgets</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Alguns Widgets do AdmiLT3</h6>

                                <p class="card-text">Simplifiquei a quantidade de widgets trouxe so o necessario.</p>
                                <a href="{{route('admin.widgets') }}" class="btn btn-primary">Vai Agora</a>
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Graficos</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Alguns Graficos do AdmiLT3</h6>

                                <p class="card-text">Simplifiquei a quantidade de graficos trouxe so o necessario.</p>
                                <a href="{{route('admin.charts') }}" class="btn btn-primary">Vai Agora</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Forrms</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Alguns Forms do AdmiLT3</h6>

                                <p class="card-text">Simplifiquei a quantidade de forms trouxe so o necessario.</p>
                                <a href="{{route('admin.forms') }}" class="btn btn-primary">Vai Agora</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>

</x-admin-layout>
