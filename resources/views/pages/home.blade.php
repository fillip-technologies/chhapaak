@extends('layouts.app')

@section('title', 'Home - Chhapaak Resort | Where Nature Meets Luxury')

@section('content')
<x-home.hero />
<x-home.roompreview />
<x-home.experiences />
<x-home.eventspace />
<x-home.waterpark />
<x-home.gallery />
{{-- <x-home.cta /> --}}
@endsection