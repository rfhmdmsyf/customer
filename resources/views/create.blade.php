@extends('template.main')
@section('konten')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p class="page-title float-left">Join Customer </p>
                    
                  
                  
                </div>
                
               <div class="col-md-12">
                <form action="{{ route('store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                           <div class=" form-grup ">
                             <label for="password">Nama Customer</label>
                             <input type="text"  placeholder="Nama Customer" name="nama">
                              
                            @error('judul')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                         @enderror
                            </div>
                         </div>
                   

                    <div class="col-md-6">
                        <div class=" form-grup ">
                          <label for="password">Alamat Customer</label>
                          <input type="text"  placeholder="Alamat Customer" name="alamat">
                           
                         @error('judul')
                         <small class="text-danger">
                         {{ $message }}
                         </small>
                      @enderror
                         </div>
                      </div>
                    

                      <div class="row">
                        <div class="col-md-6">
                           <div class=" form-grup ">
                             <label for="password">Kota Customer</label>
                             <input type="text"  placeholder="Kota Customer" name="kota">
                              
                            @error('judul')
                            <small class="text-danger">
                            {{ $message }}
                            </small>
                         @enderror
                            </div>
                         </div>
                    
        
                    <div class="col-md-6">
                        <div class=" form-grup ">
                          <label for="password">Email Customer</label>
                          <input type="text"  placeholder="Email Customer" name="email">
                           
                         @error('judul')
                         <small class="text-danger">
                         {{ $message }}
                         </small>
                      @enderror
                         </div>
                      </div>
                 </div>
                </div>

                  
                    <div class="col-md-6">
                       <div class=" form-grup ">
                         <label for="password">Hp Customer</label>
                         <input type="text"  placeholder="HP Customer" name="hp">
                          
                        @error('judul')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                     @enderror
                        </div>
                     </div>
               
        
                <div class="col-md-6">
                    <div class=" form-grup ">
                      <label for="password">Perusahaan Customer</label>
                      <input type="text"  placeholder="Perusahaan Customer" name="perusahaan">
                       
                     @error('judul')
                     <small class="text-danger">
                     {{ $message }}
                     </small>
                  @enderror
                     </div>
                  </div>
            
                 
            
            
                </div>

                  </div>
         

        

   

                 
                <div class="card-footer">
                    
                    <div class="form-group">
                      
                    
                        <center>
                            <button type="submit" name="simpan" class="btn btn-primary mt-2">
                            Simpan</button>
                        </center>

                     </div> 
         </form>
                  
                </div>
            </div>
                 
        </div>
        
            

          
    </div>


  
</div>
@endsection