@if($courses_1_year->count() > 0)
<div>
    <h6 class="text-info">1st Year Courses</h6>
    <div class="cart-table table-responsive">
        <table class="table table-bordered" id="1st_year_table">
            <thead>
                <tr class="text-left">
                    <th>#</th>
                    <th scope="col" style="width: 40%">Course Code</th>
                    <th scope="col">No of credit</th>
                    <th scope="col">Grade</th>
                    <th scope="col" style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses_1_year as $key => $course)
                <tr class="text-left">
                    <td>{{ ++$key }}</td>
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
                    <td class="product-subtotal">
                        <a href="javascript:void(0)" class="remove text-center"
                            onclick="delconf('{{ route('gpa.course.remove', $course->id) }}')">
                            <i class="bx bx-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

@if($courses_2_year->count() > 0)
<div>
    <h6 class="text-info">2nd Year Courses</h6>
    <div class="cart-table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="text-left">
                    <th>#</th>
                    <th scope="col" style="width: 40%">Course Code</th>
                    <th scope="col">No of credit</th>
                    <th scope="col">Grade</th>
                    <th scope="col" style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses_2_year as $key => $course)
                <tr class="text-left">
                    <td>{{ ++$key }}</td>
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
                    <td class="product-subtotal">
                        <a href="javascript:void(0)" class="remove text-center"
                            onclick="delconf('{{ route('gpa.course.remove', $course->id) }}')">
                            <i class="bx bx-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

@if($courses_3_year->count() > 0)
<div>
    <h6 class="text-info">3rd Year Courses</h6>
    <div class="cart-table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="text-left">
                    <th>#</th>
                    <th scope="col" style="width: 40%">Course Code</th>
                    <th scope="col">No of credit</th>
                    <th scope="col">Grade</th>
                    <th scope="col" style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses_3_year as $key => $course)
                <tr class="text-left">
                    <td>{{ ++$key }}</td>
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
                    <td class="product-subtotal">
                        <a href="javascript:void(0)" class="remove text-center"
                            onclick="delconf('{{ route('gpa.course.remove', $course->id) }}')">
                            <i class="bx bx-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endif

@if($courses_4_year->count() > 0)
<div>
    <h6 class="text-info">4th Year Courses</h6>
    <div class="cart-table table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="text-left">
                    <th>#</th>
                    <th scope="col" style="width: 40%">Course Code</th>
                    <th scope="col">No of credit</th>
                    <th scope="col">Grade</th>
                    <th scope="col" style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses_4_year as $key => $course)
                <tr class="text-left">
                    <td>{{ ++$key }}</td>
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
                    <td class="product-subtotal">
                        <a href="javascript:void(0)" class="remove text-center"
                            onclick="delconf('{{ route('gpa.course.remove', $course->id) }}')">
                            <i class="bx bx-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

@if($courses->count() == 0)
<div class="text-center">
    <img src="{{ asset('img/oops.jpg')  }}" alt="Progile Image" class="oops-img" width="300px">
    <br>
    <h5 class="text-center text-muted">
        Oops! You did't added any course yet. Let's add courses
    </h5>
</div>
@endif
