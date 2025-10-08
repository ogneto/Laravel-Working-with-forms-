{{ $slot }}

{{-- @if ($errors->any())

    {{ print_r($errors) }}
    
@endif --}}


<form action='{{ route('form') }}' method='post'>

    @csrf
    <p> Name:
        <input name='name' type='text' value='{{ old('name') }}' placeholder="Write the student's name here...">
        {{ ($errors->has('name')) ? $errors->first('name') : '' }}
    </p>

    <p> Email:
        <input name='email' type='text' value='{{ old('email') }}' placeholder="Write the student's email here...">
        {{ ($errors->has('email')) ? $errors->first('email') : '' }}
    </p>

    <p> Phone Number:
        <input name='phone_number' type='text' value='{{ old('phone_number') }}' placeholder="Write the student's phone number here...">
        {{ ($errors->has('phone_number')) ? $errors->first('phone_number') : '' }}
    </p>

    <p> Where will the student study?</p>

    <select name='college_address_id'>
        <option value=''>Select here is the college address:</option>
        @foreach ($addresses as $address )
            <option value='{{ $address->id }}' {{ (old('college_address_id') == $address->id) ? 'selected' : '' }}>{{ $address->address }}</option>
        @endforeach
    </select>
    {{ ($errors->has('college_address_id')) ? $errors->first('college_address_id') : '' }}

    <p>Write some comments or additional information about the student</p>

    <textarea name='comment'>{{ (old('comment') != '') ? old('comment') : '' }}</textarea>
    {{ ($errors->has('comment')) ? $errors->first('comment') : '' }}

    {{-- <textarea name='comment'></textarea> --}}
    <br>

    @if ($errors->has('comment'))
        <br>
    @endif
    <button type='submit'>SEND YOUR ANSWERS HERE</button>

</form>