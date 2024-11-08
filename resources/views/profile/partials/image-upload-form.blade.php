@if (session('success'))
<x-success-msg message="{{ session('message') }}" color="green" />
@elseif (session('error'))
<x-success-msg message="{{ session('message') }}" color="red" />
@endif
<form action="{{ url('/account/upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>