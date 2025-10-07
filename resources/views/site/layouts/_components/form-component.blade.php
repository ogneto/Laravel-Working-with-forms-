{{ $slot }}

<form action='{{ route('form') }}' method='post'>

    @csrf
    <p> Name:
        <input name='name' type='text' placeholder='Write the student name here...'>
    </p>

    <p> Email:
        <input name='email' type='text' placeholder='Write the student email here...'>
    </p>

    <p> Phone Number:
        <input name='phone_number' type='text' placeholder='Write the student phone number here...'>
    </p>

    <p> Where will the student study?</p>
    <select name='college_address'>
        <option value=''>Select here the college addres:</option>
        <option value='1'>Asa Norte</option>
        <option value='2'>Asa Sul</option>
        <option value='1'>Sudoeste</option>
    </select>

    <p>Write some comments or additional information about the student</p>
    <textarea name='comments'></textarea>
    <br>

    <button type='submit'>SEND YOUR ANSWERS HERE</button>

</form>