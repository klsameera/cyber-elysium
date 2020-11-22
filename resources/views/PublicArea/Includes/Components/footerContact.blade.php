<h6 class="text-white"><i>Contacts</i> </h6>
<ul class="address">
    <li>
        <i class="bx bxs-phone-call"></i>
        <a href="tel:+1-(514)-312-5678">{{ $contacts->telephone }}</a>
        <a href="tel:+1-(514)-312-6677">{{ $contacts->mobile }}</a>
        <a href="tel:+1-(514)-312-6677">{{ $contacts->fax }}</a>
    </li>
    <li>
        <i class="bx bxs-envelope"></i>
        <a href="mailto:{{ $contacts->email }}">hello@seqty.com</a>
    </li>
    <li class="location">
        <i class="bx bxs-location-plus"></i>
        {{ $contacts->address }}
    </li>
</ul>
