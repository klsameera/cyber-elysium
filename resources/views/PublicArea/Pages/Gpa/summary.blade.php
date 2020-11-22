<h3 class="cart-checkout-title">GPA summary</h3>
<ul>
    <li>No of course <span>{{ $course_count }}</span></li>
    <li>No of credit <span>{{ $credit_count }}</span></li>
    @if ($courses_1_year->count() > 0)
    <li>1st year GPA <span>{{ $tc->Gpa($yr1_gpa) }}</span></li>
    @endif
    @if ($courses_2_year->count() > 0)
    <li>2nd year GPA <span>{{ $tc->Gpa($yr2_gpa) }}</span></li>
    @endif
    @if ($courses_3_year->count() > 0)
    <li>3rd year GPA <span>{{ $tc->Gpa($yr3_gpa) }}</span></li>
    @endif
    @if ($courses_4_year->count() > 0)
    <li>4th year GPA <span>{{ $tc->Gpa($yr4_gpa) }}</span></li>
    @endif
    <li><b>Final GPA</b> <span><b>{{ $tc->Gpa($total_gpa) }}</b></span></li>
    <li><b>Final Class</b> <span><b>{!! $tc->finalClass($total_gpa) !!}</b></span></li>
</ul>
