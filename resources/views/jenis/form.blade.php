@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form Data jenis') }}
                </div>

                <div class="card-body">

                    <div class="card-body">
                        <form action="/jenis" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">nama jenis</label>
                                <select name="nm_jenis" id="" class="form-control">
                                <option value="">-Pilih jenis-</option>
                                <option value="Reguller">Reguller</option>
                                <option value="Express">Express</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">harga</label>
                                <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary float-end">submit</button>
                        </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
