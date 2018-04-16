@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat datang di website rebbit!<br>
                    Tips untuk best experience:<br>
                    1. Tekan tombol write dan isi sesuai keinginan anda<br>
                    2. Browse post seluruh pengguna dan post anda, klik title untuk membuka selengkapnya<br>
                    3. Anda bisa mengedit dan mendelete posting mana saja<br>
                    4. Selamat beraspirasi!
            </div>
        </div>
    </div>
</div>
@endsection
