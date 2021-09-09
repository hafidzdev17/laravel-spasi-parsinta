<x-app-layouts title="Home Page">


   <div class="container">
      <h1>Home </h1>
      <div class="row mt-5">
         <div class="col-8">
            <form action="{{ url('/') }}">
               <div class="form-group">
                  <label for="">Cari Data</label>
                  <input type="text"
                    class="form-control" name="search" id="" aria-describedby="helpId" placeholder="Masukkan Nama & NIM">
                </div>
            </form>
            <table class="table">
               <thead>
                  <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>NIM</th>
                     <th>Alamat</th>
                     <th>Date</th>
                  </tr>
               </thead>
               <tbody>
                 @foreach ($user as $item)
                 <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->nim }}</td>
                  <td>{{ $item->alamat }}</td>
                  <td>{{ $item->created_at->toDateString() }}</td>
               </tr>
                 @endforeach
               </tbody>
            </table>
        
            <div class="d-felx justify-content-center">
   
               {{ $user->links() }}
   
           </div>
         </div>

   
      </div>
   </div>

</x-app-layouts>