@extends('layouts.app')
@section('title','Show '.ucfirst(config('settings.tags_label_singular')))
@section('content')
<section class="content-header">
    <h1>
        {{ucfirst(config('settings.tags_label_singular'))}}
        <span class="pull-right">
            <a href="{{ route('tags.index') }}" class="btn btn-default">
                <i class="fa fa-chevron-left" aria-hidden="true"></i> Back
            </a>
            <a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-primary">
                <i class="fa fa-edit" aria-hidden="true"></i> Edit
            </a>
            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'delete','style'=>'display:inline']) !!}
            {!! Form::button('<i class="fa fa-trash"></i> Delete', [
            'type' => 'submit',
            'title' => 'Delete',
            'class' => 'btn btn-danger',
            'onclick' => "return conformDel(this,event)",
            ]) !!}
            {!! Form::close() !!}
        </span>
    </h1>
</section>
<div class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tag" data-toggle="tab" aria-expanded="true">{{ucfirst(config('settings.tags_label_singular'))}}</a>
            </li>
            <li class=""><a href="#tab_permissions" data-toggle="tab" aria-expanded="false">Persyaratan</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tag">
                @include('tags.show_fields')
            </div>
            <div class="tab-pane" id="tab_permissions">
                <div>
                   {!! $tag->persyaratan !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection