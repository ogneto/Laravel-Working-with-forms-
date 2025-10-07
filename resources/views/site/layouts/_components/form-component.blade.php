{{ $slot }}

@if ($errors->any())

    {{ print_r($errors) }}
    
@endif


<form action='{{ route('form') }}' method='post'>

    @csrf
    <p> Name:
        <input name='name' type='text' value='{{ old('name') }}' placeholder='Write the student name here...'>
    </p>

    <p> Email:
        <input name='email' type='text' value='{{ old('email') }}' placeholder='Write the student email here...'>
    </p>

    <p> Phone Number:
        <input name='phone_number' type='text' value='{{ old('phone_number') }}' placeholder='Write the student phone number here...'>
    </p>

    <p> Where will the student study?</p>

    <select name='college_address'>
        <option value=''>Select here is the college address:</option>
        @foreach ($addresses as $key => $address )
            <option value='{{ $key }}' {{ (old('college_address') == $key) ? 'selected' : '' }}>{{ $address }}</option>
        @endforeach
    </select>

    {{-- 
        Another form to do this:
        <select name='college_address'>
        <option value=''>Select here the college addres:</option>
        <option value='1' {{ (old('college_address') == '1') ? 'selected' : '' }}>Asa Norte</option>
        <option value='2' {{ (old('college_address') == '2') ? 'selected' : '' }}>Asa Sul</option>
        <option value='3' {{ (old('college_address') == '3') ? 'selected' : '' }}>Sudoeste</option>
    </select> --}}

    <p>Write some comments or additional information about the student</p>

    <textarea name='comment'>{{ (old('comment') != '') ? old('comment') : '' }}</textarea>

    {{-- <textarea name='comment'></textarea> --}}
    <br>

    <button type='submit'>SEND YOUR ANSWERS HERE</button>

</form>