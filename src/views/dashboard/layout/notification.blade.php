@if (session('danger'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('danger') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (session('info'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-info alert-dismissible fade show" role="alert">
  {{ session('info') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (session('warning'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ session('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (session('success'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (null !== app('request')->input('success'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-success alert-dismissible fade show" role="alert">
  {{ app('request')->input('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (null !== app('request')->input('info'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-info alert-dismissible fade show" role="alert">
  {{ app('request')->input('info') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if (null !== app('request')->input('warning'))
<div style="margin: 0px 15px 21px 15px;" class="alert alert-warning alert-dismissible fade show" role="alert">
  {{ app('request')->input('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif