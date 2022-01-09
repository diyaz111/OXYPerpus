@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
<div class="row">

  
    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title pull-left">Data Buku</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Judul
                          </th>
                          <th>
                            ISBN
                          </th>
                          <th>
                            Pengarang
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Stok
                          </th>
                          <th>
                            Rak
                          </th>
                        
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          <td class="py-1">
                          @if($data->cover)
                            <img src="{{url('images/buku/'. $data->cover)}}" alt="image" style="margin-right: 10px;" />
                          @else
                            <img src="{{url('images/buku/default.png')}}" alt="image" style="margin-right: 10px;" />
                          @endif
                          <a href="{{route('buku.show', $data->id)}}"> 
                            {{$data->judul}}
                          </a>
                          </td>
                          <td>
                          
                            {{$data->isbn}}
                          
                          </td>

                          <td>
                            {{$data->pengarang}}
                          </td>
                          <td>
                            {{$data->tahun_terbit}}
                          </td>
                          <td>
                            {{$data->jumlah_buku}}
                          </td>
                          <td>
                            {{$data->lokasi}}
                          </td>
                          <td>
                          <div class="btn-group dropdown">
                          
                          </form>
                           
                          </div>
                        </div>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
@endsection