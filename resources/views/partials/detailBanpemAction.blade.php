@can($viewGate)
    <a class="btn btn-xs btn-primary" data-toggle="tooltip" title data-original-title="Lihat Rincian" href="{{ route('admin.' . $crudRoutePart . '.show', [$row->year, $row->provinsi]) }}">
        <i class="fal fa-search-plus"></i> <!--{{ trans('global.view') }}-->
    </a>
@endcan
