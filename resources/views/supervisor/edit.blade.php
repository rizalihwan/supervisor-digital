{{-- @extends('layouts.app', ['title' => 'PageSupervisor'])
@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{ route('supervisor.update', $data->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{ $data->user_id }}">
                            <input type="hidden" name="mapel" value="{{ $data->mapel }}">
                            <input type="hidden" name="file" value="{{ $data->file }}">
                            <br/>
                            <label for="stat">Keputusan Penilaian untuk guru : {{ $data->user->name }}</label>
                            <select name="status" id="stat" class="form-control">
                                <option value="0" @if($data->status == 0) selected @endif>Belum Dikonfirmasi</option>
                                <option value="1" @if($data->status == 1) selected @endif>Lulus Penilaian</option>
                                <option value="2" @if($data->status == 2) selected @endif>Tidak Lulus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-1">Kirim</button>
                            <a href="{{ route('supervisor.index') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}
