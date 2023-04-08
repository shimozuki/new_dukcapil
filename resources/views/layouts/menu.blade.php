<li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
    <a href="{!! route('admin.dashboard') !!}"><i class="fa fa-home"></i><span>Home</span></a>
</li>
@can('read users')
<li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
</li>
@endcan
@can('read tags')
<li class="{{ Request::is('admin/tags*') ? 'active' : '' }}">
    <a href="{!! route('tags.index') !!}"><i class="fa fa-tags"></i><span>{{ucfirst(config('settings.tags_label_plural'))}}</span></a>
</li>
@endcan
@can('viewAny',\App\Document::class)
<li class="{{ Request::is('admin/documents*') ? 'active' : '' }}">
    <a href="{!! route('documents.index') !!}"><i class="fa fa-folder"></i><span>{{ucfirst(config('settings.document_label_plural'))}}</span></a>
</li>
@endcan
<li class="{{ Request::is('admin/advanced/custom-fields*') ? 'active' : '' }}">
    <a href="{!! route('customFields.index') !!}"><i class="fa fa-file-text-o"></i><span>Laporan</span></a>
</li>