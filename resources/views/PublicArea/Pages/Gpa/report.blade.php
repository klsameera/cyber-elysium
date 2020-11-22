@section('title','CyberElysium | GPA Final Report')
@section('ogtitle','CyberElysium | GPA Final Report')
@extends('PublicArea.Layouts.app')
@section('head')
<div class="page-title-area" style="padding-top: 0vh">
</div>
@endsection
@section('content')
<section class="shopping-cart-area ptb-100" style="min-height: 90vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <form class="cart-controller" action="javascript:void(0)">
                    <h6 class="text-info">All Courses</h6>
                    <div class="table-responsive">
                        <table class="table" id="courses_table">
                            <thead class="thead-light">
                                <tr class="text-left">
                                    <th>#</th>
                                    <th scope="col" class="d-none">Year</th>
                                    <th scope="col" style="width: 40%">Course Code</th>
                                    <th scope="col">No of credit</th>
                                    <th scope="col">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $key => $course)
                                <tr class="text-left">
                                    <td>{{ ++$key }}</td>
                                    <td class="product-name d-none">
                                        {!! $tc->getYear($course->year) !!}
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="single-product.html">
                                            {{ $course->code }}
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        {{ $course->credit }}
                                    </td>
                                    <td class="product-price">
                                        {!! $tc->getGrade($course->grade) !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-12 cart-totals mt-0" id="gpa_totals">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        loadSummery();
        var groupColumn = 1;
        var table = $('#courses_table').DataTable({
            "columnDefs": [{
                "targets": groupColumn
            }],
            "order": [
                [groupColumn, 'asc']
            ],
            "displayLength": 10,
            "drawCallback": function (settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;

                api.column(groupColumn, {
                    page: 'current'
                }).data().each(function (group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="group"><td colspan="5" style="background-color: #ececec;">' +
                            group + '</td></tr>'
                        );

                        last = group;
                    }
                });
            },
            buttons: [
                'excel', 'csv', 'pdf', 'copy'
            ],
            dom: 'Bfrtip',
            "language": {
                "emptyTable": "No data available in the table",
                "paginate": {
                    "previous": '<i class="fas fa-chevron-left text-dark"></i>',
                    "next": '<i class="fas fa-chevron-right text-dark"></i>'
                },
            }
        });

        // Order by the grouping
        $('#courses_table tbody').on('click', 'tr.group', function () {

            var currentOrder = table.order()[0];
            if (currentOrder[0] === groupColumn && currentOrder[1] === 'asc') {
                table.order([groupColumn, 'desc']).draw();
            } else {
                table.order([groupColumn, 'asc']).draw();
            }
        });
    });

    function loadSummery() {
        $.ajax({
            url: "{{ route('gpa.course.summery') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: '',
            success: function (response) {
                $('#gpa_totals').html(response);
            }
        });
    }

</script>
@endsection

@section('css')
<style>
    .paginate_button {
        margin-left: 10px;
        margin-right: 10px;
    }

</style>
@endsection
