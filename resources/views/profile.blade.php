<x-app-layouts title="Profile">
   
<div class="container">

    
    <div class="row mt-5">
        
        @if (session('success'))
        <x-alert>
            @slot('title') alert-success @endslot
            @slot('body') {{ session('success') }} @endslot
        </x-alert>
        @endif

        <div class="col-8">
            <h3>Form Mahasiswa</h3>
            <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">NIM</label>
                  <input type="text" name="nim" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
               <div class="form-group">
                 <label for="">Alamat</label>
                 <textarea class="form-control" name="alamat" id="" rows="3"></textarea>
               </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control-file" name="foto" id="" placeholder="" aria-describedby="fileHelpId">
                  </div>

                  <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
    
</x-app-layouts>