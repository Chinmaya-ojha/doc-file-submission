<h1> FORM SUBMISSION</h1>
<form action="form_submission" method="POST" enctype="multipart/form-data">
    @csrf
    NAME <input type="text" name="name" id="">
    <br>
    <div class="error_msg">
        @error('name')
        {{$message}}     
        @enderror
    </div>
    <br>
    Email <input type="email" name="email" id="">
    <div class="error_msg">
        @error('email')
        {{message}}     
        @enderror
    </div>
    File <input type="file" name="image" id="">
    <button type="submit">SUBMIT</button>
    <div class="error_msg">
        @error('doc')
        {{message}}     
        @enderror
    </div>

</form>
<style>
    .error_msg{
        color: red;
    }
</style>