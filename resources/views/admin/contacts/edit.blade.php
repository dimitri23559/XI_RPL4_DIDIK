@extends('layouts.app')
@section('title','Didik'|'Dahsboard')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Form Edit</strong> Contact Us
                        </div>
                        <div class="card-body card-block">
                            <form action="{{ route('contacts.update', $contact->id) }}" method="post"
                                class="">
                                @csrf
                                <div class="form-group">
                                    <label for="nf-nama" class=" form-control-label">Nama</label>
                                    <input type="text" id="nf-nama" name="nama" class="form-control"
                                        value="{{ $contact->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Email</label>
                                    <input type="email" id="nf-email" name="email" class="form-control"
                                        value="{{ $contact->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="nf-password" class=" form-control-label">Pesan</label>
                                    <textarea name="pesan" class="form-control" id="" cols="30"
                                        rows="10">{{ $contact->pesan }}</textarea>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Ubah
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection