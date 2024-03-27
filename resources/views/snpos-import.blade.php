@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="col-auto d-flex justify-content-end">
                        <button class="btn btn-primary right" type="button" data-bs-toggle="modal"
                            data-bs-target="#CnposImportModal">Importar</button>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Importação SNPOS</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Proprietário</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SNPOS</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bruto</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Líquido</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($snpos as $snpo)
                                            <tr>
                                                <td>
                                                </td>
                                                <td>
                                                    {{$snpo->snpos}}
                                                </td>
                                                <td class="align-middle text-center">
                                                  R$ {{$snpo->bruto}}
                                                </td>
                                                <td class="align-middle text-center">
                                                  R$ {{$snpo->liquido}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
