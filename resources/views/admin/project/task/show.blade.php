@extends('layouts.admin.app')
@section('title', 'List Of Sells')

@section('css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.jqueryui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.jqueryui.min.css">
@endsection

    @section('admin_content')

    <section class="card container">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Project Info</h3>
                    <p>Project Name: {{ $show->project ? $show->project->name: '' }}</p>
                    <p>Title: {{ $show->title }}</p>
                </div>
                <div class="col-md-6">
                    <h3>Project Description Duration</h3>
                    <p>{{ $show->des }}</p>
                    <p>{{ $show->start_date }} to {{ $show->end_dete }}</p>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>

</script>

@endsection
