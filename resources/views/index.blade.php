@extends('pages.mainpage')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Table Items</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="tbl_items" width="100%">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Variant</th>
                            <th>Tipe</th>
                            <th>Harga</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection