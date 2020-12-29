<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="GPA calculator, university gpa calculate, best gpa calculator" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description','best gpa calculator in the world')" />
    <title>@yield('title','CyberElysium | Home')</title>

    <meta property="og:title" content="@yield('ogtitle','CyberElysium')" />
    <meta property="og:url" content="{{Request::url()}}" />

    <meta property="og:type" content="@yield('ogtype','website')" />
    <meta property="og:article:published_time" content="@yield('ogarticlepublish','')"  />
    <meta property="og:article:section" content="@yield('ogarticlesection','')"  />

    <meta property="og:video:tag" content="@yield('ogvideotag','')"  />

    <meta property="og:image" content="@yield('ogimage',asset("img/logo.png") )"  />
    <meta property="og:image:secure_url" content="@yield('ogimage', asset("img/logo.png") )"  />
    <meta property="og:image:width" content="@yield('ogimagewidth',500)"  />
    <meta property="og:image:height" content="@yield('ogimageheight',200)"  />

    @php
    $curr_url = Route::currentRouteName();
    @endphp
    <!-- Links of CSS files -->
    @include('PublicArea.Includes.css')

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Title -->
</head>

<body>
    <div class="page-title-area" style="padding-top: 0vh">
    </div>
    <section class="shopping-cart-area ptb-100" style="min-height: 90vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="" action="javascript:void(0)">
                        <h6 class="text-info">All Courses</h6>
                        <div class="table-responsive">
                            <table class="table" id="courses_table">
                                <thead class="thead-light">
                                    <tr class="text-left">
                                        <th>#</th>
                                        <th scope="col">Year</th>
                                        <th scope="col" style="width: 40%">Course Code</th>
                                        <th scope="col">No of credit</th>
                                        <th scope="col">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $key => $course)
                                    <tr class="text-left">
                                        <td>{{ ++$key }}</td>
                                        <td class="product-name">
                                            {!! $tc->getYear($course->year) !!}
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="javascript:void(0)">
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
                        <br>
                        <div class="col-lg-12 mt-3 table-responsive" id="gpa_totals">
                            <h4>GPA summary</h4>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            No of course
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $course_count }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            No of credit
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $credit_count }}
                                        </td>
                                    </tr>
                                    @if ($courses_1_year->count() > 0)
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            1st year GPA
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $tc->Gpa($yr1_gpa) }}
                                        </td>
                                    </tr>
                                    @endif
                                    @if ($courses_2_year->count() > 0)
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            2nd year GPA
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $tc->Gpa($yr2_gpa) }}
                                        </td>
                                    </tr>
                                    @endif
                                    @if ($courses_3_year->count() > 0)
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            3rd year GPA
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $tc->Gpa($yr3_gpa) }}
                                        </td>
                                    </tr>
                                    @endif
                                    @if ($courses_4_year->count() > 0)
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            4th year GPA
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            {{ $tc->Gpa($yr4_gpa) }}
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            <b>Final GPA</b>
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            <b>{{ $tc->Gpa($total_gpa) }}</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            <b>Final Class</b>
                                        </td>
                                        <td class="pb-10" style="padding-bottom: 10px;">
                                            <b>{!! $tc->finalClass($total_gpa) !!}</b>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
