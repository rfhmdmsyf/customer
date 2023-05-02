@extends('template.main')
@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   

   <hr>
   <hr>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
   
                <div class="col-md-12">
                    <a href="{{ route('create')}}">
                        <button class="btn btn-md btn-round btn-primary float-right">

                            <i class="fa fa-plus-circle"></i>Tambah
                        </button>
                    </a>

                    

                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <div class="card">
                        <table class="table">
                          <thead>
                            <tr>
                              <th style="width: 5%">id</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Alamat</th>
                              <th >Kota</th>
                              <th style="">Email</th>
                              <th >Hp</th>
                              <th>Perusahaan</th>
                            
                          </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $item) 
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{$item->nama_customer}}</td>
                            <td>{{$item->alamat}}</td>
                           <td>{{$item->kota}}</td>
                           <td>{{$item->email}}</td>
                           
                           <td>{{$item->hp}}</td>
                           <td>{{$item->perusahaan}}</td>
                         
                         
                      </tr>
        
        
                      @php
                      $no++;
                  @endphp
                  @endforeach 
                   
                  </tbody>
                     </table>
                    </div>
                </div>
        </div>
    </div>
    
                </table>
            </div>
        </div>
    </div>

  
@endsection
   
