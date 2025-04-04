@extends('layouts.app')
@section('content')

@include('services.sop-assistance.sop-hero')
@include('services.sop-assistance.sub-hero')
@include('services.sop-assistance.comparison')
@include('services.sop-assistance.steps')
@include('./components/stats')
@include('./components/services-components.trust')
@include('./components.services-components.choose-us')
@include('./components/testimonials')
@include('services.sop-assistance.sop')
@include('./components/cta-button')
@include('services.sop-assistance.faqs')
@include('services.sop-assistance.didyouknow')


@endsection