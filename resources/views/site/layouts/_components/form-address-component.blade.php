<form action='{{ route('form_address') }}' method='post'>

    @csrf
    <p> Where's the college?
        <input name='address' value='{{ old('address') }}' type='text' placeholder='Write the address here:' >
        {{ ($errors->has('address')) ? $errors->first('address') : '' }}
    </p>

    <button type='submit'>SAVE!</button>

</form>