@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box" style="position: relative">
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <a href="/edit/{{$slug}}"><button style="position: absolute;z-index: 1;right: 22px;top: 23px;" class="btn btn-sm btn-success"><i class="fa fa-edit"> Edit</i></button></a>
                        @endif
                        <div class="box-body">
                            <div class="ck ck-reset ck-editor ck-rounded-corners">
                                <div class="ck ck-editor__main">
                                    <div class="ck-restricted-editing_mode_standard ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred" style="border: none;min-height: 80vh;">
                                        {!! $content ?: 'Đang cập nhật' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
