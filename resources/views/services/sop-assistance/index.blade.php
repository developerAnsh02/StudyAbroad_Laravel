@extends('layouts.app')
@section('content')

@include('services.sop-assistance.sop-hero')
@include('services.sop-assistance.sub-hero')
@include('services.sop-assistance.choose-us')
@include('services.sop-assistance.comparison')
@include('services.sop-assistance.steps')
@include('./components/stats')
@include('services.sop-assistance.sample')
@include('services.sop-assistance.sop')
@include('./components/cta-button')
@include('services.sop-assistance.testimonials')
@include('services.sop-assistance.faqs')
@include('services.sop-assistance.didyouknow')


@endsection