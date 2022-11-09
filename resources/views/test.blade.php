@extends('layouts.master')
@section('content')
    <style>
        .ck-restricted-editing_mode_standard.ck-editor__editable{
            min-height: 70vh;
        }
    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <form action="/test" method="post">
                        @csrf
                        <input type="hidden" class="slug" name="slug" value="{{$slug}}">
                        <div class="box">
                            <div class="box-body">
                                <form>
                                    <textarea id="editor" name="editor" rows="10" cols="80">{!! $content !!}</textarea>
                                </form>
                            </div>
                            <div class="box-footer">
                                <button class="btn btn-success update">Lưu lại</button>
                            </div>
                        </div>
                        <!-- /.box -->
                    </form>

                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    {{--<script src="{{asset('assets/vendor_components/ckeditor/ckeditor5.js')}}"></script>--}}
    {{--<script src="{{asset('js/pages/ckeditor.js')}}"></script>--}}

    <script>
        // $(document).on('click','.update',function (e) {
        //     e.preventDefault();
        //     let editor = myEditor.getData();
        //     let key = $('.key')
        //     console.log(123,editor,key);
        //     $.ajax({
        //         url:'/test',
        //         method:'post',
        //         data:{
        //             key:key,
        //             editor:editor
        //         },
        //         success:function (data) {
        //             if (data){
        //                 setTimeout(function () {
        //                     location.reload();
        //                 }, 1000);
        //             }
        //
        //         }
        //     })
        //
        // })
    </script>
@endsection
