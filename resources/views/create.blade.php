
<h1 class="title">Upload file</h1>


<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image[]" multiple>
   
    <button type="submit">Upload</button>
</form>

<div class="notification is-danger is-light">
    
        @if($image)
        @foreach ($image as $images)
            <img src="{{ asset($images->path) }}">
        @endforeach
        @endif 
    
</div>
