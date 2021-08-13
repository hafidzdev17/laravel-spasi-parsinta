<x-app-layouts title="List Page">
    <br>
    <h1>Task List </h1>

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    <ul class="list-group">
       @foreach ($user as $item)
           <li class="list-group-item">
               {{ $item->list }} |
             <a href="/task/{{$item->id}}/edit" class="badge badge-primary badge-pill">Edit</a>
               <form action="/task/{{ $item->id }}" style="display: inline;" method="POST">
                @method('DELETE')
                @csrf
                   <button type="submit" class="badge badge-danger badge-pill">Delete</button>
               </form>
           </li>
       @endforeach 
    </ul>

    <br>

    <div class="row mx-2">
        <div class="col-md-6">
            <form action="/task" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Task</label>
                    <input type="text" name="list" id="" class="form-control" placeholder="Masukkan list" aria-describedby="helpId">    
                    <br>       
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
        
        </div>
    </div>

 </x-app-layouts>