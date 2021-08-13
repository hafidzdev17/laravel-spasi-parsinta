<x-app-layouts title="List Page">


    <br>
    <h1>Edit Task List {{ $user->list }} </h1>

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif

    <br>

    <div class="row mx-2">
        <div class="col-md-6">
            <form action="/task/{{ $user->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Task</label>
                    <input type="text" name="list" id="" value="{{ $user->list }}" class="form-control" placeholder="Masukkan list" aria-describedby="helpId">    
                    <br>       
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>
        
        </div>
    </div>

 </x-app-layouts>