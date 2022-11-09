@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-12">
                    <div class="box response">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th>TÊN</th>
                                        <th>SLUG</th>
                                        <th>PARENT</th>
                                        <th>POSITION</th>
                                        <th style="width: 100px">
                                            <span class="addTime  pointer"><i class="fa fa-plus"></i> THÊM</span>
                                        </th>
                                    </tr>
                                    @forelse($list_menu as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->parent_id}}</td>
                                            <td>{{$item->position}}</td>
                                            <td>
                                                <span class="pointer edit mr-1"
                                                      data-item="{{$item}}">
                                                    <i class="fa fa-edit fa-15x" aria-hidden="true"></i>
                                                </span>
                                                <span class="pointer delete" data-id="{{$item->id}}">
                                                    <i class="fa fa-trash-o fa-15x" aria-hidden="true"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->


                    </div>
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="myForm" method="post" action="" novalidate="">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Thêm mới</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="required">Tên</label>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control name"
                                                               required=""
                                                               data-validation-required-message="Tên không được bỏ trống">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Slug</label>
                                                    <input type="text" name="slug" class="slug form-control">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Parent</label>
                                                    <select name="parent_id" id="" class="select2 form-control parent_id" data-placeholder="Chọn menu cha">
                                                        <option></option>
                                                        @forelse($list_menu as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="number" class="form-control position" name="position" value="0">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary float-right">Save changes</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('script')
    <script>
        $(document).on('click', '.addTime', function () {
            console.log(123123);
            resetValue();
            $('#myModal').modal('show');
        })

        // edit
        $(document).on('click', '.edit', async function () {
            let item = $(this).data('item');
            let form = $('#myForm');
            form.attr('action', '/menu/' + item.id);
            $('#myModal #myModalLabel').html('Cập nhật').change();
            form.append('<input name="_method" type="hidden" value="PUT" class="_method" />');

            $('.name').val(item.name);
            $('.slug').val(item.slug);
            $('.parent_id').val(item.parent_id).change();
            $('.position').val(item.position);
            $('#myModal').modal({show: true})
        });

        function resetValue() {
            let form = $('#myForm');
            form.attr('action', '');
            $('.parent_id').val('').change();
            $('._method').remove();
            $('#myModal #myModalLabel').html('Thêm mới').change();
            form.trigger('reset');
        }
    </script>
@endsection