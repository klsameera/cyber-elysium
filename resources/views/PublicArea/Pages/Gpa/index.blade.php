@extends('PublicArea.Layouts.app')
@section('head')
<div class="page-title-area" style="padding-top: 0vh">
</div>
@endsection
@section('content')
<section class="shopping-cart-area ptb-100" style="min-height: 90vh">
    <div class="container">
        <div class="row">
            @if ($settings->status==0)
            <div class="col-lg-9">
                <div style="margin: auto">
                    <div class="text-center">
                        <img src="{{ asset('img/oops.jpg')  }}" alt="Progile Image" class="oops-img" width="300px">
                        <br>
                        <h5 class="text-center text-muted">
                            Oops! Please select A Grade method and click save..
                        </h5>
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-9">
                <form class="cart-controller" action="javascript:void(0)" onsubmit="addCourse()" id="add_corse_form"
                    method="POST">
                    @csrf
                    <div class="row pt-3">
                        <div class="col-lg-3 col-sm-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Subject Code</b></label>
                                <input type="text" name="code" id="course_name" class="form-control"
                                    data-error="Please enter subject name" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>No of credit</b></label>
                                <select class="form-control credit-selector" id="inp_credit" name="credit"
                                    style="width: 90%" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Grade</b></label>
                                <select class="form-control grade-selector" id="inp_grade" name="grade"
                                    style="width: 90%" required>
                                    @if ($settings->gradeA==1)
                                    <option value="4.3">A+</option>
                                    @else
                                    <option value="4.0">A+</option>
                                    @endif
                                    <option value="4">A</option>
                                    <option value="3.7">A-</option>
                                    <option value="3.3">B+</option>
                                    <option value="3">B</option>
                                    <option value="2.7">B-</option>
                                    <option value="2.3">C+</option>
                                    <option value="2">C</option>
                                    <option value="1.7">C-</option>
                                    <option value="1.3">D+</option>
                                    <option value="1">D</option>
                                    <option value="0">E</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="form-group">
                                <label class="form-control-label"><b>Year</b></label>
                                <select class="form-control year-selector" onchange="yearSelect()" id="inp_year"
                                    name="year" style="width: 90%" required>
                                    <option value="1"
                                        {{ (isset($_COOKIE['select_year']) && $_COOKIE['select_year'] == 1)?'selected':'' }}>
                                        1st Year</option>
                                    <option value="2"
                                        {{ (isset($_COOKIE['select_year']) && $_COOKIE['select_year'] == 2)?'selected':'' }}>
                                        2nd Year</option>
                                    <option value="3"
                                        {{ (isset($_COOKIE['select_year']) && $_COOKIE['select_year'] == 3)?'selected':'' }}>
                                        3rd Year</option>
                                    <option value="4"
                                        {{ (isset($_COOKIE['select_year']) && $_COOKIE['select_year'] == 4)?'selected':'' }}>
                                        4th Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="form-group mt-3">
                                <button class="btn btn-success" type="submit" id="add-subject">Add</button>
                            </div>
                        </div>
                    </div>
                    <div id="course_list">
                    </div>
                </form>
            </div>
            @endif
            <div class="col-lg-3">
                <form action="{{ route('gpa.settings.store') }}" method="POST" onsubmit="return validate()">
                    <div class="row">
                        @csrf
                        <div class="col-12 cart-totals mt-0">
                            <h3 class="cart-checkout-title mb-1">Grade A+ choose</h3>
                            @if ($settings->status==0)
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="1" id="method1" name="gradeA"
                                            type="radio" {{ $settings->gradeA==1?'checked':'' }}>
                                        <label class="custom-control-label" for="method1">A+ = 4.3</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" value="2" id="method2" name="gradeA"
                                            type="radio" {{ $settings->gradeA==2?'checked':'' }}>
                                        <label class="custom-control-label" for="method2">A+ = 4.0</label>
                                    </div>
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-success">
                                        save
                                    </button>
                                </li>
                            </ul>
                            @else
                            <div class="pl-4 mt-0">
                                {!! $tc->getGradeA($settings->gradeA) !!}
                            </div>
                            <h3 class="cart-checkout-title mb-1 mt-2">Year Percentage</h3>
                            <div class="form-check pl-1">
                                <input id="yearPercentage"
                                    {{ (isset($_COOKIE['year_percentage_enable']) && $_COOKIE['year_percentage_enable']=='checked')?'checked':'' }}
                                    type="checkbox">
                                <label class="form-check-label" for="ship-different-address">&nbsp; Year Percentage
                                    Enable</label>
                            </div>
                            @endif
                            <div id="year_selection" class="d-none">
                                <div class="row mb-1">
                                    <div class="col-6 pl-4">
                                        <input id="1_year" name="1_year" {{ $settings->is_1_year==1?'checked':'' }} type="checkbox">
                                        <label class="form-check-label" for="1_year">&nbsp; 1st Year</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="year_1" id="year_1" class="form-control d-none"
                                            min="0" step="5" value="{{ $settings->year_1?$settings->year_1:0 }}" style="height: 30px; width:80%;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6 pl-4">
                                        <input id="2_year" name="2_year" {{ $settings->is_2_year==1?'checked':'' }} type="checkbox">
                                        <label class="form-check-label" for="2_year">&nbsp; 2nd Year</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="year_2" id="year_2" class="form-control d-none"
                                            min="0" step="5" value="{{ $settings->year_2?$settings->year_2:0 }}" style="height: 30px; width:80%;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6 pl-4">
                                        <input id="3_year" name="3_year" {{ $settings->is_3_year==1?'checked':'' }} type="checkbox">
                                        <label class="form-check-label" for="3_year">&nbsp; 3rd Year</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="year_3" id="year_3" class="form-control d-none"
                                            min="0" step="5" value="{{ $settings->year_3?$settings->year_3:0 }}" style="height: 30px; width:80%;">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-6 pl-4">
                                        <input id="4_year" name="4_year" {{ $settings->is_4_year==1?'checked':'' }} type="checkbox">
                                        <label class="form-check-label" for="4_year">&nbsp; 4th Year</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="number" name="year_4" id="year_4" class="form-control d-none"
                                            min="0" step="5" value="{{ $settings->year_4?$settings->year_4:0 }}" style="height: 30px; width:80%;">
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <button type="submit" class="btn btn-warning" style="min-width: 30%">Update Settings</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 cart-totals pt-3" id="gpa_totals">

                        </div>
                        <div class="col-12 mt-3">
                            <a href="{{ route('gpa.get.report') }}" class="btn btn-success" style="width: 100%">
                                Get Report
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        loadSummery();
        loadCoursesList();

        $(".credit-selector").select2({
            placeholder: "Select credit",
        });

        $(".grade-selector").select2({
            placeholder: "Select Grade",
        });

        $(".year-selector").select2({
            placeholder: "Select Grade",
        });

        if (getCookie('year_percentage_enable') == 'checked') {
            $('#year_selection').removeClass('d-none');
        } else {
            $('#year_selection').addClass('d-none');
        }

        if($("#1_year").is(":checked")){
            $('#year_1').removeClass('d-none');
            $("#year_1").prop('required',true);
        }

        if($("#2_year").is(":checked")){
            $('#year_2').removeClass('d-none');
            $("#year_2").prop('required',true);
        }

        if($("#3_year").is(":checked")){
            $('#year_3').removeClass('d-none');
            $("#year_3").prop('required',true);
        }

        if($("#4_year").is(":checked")){
            $('#year_4').removeClass('d-none');
            $("#year_4").prop('required',true);
        }

        {{-- $('#1st_year_table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        }); --}}
    });

    function addCourse() {
        var code = $('#course_name').val();
        var credit = $('#inp_credit').val();
        var grade = $('#inp_grade').val();
        var year = getCookie('select_year');

        var data = {
            code: code,
            credit: credit,
            grade: grade,
            year: year,
        };
        $.ajax({
            url: "{{ route('gpa.course.store') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: '',
            data: data,
            success: function (response) {
                loadCoursesList();
                loadSummery();
                $('#add_corse_form').trigger("reset");
                $('#inp_credit').select2().trigger("reset");
                $('#inp_grade').select2().trigger("reset");
                {{-- $('#inp_year').select2().trigger("reset"); --}}

            }
        });
    }

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

    function loadCoursesList() {
        $.ajax({
            url: "{{ route('gpa.course.all') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            dataType: '',
            success: function (response) {
                $('#course_list').html(response);
            }
        });
    }

    function delconf(url, title = "Do You Want To Remove This!") {
        $.confirm({
            title: 'Are You Sure,',
            content: title,
            autoClose: 'cancel|8000',
            type: 'red',
            confirmButton: "Yes",
            cancelButton: "Cancel",
            theme: 'material',
            backgroundDismiss: false,
            backgroundDismissAnimation: 'glow',
            buttons: {
                'Yes, Delete IT': function () {
                    $.ajax({
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'GET',
                        dataType: '',
                        success: function (response) {
                            loadSummery();
                            loadCoursesList()
                        }
                    });

                },
                cancel: function () {

                },
            }
        });
    }

    function yearSelect() {
        var year = $('#inp_year').val();
        setCookie('select_year', year, 999999)
    }

    $("#yearPercentage").change(function () {
        if ($(this).is(':checked')) {
            setCookie('year_percentage_enable', 'checked', 99999);
            $('#year_selection').removeClass('d-none');
            loadSummery();
        } else {
            setCookie('year_percentage_enable', 'not-checked', 99999);
            $('#year_selection').addClass('d-none');
            loadSummery();
        }

    });

    $("#1_year").change(function () {
        if ($(this).is(':checked')) {
            $('#year_1').removeClass('d-none');
            $("#year_1").prop('required',true);
        } else {
            $('#year_1').addClass('d-none');
            $("#year_1").prop('required',false);
        }
    });

    $("#2_year").change(function () {
        if ($(this).is(':checked')) {
            $('#year_2').removeClass('d-none');
            $("#year_2").prop('required',true);
        } else {
            $('#year_2').addClass('d-none');
            $("#year_2").prop('required',false);
        }
    });

    $("#3_year").change(function () {
        if ($(this).is(':checked')) {
            $('#year_3').removeClass('d-none');
            $("#year_3").prop('required',true);
        } else {
            $('#year_3').addClass('d-none');
            $("#year_3").prop('required',false);
        }
    });

    $("#4_year").change(function () {
        if ($(this).is(':checked')) {
            $('#year_4').removeClass('d-none');
            $("#year_4").prop('required',true);
        } else {
            $('#year_4').addClass('d-none');
            $("#year_4").prop('required',false);
        }
    });

    function validate(){
        if(getCookie('year_percentage_enable') == 'checked'){
            if($("#1_year").is(":checked")){
                var year1 = parseInt($('#year_1').val());
            }else{
                $('#year_1').val(0)
                var year1 = 0;
            }

            if($("#2_year").is(":checked")){
                var year2 = parseInt($('#year_2').val());
            }else{
                $('#year_2').val(0)
                var year2 = 0;
            }

            if($("#3_year").is(":checked")){
                var year3 = parseInt($('#year_3').val());
            }else{
                $('#year_3').val(0)
                var year3 = 0;
            }

            if($("#4_year").is(":checked")){
                var year4 = parseInt($('#year_4').val());
            }else{
                $('#year_4').val(0)
                var year4 = 0;
            }

            var total = year1 + year2 + year3 + year4

            if(total > 100){
                alert('Your total percentage higher than 100% ')
                return false;
            }else if(total < 100){
                alert('Your total percentage lower than 100% ')
                return false;
            }else{
                return true;
            }
        }
        return true;
    }

</script>
@endsection

@section('css')
<style>
    #add-subject {
        min-width: 150px;
    }

    .shopping-cart-area .cart-table table tbody tr td.product-subtotal .remove {
        margin-left: 0px !important;
    }

</style>
@endsection
